<?php

namespace Modules\TransactionManagement\Traits;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Modules\UserManagement\Entities\User;
use Modules\UserManagement\Entities\UserAccount;
use Modules\TransactionManagement\Entities\Transaction;
use Modules\UserManagement\Lib\LevelHistoryManagerTrait;

trait TransactionTrait
{

    use LevelHistoryManagerTrait;

    public function digitalPaymentTransaction($trip): void
    {
        $adminUserId = User::where('user_type', ADMIN_USER_TYPES[0])->first()->id;

        DB::beginTransaction();
        $adminReceived = $trip->fee->admin_commission;//30
        $tripBalanceAfterRemoveCommission = $trip->paid_fare - $trip->fee->admin_commission; //70
        $riderEarning = $tripBalanceAfterRemoveCommission;

        //Admin account update (payable and wallet balance +)
        $adminAccount = UserAccount::where('user_id', $adminUserId)->first();
        $adminAccount->payable_balance += $tripBalanceAfterRemoveCommission;
        $adminAccount->received_balance += $adminReceived;
        $adminAccount->save();

        //Admin transaction 1 (payable)
        $adminTransaction1 = new Transaction();
        $adminTransaction1->attribute = 'driver_earning';
        $adminTransaction1->attribute_id = $trip->id;
        $adminTransaction1->credit = $tripBalanceAfterRemoveCommission;
        $adminTransaction1->balance = $adminAccount->payable_balance;
        $adminTransaction1->user_id = $adminUserId;
        $adminTransaction1->account = 'payable_balance';
        $adminTransaction1->save();

        //Admin transaction 2 ( + received balance)
        $adminTransaction2 = new Transaction();
        $adminTransaction2->attribute = 'admin_commission';
        $adminTransaction2->attribute_id = $trip->id;
        $adminTransaction2->credit = $adminReceived;
        $adminTransaction2->balance = $adminAccount->received_balance;
        $adminTransaction2->user_id = $adminUserId;
        $adminTransaction2->account = 'received_balance';
        $adminTransaction2->save();

        //Admin account update for coupon amount
        if ($trip->coupon_id !== null && $trip->coupon_amount > 0) {
            $this->adminAccountUpdateWithTransactionForCoupon($trip, $adminUserId);
        }

        //Admin account update for discount amount
        if ($trip->discount_amount !== null && $trip->discount_amount > 0) {
            $this->adminAccountUpdateWithTransactionForDiscount($trip,$adminUserId);
        }

        //Rider account update (+ receivable_balance)
        $riderAccount = UserAccount::where('user_id', $trip->driver->id)->first();
        $riderAccount->receivable_balance += $tripBalanceAfterRemoveCommission; //70
        $riderAccount->save();

        //Rider transaction 1
        $riderTransaction = new Transaction();
        $riderTransaction->attribute = 'driver_earning';
        $riderTransaction->attribute_id = $trip->id;
        $riderTransaction->credit = $tripBalanceAfterRemoveCommission;
        $riderTransaction->balance = $riderAccount->receivable_balance;
        $riderTransaction->user_id = $trip->driver->id;
        $riderTransaction->account = 'receivable_balance';
        $riderTransaction->save();

        //Rider account update for coupon
        if ($trip->coupon_id !== null && $trip->coupon_amount > 0) {
            $this->riderAccountUpdateWithTransactionForCoupon($trip);
            $riderEarning += $trip->coupon_amount;
        }

        //Rider account update for discount
        if ($trip->discount_amount !== null && $trip->discount_amount > 0) {
            $this->riderAccountUpdateWithTransactionForDiscount($trip);
            $riderEarning += $trip->discount_amount;
        }

        $this->amountChecker(User::query()->firstWhere('id', $trip->driver->id), $riderEarning);
        DB::commit();

    }

    public function cashTransaction($trip): void
    {
        $adminUserId = User::where('user_type', ADMIN_USER_TYPES[0])->first()->id;
        DB::beginTransaction();
        $adminReceived = $trip->fee->admin_commission;//30
        $tripBalanceAfterRemoveCommission = $trip->paid_fare - $trip->fee->admin_commission; //70
        $riderEarning = $tripBalanceAfterRemoveCommission;


        //Rider account update
        $riderAccount = UserAccount::where('user_id', $trip->driver->id)->first();
        $riderAccount->payable_balance += $adminReceived; //30
        $riderAccount->received_balance += $tripBalanceAfterRemoveCommission; //70
        $riderAccount->save();

        //Rider account update transaction 1
        $riderTransaction1 = new Transaction();
        $riderTransaction1->attribute = 'driver_earning';
        $riderTransaction1->attribute_id = $trip->id;
        $riderTransaction1->credit = $tripBalanceAfterRemoveCommission;
        $riderTransaction1->balance = $riderAccount->received_balance;
        $riderTransaction1->user_id = $trip->driver->id;
        $riderTransaction1->account = 'received_balance';
        $riderTransaction1->save();

        //Rider account update transaction 2
        $riderTransaction2 = new Transaction();
        $riderTransaction2->attribute = 'admin_commission';
        $riderTransaction2->attribute_id = $trip->id;
        $riderTransaction2->credit = $adminReceived;
        $riderTransaction2->balance = $riderAccount->payable_balance;
        $riderTransaction2->user_id = $trip->driver->id;
        $riderTransaction2->account = 'payable_balance';
        $riderTransaction2->trx_ref_id = $riderTransaction1->id;
        $riderTransaction2->save();

        //Rider account update for coupon
        if ($trip->coupon_id !== null && $trip->coupon_amount > 0) {
            $this->riderAccountUpdateWithTransactionForCoupon($trip);
            $riderEarning += $trip->coupon_amount;
        }

        //Rider account update for discount
        if ($trip->discount_amount !== null && $trip->discount_amount > 0) {
            $this->riderAccountUpdateWithTransactionForDiscount($trip);
            $riderEarning += $trip->discount_amount;
        }

        //Admin account update
        $adminAccount = UserAccount::where('user_id', $adminUserId)->first();
        $adminAccount->receivable_balance += $adminReceived; //30
        $adminAccount->save();

        //Admin transaction 1
        $adminTransaction = new Transaction();
        $adminTransaction->attribute = 'admin_commission';
        $adminTransaction->attribute_id = $trip->id;
        $adminTransaction->credit = $adminReceived;
        $adminTransaction->balance = $adminAccount->receivable_balance;
        $adminTransaction->user_id = $adminUserId;
        $adminTransaction->account = 'receivable_balance';
        $adminTransaction->trx_ref_id = $riderTransaction2->id;
        $adminTransaction->save();

        //Admin account update for coupon amount
        if ($trip->coupon_id !== null && $trip->coupon_amount > 0) {
            $this->adminAccountUpdateWithTransactionForCoupon($trip, $adminUserId);
        }

        //Admin account update for discount amount
        if ($trip->discount_amount !== null && $trip->discount_amount > 0) {
            $this->adminAccountUpdateWithTransactionForDiscount($trip,$adminUserId);
        }

        $this->amountChecker(User::query()->firstWhere('id', $trip->driver->id), $riderEarning);

        DB::commit();
    }

    public function walletTransaction($trip): void
    {
        $adminUserId = User::where('user_type', ADMIN_USER_TYPES[0])->first()->id;

        DB::beginTransaction();
        $adminReceived = $trip->fee->admin_commission;//30
        $tripBalanceAfterRemoveCommission = $trip->paid_fare - $trip->fee->admin_commission; //70
        $riderEarning = $tripBalanceAfterRemoveCommission;

        //customer account debit
        $customerAccount = UserAccount::where('user_id', $trip->customer->id)->first();
        $customerAccount->wallet_balance -= $trip->paid_fare;
        $customerAccount->save();

        //customer transaction (debit)
        $customerTransaction = new Transaction();
        $customerTransaction->attribute = 'wallet_payment';
        $customerTransaction->attribute_id = $trip->id;
        $customerTransaction->debit = $trip->paid_fare;
        $customerTransaction->balance = $customerAccount->wallet_balance;
        $customerTransaction->user_id = $trip->customer->id;
        $customerTransaction->account = 'wallet_balance';
        $customerTransaction->save();

        //Admin account update (payable and wallet balance +)
        $adminAccount = UserAccount::where('user_id', $adminUserId)->first();
        $adminAccount->payable_balance += $tripBalanceAfterRemoveCommission;
        $adminAccount->received_balance += $adminReceived;
        $adminAccount->save();

        //Admin transaction 1 (payable)
        $adminTransaction1 = new Transaction();
        $adminTransaction1->attribute = 'driver_earning';
        $adminTransaction1->attribute_id = $trip->id;
        $adminTransaction1->credit = $tripBalanceAfterRemoveCommission;
        $adminTransaction1->balance = $adminAccount->payable_balance;
        $adminTransaction1->user_id = $adminUserId;
        $adminTransaction1->account = 'payable_balance';
        $adminTransaction1->trx_ref_id = $customerTransaction->id;
        $adminTransaction1->save();

        //Admin transaction 2 ( + received balance)
        $adminTransaction2 = new Transaction();
        $adminTransaction2->attribute = 'admin_commission';
        $adminTransaction2->attribute_id = $trip->id;
        $adminTransaction2->credit = $adminReceived;
        $adminTransaction2->balance = $adminAccount->received_balance;
        $adminTransaction2->user_id = $adminUserId;
        $adminTransaction2->account = 'received_balance';
        $adminTransaction2->trx_ref_id = $customerTransaction->id;
        $adminTransaction2->save();

        //Admin account update for coupon amount
        if ($trip->coupon_id !== null && $trip->coupon_amount > 0) {
            $this->adminAccountUpdateWithTransactionForCoupon($trip, $adminUserId);
        }

        //Admin account update for discount amount
        if ($trip->discount_amount !== null && $trip->discount_amount > 0) {
            $this->adminAccountUpdateWithTransactionForDiscount($trip,$adminUserId);
        }

        //Rider account update (+ receivable_balance)
        $riderAccount = UserAccount::where('user_id', $trip->driver->id)->first();
        $riderAccount->receivable_balance += $tripBalanceAfterRemoveCommission; //70
        $riderAccount->save();

        //Rider transaction 1
        $riderTransaction = new Transaction();
        $riderTransaction->attribute = 'driver_earning';
        $riderTransaction->attribute_id = $trip->id;
        $riderTransaction->credit = $tripBalanceAfterRemoveCommission;
        $riderTransaction->balance = $riderAccount->receivable_balance;
        $riderTransaction->user_id = $trip->driver->id;
        $riderTransaction->account = 'receivable_balance';
        $riderTransaction->save();

        //Rider account update for coupon
        if ($trip->coupon_id !== null && $trip->coupon_amount > 0) {
            $this->riderAccountUpdateWithTransactionForCoupon($trip);
            $riderEarning += $trip->coupon_amount;
        }

        //Rider account update for discount
        if ($trip->discount_amount !== null && $trip->discount_amount > 0) {
            $this->riderAccountUpdateWithTransactionForDiscount($trip);
            $riderEarning += $trip->discount_amount;
        }


        $this->amountChecker(User::query()->firstWhere('id', $trip->driver->id), $riderEarning);
        DB::commit();


    }


    private function adminAccountUpdateWithTransactionForCoupon($trip, $adminUserId)
    {
        $adminAccountForCoupon = UserAccount::where('user_id', $adminUserId)->first();
        $adminAccountForCoupon->payable_balance += $trip->coupon_amount; //30
        $adminAccountForCoupon->save();

        //Admin transaction for coupon amount
        $adminTransactionForCoupon = new Transaction();
        $adminTransactionForCoupon->attribute = 'driver_earning';
        $adminTransactionForCoupon->attribute_id = $trip->id;
        $adminTransactionForCoupon->credit = $trip->coupon_amount;
        $adminTransactionForCoupon->balance = $adminAccountForCoupon->payable_balance;
        $adminTransactionForCoupon->user_id = $adminUserId;
        $adminTransactionForCoupon->transaction_type = COUPON;
        $adminTransactionForCoupon->account = 'payable_balance';
        $adminTransactionForCoupon->save();
    }

    private function adminAccountUpdateWithTransactionForDiscount($trip, $adminUserId)
    {
        $adminAccountForDiscount = UserAccount::where('user_id', $adminUserId)->first();
        $adminAccountForDiscount->payable_balance += $trip->discount_amount; //30
        $adminAccountForDiscount->save();

        //Admin transaction for coupon amount
        $adminTransactionForDiscount = new Transaction();
        $adminTransactionForDiscount->attribute = 'driver_earning';
        $adminTransactionForDiscount->attribute_id = $trip->id;
        $adminTransactionForDiscount->credit = $trip->discount_amount;
        $adminTransactionForDiscount->balance = $adminAccountForDiscount->payable_balance;
        $adminTransactionForDiscount->user_id = $adminUserId;
        $adminTransactionForDiscount->transaction_type = DISCOUNT;
        $adminTransactionForDiscount->account = 'payable_balance';
        $adminTransactionForDiscount->save();
    }
    private function riderAccountUpdateWithTransactionForCoupon($trip)
    {
        $riderAccountForCoupon = UserAccount::where('user_id', $trip->driver->id)->first();
        $riderAccountForCoupon->receivable_balance += $trip->coupon_amount;
        $riderAccountForCoupon->save();

        //Rider transaction for coupon
        $riderTransactionForCoupon = new Transaction();
        $riderTransactionForCoupon->attribute = 'driver_earning';
        $riderTransactionForCoupon->attribute_id = $trip->id;
        $riderTransactionForCoupon->credit = $trip->coupon_amount;
        $riderTransactionForCoupon->balance = $riderAccountForCoupon->receivable_balance;
        $riderTransactionForCoupon->user_id = $trip->driver->id;
        $riderTransactionForCoupon->transaction_type = COUPON;
        $riderTransactionForCoupon->account = 'receivable_balance';
        $riderTransactionForCoupon->save();
    }

    private function riderAccountUpdateWithTransactionForDiscount($trip)
    {
        $riderAccountForCoupon = UserAccount::where('user_id', $trip->driver->id)->first();
        $riderAccountForCoupon->receivable_balance += $trip->discount_amount;
        $riderAccountForCoupon->save();

        //Rider transaction for discount
        $riderTransactionForDiscount = new Transaction();
        $riderTransactionForDiscount->attribute = 'driver_earning';
        $riderTransactionForDiscount->attribute_id = $trip->id;
        $riderTransactionForDiscount->credit = $trip->discount_amount;
        $riderTransactionForDiscount->balance = $riderAccountForCoupon->receivable_balance;
        $riderTransactionForDiscount->user_id = $trip->driver->id;
        $riderTransactionForDiscount->transaction_type = DISCOUNT;
        $riderTransactionForDiscount->account = 'receivable_balance';
        $riderTransactionForDiscount->save();
    }

    public function customerLoyaltyPointsTransaction($user, $amount): Model|Builder|null
    {
        DB::beginTransaction();
        //Customer account update
        $customer = UserAccount::query()->firstWhere('user_id', $user->id);
        $customer->wallet_balance += $amount;
        $customer->save();

        //customer transaction (credit)
        $primary_transaction = new Transaction();
        $primary_transaction->attribute = 'point_conversion';
        $primary_transaction->credit = $amount;
        $primary_transaction->balance = $customer->wallet_balance;
//        $primary_transaction->wallet_balance = $customer->wallet_balance;
        $primary_transaction->user_id = $user->id;
        $primary_transaction->account = 'wallet_balance';
        $primary_transaction->save();

        DB::commit();

        return $customer;
    }

    public function driverLoyaltyPointsTransaction($user, $amount): Model|Builder|null
    {
        DB::beginTransaction();
        //Customer account update
        $driver = UserAccount::query()->firstWhere('user_id', $user->id);
        $driver->receivable_balance += $amount;
        $driver->save();

        //Driver transaction (credit)
        $primary_transaction = new Transaction();
        $primary_transaction->attribute = 'point_conversion';
        $primary_transaction->credit = $amount;
        $primary_transaction->balance = $driver->receivable_balance;
//        $primary_transaction->wallet_balance = $customer->wallet_balance;
        $primary_transaction->user_id = $user->id;
        $primary_transaction->account = 'receivable_balance';
        $primary_transaction->save();

        DB::commit();

        return $driver;
    }

    public function withdrawRequestTransaction($user, $amount, $attribute)
    {
        DB::beginTransaction();
        //Driver account update
        $driver = UserAccount::where('user_id', $user->id)->first();
        $driver->receivable_balance -= $amount;
        $driver->pending_balance += $amount;
        $driver->save();
        //Admin account update
        $admin = User::query()->where('user_type', 'super-admin')->first();
        $admin_user = UserAccount::query()->where('user_id', $admin->id)->first();
        $admin_user->payable_balance += $amount;
        $admin_user->save();

        //customer transaction (debit)
//        $first_trx = new Transaction();
//        $first_trx->attribute = 'withdraw_requested';
//        $first_trx->attribute_id = $attribute->id;
//        $first_trx->debit = $amount;
//        $first_trx->balance = $driver->receivable_balance;
////        $first_trx->wallet_balance = $driver->wallet_balance;
//        $first_trx->user_id = $user->id;
//        $first_trx->account = 'receivable_balance';
//        $first_trx->save();

        //Driver transaction (credit)
        $second_trx = new Transaction();
        $second_trx->attribute = 'pending_withdrawn';
        $second_trx->attribute_id = $attribute->id;
        $second_trx->credit = $amount;
        $second_trx->balance = $driver->pending_balance;
//        $second_trx->pending_balance = $driver->pending_balance;
        $second_trx->user_id = $user->id;
        $second_trx->account = 'pending_withdraw_balance';
//        $second_trx->trx_ref_id = $first_trx->id;
        $second_trx->save();

        DB::commit();

        return $driver;
    }

    public function withdrawRequestCancelTransaction($user, $amount, $attribute)
    {
        DB::beginTransaction();
        //Driver account update
        $driver = UserAccount::where('user_id', $user->id)->first();
        $driver->receivable_balance += $amount;
        $driver->pending_balance -= $amount;
        $driver->save();

        //Driver transaction (credit)
//        $first_trx = new Transaction();
//        $first_trx->attribute = 'withdraw_request_cancelled';
//        $first_trx->attribute_id = $attribute->id;
//        $first_trx->credit = $amount;
//        $first_trx->balance = $driver->receivable_balance;
////        $first_trx->wallet_balance = $customer->wallet_balance;
//        $first_trx->user_id = $user->id;
//        $first_trx->account = 'receivable_balance';
//        $first_trx->save();

        //Driver transaction (debit)
        $second_trx = new Transaction();
        $second_trx->attribute = 'pending_withdraw_revoked';
        $second_trx->attribute_id = $attribute->id;
        $second_trx->debit = $amount;
        $second_trx->balance = $driver->pending_balance;
//        $second_trx->pending_balance = $driver->pending_balance;
        $second_trx->user_id = $user->id;
        $second_trx->account = 'withdraw_balance_rejected';
//        $second_trx->trx_ref_id = $first_trx->id;
        $second_trx->save();

        DB::commit();
        return $driver;
    }

    public function withdrawRequestAcceptTransaction($user, $amount, $attribute)
    {
        DB::beginTransaction();
        //Customer account update
        $customer = UserAccount::where('user_id', $user->id)->first();
        $customer->pending_balance -= $amount;
        $customer->total_withdrawn += $amount;
        $customer->save();

        //customer transaction (credit)
//        $first_trx = new Transaction();
//        $first_trx->attribute = 'pending_withdraw_proceeded';
//        $first_trx->attribute_id = $attribute->id;
//        $first_trx->debit = $amount;
//        $first_trx->balance = $customer->pending_balance;
//        $first_trx->user_id = $user->id;
//        $first_trx->account = 'pending_balance';
//        $first_trx->save();

        //customer transaction (debit)
        $second_trx = new Transaction();
        $second_trx->attribute = 'withdraw_request_accepted';
        $second_trx->attribute_id = $attribute->id;
        $second_trx->credit = $amount;
        $second_trx->balance = $customer->total_withdrawn;
        $second_trx->user_id = $user->id;
        $second_trx->account = 'received_withdraw_balance';
//        $second_trx->trx_ref_id = $first_trx->id;
        $second_trx->save();


        //Admin account update
        $admin = User::query()->where('user_type', 'super-admin')->first();
        $admin_user = UserAccount::query()->where('user_id', $admin->id)->first();
        $admin_user->payable_balance -= $amount;
        $admin_user->save();

        //admin transaction (credit)
        $third_trx = new Transaction();
        $third_trx->attribute = 'withdraw_request_approved';
        $third_trx->attribute_id = $attribute->id;
        $third_trx->debit = $amount;
        $third_trx->balance = $admin_user->payable_balance;
        $third_trx->user_id = $admin->id;
        $third_trx->account = 'withdraw_balance_paid';
        $third_trx->trx_ref_id = $second_trx->id;
        $third_trx->save();

        DB::commit();

        return $customer;
    }


    public function customerLevelRewardTransaction($user, $amount): void
    {
        DB::beginTransaction();
        //Customer account update
        $customer = UserAccount::query()->firstWhere('user_id', $user->id);
        $customer->wallet_balance += $amount;
        $customer->save();

        //customer transaction (credit)
        $primary_transaction = new Transaction();
        $primary_transaction->attribute = 'level_reward';
        $primary_transaction->credit = $amount;
        $primary_transaction->balance = $customer->wallet_balance;
//        $primary_transaction->wallet_balance = $customer->wallet_balance;
        $primary_transaction->user_id = $user->id;
        $primary_transaction->account = 'wallet_balance';
        $primary_transaction->save();

        DB::commit();
    }

    public function driverLevelRewardTransaction($user, $amount): void
    {
        DB::beginTransaction();
        //Customer account update
        $driver = UserAccount::query()->firstWhere('user_id', $user->id);
        $driver->receivable_balance += $amount;
        $driver->save();

        //customer transaction (credit)
        $primary_transaction = new Transaction();
        $primary_transaction->attribute = 'level_reward';
        $primary_transaction->credit = $amount;
        $primary_transaction->balance = $driver->receivable_balance;
//        $primary_transaction->wallet_balance = $driver->wallet_balance;
        $primary_transaction->user_id = $user->id;
        $primary_transaction->account = 'receivable_balance';
        $primary_transaction->save();

        DB::commit();
    }

    public function collectCashTransaction($user, $amount)
    {
        DB::beginTransaction();

        //Driver account update
        $driver = UserAccount::query()->firstWhere('user_id', $user->id);
        $driver->payable_balance -= $amount;
        $driver->save();

        //Admin account update
        $adminUserId = User::where('user_type', ADMIN_USER_TYPES[0])->first()->id;
        $account = UserAccount::query()->firstWhere('user_id', $adminUserId);
        $account->received_balance += $amount;
        $account->receivable_balance -= $amount;
        $account->save();

        //Driver transaction (debit)
        $driver_transaction = new Transaction();
        $driver_transaction->attribute = 'admin_cash_collect';
        $driver_transaction->debit = $amount;
        $driver_transaction->balance = $driver->payable_balance;
        $driver_transaction->user_id = $user->id;
        $driver_transaction->account = 'payable_balance';
        $driver_transaction->save();

        //Admin transaction (credit)
        $admin_transaction = new Transaction();
        $admin_transaction->attribute = 'admin_cash_collect';
        $admin_transaction->credit = $amount;
        $admin_transaction->balance = $driver->received_balance;
        $admin_transaction->user_id = $adminUserId;
        $admin_transaction->account = 'received_balance';
        $admin_transaction->trx_ref_id = $driver_transaction->id;
        $admin_transaction->save();

        //Admin transaction 2 (debit)
        $admin_transaction_2 = new Transaction();
        $admin_transaction_2->attribute = 'admin_cash_collect';
        $admin_transaction_2->debit = $amount;
        $admin_transaction_2->balance = $driver->receivable_balance;
        $admin_transaction_2->user_id = $adminUserId;
        $admin_transaction_2->account = 'receivable_balance';
        $admin_transaction_2->trx_ref_id = $driver_transaction->id;
        $admin_transaction_2->save();

        DB::commit();
    }


}

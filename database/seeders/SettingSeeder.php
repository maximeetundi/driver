<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Modules\UserManagement\Entities\UserAccount;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::statement("
        INSERT INTO `firebase_push_notifications` (`id`, `name`, `value`, `status`, `created_at`, `updated_at`) VALUES
        (1, 'new_ride_request_notification', 'you_have_a_new_request', 0, '2023-03-18 20:34:23', '2023-05-07 23:49:50'),
        (2, 'new_parcel_request_notification', 'you_have_a_new_parcel_request', 0, '2023-03-18 20:34:23', '2023-05-07 23:49:51'),
        (3, 'ride_is_started', 'another_driver_is_assigned', 0, '2023-03-18 20:34:23', '2023-05-07 23:49:51'),
        (4, 'parcel_delivery_is_started', 'another_driver_is_assigned', 0, '2023-03-18 20:34:23', '2023-05-07 23:49:51'),
        (5, 'customer_cancelled_ride_request', 'user_just_cancelled_this_ride_request', 0, '2023-03-18 20:34:23', '2023-05-07 23:49:51'),
        (6, 'customer_cancelled_parcel_request', 'user_just_cancelled_this_parcel_request', 0, '2023-03-18 20:34:23', '2023-05-07 23:49:51'),
        (7, 'ride_accepted', 'customer_confirmed_your_request', 0, NULL, '2023-05-07 23:49:51'),
        (8, 'parcel_request_accepted', 'customer_confirmed_your_request', 0, NULL, NULL),
        (9, 'trip_completed_message', 'trip_completed_message_values', 0, NULL, NULL),
        (10, 'trip_cancelled_message', 'trip_cancelled_message_value', 0, NULL, NULL),
        (11, 'new_message', 'You got a new message.', 1, NULL, '2023-11-20 11:25:44'),
        (12, 'payment_successful', 'Payment successful on this trip.', 1, NULL, '2023-11-20 11:25:44'),
        (13, 'registration_approved', 'Admin approved your registration. You can login now.', 1, NULL, '2023-11-20 11:25:44'),
        (14, 'trip_pause', 'Trip request is paused.', 1, NULL, '2023-11-20 11:25:44'),
        (15, 'trip_resume', 'Trip request is resumed.', 1, NULL, '2023-11-20 11:25:44'),
        (16, 'trip_started', 'Your trip is started.', 1, NULL, '2023-11-20 11:25:44'),
        (17, 'received_new_bid', 'Received  a new bid request.', 1, NULL, '2023-11-20 11:25:44'),
        (18, 'driver_is_on_the_way', 'Driver accepted your trip request.', 1, NULL, '2023-11-20 11:25:44'),
        (19, 'ride_completed', 'Your trip is completed.', 1, NULL, '2023-11-20 11:25:44'),
        (20, 'ride_cancelled', 'Your trip is cancelled.', 1, NULL, '2023-11-20 11:25:44'),
        (21, 'bid_accepted', 'Customer confirmed your bid.', 1, NULL, '2023-11-20 11:25:44'),
        (22, 'coupon_applied', 'Customer got discount of.', 1, NULL, '2023-11-20 11:25:44'),
        (23, 'coupon_removed', 'Customer removed previously applied coupon.', 1, NULL, '2023-11-20 11:25:44'),
        (24, 'terms_and_conditions_updated', 'Admin just updated system terms and conditions.', 1, NULL, '2023-11-20 11:27:20'),
        (25, 'privacy_policy_updated', 'Admin  just updated our privacy policy.', 1, NULL, '2023-11-20 11:25:44'),
        (26, 'new_ride_request', 'You have a new ride request.', 1, NULL, '2023-11-20 11:25:44'),
        (28, 'new_parcel', 'You have a new parcel request.', 1, NULL, '2023-11-20 11:25:44'),
        (29, 'driver_assigned', 'Another driver already accept the trip request.', 1, NULL, '2023-11-20 11:27:20'),
        (30, 'customer_cancelled_trip', 'Customer just declined a request.', 1, NULL, '2023-11-20 11:25:44'),
        (31, 'this_ride_is_started', 'Another driver already accept the trip request.', 1, NULL, '2023-11-20 11:27:20'),
        (32, 'vehicle_approved', 'Your vehicle is approved by admin.', 1, NULL, '2023-11-20 11:25:44'),
        (33, 'trip_request_cancelled', 'A trip request is cancelled.', 1, NULL, '2023-11-20 11:25:44'),
        (34, 'parcel_completed', 'Parcel delivered successfully ', 0, '2023-11-05 17:42:41', '2023-11-05 17:42:41'),
        (35, 'identity_image_approved', 'Your identity image has been successfully reviewed and approved.', 1, '2024-04-18 09:50:47', '2024-04-18 09:50:47'),
        (36, 'identity_image_rejected', 'Your identity image has been rejected during our review process.', 1, '2024-04-18 09:50:47', '2024-04-18 09:50:47'),
        (37, 'review_from_customer', 'New review from a customer! See what they had to say about your service.', 1, '2024-04-18 11:02:20', '2024-04-18 11:02:20'),
        (38, 'review_from_driver', 'New review from a driver! See what he had to say about your trip.', 1, '2024-04-18 11:02:20', '2024-04-18 11:02:20');

            ");


        DB::statement("
        INSERT INTO `notification_settings` (`id`, `name`, `push`, `email`, `created_at`, `updated_at`) VALUES
        (1, 'trip', 1, 0, '2023-11-04 10:00:41', '2023-11-04 10:00:49'),
        (3, 'rating_and_review', 1, 0, '2023-11-04 10:01:08', '2023-11-04 14:11:03'),
        (4, 'privacy_policy', 1, 0, '2023-11-09 17:09:10', '2023-11-09 17:09:16'),
        (5, 'terms_and_conditions', 1, 0, '2023-11-09 17:09:20', '2023-11-12 11:16:39');
            ");




        DB::statement("
        INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `provider`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
        ('9a878b41-fc9e-4789-a835-0b3ebe060778', NULL, 'Laravel Personal Access Client', 'CId0ouRzX08kOyn8IWdbjegiUofmzJKLvOTGXzqU', NULL, 'http://localhost:8000', 1, 0, 0, '2023-11-04 09:44:36', '2023-11-04 09:44:36'),
        ('9a878b42-03fd-4e56-923f-3f098de9188a', NULL, 'Laravel Password Grant Client', 'c8BTROa9IggqR1cG60e4ckfiBiXqQyJ3WU9AXxEo', 'users', 'http://localhost:8000', 0, 1, 0, '2023-11-04 09:44:36', '2023-11-04 09:44:36');
            ");

        DB::statement("
        INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
        (1, '9a878b41-fc9e-4789-a835-0b3ebe060778', '2023-11-04 09:44:36', '2023-11-04 09:44:36');

            ");


        DB::statement("
        INSERT INTO `settings` (`id`, `key_name`, `live_values`, `test_values`, `settings_type`, `mode`, `is_active`, `created_at`, `updated_at`, `additional_data`) VALUES
        ('070c6bbd-d777-11ed-96f4-0c7a158e4469', 'twilio', '{\"gateway\":\"twilio\",\"mode\":\"live\",\"status\":\"0\",\"sid\":null,\"messaging_service_sid\":null,\"token\":null,\"from\":null,\"otp_template\":null}', '{\"gateway\":\"twilio\",\"mode\":\"live\",\"status\":\"0\",\"sid\":null,\"messaging_service_sid\":null,\"token\":null,\"from\":null,\"otp_template\":null}', 'sms_config', 'live', 0, NULL, '2023-11-20 00:22:10', NULL),
        ('070c766c-d777-11ed-96f4-0c7a158e4469', '2factor', '{\"gateway\":\"2factor\",\"mode\":\"live\",\"status\":\"0\",\"api_key\":null}', '{\"gateway\":\"2factor\",\"mode\":\"live\",\"status\":\"0\",\"api_key\":null}', 'sms_config', 'live', 0, NULL, '2023-11-20 00:21:59', NULL),
        ('0d8a9308-d6a5-11ed-962c-0c7a158e4469', 'mercadopago', '{\"gateway\":\"mercadopago\",\"mode\":\"test\",\"status\":\"0\",\"access_token\":null,\"public_key\":null}', '{\"gateway\":\"mercadopago\",\"mode\":\"test\",\"status\":\"0\",\"access_token\":null,\"public_key\":null}', 'payment_config', 'test', 0, NULL, '2023-11-20 00:14:31', '{\"gateway_title\":null,\"gateway_image\":\"2023-11-20-655ae66916a34.png\"}'),
        ('0d8a9e49-d6a5-11ed-962c-0c7a158e4469', 'liqpay', '{\"gateway\":\"liqpay\",\"mode\":\"test\",\"status\":\"0\",\"private_key\":null,\"public_key\":null}', '{\"gateway\":\"liqpay\",\"mode\":\"test\",\"status\":\"0\",\"private_key\":null,\"public_key\":null}', 'payment_config', 'test', 0, NULL, '2023-11-20 00:14:42', '{\"gateway_title\":null,\"gateway_image\":\"2023-11-20-655ae64c304b9.png\"}'),
        ('101befdf-d44b-11ed-8564-0c7a158e4469', 'paypal', '{\"gateway\":\"paypal\",\"mode\":\"test\",\"status\":\"0\",\"client_id\":null,\"client_secret\":null}', '{\"gateway\":\"paypal\",\"mode\":\"test\",\"status\":\"0\",\"client_id\":null,\"client_secret\":null}', 'payment_config', 'test', 0, NULL, '2023-11-20 00:15:14', '{\"gateway_title\":null,\"gateway_image\":\"2023-11-20-655ae611d7c91.png\"}'),
        ('1821029f-d776-11ed-96f4-0c7a158e4469', 'msg91', '{\"gateway\":\"msg91\",\"mode\":\"live\",\"status\":\"0\",\"template_id\":null,\"auth_key\":null}', '{\"gateway\":\"msg91\",\"mode\":\"live\",\"status\":\"0\",\"template_id\":null,\"auth_key\":null}', 'sms_config', 'live', 0, NULL, '2023-11-20 00:22:17', NULL),
        ('18210f2b-d776-11ed-96f4-0c7a158e4469', 'nexmo', '{\"gateway\":\"nexmo\",\"mode\":\"live\",\"status\":\"0\",\"api_key\":\"\",\"api_secret\":\"\",\"token\":\"\",\"from\":\"\",\"otp_template\":\"\"}', '{\"gateway\":\"nexmo\",\"mode\":\"live\",\"status\":\"0\",\"api_key\":\"\",\"api_secret\":\"\",\"token\":\"\",\"from\":\"\",\"otp_template\":\"\"}', 'sms_config', 'live', 0, NULL, '2023-04-10 02:14:44', NULL),
        ('2767d142-d6a1-11ed-962c-0c7a158e4469', 'paytm', '{\"gateway\":\"paytm\",\"mode\":\"test\",\"status\":\"0\",\"merchant_key\":null,\"merchant_id\":null,\"merchant_website_link\":null}', '{\"gateway\":\"paytm\",\"mode\":\"test\",\"status\":\"0\",\"merchant_key\":null,\"merchant_id\":null,\"merchant_website_link\":null}', 'payment_config', 'test', 0, NULL, '2023-11-20 00:15:26', '{\"gateway_title\":null,\"gateway_image\":\"2023-11-20-655ae718cd837.png\"}'),
        ('4593b25c-d6a1-11ed-962c-0c7a158e4469', 'paytabs', '{\"gateway\":\"paytabs\",\"mode\":\"test\",\"status\":\"0\",\"profile_id\":null,\"server_key\":null,\"base_url\":null}', '{\"gateway\":\"paytabs\",\"mode\":\"test\",\"status\":\"0\",\"profile_id\":null,\"server_key\":null,\"base_url\":null}', 'payment_config', 'test', 0, NULL, '2023-11-20 00:15:41', '{\"gateway_title\":null,\"gateway_image\":\"2023-11-20-655ae7325e9b7.png\"}'),
        ('4e9b8dfb-e7d1-11ed-a559-0c7a158e4469', 'bkash', '{\"gateway\":\"bkash\",\"mode\":\"test\",\"status\":\"0\",\"app_key\":null,\"app_secret\":null,\"username\":null,\"password\":null}', '{\"gateway\":\"bkash\",\"mode\":\"test\",\"status\":\"0\",\"app_key\":null,\"app_secret\":null,\"username\":null,\"password\":null}', 'payment_config', 'test', 0, NULL, '2023-11-20 00:15:56', '{\"gateway_title\":null,\"gateway_image\":\"2023-11-20-655ae74591a98.png\"}'),
        ('998ccc62-d6a0-11ed-962c-0c7a158e4469', 'stripe', '{\"gateway\":\"stripe\",\"mode\":\"test\",\"status\":\"0\",\"api_key\":null,\"published_key\":null}', '{\"gateway\":\"stripe\",\"mode\":\"test\",\"status\":\"0\",\"api_key\":null,\"published_key\":null}', 'payment_config', 'test', 0, NULL, '2023-11-20 00:16:11', '{\"gateway_title\":null,\"gateway_image\":\"2023-11-20-655ae761a1905.png\"}'),
        ('ad5af1c1-d6a2-11ed-962c-0c7a158e4469', 'razor_pay', '{\"gateway\":\"razor_pay\",\"mode\":\"test\",\"status\":\"0\",\"api_key\":null,\"api_secret\":null}', '{\"gateway\":\"razor_pay\",\"mode\":\"test\",\"status\":\"0\",\"api_key\":null,\"api_secret\":null}', 'payment_config', 'test', 0, NULL, '2023-11-20 00:16:26', '{\"gateway_title\":null,\"gateway_image\":\"2023-11-20-655ae7733cc68.png\"}'),
        ('ad5b02a0-d6a2-11ed-962c-0c7a158e4469', 'senang_pay', '{\"gateway\":\"senang_pay\",\"mode\":\"test\",\"status\":\"0\",\"callback_url\":null,\"secret_key\":null,\"merchant_id\":null}', '{\"gateway\":\"senang_pay\",\"mode\":\"test\",\"status\":\"0\",\"callback_url\":null,\"secret_key\":null,\"merchant_id\":null}', 'payment_config', 'test', 0, NULL, '2023-11-20 00:17:04', '{\"gateway_title\":null,\"gateway_image\":\"2023-11-20-655ae78baeb8d.png\"}'),
        ('b8992bd4-d6a0-11ed-962c-0c7a158e4469', 'paymob_accept', '{\"gateway\":\"paymob_accept\",\"mode\":\"test\",\"status\":\"0\",\"callback_url\":null,\"api_key\":null,\"iframe_id\":null,\"integration_id\":null,\"hmac\":null}', '{\"gateway\":\"paymob_accept\",\"mode\":\"test\",\"status\":\"0\",\"callback_url\":null,\"api_key\":null,\"iframe_id\":null,\"integration_id\":null,\"hmac\":null}', 'payment_config', 'test', 0, NULL, '2023-11-20 00:16:49', '{\"gateway_title\":null,\"gateway_image\":\"2023-11-20-655ae7c0c7bd2.png\"}'),
        ('cb0081ce-d775-11ed-96f4-0c7a158e4469', 'releans', '{\"gateway\":\"releans\",\"mode\":\"live\",\"status\":0,\"api_key\":\"\",\"from\":\"\",\"otp_template\":\"\"}', '{\"gateway\":\"releans\",\"mode\":\"live\",\"status\":0,\"api_key\":\"\",\"from\":\"\",\"otp_template\":\"\"}', 'sms_config', 'live', 0, NULL, '2023-04-10 02:14:44', NULL),
        ('d4f3f5f1-d6a0-11ed-962c-0c7a158e4469', 'flutterwave', '{\"gateway\":\"flutterwave\",\"mode\":\"test\",\"status\":\"0\",\"secret_key\":null,\"public_key\":null,\"hash\":null}', '{\"gateway\":\"flutterwave\",\"mode\":\"test\",\"status\":\"0\",\"secret_key\":null,\"public_key\":null,\"hash\":null}', 'payment_config', 'test', 0, NULL, '2023-11-20 00:17:19', '{\"gateway_title\":null,\"gateway_image\":\"2023-11-20-655ae81c421b7.png\"}'),
        ('d822f1a5-c864-11ed-ac7a-0c7a158e4469', 'paystack', '{\"gateway\":\"paystack\",\"mode\":\"test\",\"status\":\"0\",\"public_key\":null,\"secret_key\":null,\"merchant_email\":null}', '{\"gateway\":\"paystack\",\"mode\":\"test\",\"status\":\"0\",\"public_key\":null,\"secret_key\":null,\"merchant_email\":null}', 'payment_config', 'test', 0, NULL, '2023-11-20 00:14:18', '{\"gateway_title\":null,\"gateway_image\":\"2023-11-20-655ae7d9bec0f.png\"}'),
        ('ea346efe-cdda-11ed-affe-0c7a158e4469', 'ssl_commerz', '{\"gateway\":\"ssl_commerz\",\"mode\":\"test\",\"status\":\"0\",\"store_id\":null,\"store_password\":null}', '{\"gateway\":\"ssl_commerz\",\"mode\":\"test\",\"status\":\"0\",\"store_id\":null,\"store_password\":null}', 'payment_config', 'test', 0, NULL, '2023-11-20 00:13:58', '{\"gateway_title\":null,\"gateway_image\":\"2023-11-20-655ae7e7231f5.png\"}');

            ");

            DB::statement("
          INSERT INTO `business_settings` VALUES ('2525f084-d40d-41ec-baaf-d8bcf8a231b1','language','[\"fr\", \"en\"]','business_information','2024-06-03 20:47:33','2024-06-03 20:47:33'),('26e0545f-0f44-4b18-a546-97275a765fa4','trade_licence_number','\"4443434\"','business_information','2024-06-03 09:48:35','2024-06-03 09:48:35'),('2f2b0e2e-f7d6-49f0-a701-ced4fcde940a','time_zone','\"Pacific/Midway\"','business_information','2024-06-03 20:47:33','2024-06-03 20:47:33'),('3901f9fb-62e7-4b83-a211-9aa6dd2f6955','copyright_text','\"fdfdsfs\"','business_information','2024-06-03 09:48:35','2024-06-03 09:48:35'),('3c73794d-e27c-4e5e-b14d-083b0f801e53','google_map_api','{\"map_api_key\": \"AIzaSyBLzkqJWnCO_OucXE-aoUdj9rtqfcuZo54\", \"map_api_key_server\": \"AIzaSyBLzkqJWnCO_OucXE-aoUdj9rtqfcuZo54\"}','google_map_api','2024-06-13 05:12:31','2024-06-13 05:12:31'),('3e6cedc1-cad9-4b98-8f83-0186f6bb9444','business_contact_email','\"dfgd@fdfd.sdf\"','business_information','2024-06-03 09:48:35','2024-06-03 09:48:35'),('4b2dc22f-f96c-45cb-93fb-bf078cdc2b9c','otp_verification','0','business_information','2024-06-03 20:47:34','2024-06-03 20:47:34'),('543edf4d-be8e-4b0c-8353-236b2a91e8a7','currency_symbol','\"CFA\"','business_information','2024-06-03 20:47:34','2024-06-03 20:47:34'),('556dbd57-8dbd-4995-9351-27b25fb36b7e','text_color','{\"light\": \"#7d8584\", \"primary\": \"#334257\", \"secondary\": \"#49596e\"}','business_information','2024-06-03 20:47:33','2024-06-03 09:48:35'),('5f013c90-edb0-40cd-b383-0e5a8c6cd02d','business_support_email','\"fsfs@fdsf.sfd\"','business_information','2024-06-03 09:48:35','2024-06-03 09:48:35'),('659095ba-e83e-4f0c-9334-f972072cb4b3','business_name','\"dsfs\"','business_information','2024-06-03 09:48:35','2024-06-03 09:48:35'),('66c477a6-4f2a-48df-af02-58ad5232584e','parcel_weight_unit','\"kg\"','business_information','2024-06-03 20:47:34','2024-06-03 20:47:34'),('66f3b5a9-e298-4dca-aaf2-bcc7dfe75f4f','country_code','\"CI\"','business_information','2024-06-03 20:47:33','2024-06-03 20:47:33'),('6cc5d9f4-94de-4fe8-9b42-0dff53ec26a1','currency_code','\"XOF\"','business_information','2024-06-03 20:47:34','2024-06-03 20:47:34'),('737ca787-b3f0-44cd-afac-e025376a1783','business_support_phone','\"dfsfs\"','business_information','2024-06-03 09:48:35','2024-06-03 09:48:35'),('7fa5d5dd-d077-4bb5-acc8-4daa04dc6460','business_contact_phone','\"ff\"','business_information','2024-06-03 09:48:35','2024-06-03 09:48:35'),('86293d0c-320b-4bb1-9ed6-96f32ab637c0','email_verification','0','business_information','2024-06-03 20:47:34','2024-06-03 20:47:34'),('89e46f7b-63e8-458b-910f-6dbf708da847','driver_self_registration','1','business_information','2024-06-03 20:47:33','2024-06-03 20:47:33'),('93e0d03c-ea45-4cb6-8047-482dd905704a','website_color','{\"primary\": \"#14b19e\", \"secondary\": \"#d7f9f5\", \"background\": \"#f4fcfb\"}','business_information','2024-06-03 20:47:33','2024-06-03 20:47:33'),('9ca43ea9-0e3a-4423-8c0f-d16184a7d840','driver_verification','0','business_information','2024-06-03 20:47:34','2024-06-03 20:47:34'),('a91b32fd-9ed4-49e7-9743-e581ea89b5ca','time_format','\"H:i:s\"','business_information','2024-06-03 20:47:33','2024-06-03 20:47:33'),('c7ec5ebc-94c9-45c2-933b-660a0cd2f3cf','system_language','[{\"id\": 1, \"code\": \"en\", \"status\": 1, \"default\": false, \"direction\": \"ltr\"}, {\"id\": 2, \"code\": \"fr\", \"status\": 1, \"default\": true, \"direction\": \"ltr\"}]','language_settings','2024-06-03 20:31:25','2024-06-03 09:53:59'),('d16fa59e-034d-4b76-9926-2809105aedfd','business_address','\"sdf\"','business_information','2024-06-03 09:48:35','2024-06-03 09:48:35'),('f62818b0-f986-4668-bfab-2c92b8c04737','customer_verification','0','business_information','2024-06-03 20:47:34','2024-06-03 20:47:34');
                ");




    }
}

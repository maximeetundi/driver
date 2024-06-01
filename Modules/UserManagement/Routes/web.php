<?php

use Illuminate\Support\Facades\Route;
use Modules\UserManagement\Http\Controllers\CashCollectController;
use Modules\UserManagement\Http\Controllers\Web\Admin\Customer\{CustomerController,
    CustomerLevelController,
    CustomerWalletController
};
use Modules\UserManagement\Http\Controllers\Web\Admin\Driver\{DriverController,
    DriverLevelController,
    WithdrawalController
};
use Modules\UserManagement\Http\Controllers\Web\Admin\Employee\EmployeeController;
use Modules\UserManagement\Http\Controllers\Web\Admin\Employee\EmployeeRoleController;
use Modules\UserManagement\Http\Controllers\Web\Admin\LevelAccessController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'admin'], function () {
    Route::group(['prefix' => 'customer', 'as' => 'customer.'], function () {
        Route::controller(\Modules\UserManagement\Http\Controllers\Web\New\Admin\Customer\CustomerController::class)->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('create', 'create')->name('create');
            Route::post('store', 'store')->name('store');
            Route::get('edit/{id}', 'edit')->name('edit');
            Route::get('show/{id}', 'show')->name('show');
            Route::delete('delete/{id}', 'destroy')->name('delete');
            Route::put('update/{id}', 'update')->name('update');
            Route::get('update-status', 'updateStatus')->name('update-status');
            Route::get('get-all-ajax', 'getAllAjax')->name('get-all-ajax');
            Route::get('statistics', 'statistics')->name('statistics');
            Route::get('log', 'log')->name('log');
            Route::get('export', 'export')->name('export');
            Route::get('transaction-export/{id}', 'customerTransactionExport')->name('transaction-export');
            Route::get('trash', 'trash')->name('trash');
            Route::get('restore/{id}', 'restore')->name('restore');
            Route::get('get-level-wise-customer', 'getLevelWiseCustomer')->name('get-level-wise-customer');
            Route::delete('permanent-delete/{id}', 'permanentDelete')->name('permanent-delete');
        });
        Route::group(['prefix' => 'level', 'as' => 'level.'], function () {
            Route::controller(\Modules\UserManagement\Http\Controllers\Web\New\Admin\Customer\CustomerLevelController::class)->group(function () {
                Route::get('/', 'index')->name('index');
                Route::get('create', 'create')->name('create');
                Route::post('store', 'store')->name('store');
                Route::get('edit/{id}', 'edit')->name('edit');
                Route::delete('delete/{id}', 'destroy')->name('delete');
                Route::put('update/{id}', 'update')->name('update');
                Route::get('update-status', 'updateStatus')->name('update-status');
                Route::get('export', 'export')->name('export');
                Route::get('log', 'log')->name('log');
                Route::get('trash', 'trash')->name('trash');
                Route::get('restore/{id}', 'restore')->name('restore');
                Route::delete('permanent-delete/{id}', 'permanentDelete')->name('permanent-delete');
                Route::get('statistics', 'statistics')->name('statistics');
            });
            Route::group(['prefix' => 'access', 'as' => 'access.'], function () {
                Route::controller(\Modules\UserManagement\Http\Controllers\Web\New\Admin\LevelAccessController::class)->group(function () {
                    Route::get('store', 'store')->name('store');
                });
            });
        });
        Route::group(['prefix' => 'wallet', 'as' => 'wallet.'], function () {
            Route::controller(\Modules\UserManagement\Http\Controllers\Web\New\Admin\Customer\CustomerWalletController::class)->group(function () {
                Route::any('index', 'index')->name('index');
                Route::post('store', 'store')->name('store');
                Route::get('export', 'export')->name('export');
            });
        });
    });

    Route::group(['prefix' => 'driver', 'as' => 'driver.'], function () {
        Route::controller(\Modules\UserManagement\Http\Controllers\Web\New\Admin\Driver\DriverController::class)->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('create', 'create')->name('create');
            Route::post('store', 'store')->name('store');
            Route::get('edit/{id}', 'edit')->name('edit');
            Route::get('profile-update-request-list', 'profileUpdateRequestList')->name('profile-update-request-list');
            Route::get('profile-update-request-list-export', 'profileUpdateRequestListExport')->name('profile-update-request-list-export');
            Route::post('profile-update-request-approved-rejected/{id}', 'profileUpdateRequestApprovedOrRejected')->name('profile-update-request-approved-rejected');
            Route::get('show/{id}', 'show')->name('show');
            Route::delete('delete/{id}', 'destroy')->name('delete');
            Route::delete('permanent-delete/{id}', 'permanentDelete')->name('permanent-delete');
            Route::put('update/{id}', 'update')->name('update');
            Route::get('update-status', 'updateStatus')->name('update-status');
            Route::get('get-all-ajax', 'getAllAjax')->name('get-all-ajax');
            Route::get('get-all-ajax-vehicle', 'getAllAjaxVehicle')->name('get-all-ajax-vehicle');
            Route::get('statistics', 'statistics')->name('statistics');
            Route::get('log', 'log')->name('log');
            Route::get('trash', 'trash')->name('trash');
            Route::get('restore/{id}', 'restore')->name('restore');
            Route::get('export', 'export')->name('export');
            Route::get('transaction-export', 'driverTransactionExport')->name('transaction-export');
        });


        Route::group(['prefix' => 'cash', 'as' => 'cash.'], function () {
            Route::get('/{id}', [CashCollectController::class, 'show'])->name('index');
            Route::post('{id}/collect', [CashCollectController::class, 'collect'])->name('collect');
        });

        Route::group(['prefix' => 'level', 'as' => 'level.'], function () {
            Route::controller(\Modules\UserManagement\Http\Controllers\Web\New\Admin\Driver\DriverLevelController::class)->group(function () {
                Route::get('/', 'index')->name('index');
                Route::get('create', 'create')->name('create');
                Route::post('store', 'store')->name('store');
                Route::get('edit/{id}', 'edit')->name('edit');
                Route::delete('delete/{id}', 'destroy')->name('delete');
                Route::put('update/{id}', 'update')->name('update');
                Route::get('update-status', 'updateStatus')->name('update-status');
                Route::get('statistics', 'statistics')->name('statistics');
                Route::get('log', 'log')->name('log');
                Route::get('export', 'export')->name('export');
                Route::get('trash', 'trash')->name('trash');
                Route::get('restore/{id}', 'restore')->name('restore');
                Route::delete('permanent-delete/{id}', 'permanentDelete')->name('permanent-delete');
            });

            Route::group(['prefix' => 'access', 'as' => 'access.'], function () {
                Route::controller(\Modules\UserManagement\Http\Controllers\Web\New\Admin\LevelAccessController::class)->group(function () {
                    Route::get('store', 'store')->name('store');
                });
            });
        });

        Route::controller(\Modules\UserManagement\Http\Controllers\Web\New\Admin\Driver\WithdrawalController::class)->group(function () {
            Route::group(['prefix' => 'withdraw-method', 'as' => 'withdraw-method.'], function () {
                Route::get('/', 'index')->name('index');
                Route::get('create', 'create')->name('create');
                Route::post('store', 'store')->name('store');
                Route::post('update/{id}', 'update')->name('update');
                Route::delete('delete/{id}', 'destroy')->name('delete');
                Route::get('edit/{id}', 'edit')->name('edit');
                Route::get('default-status-update', 'statusUpdate')->name('default-status-update');
                Route::get('active-status-update', 'activeUpdate')->name('active-status-update');
            });
            Route::group(['prefix' => 'withdraw', 'as' => 'withdraw.'], function () {
                Route::get('requests', 'withdrawRequests')->name('requests');
                Route::get('request-details/{id}', 'requestDetails')->name('request-details');
                Route::post('action/{id}', 'action')->name('action');
            });
        });

    });

    Route::group(['prefix' => 'employee', 'as' => 'employee.'], function () {
        Route::controller(\Modules\UserManagement\Http\Controllers\Web\New\Admin\Employee\EmployeeController::class)->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('create', 'create')->name('create');
            Route::post('store', 'store')->name('store');
            Route::get('edit/{id}', 'edit')->name('edit');
            Route::get('show/{id}', 'show')->name('show');
            Route::delete('delete/{id}', 'destroy')->name('delete');
            Route::put('update/{id}', 'update')->name('update');
            Route::get('update-status', 'updateStatus')->name('update-status');
            Route::get('export', 'export')->name('export');
            Route::get('log', 'log')->name('log');
            Route::get('trash', 'trash')->name('trash');
            Route::get('restore/{id}', 'restore')->name('restore');
            Route::delete('permanent-delete/{id}', 'permanentDelete')->name('permanent-delete');
        });


        Route::group(['prefix' => 'role', 'as' => 'role.'], function () {
            Route::controller(\Modules\UserManagement\Http\Controllers\Web\New\Admin\Employee\EmployeeRoleController::class)->group(function () {
                Route::get('/', 'index')->name('index');
                Route::post('store', 'store')->name('store');
                Route::get('update-status/{id}', 'updateStatus')->name('update-status');
                Route::delete('delete/{id}', 'destroy')->name('delete');
                Route::get('edit/{id}', 'edit')->name('edit');
                Route::put('update/{id}', 'update')->name('update');
                Route::get('get-roles', 'getRoles')->name('get-roles');
                Route::get('log', 'log')->name('log');
                Route::get('export', 'export')->name('export');
            });
        });
    });

});


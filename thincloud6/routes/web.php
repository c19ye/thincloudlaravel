<?php

use App\Http\Controllers\AccountSettingsController;
use App\Http\Controllers\BackupController;
use App\Http\Controllers\BillingController;
use App\Http\Controllers\ComingSoonController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DomainController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\FilehubsController;
use App\Http\Controllers\FilemanagerController;
use App\Http\Controllers\FirewallController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\InboxController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\InvoicePreviewController;
use App\Http\Controllers\KnowledgebaseController;
use App\Http\Controllers\LogController;
use App\Http\Controllers\MyplansController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\PageMiscNotAuthorizedController;
use App\Http\Controllers\PageMiscUnderMaintenanceController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\TwoStepsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VerifyMailController;
use App\Http\Controllers\VirtualMachineController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/register', [UserController::class, 'create'])->name('register');

Route::post('/users', [UserController::class, 'store']);

Route::post('/logout', [UserController::class, 'logout']);

Route::get('/', [IndexController::class, 'showpage'])->name('index');

Route::get('/login', [UserController::class, 'login']);

Route::post('/users/authenticate', [UserController::class, 'authenticate']);

Route::group(['middleware' => 'auth'], function () {
    Route::prefix('mythincloud')->group(function () {
        Route::get('/billing_history', [BillingController::class, 'showpage'])->name('billing_history');
        Route::get('/billing', [BillingController::class, 'showpagetwo'])->name('billing');

        Route::post('/billing/postinformations', [BillingController::class, 'store']);



        Route::get('/myplans', [MyplansController::class, 'show'])->name('myplans');

    });

    Route::prefix('mynetwork')->group(function () {
        Route::get('/backup', [BackupController::class, 'show'])->name('backup');
        Route::post('/backup/createbackup', [BackupController::class, 'create'])->name('createbackup');
        Route::post('/backup/update', [BackupController::class, 'update']);
        Route::get('/backup/delete/{backup_id}', [BackupController::class, 'delete']);

        Route::get('/department', [DepartmentController::class, 'show'])->name('department');
        Route::post('/department/createdepartment', [DepartmentController::class, 'create'])->name('createdepartment');
        Route::get('/department/delete', [DepartmentController::class, 'delete'])->name('departmentdelete');
        Route::get('/department/delete/{user_id}', [DepartmentController::class, 'deleteUser'])->name('UserDelete');
        Route::get('/department/json/{department_id}', [DepartmentController::class, 'datatableJson'])->name('datatableJson');
        Route::post('/department/adduser', [DepartmentController::class, 'adduser'])->name('adduser');

        Route::get('/virtualmachines', [VirtualMachineController::class, 'show'])->name('virtualmachines');
        Route::post('/create_virtualmachine', [VirtualMachineController::class, 'create']);
        Route::post('/virtualmachines/update', [VirtualMachineController::class, 'update']);
        Route::get('/virtualmachines/change', [VirtualMachineController::class, 'notifications'])->name('notifications');

        Route::get('/filehubs', [FilehubsController::class, 'showpage'])->name('filehubs');
        Route::post('/filehubs/create_filehub', [FilehubsController::class, 'create_filehub']);
        Route::post('/filehubs/add_filehub_user', [FilehubsController::class, 'add_filehub_user']);
        Route::post('/filehubs/download_filehub', [FilehubsController::class, 'download_filehub']);
        Route::post('/filehubs/update', [FilehubsController::class, 'update']);
        Route::get('/filehubs/notification', [FilehubsController::class, 'notification']);

        Route::get('/firewall', [FirewallController::class, 'showpage'])->name('firewall');
        Route::post('/firewall/create_rule', [FirewallController::class, 'create_rule']);
        Route::post('/firewall/open_ports', [FirewallController::class, 'open_ports']);
        Route::post('/firewall/update', [FirewallController::class, 'update']);
        Route::post('/firewall/update_ports', [FirewallController::class, 'update_ports']);
        Route::get('/firewall/notification', [FirewallController::class, 'notification']);

        Route::get('/domain', [DomainController::class, 'showpage'])->name('domain');

        Route::get('/settings', [SettingsController::class, 'showpage'])->name('settings');
    });

    Route::get('/faq', [FaqController::class, 'showpage'])->name('faq');

    Route::get('/filemanager', [FilemanagerController::class, 'showpage'])->name('filemanager');

    Route::get('/roles', [RolesController::class, 'showpage'])->name('roles');
    Route::post('/roles/create', [RolesController::class, 'create']);
    Route::post('/roles/update', [RolesController::class, 'update']);
    Route::get('/roles/json', [RolesController::class, 'datatableJson']);
    Route::post('/roles/adduser', [RolesController::class, 'adduser']);
    Route::get('/roles/deleteuser/{id}', [RolesController::class, 'deleteuser']);
    Route::get('/roles/delete/{id}', [RolesController::class, 'delete']);

    Route::get('/log', [LogController::class, 'showpage'])->name('log');

    Route::get('/notification', [NotificationController::class, 'showpage'])->name('notification');

    Route::get('/knowledgebase', [KnowledgebaseController::class, 'showpageone'])->name('knowledgebase');

    Route::get('/knowledgebase-category', [KnowledgebaseController::class, 'showpagetwo'])->name('knowledgebase-category');

    Route::get('/knowledgebase-questions', [KnowledgebaseController::class, 'showpagethree'])->name('knowledgebase-questions');

    Route::get('/ticket', [TicketController::class, 'showpage'])->name('ticket');

    Route::get('/account-settings-account', [AccountSettingsController::class, 'showpageone'])->name('account-settings-account');
    Route::post('/account-settings-account/update_user', [AccountSettingsController::class, 'update_user']);
    Route::get('/account-settings-account/delete/{user_id}', [AccountSettingsController::class, 'delete']);

    Route::get('/account-settings-security', [AccountSettingsController::class, 'showpagetwo'])->name('account-settings-security');
    Route::post('/account-settings-security/update_password', [AccountSettingsController::class, 'update_password']);

    Route::get('/account-settings-billing', [AccountSettingsController::class, 'showpagethree'])->name('account-settings-billing');
    Route::post('/account-settings-billing/add_creditCard', [AccountSettingsController::class, 'add_creditCard']);
    Route::post('/account-settings-billing/update_billing', [AccountSettingsController::class], 'update_billing');

    Route::get('/download', [DownloadController::class, 'showpage'])->name('download');

    Route::get('/inbox', [InboxController::class, 'showpage'])->name('inbox');

    Route::get('/coming-soon', [ComingSoonController::class, 'showpage'])->name('coming-soon');

    Route::get('/forgot_password', [ForgotPasswordController::class, 'showpage'])->name('forgot-password');

    Route::get('/invoice-preview', [InvoicePreviewController::class, 'showpage'])->name('invoice-preview');

    Route::get('/page-misc-not-authorized', [PageMiscNotAuthorizedController::class, 'showpage'])->name('page-misc-not-authorized');

    Route::get('/page-misc-under-maintenance', [PageMiscUnderMaintenanceController::class, 'showpage'])->name('page-misc-under-maintenance');

    Route::get('/reset-password', [ResetPasswordController::class, 'showpage'])->name('reset-password');

    Route::get('/two-steps', [TwoStepsController::class, 'showpage'])->name('two-steps');

    Route::get('/verify-mail', [VerifyMailController::class, 'showpage'])->name('verify-mail');

    Route::fallback(function () {
        return view('pages.page-misc-error');
    });
});
Auth::routes();

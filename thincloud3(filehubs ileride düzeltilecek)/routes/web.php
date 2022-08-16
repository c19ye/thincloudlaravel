<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\LogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\InboxController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\BackupController;
use App\Http\Controllers\DomainController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\BillingController;
use App\Http\Controllers\MyplansController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\FilehubsController;
use App\Http\Controllers\FirewallController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\TwoStepsController;
use App\Http\Controllers\ComingSoonController;
use App\Http\Controllers\DepartmantController;
use App\Http\Controllers\VerifyMailController;
use App\Http\Controllers\FilemanagerController;
use App\Http\Controllers\FlashMessageController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\KnowledgebaseController;
use App\Http\Controllers\PageMiscErrorController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\InvoicePreviewController;
use App\Http\Controllers\VirtualMachineController;
use App\Http\Controllers\AccountSettingsController;
use App\Http\Controllers\PageMiscNotAuthorizedController;
use App\Http\Controllers\PageMiscUnderMaintenanceController;

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


Route::get('/register', [UserController::class, "create"])->name("register");

Route::post('/users', [UserController::class, "store"]);

Route::post('/logout', [UserController::class, "logout"]);

Route::get('/', [IndexController::class, "showpage"])->name("index");

Route::get('/login', [UserController::class, "login"]);

Route::post('/users/authenticate', [UserController::class, "authenticate"]);

Route::group(['middleware' => 'auth'], function(){
    Route::prefix("mythincloud")->group(function () {
        Route::get('/billing', [BillingController::class, "showpage"])->name("billing");

        Route::get('/myplans', [MyplansController::class, "showpage"])->name("myplans");
    });

    Route::prefix('mynetwork')->group(function () {
        Route::get('/backup', [BackupController::class, "showpage"])->name("backup");

        Route::get('/departmant', [DepartmantController::class, "showpage"])->name("departmant");

        Route::get('/virtualmachines', [VirtualMachineController::class, "showpage"])->name("virtualmachines");

        Route::get('/filehubs', [FilehubsController::class, "showpage"])->name("filehubs");

        Route::post('/filehubs/create_filehub', [FileHubsController::class, "create_filehub"]);

        Route::post('/filehubs/add_filehub_user', [FileHubsController::class], "add_filehub_user");

        Route::get('/firewall', [FirewallController::class, "showpage"])->name("firewall");

        Route::get('/domain', [DomainController::class, "showpage"])->name("domain");

        Route::get('/settings', [SettingsController::class, "showpage"])->name("settings");
    });


    Route::get('/faq', [FaqController::class, "showpage"])->name("faq");

    Route::get('/filemanager', [FilemanagerController::class, "showpage"])->name("filemanager");

    Route::get('/roles', [RolesController::class, "showpage"])->name("roles");

    Route::get('/log', [LogController::class, "showpage"])->name("log");

    Route::get('/notification', [NotificationController::class, "showpage"])->name("notification");

    Route::get('/knowledgebase', [KnowledgebaseController::class, "showpageone"])->name("knowledgebase");

    Route::get('/knowledgebase-category', [KnowledgebaseController::class, "showpagetwo"])->name("knowledgebase-category");

    Route::get('/knowledgebase-questions', [KnowledgebaseController::class, "showpagethree"])->name("knowledgebase-questions");

    Route::get('/ticket', [TicketController::class, "showpage"])->name("ticket");

    Route::get('/account-settings-account', [AccountSettingsController::class, "showpageone"])->name("account-settings-account");

    Route::post('/update_user', [UserController::class, "update"]);

    Route::post('/delete-account', [UserController::class, "delete_account"]);


    Route::get('/account-settings-security', [AccountSettingsController::class, "showpagetwo"])->name("account-settings-security");

    Route::get('/account-settings-billing', [AccountSettingsController::class, "showpagethree"])->name("account-settings-billing");

    Route::get('/download', [DownloadController::class, "showpage"])->name("download");

    Route::get('/inbox', [InboxController::class, "showpage"])->name("inbox");

    Route::get('/coming-soon', [ComingSoonController::class, "showpage"])->name("coming-soon");

    Route::get('/forgot_password', [ForgotPasswordController::class, "showpage"])->name("forgot-password");

    Route::get('/invoice-preview', [InvoicePreviewController::class, "showpage"])->name("invoice-preview");

    Route::get('/page-misc-not-authorized', [PageMiscNotAuthorizedController::class, "showpage"])->name("page-misc-not-authorized");

    Route::get('/page-misc-under-maintenance', [PageMiscUnderMaintenanceController::class, "showpage"])->name("page-misc-under-maintenance");

    Route::get('/reset-password', [ResetPasswordController::class, "showpage"])->name("reset-password");

    Route::get('/two-steps', [TwoStepsController::class, "showpage"])->name("two-steps");

    Route::get('/verify-mail', [VerifyMailController::class, "showpage"])->name("verify-mail");

    Route::fallback(function(){

            return view("pages.page-misc-error");

    });
});
    Auth::routes();






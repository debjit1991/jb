<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\EnsureInvitationIsValid;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('refresh-captcha', [App\Http\Controllers\CaptchaController::class, 'refreshCaptcha'])->name('refresh-captcha');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('users', App\Http\Controllers\UserController::class)->only(['index', 'create', 'edit']);

    Route::get('users/{user}/permissions', [App\Http\Controllers\UserPermissionController::class, 'edit'])->name('users.permissions');
    Route::resources([
        'roles' => App\Http\Controllers\RoleController::class,
        'districts'                         =>  App\Http\Controllers\DistrictController::class,
        'blocks'                            =>  App\Http\Controllers\BlockController::class,
        'municipalities'                    =>  App\Http\Controllers\MunicipalityController::class,
        'police-stations'                   =>  App\Http\Controllers\PoliceStationController::class,
        'workflows'                         =>  App\Http\Controllers\WorkflowController::class,
        'offices'                         =>  App\Http\Controllers\WorkflowController::class,

    ]);
    Route::get('permissions', [App\Http\Controllers\PermissionController::class, 'index'])->name('permissions.index');
});

Route::get(
    '/invitation_link',
    [App\Http\Controllers\InvitationController::class, 'invitation_handle']
)->middleware(EnsureInvitationIsValid::class);

Route::get('invitations', [App\Http\Controllers\InvitationController::class, 'index'])->name('invitations.index');
Route::post('invitations', [App\Http\Controllers\InvitationController::class, 'store'])->name('invitations.store');

require __DIR__ . '/auth.php';

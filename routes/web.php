<?php

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

// Route::redirect('/', '/');
Route::get('/', [App\Http\Controllers\HomepageController::class, 'index'])->name('homepage');
// Route::get('/search-room-avail', [App\Http\Controllers\HomepageController::class, 'searchRoomAvail'])->name('searchRoomAvail');
// Route::post('/search', [App\Http\Controllers\HomepageController::class, 'searchRoomAvail'])->name('homepage');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', function () {
    if (session('status')) {
        return redirect()->route('admin.home')->with('status', session('status'));
    }
    return redirect()->route('admin.home');
});

Auth::routes(['register' => false]);
// Admin


Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'App\Http\Controllers\Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    // Rooms
    Route::delete('rooms/destroy', 'RoomsController@massDestroy')->name('rooms.massDestroy');
    Route::resource('rooms', 'RoomsController');

    // Events
    Route::delete('events/destroy', 'EventsController@massDestroy')->name('events.massDestroy');
    Route::resource('events', 'EventsController');

    Route::get('system-calendar', 'SystemCalendarController@index')->name('systemCalendar');

    Route::get('search-room', 'BookingsController@searchRoom')->name('searchRoom');
    Route::post('book-room', 'BookingsController@bookRoom')->name('bookRoom');

    Route::get('my-credits', 'BalanceController@index')->name('balance.index');
    Route::post('add-balance', 'BalanceController@add')->name('balance.add');

    Route::resource('transactions', 'TransactionsController')->only(['index']);
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

 <?php

use App\Mail\ContactMessageCreated;

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


Route::get('/',[

        'as' => 'home',
        'uses' => 'HomeController@home']);

Route::get('/about',[

        'as' => 'about',
        'uses' => 'HomeController@about']);

Route::get('/contact',[

        'as' => 'contact',
        'uses' => 'ContactsController@contact'
        ]);

Route::post('/store' , 'ContactsController@store')->name('store');


Route::get('/mail', function() {
    return new ContactMessageCreated('Madjid','madjidgo@gmail.com', 'Merci');
});


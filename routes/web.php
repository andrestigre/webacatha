<?php

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

//Route::get('/', function () {
    //return view('welcome');
//    return view('acatha');
//});
Route::get('/', 'AcathaController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin'], function () {
  Route::get('/administracion', 'AdminAuth\AdminController@index')->name('home');
  Route::get('/login', 'AdminAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'AdminAuth\LoginController@login');
  Route::post('/logout', 'AdminAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'AdminAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'AdminAuth\RegisterController@register');

  Route::post('/password/email', 'AdminAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'AdminAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'AdminAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'AdminAuth\ResetPasswordController@showResetForm');
  Route::resource('/empresa', 'AdminAuth\\EmpresaController');
  Route::resource('/itemnav', 'AdminAuth\\ItemnavController');
  Route::resource('/slider', 'AdminAuth\\SliderController');
  Route::resource('/caracteristica', 'AdminAuth\\CaracteristicaController');
  Route::post('/storeitemcrt', 'AdminAuth\\ItemcaracteristicaController@storeajax');
  Route::get('/read_itemcrt', 'AdminAuth\\ItemcaracteristicaController@get_toreajax');
  Route::get('/delete_itemcrt', 'AdminAuth\\ItemcaracteristicaController@delete_itemcrt');
  Route::get('/select_itemcrt', 'AdminAuth\\ItemcaracteristicaController@select_itemcrt');
  Route::post('/updateitemcrt/{id}', 'AdminAuth\\ItemcaracteristicaController@updateitemcrt');
  Route::get('/listartodo', 'AdminAuth\\ItemcaracteristicaController@listartodo');

  Route::resource('/itemcaracteristica', 'AdminAuth\\ItemcaracteristicaController');
  Route::resource('/comprobante', 'AdminAuth\\ComprobanteController');

  Route::get('/read_itemcomp', 'AdminAuth\\ItemcomprobanteController@get_toreajax');
  Route::post('/storeitemcomp', 'AdminAuth\\ItemcomprobanteController@storeajax');
  Route::get('/select_itemcomp', 'AdminAuth\\ItemcomprobanteController@select_itemcrt');
  Route::post('/updateitemcomp/{id}', 'AdminAuth\\ItemcomprobanteController@updateitemcrt');
  Route::get('/delete_itemcomp', 'AdminAuth\\ItemcomprobanteController@delete_itemcrt');
  Route::get('/listartodocomp', 'AdminAuth\\ItemcomprobanteController@listartodo');

  Route::resource('/itemcomprobante', 'AdminAuth\\ItemcomprobanteController');
  Route::resource('/soporte', 'AdminAuth\\SoporteController');
  Route::resource('/itemsoporte', 'AdminAuth\\ItemsoporteController');

  Route::get('/read_itemcharpaquete', 'AdminAuth\\CaracteristicaPaqueteController@get_toreajax');
  Route::post('/storeitemcharpaquete', 'AdminAuth\\CaracteristicaPaqueteController@storeajax');
  Route::get('/select_itemchar', 'AdminAuth\\CaracteristicaPaqueteController@select_itemcrt');
  Route::get('/delete_itemchar', 'AdminAuth\\CaracteristicaPaqueteController@delete_itemcrt');
  Route::post('/updateitemchar/{id}', 'AdminAuth\\CaracteristicaPaqueteController@updateitemcrt');
  Route::get('/read_itemsop', 'AdminAuth\\ItemsoporteController@get_toreajax');
  Route::post('/storeitemsop', 'AdminAuth\\ItemsoporteController@storeajax');
  Route::get('/select_itemsop', 'AdminAuth\\ItemsoporteController@select_itemcrt');
  Route::post('/updateitemsop/{id}', 'AdminAuth\\ItemsoporteController@updateitemcrt');
  Route::get('/delete_itemsop', 'AdminAuth\\ItemsoporteController@delete_itemcrt');
  Route::resource('/tipopaquete', 'AdminAuth\\TipopaqueteController');
  Route::resource('/paquete', 'AdminAuth\\PaqueteController');
  Route::resource('/caracteristica-paquete', 'AdminAuth\\CaracteristicaPaqueteController');
});


Route::group(['prefix' => 'customer'], function () {
  Route::get('/login', 'CustomerAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'CustomerAuth\LoginController@login');
  Route::post('/logout', 'CustomerAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'CustomerAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'CustomerAuth\RegisterController@register');

  Route::post('/password/email', 'CustomerAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'CustomerAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'CustomerAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'CustomerAuth\ResetPasswordController@showResetForm');
});





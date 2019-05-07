<?php

Route::get('/', function () {
	 return redirect()->route('tour.index');
});
Route::get('/tour', 'HomeController@index')->name('tour.index');
Route::get('/tour/actionn', 'HomeController@actionn')->name('tour.actionn');
//Route::get('/tour', 'HomeController@contactshow')->name('tour.index');
Route::get('/tour/about', 'HomeController@about')->name('tour.about');
Route::get('/tour/about', 'HomeController@about')->name('tour.about');

Route::get('/tour/showplace', 'HomeController@placeshow')->name('tour.showplace');
Route::post('/tour/showplace', 'HomeController@placesearch');
//Route::get('/tour/destinationn', 'HomeController@placesearch')->name('tour.destinationn');
//Route::get('/tour/destination', 'UserController@placesearch')->name('tour.destination');
//Route::post('/tour/destination', 'UserController@placesearchshow');

Route::get('/tour/contact', 'HomeController@contact')->name('tour.contact');
Route::get('/tour/places', 'HomeController@place')->name('tour.places');
Route::get('/tour/hotel', 'HomeController@hotel')->name('tour.hotel');
Route::get('/tour/coxbazar', 'HomeController@cox')->name('tour.coxbazar');
Route::get('/tour/kuakata', 'HomeController@kuakata')->name('tour.kuakata');
Route::get('/tour/sundorban', 'HomeController@sundorban')->name('tour.sundorban');
Route::get('/tour/sajek', 'HomeController@sajek')->name('tour.sajek');
Route::get('/tour/package', 'Admin@allpackage')->name('admin.allpackage');
Route::get('/tour/{id}/ticketinfo', 'TicketController@show')->name('tour.ticketinfo');
Route::post('/tour/{id}/ticketinfo', 'TicketController@ticketstore');
Route::get('/tour/verifyticket', 'TicketController@verify')->name('tour.verify');
Route::post('/tour/verifyticket', 'TicketController@verifystore');
Route::get('/tour/printticket', 'HomeController@pticketshow')->name('tour.printticket');
Route::post('/tour/printticket', 'HomeController@printticket');

Route::get('/tour/busprintticket', 'HomeController@buspticketshow')->name('tour.busprintticket');
Route::post('/tour/busprintticket', 'HomeController@busprintticket');

Route::get('/tour/print', 'HomeController@printt')->name('tour.print');
Route::post('/tour', 'HomeController@flight');
Route::get('/tour/busticketshow', 'HomeController@buslist')->name('tour.bustickett');
Route::get('/tour/{id}/busticketinfo', 'HomeController@businfoshow')->name('tour.busticketinfo');
Route::post('/tour/{id}/busticketinfo', 'HomeController@busticketstore');
Route::get('/login', 'LoginController@index')->name('login.index');
Route::post('/login', 'LoginController@verify');
Route::get('/userlogin', 'LoginController@index')->name('user.index');
Route::post('/userlogin', 'LoginController@userhome');

Route::get('/logout', 'LogoutController@index')->name('logout.index');

Route::get('/registration', 'LoginController@regform')->name('regform.show');
Route::post('/registration', 'LoginController@store');

//Route::group(['middleware'=>['sess']], function(){
Route::group(['middleware'=>['sess']], function(){

Route::get('/userhome', 'UserController@show')->name('user.userhome');
Route::get('/userhome/userprofile', 'UserController@profileshow')->name('user.userprofile');
Route::post('/userhome', 'UserController@store');
Route::get('/userhome/userprofile/{id}/edit', 'UserController@edit')->name('userprofile.edit');
Route::post('/userhome/userprofile/{id}/edit', 'UserController@edited');



Route::get('/admin', 'Admin@show')->name('admin.index');
Route::get('/admin/create', 'Admin@create')->name('admin.create');
Route::post('/admin/create', 'Admin@store');

Route::get('/admin/ticket', 'Admin@tshow')->name('admin.ticket');
Route::get('/admin/busticket', 'Admin@busshow')->name('admin.busticket');
Route::post('/admin/busticket', 'Admin@busstore');

Route::get('/admin/pay', 'Admin@pay')->name('admin.pay');
Route::get('/admin/destination', 'Admin@destinationshow')->name('admin.destination');
Route::post('/admin/destination', 'Admin@destinationstore');
//Route::get('/admin/userdetails', 'LoginController@show')->name('user.show');
Route::get('/admin/details', 'Admin@show')->name('admin.show');
Route::get('/admin/flight', 'Admin@flight')->name('admin.flight');
Route::post('/admin/flight', 'Admin@flightstore');


Route::get('/admin/livesearch', 'Admin@livesearch')->name('admin.livesearch');
Route::get('/admin/livesearch/action', 'Admin@livesearchaction')->name('livesearch.action');

Route::get('/admin/{id}/ticket', 'Admin@ticketdelete')->name('admin.tdelete');
Route::post('/admin/{id}/ticket', 'Admin@tdestroy');

Route::get('/admin/{id}/pay', 'Admin@paydelete')->name('admin.pdelete');
Route::post('/admin/{id}/pay', 'Admin@pdestroy');

Route::get('/admin/package', 'Admin@packageshow')->name('admin.package');
Route::post('/admin/package', 'Admin@packagestore');

Route::get('/admin/contact', 'Admin@contactform')->name('admin.contact');
Route::post('/admin/contact', 'Admin@contactstore');

Route::get('/admin/about', 'Admin@aboutform')->name('admin.about');
Route::post('/admin/about', 'Admin@aboutstore');
//Route::get('/admin/about', 'Admin@aboutshow')->name('admin.aboutshow');


Route::get('/admin/{id}/edit', 'Admin@edit')->name('admin.edit');
Route::post('/admin/{id}/edit', 'Admin@update');

Route::get('/admin/{id}/delete', 'Admin@delete')->name('admin.delete');
Route::post('/admin/{id}/delete', 'Admin@destroy');

Route::get('/admin/userlist', 'Admin@usershow')->name('admin.userlist');
Route::get('/admin/{id}/userdelete', 'Admin@userdelete')->name('admin.userdelete');
Route::post('/admin/{id}/userdelete', 'Admin@userdestroy');

Route::get('/admin/usercomment', 'Admin@usercomment')->name('admin.usercomment');
});

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

Route::get('/', 'IndexController@index');
Route::get('/index', 'IndexController@index');

Route::get('/login', 'LoginController@index');
Route::post('/login', 'LoginController@login');
Route::get('/logout', 'LoginController@logout');


// Tender
Route::get('/tenderlist', 'TenderController@showTender');

Route::get('/tender-nemeh', 'TenderController@comboTenderTorolNemeh');
Route::post('/tender-nemeh', 'TenderController@insertTender');

Route::get('/tender-zasah/{id}', 'TenderController@editTender');
Route::post('/tender-zasah/{id}', 'TenderController@updateTender');

Route::get('/tender-delid/{id}', 'TenderController@deleteTender');


// Tender Torol
Route::get('/tendertorol-list', 'TenderTorolController@showTenderTorol');

Route::post('/tender_torol_nemeh', 'TenderTorolController@insertTenderTorol');

Route::get('/tendertorol-nemeh', 'TenderTorolController@createTenderTorol');

Route::get('/tendertorol-zasah/{id}', 'TenderTorolController@editTenderTorol');
Route::post('/tendertorol-zasah/{id}', 'TenderTorolController@updateTenderTorol');

Route::get('/tendertorol-delid/{id}', 'TenderTorolController@deleteTenderTorol');

// Profile
Route::get('/profile', 'ProfileController@profile');
Route::post('/profile', 'ProfileController@update');
Route::get('/users', 'ProfileController@show');
Route::get('/user-nemeh', 'ProfileController@create');
Route::post('/user-nemeh', 'ProfileController@store');
Route::get('/users/{id}', 'ProfileController@destroy');
Route::get('/user-zasah/{id}', 'ProfileController@userEdit');
Route::post('/user-zasah/{id}', 'ProfileController@userUpdate');

Route::get('/reqpass', 'ProfileController@reqpass');
Route::post('/reqpass', 'ProfileController@request');
Route::get('/recover/{token}/{email}', 'ProfileController@recover');
Route::post('/recover', 'ProfileController@resetpass');





// News
Route::get('/news', 'NewsController@index');

Route::get('/news-nemeh', 'NewsController@create');
Route::post('/news-nemeh', 'NewsController@store');

Route::get('/news-zasah/{id}', 'NewsController@edit');
Route::post('/news-zasah/{id}', 'NewsController@update');

Route::get('/news-delid/{id}', 'NewsController@destroy');


// News Category
Route::get('/newscat-list', 'NewsCategoryController@index');

Route::get('/newscat-nemeh', 'NewsCategoryController@create');
Route::post('/newscat_nemeh', 'NewsCategoryController@store');

Route::get('/newscat-zasah/{id}', 'NewsCategoryController@edit');
Route::post('/newscat-zassan/{id}', 'NewsCategoryController@update');

Route::get('/newscat-delid/{id}', 'NewsCategoryController@destroy');


// Support
Route::get('/support', 'SupportController@index');
Route::get('/support-view/{id}', 'SupportController@show');
Route::get('/support-delid/{id}', 'SupportController@destroy');


// Votes
Route::get('/votes', 'VoteQAController@index');
Route::get('/vote-nemeh', 'VoteQAController@create');

Route::post('/vote-nemeh', 'VoteQAController@store');

Route::get('/vote-zasah/{id}', 'VoteQAController@edit');
Route::post('/vote-zasah/{id}', 'VoteQAController@update');

Route::get('/vote-delid/{id}', 'VoteQAController@destroy');

// Youtube
Route::get('/youtube', 'YoutubeController@index');
Route::post('/youtube', 'YoutubeController@store');

// Medeelel list
Route::get('/medeelel-list', 'MedeelelController@getMedeelel');

// Medeelel Edit
Route::get('/huniinoots-zasah/{id}', 'MedeelelController@editHuniiNoots');
Route::get('/tosowsankhuu-zasah/{id}', 'MedeelelController@editTosowSankhuu');
Route::get('/uilajillagaa-zasah/{id}', 'MedeelelController@editUilAjillagaa');

// Medeelel Update
Route::post('/huniinoots-zasah/{id}', 'MedeelelController@updateHuniiNoots');
Route::post('/tosowsankhuu-zasah/{id}', 'MedeelelController@updateTosowSankhuu');
Route::post('/uilajillagaa-zasah/{id}', 'MedeelelController@updateUilAjillagaa');

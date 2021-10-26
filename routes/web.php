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



Route::get('/', 'SiteController@index');
Route::get('/establishment', 'SiteController@about');
Route::get('/about', 'SiteController@about');
Route::get('/vision_mission', 'SiteController@vision_mission');
Route::get('/cafp_approach', 'SiteController@cafp_approach');
Route::get('/framework', 'SiteController@framework');
Route::get('/trustees', 'SiteController@trustees');
Route::get('/trustee_detail/{councilMember}', 'SiteController@trustee_detail');
Route::get('/governance', 'SiteController@governance');
Route::get('/team', 'SiteController@team');
Route::get('/team_detail/{secretariat}', 'SiteController@team_detail');

Route::get('/funding', 'SiteController@funding');
Route::get('/events/{event}', 'SiteController@event_details');
Route::get('/contact', 'SiteController@contact');
Route::post('/send_email', 'SiteController@send_email');

Route::get('/thematic_areas', 'SiteController@thematic_areas');
Route::get('/thematic_areas/{thematicArea}', 'SiteController@thematic_area_detail');
Route::get('/capacity_masters', 'SiteController@capacity_masters');
Route::get('/capacity_internship', 'SiteController@capacity_internship');
Route::get('/projects', 'SiteController@projects');
Route::get('/data', 'SiteController@data');
Route::get('/covid', 'SiteController@covid');


//backend
Route::resource('/admin/board', 'CouncilMembersController');
Route::resource('/admin/staff', 'SecretariatController');
Route::resource('/admin/partners', 'PartnersController');
Route::resource('/admin/pillars', 'PillarsController');
Route::resource('/admin/events', 'EventsController');

//uploading images for an event
Route::post('/admin/events/{event}/images', 'EventsController@event_images');
Route::post('/admin/events/{event}/files', 'EventsController@event_files');



Route::resource('/admin/plants', 'PlantsController');
Route::patch('/admin/partners/logo/{partner}', 'PartnersController@logoUpdate');

Route::resource('/admin/thematic_areas', 'ThematicAreasController');

Route::resource('/admin/publication_categories', 'PublicationCategoriesController');
Route::resource('/admin/publications', 'PublicationsController');




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

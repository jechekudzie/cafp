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

Route::get('/index', 'SiteController@index');

Route::get('/', 'SiteController@welcome');
Route::get('/establishment', 'SiteController@about');
Route::get('/about', 'SiteController@about');
Route::get('/vision_mission', 'SiteController@vision_mission');
Route::get('/cafp_approach', 'SiteController@cafp_approach');
Route::get('/framework', 'SiteController@framework');
Route::get('/trustees', 'SiteController@trustees');
Route::get('/trustee_detail/{councilMember}', 'SiteController@trustee_detail');
Route::get('/governance', 'SiteController@governance');
Route::get('/partnerships', 'SiteController@partnerships');
Route::get('/staff', 'SiteController@staff');
Route::get('/staff/{secretariat}', 'SiteController@staff_bio');

Route::get('/associates', 'SiteController@associate');
Route::get('/associates/{associate}', 'SiteController@associate_bio');


Route::get('/funding', 'SiteController@funding');
Route::get('/events/all', 'SiteController@events');
Route::get('/events/{event}', 'SiteController@event_details');
Route::get('/articles/{article}', 'SiteController@article_details');
Route::get('/contact', 'SiteController@contact');
Route::post('/send_email', 'SiteController@send_email');

Route::get('/thematic_areas', 'SiteController@thematic_areas');
Route::get('/thematic_areas/{thematicArea}', 'SiteController@thematic_area_detail');
Route::get('/capacity_development', 'SiteController@capacity_development');
Route::get('/capacity_development/{capacity_development}', 'SiteController@capacity_development_details');
Route::get('/projects', 'SiteController@projects');
Route::get('/data', 'SiteController@data');
Route::get('/covid', 'SiteController@covid');
Route::get('/publications/all', 'SiteController@publications');
Route::get('/vacancies', 'SiteController@vacancies');


//backend
Route::resource('/admin/board', 'CouncilMembersController');
Route::resource('/admin/staff', 'SecretariatController');
Route::resource('/admin/associates', 'AssociateController');
Route::resource('/admin/partners', 'PartnersController');
Route::resource('/admin/pillars', 'PillarsController');
Route::resource('/admin/events', 'EventsController');
Route::resource('/admin/articles', 'ArticleController');
Route::resource('/admin/capacity_developments', 'CapacityDevelopmentController');
Route::resource('/admin/vacancies', 'VacancyController');
//sections
Route::get('/admin/capacity_developments/{capacity_development}/sections', 'CapacityDevelopmentController@sections');
Route::get('/admin/capacity_developments/{capacity_development}/create_section', 'CapacityDevelopmentController@create_section');
Route::post('/admin/capacity_developments/{capacity_development}/store_section', 'CapacityDevelopmentController@store_section');
Route::get('/admin/capacity_developments/{capacity_development_section}/edit_section', 'CapacityDevelopmentController@edit_section');
Route::patch('/admin/capacity_developments/{capacity_development_section}/update_section', 'CapacityDevelopmentController@update_section');

//uploading images for an event
Route::post('/admin/events/{event}/images', 'EventsController@event_images');
Route::post('/admin/events/{event}/files', 'EventsController@event_files');

//uploading images for an articles
Route::post('/admin/articles/{article}/images', 'ArticleController@article_images');
Route::post('/admin/articles/{article}/files', 'ArticleController@article_files');

Route::resource('/admin/plants', 'PlantsController');
Route::patch('/admin/partners/logo/{partner}', 'PartnersController@logoUpdate');

Route::resource('/admin/thematic_areas', 'ThematicAreasController');

Route::resource('/admin/publication_categories', 'PublicationCategoriesController');
Route::resource('/admin/publications', 'PublicationsController');

Route::resource('/admin/forums', 'ForumController');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

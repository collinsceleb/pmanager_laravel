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

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('companies', 'CompaniesController');


Route::resource('tasks', 'TasksController');
Route::resource('Roles', 'RolesController');
Route::resource('users', 'UsersController');

// this is how it was before
// Route::get('/projects/create/{company_id}, ProjectsController@create')->name('projects.create');

  Route::get('/projects/create/{company_id}', function($company_id){
   return view('projects.create', compact('company_id'));
  });
 
// We made mistake in the ' signs
// Route::get('/projects/create/{company_id}', 'ProjectsController@create')->name('projects.create');

Route::resource('projects', 'ProjectsController');

Route::resource('comments', 'CommentsController');

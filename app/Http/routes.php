<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


// Маршруты для администратора системы
Route::get('administrator/', function() {return view ('admin.admin_login');});
Route::post('administrator/', 'AuthenticateController@loginAsAdministrator');
Route::get('assign_role', 'UserController@index');
Route::post('assign_role', 'UserController@assignRole');
Route::get('create_test', function() {return view('admin.create_test');});
Route::get('delete_test', 'GlobalTestController@delete');
Route::get('globaltest/edit/{id}', 'GlobalTestController@edit');
Route::patch('globaltest/edit/{id}', 'GlobalTestController@update');
Route::get('admin/index', 'GlobalTestController@index');

// Маршруты для редактирования и создания вопросов
Route::get('question/index/{id}', 'QuestionController@index');
Route::get('question/edit/{id}', 'QuestionController@edit');
Route::patch('question/edit/{id}', 'QuestionController@update');
Route::get('question/destroy/{id}', 'QuestionController@destroy');
Route::get('question/create/{id}', 'QuestionController@create');


// Маршруты для создания теста
Route::post('globaltest', 'GlobalTestController@store');
Route::get('globaltest/{id}/listening', 'GlobalTestController@createListeningSection');
Route::get('globaltest/{id}/grammar', 'GlobalTestController@createGrammarSection');
Route::get('globaltest/{id}/vocabulary', 'GlobalTestController@createVocabularySection');
Route::get('globaltest/{id}/time', 'GlobalTestController@createTimeSection');
Route::get('globaltest/{id}/reading', 'GlobalTestController@createReadingSection');
Route::post('store_listening_section', 'GlobalTestController@storeListeningSection');

// Маршрут для удаления теста
Route::get('globaltest/destroy/{id}', 'GlobalTestController@destroy');

// Маршруты для создания вопросов
Route::post('makequestions/question', 'QuestionController@store');
Route::post('listening/question1', 'QuestionController@store');


// Маршруты для студента и сдачи теста
Route::get('auth/passtest', 'TestPassController@index');
Route::get('auth/passtest/{id}', 'TestPassController@chooseCategory');
Route::get('auth/passtest/passtest2/{globalTestid}/{id}', 'TestPassController@chooseQuestions');
Route::post('passtest3', 'TestPassController@checkQuestions');

// Маршруты для работы со статистикой
Route::get('statistic/show/{id}', 'StatisticController@show');
Route::get('student/showstat', 'StatisticController@showForStudent');

// Маршруты для логина - регистрации
Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');


Route::post('auth/login', 'AuthenticateController@chooseUserType');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::resource('tests', 'TestController');

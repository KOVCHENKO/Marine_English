<?php namespace App\Http\Controllers;

use App\GlobalTest;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthenticateController extends Controller {

	/**
	 * @param Request $request
	 * @return mixed
	 * Войти как сдающий тест или принимающий тест
     */
	public function chooseUserType(Request $request)
	{
		// Проверяем студент это или преподаватель и возвращаем на соответствующую страницу
		$users = User::all();
		foreach ($users as $user) {

			if ($user->email == $request->input('email') && Hash::check($request->input('password'), $user->password)) {
				$userId = $user->id;
				if ($user->role_id == 1) {
						// В начале сессии сохраняем ид пользователя для дальнейшего исползьования в результатах
						Session::put('userId', $userId);
					// А также передаем статистику пользователя для отображения
					$userStatistics = StatisticController::statisticsUserQuery($userId);
					return view('student.index')->with('statistics', $userStatistics);
				} else if ($user->role_id == 2) {
						// Необходимо вернуть всех студентов, которые находятся у этого преподавателя
						$tutor_id = $user->id;
						$tutorsUsers = User::where('tutor_id', '=', $tutor_id)->get();
						Session::put('userId', $userId);
					return view('tutor.index')->with('tutorsUsers', $tutorsUsers);
				}
			}
		}
		return view('mistake');
	}


	/**
	 * @param Request $request
	 * @return mixed
	 * Заходит на страницу администратора и выдает список всех текущих тестов в наличии
     */
	public function loginAsAdministrator(Request $request)
	{
		$globalTests = GlobalTest::all();

		if ($request->input('email') == 'admin@admin.ru' && $request->input('password') == 'adminadmin'){
			return view ('admin.index')->with('globalTests', $globalTests);
		}
		return view ('admin.admin_login');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}

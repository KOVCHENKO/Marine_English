<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Statistic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class StatisticController extends Controller {

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
	 * Показывает статистику конкретного пользователя
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$statOfUser = $this->statisticsUserQuery($id);
		return view('tutor.studstat')->with('statistics', $statOfUser);
	}

	public function showForStudent()
	{
		$studentId = Session::get('userId');
		$statOfUser = $this->statisticsUserQuery($studentId);

		return view('student.index')->with('statistics', $statOfUser);
	}

	/**
	 * @param $id
	 * @return mixed
	 * Этот запрос используется для отображения статистики
	 * Запрос статичный, чтобы у нему можно было обращаться из других контроллеров
     */
	public static function statisticsUserQuery($id)
	{
		$statOfUser = DB::table('tests')->join('statistics', 'tests.id', '=', 'statistics.test_id')
			->join('global_tests', 'tests.global_test_id', '=', 'global_tests.id')
			->select('tests.name', 'statistics.*', 'global_tests.name as globalname', 'global_tests.level')
			->where('statistics.user_id', '=', $id)
			->get();

		return $statOfUser;
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

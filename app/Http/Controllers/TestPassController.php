<?php namespace App\Http\Controllers;

use App\GlobalTest;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Question;
use App\Statistic;
use App\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class TestPassController extends Controller {

	/**
	 * Display a listing of the resource.
	 * Выдает перечень существующих на данный момент тестов
	 * @return Response
	 */
	public function index()
	{
		$globalTests = GlobalTest::all();
		return view('student.passtest')->with('globalTests', $globalTests);
	}


	/**
	 * @param $id
	 * @return mixed
	 * В данном методе выдается список для видов речевой деятельности
     */
	public function chooseCategory($id)
	{
		$testCategories = GlobalTest::find($id)->tests;
		$globalTestId = $id;
		return view('student.passteststep2')->with([
			'testCategories' => $testCategories,
			'globalTestId' =>$globalTestId
		]);
	}

	/**
	 * @param $id
	 * @return mixed
	 * Возвращает перечень вопросов для того или иного вида речевой деятельности
     */
	public function chooseQuestions($globalTestId, $id)
	{
		$testQuestions = Test::find($id)->questions;

		$testType = Test::find($id);
		$testLink = $testType->link;

		// Проверка на вид речевой деятельности, который будет отображаться далее
			if ($testType->type == 'grammar') {
				return view('student.passteststep3')->with([
					'testQuestions' => $testQuestions,
					'globalTestId' => $globalTestId
				]);
			} else {
				return view('student.audiotest.passaudio')->with([
					'testQuestions' => $testQuestions,
					'testLink' => $testLink,
					'globalTestId' => $globalTestId
				]);
			}

	}

	/**
	 * @param Request $request
	 * @return int
	 * Основной метод где происходит проверка на правильность всех ответов
     */
	public function checkQuestions(Request $request)
	{
		// Выбрать список всех ответов, которые будет необходимо сравнивать
		$testId = $request->input('test_id');
		$questions = Question::where('test_id', $testId)->get();

		$score = 0;

		// Выбрать все выбранные учеником ответы на вопросы
		$input = $request->all();
		
		// Первый цикл для прохождения по всем параметрам ключ-значение
		foreach ($input as $key => $item)
		{
			// Сравнение с каждым вопросом по порядку
			foreach($questions as $question)
			{
				//Если номер вопроса совпадает и ответ на него совпадает
				if ($key == $question->id && $item == $question->answer)
				{
					// Прибавляем баллы
					$score = $score + $question->scores;
				}
			}
		}

		// Сохраняем результат в статистику
		$userId = Session::get('userId');
//		dd($userId);
		$statistic = new Statistic;
		$statistic->user_id = $userId;
		$statistic->test_id = $testId;
		$statistic->result = $score;
		$statistic->save();

		$globalTestId = $request->input('globalTestId');
		// Возвращаем вид и количество очков, заработанное при ответе на тест и номер глобального теста
		return view('student.result')->with([
			'score' => $score,
			'globalTestId' => $globalTestId	
		]);
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

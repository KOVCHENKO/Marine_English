<?php namespace App\Http\Controllers;

use App\GlobalTest;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Question;
use App\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class QuestionController extends Controller {

	/**
	 * Display a listing of the resource.
	 * С помощью метода выдается список вопросов для какого-либо теста
	 * @return Response
	 */
	public function index($id)
	{
		$questions = Test::find($id)->questions;
		$testId = $id;
		return view('admin.questions.update_questions')->with([
			'questions' => $questions,
			'testId' => $testId
		]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create($id)
	{
		return view('admin.createtest.questionform')->with('testId', $id);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$question = new Question;
		$question->question = $request->input('question');
		$question->answer1 = $request->input('answer1');
		$question->answer2 = $request->input('answer2');
		$question->answer3 = $request->input('answer3');
		$question->answer4 = $request->input('answer4');
		$question->test_id = $request->input('test_id');

		$question->answer = $request->input('rightanswer');

		$question->scores = 15;

		$question->save();
		
		$testId = $request->input('test_id');

		return view('admin.createtest.questionform')->with([
			'id' => $request->input('globalTestId'),
			'testId' => $testId
		]);
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
		$question = Question::find($id);

		return view('admin.questions.update_question')->with('question', $question);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$question = Question::find($id);
		$question->question = Input::get('question');
		$question->answer1 = Input::get('answer1');
		$question->answer2 = Input::get('answer2');
		$question->answer3 = Input::get('answer3');
		$question->answer4 = Input::get('answer4');
		$question->answer = Input::get('rightanswer');
		$question->save();

		$questions = Test::find($question->test_id)->questions;
		
		return view('admin.questions.update_questions')->with('questions', $questions);
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

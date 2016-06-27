<?php namespace App\Http\Controllers;

use App\GlobalTest;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class GlobalTestController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$globalTests = GlobalTest::all();
		
		return view('admin.index')->with('globalTests', $globalTests);
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
	public function store(Request $request)
	{
		$globalTest = $request->all();
		$globalTestLast = GlobalTest::create($globalTest);

		$globalTestLastId = $globalTestLast -> id;

		$testName = $request->input('name');
		return view('admin.createtest.testmanagement')->with([
				'testName' => $testName,
				'testId' => $globalTestLastId
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
		$globalTest = GlobalTest::find($id);

		$testCategories = GlobalTest::find($id)->tests;

		return view('admin.update_test')->with([
			'globalTest' => $globalTest,
			'testCategories' => $testCategories
		]);		
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$globalTest = GlobalTest::find($id);
		$globalTest->name =Input::get('name');
		$globalTest->save();

		$globalTests = GlobalTest::all();
		return view('admin.index')->with('globalTests', $globalTests);
	}

	/**
	 * @return mixed
	 * Удалить выбранный тест
     */
	public function delete()
	{
		$allGlobalTests = GlobalTest::all();

		return view('admin.delete_test')->with('allGlobalTests', $allGlobalTests);

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		GlobalTest::destroy($id);

		return redirect()->action('GlobalTestController@delete');
	}

	/**
	 * @param $id
	 * @return mixed
	 * Возвращает страницу для создания аудио теста
     */
	public function createListeningSection($id)
	{
		
		return view('admin.createtest.listeningsection')->with('id', $id);
	}

	/**
	 * Сохраняет listening тест и переводит на страницу с созданием вопросов к секции аудирования
     */
	public function storeListeningSection(Request $request)
	{
		$listeningTest = new Test();
		$listeningTest->name = 'Аудирование';
		$listeningTest->description = 'Тест по аудированию';
		$listeningTest->type = 'listening';
		$listeningTest->global_test_id = $request->input('global_test_id');

		// Часть функции, ответственная за загрузку аудиофайла
		$destinationPath = 'public/uploads/audiofiles';
		$extension = Input::file('audio')->getClientOriginalExtension();
		$fileName = rand(11111,99999).'.'.$extension;
		Input::file('audio')->move($destinationPath, $fileName);

		$listeningTest->link = $fileName;
		$listeningTest->save();

		$testId = $listeningTest->id;

		return view('admin.createtest.questionform')->with('testId', $testId);

	}

	public function createGrammarSection($id)
	{
		$grammarTest = new Test;
		$grammarTest->name = 'Граммактика';
		$grammarTest->description = 'Тест по грамматике';
		$grammarTest->type = 'grammar';
		$grammarTest->global_test_id = $id;

		$grammarTest->save();

		$testId = $grammarTest->id;
		return view('admin.createtest.questionform')->with([
			'id' => $id,
			'testId' => $testId
		]);
	}
		

}

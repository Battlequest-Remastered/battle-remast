<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}

	public function firstquestion($id) {
		$question = Question::find($id);
		$answers = DB::table('answers')->where('question_id', $id)->get();
		return View::make('firstquestion')->with('question', $question)->with('answers', $answers);
	}

	public function question($id, $answerid) {
		$question = Question::find($id);
		$lastanswer = Answer::find($answerid);
		$answers = DB::table('answers')->where('question_id', $id)->get();
		return View::make('question')->with('question', $question)->with('answers', $answers)->with('lastanswer', $lastanswer);
	}

}

<?php namespace CompetitionDB\Http\Controllers;

use CompetitionDB\Competition;

class CompetitionController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		// $this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$competitions = Competition::all();
		return view('home', ['competitions' => $competitions]);
	}

	public function competitionsList($categoryid)
	{
		$competitions = Competition::all();
		return view('list', ['competitions' => $competitions]);
	}

	public function details($competitionid)
	{
		$competitions = Competition::all();
		return view('details', ["competitionid" => $competitionid]);
	}

	public function edit($competitionid)
	{
		$this->middleware('auth');
	}

	public function add()
	{
		$this->middleware('auth');
	}
}

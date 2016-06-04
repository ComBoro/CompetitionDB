<?php namespace CompetitionDB\Http\Controllers;

use Auth;
use Illuminate\Contracts\Auth\Guard;
use CompetitionDB\User;

class ProfileController extends Controller {

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
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */

	public function index()
	{
		return view('profile', ['user' => Auth::user() ]);
	}

	public function showProfile($id)
	{
		return view('profile', ['user' => User::findOrFail($id) ]);
	}

}

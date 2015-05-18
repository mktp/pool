<?php namespace App\Http\Controllers;

use App\pool\entities\Team;
use App\pool\entities\Game;

use DB;

class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('welcome');
	}

	public function wendy()
	{
		return view('hola');
	}

	public function fixture()
	{
		$games = DB::table('games')
		    ->join('teams as T1', 'games.t1', '=', 'T1.id')
		    ->join('teams as T2', 'games.t2', '=', 'T2.id')
            ->select('games.id as id', 'T1.name as t1', 'games.score1 as s1', 'T2.name as t2', 'games.score2 as s2')
            ->get();		
		return view('fixture', compact('games'));
	}
}

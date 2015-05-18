<?php namespace App\Http\Controllers;

use App\Http\Requests\PoolRequest;

use App\pool\entities\Team;
use App\pool\entities\Game;
use App\pool\entities\Client;
use App\pool\entities\Gameclient;

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

	public function new_pool()
	{
		$games = DB::table('games')
		    ->join('teams as T1', 'games.t1', '=', 'T1.id')
		    ->join('teams as T2', 'games.t2', '=', 'T2.id')
            ->select('games.id as id', 'T1.name as t1', 'games.score1 as s1', 'T2.name as t2', 'games.score2 as s2')
            ->get();	
        $many = count($games);
		return view('new_pool', compact('games', 'many'));
	}

	public function save_pool(PoolRequest $request)
	{
		$hola = $request->{"wendy"};

		$client = Client::create([
			
			//"id" => 4,
			"name" => $request->client
		]);
		
		$i = 1;
		do {

			$gameclient = Gameclient::create([
				
				//"id" => 4,
				"idgame" => $i,
				"idclient" => $client->id,
				"score1" => $request->{"game" . $i . "_score1"},
				"score2" => $request->{"game" . $i . "_score2"},
				"mount" => 0
			]);
			$i++;
		} while( $i <= $request->many );
		
		return view('trash', compact('hola'));
	}
}

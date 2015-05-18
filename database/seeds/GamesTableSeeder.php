<?php

use Illuminate\Database\Seeder;
use App\pool\entities\Game;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class GamesTableSeeder extends Seeder
{
    public function run()
    {
        // TestDummy::times(20)->create('App\Post');
        Game::create([
        	
        	//"id" => "1",
        	"t1" => 3,
        	"score1" => 0,
        	"t2" => 5,
        	"score2" => 0,
        ]);
        Game::create([
        	
        	//"id" => "1",
        	"t1" => 6,
        	"score1" => 0,
        	"t2" => 7,
        	"score2" => 0,
        ]);

    }
}

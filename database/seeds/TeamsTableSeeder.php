<?php

use Illuminate\Database\Seeder;
use App\pool\entities\Team;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class TeamsTableSeeder extends Seeder
{
    public function run()
    {
        // TestDummy::times(20)->create('App\Post');
        Team::create([
        	
        	//"id" => "1",
        	"name" => "Argentina",
        ]);
        Team::create([
        	
        	//"id" => "1",
        	"name" => "Brasil",
        ]);
        Team::create([
        	
        	//"id" => "1",
        	"name" => "Chile",
        ]);
        Team::create([
        	
        	//"id" => "1",
        	"name" => "Colombia",
        ]);
        Team::create([
        	
        	//"id" => "1",
        	"name" => "Ecuador",
        ]);
        Team::create([
        	
        	//"id" => "1",
        	"name" => "Jamaica",
        ]);
        Team::create([
        	
        	//"id" => "1",
        	"name" => "Uruguay",
        ]);
        Team::create([
        	
        	//"id" => "1",
        	"name" => "Venezuela",
        ]);

    }
}

<?php namespace App\pool\entities;

use Illuminate\Database\Eloquent\Model;

class Gameclient extends Model {

	//
	protected $fillable = array('id', 'idgame', 'idclient', 'score1', 'score2', 'mount');

}

<?php namespace CompetitionDB;

use Illuminate\Database\Eloquent\Model;

class Competition extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'events';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'start', 'end' ,'mingrade', 'maxgrade', 'website', 'description'];
}

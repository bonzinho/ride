<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class evento_tipo extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'evento_tipos';

	protected $fillable = [
    	'tipo',    	
    ];
}

<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class boleia_match extends Model {

	/**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'boleia_matches';

	protected $fillable = [
    	'utilizador_id',
    	'numero_pessoas',
    	'notas',
    	'estado',    	
    ];


    public function boleias(){
        return $this->belongsToMany('App\boleia', 'boleias');
    }
}

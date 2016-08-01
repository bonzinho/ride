<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class cidade extends Model {

	/**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cidades';


	protected $fillable = [
    	'cidade',    	  	
    	'distrito_id',    	  	
    ];

    public function users(){
        return $this->hasMany('user', 'users');
    }

    public function distritos(){
        return $this->belongsTo('App\distrito', 'distritos');
    }

}

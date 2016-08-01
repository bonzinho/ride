<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class distrito extends Model {

	/**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'distritos';


	protected $fillable = [
    	'distrito',    	 	
    ];


    public function users(){
    	return $this->hasMany('user', 'users');
    }

    public function cidades(){
    	return $this->hasMany('App\cidade', 'cidades');
    }

}

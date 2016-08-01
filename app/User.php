<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'email', 'password', 'telefone', 'distrito_id', 'cidade_id', 'estado_id', 'nivel_id'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];



	public function distritos(){
		return $this->hasOne('App\distrito', 'distritos');
	}


	public function cidades(){
		return $this->hasOne('App\cidade', 'cidades');
	}

	public function utilizador_estados(){
		return $this->hasOne('App\utilizador_estado', 'utilizador_estados');
	}

	public function nivel_utilizadors(){
		return $this->hasOne('App\nivelUtilizador', 'nivel_utilizadors');
	}

	public function boleias(){
		return $this->hasMany('App\boleia', 'boleias');
	}

	public function boleia_matches(){
		return $this->hasMany('App\boleia_match', 'boleia_matches');
	}
}

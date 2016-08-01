<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Organizadora extends Model {


    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'organizadoras';


	protected $fillable = [
    	'nome',
    	'distrito_id',
    	'descricao',
    	'email',
    	'telefone',
    	'logotipo',
    	'estado_id',
    	'tipo_id',    	
    ];

    public function distritos(){
        return $this->hasOne('App\distrito', 'distritos');
    }   

    public function utilizador_estados(){
        return $this->hasOne('App\utilizador_estado', 'utilizador_estados');
    }

    public function evento_tipos(){
        return $this->hasOne('App\evento_tipo', 'evento_tipos');
    }

    public function eventos(){
        return $this->hasMany('app\eventos', 'eventos');
    }

}

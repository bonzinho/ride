<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model {

        /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'eventos';

	protected $fillable = [
    	'nome',
    	'organizadora_id',
    	'data_inicio',
    	'data_fim',
    	'local',
    	'descricao',
    	'capa',
    	'cartaz',
    	'estado_id',
    	'tipo_id',
    ];

    public function organizadoras(){
        return $this->belongsTo('app\organizadora', 'organizadoras');
    }

    public function boleias(){
        $this->hasMany('App\boleia', 'boleias');
    }
}

<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class boleia extends Model {


    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'boleias';

	protected $fillable = [
    	'utilizador_id',
    	'evento_id',
    	'hora_ida',
    	'data_ida',
    	'hora_vinda',
    	'data_vinda',
    	'lugares_disponiveis',
    	'preco',
    	'boleia_estado',
    	'zona_embarque',
    	'zona_desembarque',
    	'boleia_estado',
    ];

    public function cidades(){

        return $this->hasOne('App\cidade', 'cidades');
    }

   public function boleia_matches(){  // relação do numero de pedidos de match  para boleia

        return $this->belongsToMany('App\boleia_match', 'boleia_matches');
   }

   public function eventos(){
    return $this->hasOne('App\evento', 'eventos');
   }

}

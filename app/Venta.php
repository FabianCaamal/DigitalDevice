<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'ventas';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['fecha', 'maquina_id', 'producto_id', 'precio'];

    public function producto()
    {
        return $this->belongsTo('App\Producto');
    }
    public function maquina()
    {
        return $this->belongsTo('App\Maquina');
    }
    
}

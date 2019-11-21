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
    protected $table = 'venta';

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
    protected $fillable = ['fecha', 'maquina_id', 'producto_id', 'Precio'];

    public function producto_id()
    {
        return $this->belongsTo('App\Models\Producto');
    }
    public function maquina_id()
    {
        return $this->belongsTo('App\Models\Maquina');
    }
    
}

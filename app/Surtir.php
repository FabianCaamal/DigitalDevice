<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Surtir extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'surtirs';

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
    protected $fillable = ['maquina_id', 'producto_id', 'cantidad', 'fechaRealizada'];

    public function empleado()
    {
        return $this->hasMany('App\Empleado');
    }
    public function maquina()
    {
        return $this->belongsTo('App\Maquina');
    }
    public function producto()
    {
        return $this->belongsTo('App\Producto');
    }
    
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Maquina extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'maquinas';

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
    protected $fillable = ['codigo', 'longitud', 'latitud', 'DineroAlmacenado'];

    public function stocks()
    {
        return $this->hasMany('App\Models\Stock');
    }
    public function ventas()
    {
        return $this->hasMany('App\Models\Ventas');
    }
    
}

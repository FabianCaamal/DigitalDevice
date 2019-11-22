<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'empresas';

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
    protected $fillable = ['Marca', 'Direccion', 'Correo'];

    public function empleados()
    {
        return $this->hasMany('App\Empleado');
    }
    public function productos()
    {
        return $this->hasMany('App\Producto');
    }
    public function queja()
    {
        return $this->hasMany('App\Queja');
    }
    
}

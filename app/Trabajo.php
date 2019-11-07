<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trabajo extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'trabajos';

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
    protected $fillable = ['Empleado', 'UbicacionMaquina', 'CantidadAsignada', 'FechaEncargo', 'EstatusTrabajo'];

    public function empleado()
    {
        return $this->hasOne('App\Models\Empleado');
    }
    public function maquina()
    {
        return $this->hasOne('App\Models\Maquina');
    }
    
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Queja extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'quejas';

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
    protected $fillable = ['usuario_id', 'empresa_id', 'detalles'];

    public function usuario()
    {
        return $this->belongsTo('App\Usuario');
    }
    public function empresa()
    {
        return $this->hasOne('App\Empresa');
    }
    
}

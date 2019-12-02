<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'productos';

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
    protected $fillable = ['nombre', 'precio', 'categoria', 'distribuidor'];

    public function stocks()
    {
        return $this->hasMany('App\Stock');
    }
    public function ventas()
    {
        return $this->hasMany('App\Venta');
    }
     public function empresas()
    {
        return $this->belongsTo('App\Empresa');
    }
    public function surtirs()
    {
        return $this->hasMany('App\Surtir');
    }

    
}

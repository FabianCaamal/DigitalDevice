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
    protected $fillable = ['nombre', 'precio', 'Categoria', 'Distribuidor'];

    public function stocks()
    {
        return $this->hasMany('App\Models\Stock');
    }
    public function ventas()
    {
        return $this->hasMany('App\Models\Venta');
    }

    
}

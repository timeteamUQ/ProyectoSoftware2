<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

	protected $fillable = ['nombre', 'direccion', 'cantidad', 'tipo', 'material', 'alto','ancho', 'profundidad', 'color', 'peso', 'descripcion', 'precio', 'imagen', 'visible'];




    // Relation with OrderItem
    public function order_item()
    {
        return $this->hasOne('App\OrderItem');
    }
    public function scopeNombre($query, $nombre)
    {

     $query->where('nombre',"LIKE","%$nombre%")
           ->orWhere("tipo","like","%$nombre%")
           ->orWhere("id","like","%$nombre%");



    }






}

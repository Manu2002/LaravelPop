<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public function category()
    {
        return $this->hasOne(Category::class, 'id','category_id');
    }
    public function user()
    {
        return $this->hasOne(User::class,'id','user_id');
    }
    public function imagenes()
    {
        return $this->hasMany(Imagen::class,'product_id','id');
    }
    public function mensaje()
    {
        return $this->hasMany(Mensaje::class);
    }
    public function imagen()
    {
        return $this->hasMany(Imagen::class);
    }
    public function denunciaA()
    {
        return $this->belongsTo(DenunciaA::class);
    }
    public function etiquetas()
    {
        return $this->belongsToMany(Etiqueta::class,'etiqueta_product');
    }

}

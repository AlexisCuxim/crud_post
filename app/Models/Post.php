<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    // en este caso de crea ya que la propiedad crsf intenta ingresar un dato que no existe en la base de datos
    // en $fillable = guardamos un array con los campos que queremos que se muestren 
    protected $fillable = ['title', 'slug' ,'content', 'description', 'category_id', 'posted'];
}

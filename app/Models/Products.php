<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Products extends Model
{
    use HasFactory;

    protected $fillable = ['nom', 'description', 'prix', 'slug', 'favoris' , 'couleurs', 'image', 'promotion', 'categories_id',];

    public function category()
    {
        return $this->belongsTo(Categories::class);
    }
   
}

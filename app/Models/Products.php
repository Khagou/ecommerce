<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $fillable = ['Name', 'Description', 'Prix', 'Slug', 'created_at', 'Colors', 'Image', 'Promotion', 'favorite'];

    protected $casts = [
        'Released_at'=> 'datetime:Y-m-d'
    ];

    // public function favorite
}

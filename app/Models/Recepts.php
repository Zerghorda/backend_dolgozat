<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recepts extends Model
{
    /** @use HasFactory<\Database\Factories\ReceptsFactory> */
    use HasFactory;
    protected $fillable = [
        'name',
        'category_id',
        'img_route',
        'description'
    ];
}

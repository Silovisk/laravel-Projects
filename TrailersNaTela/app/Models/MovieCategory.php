<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MovieCategory extends Model
{
    use HasFactory;
    protected $table = 'movie_categories';
    protected $fillable = [
        'movie_id',
        'category_id',
    ];
    protected $timestamps = false;
}

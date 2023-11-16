<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'movies';
    protected $fillable = [
        'title',
        'synopsis',
        'director_id',
        'duration',
        'path_poster',
        'path_trailer',
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'movie_categories', 'movie_id', 'category_id');
    }

    public function director()
    {
        return $this->belongsTo(Director::class);
    }

    protected static function booted()
    {
        static::deleting(function ($movie) {
            $movie->categories()->detach();
        });
    }
}

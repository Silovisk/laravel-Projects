<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Director extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'directors';
    protected $fillable = [
        'name',
        'birth_date',
        'email',
        'phone',
        'cpf',
        'gender',
        'zipcode',
        'address',
        'number',
        'neighbourhood',
        'state',
        'city',
        'complement',
    ];
    protected $appends = ['age'];

    public function getAgeAttribute()
    {
        return Carbon::parse($this->birth_date)->age;
    }

    public function movies()
    {
        return $this->hasMany(Movie::class);
    }
}

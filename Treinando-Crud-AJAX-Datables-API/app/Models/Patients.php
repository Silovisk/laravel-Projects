<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patients extends Model
{
    use HasFactory;
    protected $table = 'patients';
    protected $fillable = [
        'name',
        'email',
        'cpf',
        'zipcode',
        'address',
        'complement',
        'district',
        'state',
        'SI',
    ];
}

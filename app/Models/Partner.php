<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    use HasFactory;

    const ATENDIDO = 0;
    const PENDIENTE = 1;


    protected $fillable = [
        'name',
        'phone',
        'email',
    ];
}

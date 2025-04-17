<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Colaborador extends Model
{
    protected $fillable =[
        'name',
        'setor',
        'city',
        'date'
    ];
}
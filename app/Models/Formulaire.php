<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formulaire extends Model
{
    use HasFactory;
    protected $fillable =[
        'CIN',
        'Name',
        'Prenom',
        'email',
        'Tel'
    ];
    protected $casts =[
        'CIN' =>'integer'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
    use HasFactory;

    protected $fillable = [
        'grup' , 'grup2', 'eventName' , 'city' , 'place' ,
        'stage', 'date' , 'capacity' , 'description' , 'comment' , 
        'available' ,
    ];
}

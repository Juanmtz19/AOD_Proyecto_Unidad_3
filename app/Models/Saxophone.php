<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Saxophone extends Model
{
    use HasFactory;


    protected $fillable = [
        'brand', 'mark', 'color', 'Pieces', 'Register', 'description', 
        'comment', 'available', 'charac',
    ];
}

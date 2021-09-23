<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pothole extends Model
{
    use HasFactory;

    // apa2 dalam variable $fillable, dia boleh isi
    protected $fillable = [
        // column dalam db
        'nameLoc', 'img'
    ];
}

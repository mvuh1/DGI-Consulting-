<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    use HasFactory;

    protected $table = 'formations';
    public $timestamps = true;

    protected $fillable = [
        'description', 'date_debut', 'date_fin', 'image', 'image_path', 'intitule'
    ];
}

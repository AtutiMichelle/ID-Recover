<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IdReplacement extends Model
{
    use HasFactory;

    protected $fillable = [
        'admission',
        'name',
        'email',
        'faculty',
        'course',
        'photo_path',
        'id_photo_expired_path',
        'police_abstract_path',
       
    ];
}

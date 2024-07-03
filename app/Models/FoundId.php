<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoundId extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'admission_on_id',
        'name_on_id',
        'course_on_id',
        'location_found', // Made nullable
        'date_found',
        'finder_email', // Made nullable
        'finder_phone_number', // Made nullable
        'image_url',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function lostId()
    {
        return $this->belongsTo(LostId::class, 'admission', 'admission_on_id');
    }
}

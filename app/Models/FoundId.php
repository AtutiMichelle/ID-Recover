<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoundId extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name_on_id',
        'course_on_id',
        'location_found',
        'date_found',
        'finder_email',
        'image_url',
    ];

    public function user()
{
    return $this->belongsTo(User::class);
}

}

<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LostId extends Model
{
    use HasFactory;

    protected $fillable = [
        'admission',
        'name',
        'course',
        'date_lost',
        'email',
        'phone_number',
      
    ];

    public function foundIds()
    {
        return $this->hasMany(FoundId::class, 'admission', 'admission_on_id');
    }
}

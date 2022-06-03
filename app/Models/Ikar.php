<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ikar extends Model
{
    use HasFactory;
    protected $fillable = [
        'region',
        'address',
        'city',
        'show_type',
        'type',
        'price',
        'space',
        'user_id',
        'floors_number',
        'room_number',
        'img',
    ];


    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}

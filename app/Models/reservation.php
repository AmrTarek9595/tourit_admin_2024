<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reservation extends Model
{
    use HasFactory;
   
    protected $fillable = [
        'name',
        'phone_number',
        'message',
        'trip_id',
        'trip_key',
        'trip_name'
    ];
}

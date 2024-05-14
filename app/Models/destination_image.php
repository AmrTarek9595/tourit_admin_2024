<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class destination_image extends Model
{
    use HasFactory;
    protected $fillable = [
        'dest_fk',
        'image_name',
    ];
}

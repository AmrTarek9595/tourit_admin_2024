<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class index_page extends Model
{
    use HasFactory;
     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
       'cover','cover_text_1',
       'cover_text_2',
       'no_success_tours',
       'no_happy_tourist',
       'no_place_explored',
       'tourist_feedback',
       'tourist_name',
       'tourist_title'
    ];

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class destination extends Model
{
    use HasFactory;
         /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'Country',
        'city',
        'cover',
        'name_of_hotel',
        'description',
        'includes',
        'not_includes',
        'children_policy',
        'guest_national',
        'price_cover',
        'price_single_double',
        'no_days',
        'program',
        'show_trip',
'sold_out',
'date_start',
'date_end'
     ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class geolocation extends Model
{
    use HasFactory;

    protected $fillable = [
        'address',
        'type',
        'description',
        'name',
        'state',
        'district',
        'address_latitude',
        'address_longitude',
    ];
}

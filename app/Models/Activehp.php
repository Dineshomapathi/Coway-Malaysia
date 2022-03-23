<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activehp extends Model
{
    use HasFactory;

    protected $fillable = [
        'year',
        'value',
    ];
}

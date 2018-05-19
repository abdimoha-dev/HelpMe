<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SchoolLocations extends Model
{
    protected $table = 'schoolLocations';
    protected $fillable = [
        'county',
        'cnstituency_id',
        'constituency',
    ];
}

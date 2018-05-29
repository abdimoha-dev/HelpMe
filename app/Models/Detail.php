<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    protected $table = 'details';
    protected $fillable = [
        'user_id',
        'county',
        'school',
        'admNo',
        'form',
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'userId', 'id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TeacherDetail extends Model
{
    protected $table = 'teacherDetails';
    protected $fillable = [
        'userId',
        'county',
        'school',
        'tscNo',
        'english',
        'kiswahili',
        'maths',
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'userId', 'id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table = 'questions';
    protected $guarded = ['userId', 'id'];
    protected $fillable = ['class', 'subject', 'topic'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdminFaq extends Model
{
    protected $fillable = [
        'title',
        'description',
    ];
}

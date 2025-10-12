<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdminTeam extends Model
{
    protected $fillable = [
        'name',
        'designation',
        'image',
        'facebook',
        'twitter',
        'instagram',
    ];
}

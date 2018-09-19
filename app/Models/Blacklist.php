<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blacklist extends Model
{
    protected $fillable = ['user_id', 'blocked_user_id', 'notes'];

    public $timestamps = false;
}

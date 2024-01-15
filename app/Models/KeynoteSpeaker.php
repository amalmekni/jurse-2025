<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KeynoteSpeaker extends Model
{
    public $timestamps = false;
    protected $fillable = ['firstname', 'lastname', 'description', 'website'];
}

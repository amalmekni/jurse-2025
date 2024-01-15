<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable = ['firstname', 'lastname', 'organisme', 'country_id'];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'name',
        'date',
        'location',
        'main_event',
        'promotion',
    ];

    public function fights()
    {
        return $this->hasMany(Fight::class);
    }
}

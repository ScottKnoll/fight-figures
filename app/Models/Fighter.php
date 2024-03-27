<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fighter extends Model
{
    protected $fillable = [
        'name',
        'nickname',
        'weight_class',
        'nationality',
        'wins',
        'losses',
        'height',
        'reach',
        'DOB',
        'gym',
        'stats',
        'debut_date',
        'image',
    ];

    public function fights()
    {
        return $this->hasMany(Fight::class, 'fighter1_id')
            ->orWhere('fighter2_id', $this->id);
    }
}

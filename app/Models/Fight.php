<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fight extends Model
{
    protected $fillable = [
        'fighter1_id',
        'fighter2_id',
        'winner_id',
        'method',
        'referee',
        'round_ended',
        'time_ended',
        'event_id',
    ];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }

    public function fighter1()
    {
        return $this->belongsTo(Fighter::class, 'fighter1_id');
    }

    public function fighter2()
    {
        return $this->belongsTo(Fighter::class, 'fighter2_id');
    }

    public function winner()
    {
        return $this->belongsTo(Fighter::class, 'winner_id');
    }
}

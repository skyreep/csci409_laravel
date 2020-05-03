<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    //
    protected $fillable = [
        'user_id',
        'room_id',
        'num_of_guests',
        'arrival',
        'departure'
    ];

    public function room() {
        return $this->belongsTo('app\Models\Room');
        return $this->belongsTo('app\User');
    }
}

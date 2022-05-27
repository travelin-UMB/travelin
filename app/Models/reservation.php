<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reservation extends Model
{
    use HasFactory;
    // use SoftDeletes;

    protected $table = 'reservation';

    protected $fillable = [
        'users_id', 'travel_paket', 'participant_count', 'travel_price', 'travel_url', 'note', 'status', 'travel_date'
    ];

    protected $hidden = [];

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }

}

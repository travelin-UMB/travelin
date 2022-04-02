<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class transactions extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'travel_packages_id', 'users_id', 'additional_visa',
        'transaction_total', 'transaction_status'
    ];

    protected $hidden = [];

    public function details()
    {
        return $this->hasMany(transaction_details::class, 'transactions_id', 'id');
    }

    public function travel_packages()
    {
        return $this->belongsTo(travel_packages::class, 'travel_packages_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }
}

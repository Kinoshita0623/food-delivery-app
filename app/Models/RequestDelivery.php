<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class RequestDelivery extends Model
{
    use HasFactory;

    public function requestTo()
    {
        return $this->belongsTo(User::class, 'request_to_user_id');
    }

    public function requester(){
        return $this->belongsTo(User::class, 'requester_user_id');
    }
}

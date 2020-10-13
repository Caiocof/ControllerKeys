<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RentKeys extends Model
{
    use HasFactory;

    protected $table = 'rent_keys';

    protected $fillable = ['room_id', 'requester', 'receiveKey'];
}















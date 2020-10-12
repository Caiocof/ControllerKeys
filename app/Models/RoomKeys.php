<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomKeys extends Model
{
    use HasFactory;

    protected $table = 'room_keys';

    protected $fillable = ['name', 'status'];

}

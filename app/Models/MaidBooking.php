<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaidBooking extends Model
{
    use HasFactory;

    protected $fillable = [
        'maids_id',
        'maidemployers_id',
        'isbooked'
    ];

}

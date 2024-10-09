<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maid extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'Status',
        'Country',
        'isAgentregistered',
        'Agent_id',
        'Tribe',
        'Date_of_birth',
        'Education',
        'Experience_in_Housekeeping',
        'Ability_to_Relate_with_Kids',
        'Ability_to_handle_Household_Items',
        'Location',
        'Expected_Salary',
    ];

}

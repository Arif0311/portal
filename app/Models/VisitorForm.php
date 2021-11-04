<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisitorForm extends Model
{
    use HasFactory;
    protected $table = 'visitor_forms';
    protected $fillable = [
        'visitor_name',
        'visitor_email',
        'visitor_information',
        'visitor_mobile_number',
        'reason_for_visit',
        'person_visiting',
        'body_temperature',
        'visitor_access_card ',
        'date_in_visitor',
        'time_out',
        'description',
        'photo',
        'enabled',
    ];
}

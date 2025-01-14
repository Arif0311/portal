<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Temperature extends Model
{
    use HasFactory;
    protected $table = 'temperatures';
    protected $fillable = [
        'user_id',
        'fullname',
        'username',
        'temperature',
        'inputDate',
        'description',
        'enabled'
    ];

    public function user(){
    	return $this->belongsTo(User::class);
    }
}

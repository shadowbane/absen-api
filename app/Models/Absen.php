<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Absen extends Model
{
    protected $table = 'absen';
    protected $fillable = ['nim', 'classroom_code'];
    
    protected $dates = [
        'created_at',
        'updated_at',
    ];
}

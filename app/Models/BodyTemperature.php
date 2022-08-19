<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BodyTemperature extends Model
{
    use HasFactory;
    
    
    protected $table = 'bodytemperatures';
    protected $guarded =['id','created_at', 'updated_at'];

    public $timestamps = false;
}

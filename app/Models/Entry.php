<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    use HasFactory;
    protected $fillable = ['drive_name','vehicle_reg','cargo_description','cargo_weight','date_in','time_in','security_name'];
}

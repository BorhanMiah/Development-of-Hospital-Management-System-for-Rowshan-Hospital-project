<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable=[
        'name','spacialist','qualification','schedule','contact','email','image','room'
       ];
}

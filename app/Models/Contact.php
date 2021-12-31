<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Contact extends Model
{
   protected $fillable=[
            'contact_name','contact_email','contact_subject','contact_message'
   ];
}

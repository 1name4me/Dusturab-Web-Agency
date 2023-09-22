<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mail;

class Contact extends Model
{
    // use HasFactory;
    protected $table = 'contacts';

    public $fillable = ['name', 'email', 'phone', 'message'];
}

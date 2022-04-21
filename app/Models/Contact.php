<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'created_at', 'name', 'first_name', 'firm', 'mail', 'phone', 'message'];
}

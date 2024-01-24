<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reigster extends Model
{
    use HasFactory;
    protected $filable=[ 'name','mobile','email','password'];
}

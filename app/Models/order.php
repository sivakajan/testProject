<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;

    protected $fillable=[
        'Fname',
        'Lname',
        'username',
        'email',
        'password',
        'nicno',
        'telephone'
        'address'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Linked extends Model
{
    use HasFactory;

    protected $fillable = [
        'firstname',
        'lastname',
        'bankname',
        'acctnumber',
        'userid'
    ];

   

}

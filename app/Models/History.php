<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    use HasFactory;

    protected $fillable = [
        'orderId',
        'type',
        'coin',
        'firstname',
        'lastname',
        'bankname',
        'acctnumber',
        'status',
        'user_id',
        'value',
        'total'
    ];

    public function users()
    {
        return $this->belongsTo('App\Models\User','id','name','last_name');
    }
}

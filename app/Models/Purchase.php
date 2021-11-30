<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;

    protected $fillable = [
        'btcaddress',
        'value', 
        'rate', 
        'method', 
        'total',
        'orderId',
        'user_id'
    ];

    public function users()
    {
        return $this->belongsTo('App\Models\User');
    }
}

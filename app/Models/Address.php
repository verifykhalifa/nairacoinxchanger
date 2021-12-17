<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        'barcode',
        'address',
        'coin',
        'user_id'
    ];

    public function rate()
    {
        return $this->belongsTo('App\Models\Rate','id')->orderBy('id', 'DESC');
    }
}

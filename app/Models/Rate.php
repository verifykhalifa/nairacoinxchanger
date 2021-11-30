<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    use HasFactory;

    protected $fillable = [
        'coin_image',
        'coin',
        'buy',
        'sell'
    ];

    public function address()
    {
        return $this->hasOne('App\Models\Address')->orderBy('id', 'DESC');
    }

}

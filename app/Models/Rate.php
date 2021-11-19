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

    public function ratetemp()
    {
        return $this->hasMany('App\Models\SaleTemp')->orderBy('id', 'DESC');
    }

}

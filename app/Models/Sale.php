<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    protected $fillable = [
        'value', 
        'rate',
        'rate_id',  
        'total',
        'type',
        'status',
        'orderId',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public static function sale_detailed($sale_id)
    {
        $SaleItems = SaleItem::where('sale_id', $sale_id)->get();
        return $SaleItems;
    }

    public function sale_payment()
    {
        return $this->hasMany('App\Models\SalePayment');
    }

}

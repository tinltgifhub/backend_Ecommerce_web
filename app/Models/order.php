<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;
    protected $table = 'order';


    protected $fillable = [
        '_id','user','orderItems','shippingInfo','totalPrice','totalPriceAfterDiscount','orderStatus'
    ];
    protected $casts = [
        'orderItems' => 'json',
        'shippingInfo'=>'json',
        
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function product()
    {
        return $this->belongsTo(product::class);
    }

    public function color()
    {
        return $this->belongsTo(color::class);
    }

}

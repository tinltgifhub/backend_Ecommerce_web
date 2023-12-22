<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
    use HasFactory;
    protected $table = 'cart';
    protected $fillable=[
        'quantity',
        'price',
        'color',
    ];

    public function User(){
        return $this->belongsTo(User::class);
    }
    
    public function product(){
        return $this->belongsToMany(product::class);
    }

    public function color(){
        return $this->belongsToMany(color::class);
    }
}

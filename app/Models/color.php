<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class color extends Model
{
    use HasFactory;
    protected $table = 'color';

    protected $fillable=[
        '_id',
        'title',
        'colorCode',
    ];

    public function product()
    {
        return $this->belongsToMany(product::class, 'color_id');
    }

    public function order()
    {
        return $this->belongsTo(order::class);
    }

    public function color()
    {
        return $this->belongsToMany(cart::class);
    }
}

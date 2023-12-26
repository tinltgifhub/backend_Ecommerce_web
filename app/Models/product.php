<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $table = 'product';

    protected $fillable = [
        '_id', 'title', 'slug', 'description', 'price', 'category', 'quantity', 'sold', 'brand', 'images', 'color', 'tag', 'ratings', 'totalRating',
    ];

    protected $casts = [
        'images' => 'json',
        'color' => 'json',
        'ratings' => 'json',
    ];

    public function getColorAttribute($value)
    {
        return json_decode($value, true);
    }

    public function setColorAttribute($value)
    {
        $this->attributes['color'] = json_encode($value);
    }

    public function getRatingsAttribute($value)
    {
        return json_decode($value, true);
    }

    public function setRatingsAttribute($value)
    {
        $this->attributes['ratings'] = json_encode($value);
    }

    public function color()
    {
        return $this->belongsToMany(color::class, 'color_id');
    }

    public function ratings()
    {
        return $this->belongsToMany(User::class, 'ratings');
    }

    public function wishlist()
    {
        return $this->belongsToMany(User::class, 'wishlist');
    }

    public function order(){
        return $this->belongsToMany(order::class);
    }

    public function cart(){
        return $this->belongsToMany(cart::class);
    }
}

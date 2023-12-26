<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    use HasFactory;
    protected $table = 'blog';
    // protected $dateFormat = 'Y-m-d\H:i:s.u\Z';
    protected $fillable=[
        '_id',
        'title',
        'description',
        'category',
        'numViews',
        'isLike',
        'isDislike',
        'likes',
        'dislikes',
        'author',
        'images',
    ];
    protected $casts = [
        'likes' => 'json',
        'dislikes'=>'json',
        'images'=>'json',
    ];

   
    public function User(){
        return $this->belongsTo(User::class);
    }
}

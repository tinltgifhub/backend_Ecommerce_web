<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    use HasFactory;
    protected $table = 'blog';
    protected $fillable=[
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

    public function User(){
        return $this->belongsTo(User::class);
    }
}

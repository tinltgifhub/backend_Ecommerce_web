<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class enq extends Model
{
    use HasFactory;
    protected $table = 'enq';


    protected $fillable = [
        '_id', 'name','email','mobile','comment','status'
    ];
}

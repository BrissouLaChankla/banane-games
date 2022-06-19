<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{

    protected $fillable = [
        'fullname',
        'job',
        'img_path',
        'story'
    ];

    use HasFactory;
}

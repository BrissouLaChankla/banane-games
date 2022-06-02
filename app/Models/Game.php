<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable = [
        'title',
        'matiere',
        'short_description',
        'slug',
        'description',
        'link',
        'thumbnail_img_url',
        'is_available'
    ];

    public function pictures() {
        return $this->hasMany(GamePicture::class);
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GamePicture extends Model
{
    use HasFactory;

    
    protected $fillable = [
        'img_url',
        'game_id'
    ];

    public function game() {
        return $this->belongsTo(Game::class);
    }
}

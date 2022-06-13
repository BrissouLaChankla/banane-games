<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Word extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'nb_occurence',
        'difficulty_id',
        'theme_id',
        'game_id',
    ];

    public function theme() {
        return $this->belongsTo(Theme::class);
    }
}

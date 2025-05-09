<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Word extends Model
{
    //
    use HasFactory;
    protected $fillable = [
        'theme_id',  
        'word'

    ];

    public function theme() 
    {
        return $this->belongsTo(Theme::class, 'themes_id');
    }

    public function definition()
    {
        return $this->hasMany(Definition::class, 'words_id');
    }
}

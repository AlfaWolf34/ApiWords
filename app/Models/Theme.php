<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Theme extends Model
{
    //
    use HasFactory;
    protected $fillable = [
        'theme',      
        'description'
    ];
    
    public function word()
    {
        return $this->hasMany(Word::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Definition extends Model
{
    //
    use HasFactory;
    protected $fillable = [
        'words_id',  
        'definition',
        'is_correct'
    ];

    public function word()
    {
        return $this->belongsTo(Word::class, 'words_id');
    }
}

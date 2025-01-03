<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = ['subject_id', 'title', 'author', 'is_recommended'];

    // A book belongs to a subject
    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
}

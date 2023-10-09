<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    /**
     * Defining an accessor
     */
    public function getExcerptAttribute()
    {
        return substr($this->content, 0, 120);
    }

    /**
     * Defining an accessor
     */
    public function getPublishedAtAttribute()
    {
        return $this->created_at->format('d/m/Y');
    }

    /**
     * Relationship belongs to one
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

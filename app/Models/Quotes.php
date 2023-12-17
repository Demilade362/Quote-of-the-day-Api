<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Quotes extends Model
{
    use HasFactory;

    protected $fillable = [
        'quote',
        'author'
    ];

    public function scopeAuthor(Builder $query, string $author)
    {
        return $query->where('author', 'like', "%$author%")
            ->get();
    }
}

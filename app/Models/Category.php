<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    protected $fillable = [
        'name',
    ];

    /**
     * Relazione 1-N: una categoria ha molti articoli.
     */
    public function articles(): HasMany
    {
        return $this->hasMany(Article::class);
    }
}
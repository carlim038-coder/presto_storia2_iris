<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'price',
        'category_id',
        'user_id'
    ];

    /**
     * Relazione 1-N (inverso): un articolo appartiene a un utente.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Relazione 1-N (inverso): un articolo appartiene a una categoria.
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
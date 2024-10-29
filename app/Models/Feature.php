<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Feature extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'route',
        'produk_id',
        'name',
        'content',
    ];

    /**
     * Get the produk that owns the feature.
     */
    public function produk(): BelongsTo
    {
        return $this->belongsTo(Produk::class);
    }
}

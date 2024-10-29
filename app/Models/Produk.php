<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Produk extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'route',
        'name',
    ];

    /**
     * Get the features for the produk.
     */
    public function features(): HasMany
    {
        return $this->hasMany(Feature::class);
    }
}

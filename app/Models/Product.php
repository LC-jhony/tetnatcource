<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Auth;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'tenant_id',
        'name',
        'code',
        'price',
    ];

    public function tenant(): BelongsTo
    {
        return $this->belongsTo(
            related: Tenant::class,
            foreignKey: 'tenant_id'
        );
    }

    public function sales(): HasMany
    {
        return $this->hasMany(
            related: SaleItem::class,
            foreignKey: 'product_id'
        );
    }

    // protected static function booted()
    // {
    //     static::addGlobalScope('tenant', function ($builder) {
    //         $builder->where('tenant_id', Auth::user()->tenant_id);
    //     });
    // }
}

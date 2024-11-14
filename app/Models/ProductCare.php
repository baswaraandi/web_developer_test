<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductCare extends Model
{
    use HasFactory;
    protected $fillable = [
        'gudang_id',
        'customer_name',
        'phone_number',
        'latitude_pickup',
        'longitude_pickup',
        'product_care_date',
        'total',
        'payment_method',
        'payment_status',
        'product_care_type',
        'product_care_status',
        'created_at',
        'created_by',
        'pickup_at',
        'pickup_by',
        'delivered_at',
        'delivered_by',
        'updated_at',
        'updated_by',
    ];

    public function gudangs(): BelongsTo
    {
        return $this->belongsTo(Gudang::class);
    }

    public function product_care_items()
    {
        return $this->hasMany(ProductCareItem::class);
    }
}

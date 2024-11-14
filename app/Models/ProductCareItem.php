<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCareItem extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_id',            // Foreign key to 'products' table
        'product_care_id',       // Foreign key to 'product_cares' table
        'serial_number',         // Serial number of the product
        'maintenance_count',     // Maintenance count for the product
        'refill_count',          // Refill count for the product
    ];

    public function product_cares()
    {
        return $this->belongsTo(ProductCare::class);
    }
    public function products()
    {
        return $this->belongsTo(Product::class);
    }
}

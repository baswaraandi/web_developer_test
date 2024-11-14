<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'IdCategoryProduct',
        'IdSubCategoryProduct',
        'CreateSN',
        'IdProduct',
        'Name',
        'PNO',
        'Price_lama',
        'Price',
        'Stock',
        'Description',
        'MinQty',
        'Weight',
        'Expired',
        'warranty',
        'ExpiredSNI',
        'WarrantySNI',
        'CreatedDate',
        'Status',
        'panjang',
        'lebar',
        'tinggi',
        'fire_rating',
        'media',
        'type',
        'kapasitas',
        'kelas_kebakaran',
        'tabung_silinder',
    ];
    
    public function product_care_items()
    {
        return $this->hasMany(ProductcareItem::class);
    }
}

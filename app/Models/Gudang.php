<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Gudang extends Model
{
    use HasFactory;
    protected $fillable = [
        'Location',
        'CreatedAt',
        'Created',
        'Status',
        'NamaPerusahaan',
        'Alamat',
        'Phone',
        'Email',
        'IdProvince',
        'IdRegencies',
    ];
    public function product_cares()
    {
        return $this->hasMany(ProductCare::class);
    }
}

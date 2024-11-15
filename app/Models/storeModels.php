<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class storeModels extends Model
{
    use HasFactory;
    protected $table = 'store';

    protected $fillable = [
        'slug',
        'nama_barang',
        'category',
        'desc',
        'harga',
        'stok',
        'img',
        'id_admin',
        'status'
    ];

    public function admin()
    {
        return $this->belongsTo(adminModels::class, 'id_admin');
    }
}

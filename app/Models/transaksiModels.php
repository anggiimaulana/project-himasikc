<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksiModels extends Model
{
    use HasFactory;
    protected $table = 'transaksi';

    protected $fillable = [
        'nama',
        'email',
        'wa',
        'bukti_transaksi',
        'id_barang',
        'status',
        'id_admin'
    ];

    public function barang()
    {
        return $this->belongsTo(storeModels::class, 'id_barang');
    }

    public function admin()
    {
        return $this->belongsTo(adminModels::class, 'id_admin');
    }
}

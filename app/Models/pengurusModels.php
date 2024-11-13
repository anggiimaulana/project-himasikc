<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengurusModels extends Model
{
    use HasFactory;

    protected $table = 'pengurus';

    // Menentukan kolom mana yang bisa diisi massal
    protected $fillable = [
        'nama',
        'nim',
        'kelas',
        'id_jabatan',
        'motto',
        'sosmed',
        'img',
        'tahun_kepengurusan',
        'id_admin',
    ];

    // Mendefinisikan relasi dengan model Admin
    public function admin()
    {
        return $this->belongsTo(adminModels::class, 'id_admin');
    }

    // Mendefinisikan relasi dengan model Jabatan
    public function jabatan()
    {
        return $this->belongsTo(jabatanModels::class, 'id_jabatan');
    }
}

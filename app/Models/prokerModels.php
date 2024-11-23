<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prokerModels extends Model
{
    use HasFactory;
    protected $table = 'proker';
    
    protected $fillable = [
        'nama',
        'id_divisi',
        'jenis',
        'logo',
        'desc',
        'tujuan',
        'sasaran',
        'hasil',
        'docs_1',
        'docs_2',
        'docs_3',
        'tahun_kepengurusan',
        'id_admin',
        'status'
    ];

    public function admin()
    {
        return $this->belongsTo(adminModels::class, 'id_admin');
    }

    public function divisi()
    {
        return $this->belongsTo(divisiModels::class, 'id_divisi');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jabatanModels extends Model
{
    use HasFactory;
    protected $table = 'jabatan';
    protected $fillable = [
        'nama',
        'id_divisi',
    ];

    public function divisi()
    {
        return $this->belongsTo(divisiModels::class, 'id_divisi');
    }
}

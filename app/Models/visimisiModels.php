<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class visimisiModels extends Model
{
    use HasFactory;
    protected $table = 'visimisi';
    protected $fillable = [
        'tahun_kepengurusan',
        'visi',
        'misi',
        'id_admin'
    ];

    public function admin()
    {
        return $this->belongsTo(adminModels::class, 'id_admin');
    }
}

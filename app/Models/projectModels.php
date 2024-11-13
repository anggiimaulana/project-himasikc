<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class projectModels extends Model
{
    use HasFactory;
    protected $table = 'project';
    protected $fillable = [
        'slug',
        'judul',
        'desc',
        'author',
        'img',
        'id_admin'
    ];

    public function admin()
    {
        return $this->belongsTo(adminModels::class, 'id_admin');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class divisiModels extends Model
{
    use HasFactory;
    protected $table = 'divisi';

    protected $fillable = [
        'nama',
        'logo'
    ];
}

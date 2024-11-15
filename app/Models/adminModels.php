<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class adminModels extends Model
{
    use HasFactory;
    protected $table = 'admin';

    protected $fillable = [
        'nama',
        'email',
        'password',
        'img'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BazarModel extends Model
{
    use HasFactory;

    protected $table = 'menu';

    protected $fillable = [
        'id', 'nama_menu', 'harga', 'gambar', 'description', 'created_at', 'updated_at'
    ];
}

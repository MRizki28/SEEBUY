<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PesananModel extends Model
{
    use HasFactory;

    protected $table = 'pesanan';
    protected $filleble = [
        'id', 'menu_id', 'nama_pemesan', 'jumlah_pesanan', 'nohp', 'alamat', 'kode_pesanan', 'total_harga', 'created_at', 'updated_at'
    ];


    public function Bazar()
    {
        return $this->belongsTo(BazarModel::class, 'menu_id');
    }
}

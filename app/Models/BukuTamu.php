<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BukuTamu extends Model
{
    use HasFactory;
    protected $table = 'office_buku_tamu';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama_lengkap',
        'no_hp',
        'alamat',
        'id_struktural_tujuan',
        'keperluan',
        'status',
    ];

    public function struktural()
    {
        return $this->belongsTo(StrukturalModel::class, 'id_struktural_tujuan');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StrukturalModel extends Model
{
    use HasFactory;
    protected $table = 'struktural';
    protected $primaryKey = 'id';
    protected $fillable = [
        'jabatan',
        'keterangan',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kuisioner extends Model
{
    use HasFactory;
    protected $table = 'office_responses';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama',
        'usia',
        'pendidikan',
        'pekerjaan',
        'no_1',
        'no_2',
        'no_3',
        'no_4',
        'no_5',
        'no_6',
        'no_7',
        'no_8',
        'no_9',
        'no_10',
        'saran'
    ];
}

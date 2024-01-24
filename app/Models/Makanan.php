<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Makanan extends Model
{
    use HasFactory;

    protected $table = 'makanans';

    protected $primaryKey = 'kd_makanan';

    protected $fillable = [
        'kd_makanan',
        'nama',
        'kategori',
        'harga',
        'ket',
    ];
}

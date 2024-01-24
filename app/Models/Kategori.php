<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $table = 'makanans';

    protected $primaryKey = 'kd_makanan';

    protected $fillable = [
        'kd_kategori',
        'nama',
        'ket',
    ];
}

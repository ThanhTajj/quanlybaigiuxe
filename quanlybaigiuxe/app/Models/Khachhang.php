<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Khachhang extends Model
{
    use HasFactory;
    protected $fillable = [
        'MaKH',
        'HoTen',
        'NgaySinh',
        'GioiTinh',
        'BienSo',
        'LoaiXe',
        'SDT',
    ];
}

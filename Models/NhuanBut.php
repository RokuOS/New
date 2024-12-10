<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NhuanBut extends Model
{
    protected $table = 'nhuanbut'; // Tên bảng trong cơ sở dữ liệu
    protected $primaryKey = 'MaNB'; // Khóa chính của bảng
    public $timestamps = false; // Nếu bảng không có cột created_at và updated_at

    protected $fillable = [
        'MaBT_XB',
        'NgayThanhToan',
        'TinhTrangThanhToan',
        'Ma_PV',
        'Ten_PV',
        'Ma_BT',
        'Ten_BT',
        'NhuanButPV',
        'NhuanButBTV',
    ];
}
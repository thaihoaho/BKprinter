<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Printer extends Model
{
    use HasFactory;

    protected $table = 'printers'; // Tên bảng trong cơ sở dữ liệu
    protected $primaryKey = 'PrinterID'; // Cột khóa chính
    public $timestamps = false; // Không sử dụng timestamps mặc định của Laravel

    protected $fillable = [
        'Brand',
        'Model',
        'Description',
        'CampusName',
        'BuildingName',
        'RoomNumber',
    ]; // Các cột có thể ghi
}

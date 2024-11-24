<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrinterController;

Route::prefix('printers')->group(function () {
    Route::get('/', [PrinterController::class, 'index']); // Lấy danh sách máy in
    Route::post('/', [PrinterController::class, 'store']); // Thêm máy in mới
    Route::get('/{id}', [PrinterController::class, 'show']); // Xem thông tin chi tiết 1 máy in
    Route::put('/{id}', [PrinterController::class, 'update']); // Cập nhật thông tin máy in
    Route::delete('/{id}', [PrinterController::class, 'destroy']); // Xóa máy in
});

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

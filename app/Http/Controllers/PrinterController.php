<?php

namespace App\Http\Controllers;

use App\Models\Printer;
use Illuminate\Http\Request;

class PrinterController extends Controller
{
    // Lấy danh sách tất cả các máy in
    public function index()
    {
        $printers = Printer::all();
        return response()->json($printers);
    }

    // Thêm máy in mới
    public function store(Request $request)
    {
        $validated = $request->validate([
            'Brand' => 'required|string|max:50',
            'Model' => 'required|string|max:50',
            'Description' => 'nullable|string',
            'CampusName' => 'required|string|max:50',
            'BuildingName' => 'required|string|max:50',
            'RoomNumber' => 'required|string|max:10',
        ]);

        $printer = Printer::create($validated);

        return response()->json($printer, 201); // Trả về HTTP status 201
    }

    // Lấy thông tin chi tiết của một máy in
    public function show($id)
    {
        $printer = Printer::find($id);

        if (!$printer) {
            return response()->json(['message' => 'Printer not found'], 404);
        }

        return response()->json($printer);
    }

    // Cập nhật thông tin máy in
    public function update(Request $request, $id)
    {
        $printer = Printer::find($id);

        if (!$printer) {
            return response()->json(['message' => 'Printer not found'], 404);
        }

        $validated = $request->validate([
            'Brand' => 'nullable|string|max:50',
            'Model' => 'nullable|string|max:50',
            'Description' => 'nullable|string',
            'CampusName' => 'nullable|string|max:50',
            'BuildingName' => 'nullable|string|max:50',
            'RoomNumber' => 'nullable|string|max:10',
        ]);

        $printer->update($validated);

        return response()->json($printer);
    }

    // Xóa một máy in
    public function destroy($id)
    {
        $printer = Printer::find($id);

        if (!$printer) {
            return response()->json(['message' => 'Printer not found'], 404);
        }

        $printer->delete();

        return response()->json(['message' => 'Printer deleted successfully']);
    }
}

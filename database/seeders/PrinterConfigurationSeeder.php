<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PrinterConfigurationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('printer_configurations')->insert([
            ['ConfigID' => 1, 'SPSOID' => 1, 'PrinterID' => 1, 'DefaultPages' => 100, 'AllowedFileTypes' => 'PDF, DOCX, PPTX', 'ConfigDate' => '2024-11-20', 'ConfigPrinterStatus' => 'Active'],
            ['ConfigID' => 2, 'SPSOID' => 2, 'PrinterID' => 2, 'DefaultPages' => 50, 'AllowedFileTypes' => 'PDF, DOC', 'ConfigDate' => '2024-11-21', 'ConfigPrinterStatus' => 'Active'],
            ['ConfigID' => 3, 'SPSOID' => 3, 'PrinterID' => 3, 'DefaultPages' => 200, 'AllowedFileTypes' => 'PDF, PNG, JPG', 'ConfigDate' => '2024-11-22', 'ConfigPrinterStatus' => 'Maintenance'],
        ]);
    }
}

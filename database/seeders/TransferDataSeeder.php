<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Config;

class TransferDataSeeder extends Seeder
{
    public function run()
    {
        // Cấu hình kết nối với MySQL Local
        Config::set('database.connections.local', [
            'driver' => 'mysql',
            'host' => env('DB_HOST'),
            'port' => env('DB_PORT'),
            'database' => env('DB_DATABASE'),
            'username' => env('DB_USERNAME'),
            'password' => env('DB_PASSWORD'),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => 'utf8mb4',
        ]);

        // Cấu hình kết nối với MySQL trên Railway
        Config::set('database.connections.railway', [
            'driver' => 'mysql',
            'host' => env('DB_RAILWAY_HOST'),
            'port' => env('DB_RAILWAY_PORT'),
            'database' => env('DB_RAILWAY_DATABASE'),
            'username' => env('DB_RAILWAY_USERNAME'),
            'password' => env('DB_RAILWAY_PASSWORD'),
            'unix_socket' => env('DB_RAILWAY_SOCKET', ''),
            'charset' => 'utf8mb4',
        ]);

        // Lấy dữ liệu từ MySQL Local
        $localData = DB::connection('local')->table('bkprint')->get();

        // Chèn dữ liệu vào MySQL trên Railway
        foreach ($localData as $data) {
            DB::connection('railway')->table('bkprint')->insert((array) $data);
        }
    }
}

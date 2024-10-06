<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'stock_id' => 1,
                'barang_id' => 1,
                'user_id' => 1,
                'stok_tanggal' => now(),
                'stok_jumlah' => 25,
            ],
            [
                'stock_id' => 2,
                'barang_id' => 2,
                'user_id' => 1,
                'stok_tanggal' => now(),
                'stok_jumlah' => 13,
            ],
            [
                'stock_id' => 3,
                'barang_id' => 3,
                'user_id' => 1,
                'stok_tanggal' => now(),
                'stok_jumlah' => 30,
            ],
            [
                'stock_id' => 4,
                'barang_id' => 4,
                'user_id' => 2,
                'stok_tanggal' => now(),
                'stok_jumlah' => 31,
            ],
            [
                'stock_id' => 5,
                'barang_id' => 5,
                'user_id' => 2,
                'stok_tanggal' => now(),
                'stok_jumlah' => 46,
            ],
            [
                'stock_id' => 6,
                'barang_id' => 6,
                'user_id' => 2,
                'stok_tanggal' => now(),
                'stok_jumlah' => 10,
            ],
            [
                'stock_id' => 7,
                'barang_id' => 7,
                'user_id' => 3,
                'stok_tanggal' => now(),
                'stok_jumlah' => 45,
            ],
            [
                'stock_id' => 8,
                'barang_id' => 8,
                'user_id' => 3,
                'stok_tanggal' => now(),
                'stok_jumlah' => 56,
            ],
            [
                'stock_id' => 9,
                'barang_id' => 9,
                'user_id' => 3,
                'stok_tanggal' => now(),
                'stok_jumlah' => 70,
            ],
            [
                'stock_id' => 10,
                'barang_id' => 10,
                'user_id' => 3,
                'stok_tanggal' => now(),
                'stok_jumlah' => 5,
            ],
        ];

        DB::table('t_stock')->insert($data);
    }
}

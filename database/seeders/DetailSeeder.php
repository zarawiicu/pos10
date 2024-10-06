<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class DetailSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        // Ambil semua ID penjualan dan barang yang sudah ada
        $penjualanIds = DB::table('t_penjualan')->pluck('penjualan_id')->toArray();
        $barangIds = DB::table('m_barang')->pluck('barang_id')->toArray();

        foreach ($penjualanIds as $penjualanId) {
            // Ambil 3 barang unik secara acak
            $barangIdsForTransaction = $faker->unique()->randomElements($barangIds, 3);

            foreach ($barangIdsForTransaction as $barangId) {
                DB::table('t_penjualan_detail')->insert([
                    'penjualan_id' => $penjualanId,
                    'barang_id' => $barangId,
                    // Hitung harga total
                    'harga' => DB::table('m_barang')
                        ->where('barang_id', $barangId)
                        ->value('harga_jual') * $faker->numberBetween(1, 5),
                    'jumlah' => $faker->numberBetween(1, 5),
                ]);
            }
        }
    }
}

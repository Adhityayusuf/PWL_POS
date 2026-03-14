<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void {
        $data = [
            ['barang_id' => 1, 'kategori_id' => 1, 'barang_kode' => 'TV01', 'barang_nama' => 'TV LED 32 Inch', 'harga_beli' => 2000000, 'harga_jual' => 2500000],
            ['barang_id' => 2, 'kategori_id' => 1, 'barang_kode' => 'KP01', 'barang_nama' => 'Kulkas 2 Pintu', 'harga_beli' => 3000000, 'harga_jual' => 3800000],
            ['barang_id' => 3, 'kategori_id' => 1, 'barang_kode' => 'MC01', 'barang_nama' => 'Mesin Cuci', 'harga_beli' => 1500000, 'harga_jual' => 2000000],
            ['barang_id' => 4, 'kategori_id' => 2, 'barang_kode' => 'MN01', 'barang_nama' => 'Aqua 600ml', 'harga_beli' => 3000, 'harga_jual' => 5000],
            ['barang_id' => 5, 'kategori_id' => 2, 'barang_kode' => 'MN02', 'barang_nama' => 'Teh Botol', 'harga_beli' => 4000, 'harga_jual' => 6000],
            ['barang_id' => 6, 'kategori_id' => 2, 'barang_kode' => 'MN03', 'barang_nama' => 'Coca Cola', 'harga_beli' => 5000, 'harga_jual' => 8000],
            ['barang_id' => 7, 'kategori_id' => 3, 'barang_kode' => 'SN01', 'barang_nama' => 'Chitato', 'harga_beli' => 8000, 'harga_jual' => 12000],
            ['barang_id' => 8, 'kategori_id' => 3, 'barang_kode' => 'SN02', 'barang_nama' => 'Oreo', 'harga_beli' => 7000, 'harga_jual' => 10000],
            ['barang_id' => 9, 'kategori_id' => 3, 'barang_kode' => 'SN03', 'barang_nama' => 'Pringles', 'harga_beli' => 15000, 'harga_jual' => 20000],
            ['barang_id' => 10, 'kategori_id' => 4, 'barang_kode' => 'KS01', 'barang_nama' => 'Sabun Wajah', 'harga_beli' => 25000, 'harga_jual' => 35000],
            ['barang_id' => 11, 'kategori_id' => 4, 'barang_kode' => 'KS02', 'barang_nama' => 'Serum Glowing', 'harga_beli' => 80000, 'harga_jual' => 120000],
            ['barang_id' => 12, 'kategori_id' => 4, 'barang_kode' => 'KS03', 'barang_nama' => 'Sunscreen', 'harga_beli' => 40000, 'harga_jual' => 60000],
            ['barang_id' => 13, 'kategori_id' => 5, 'barang_kode' => 'PR01', 'barang_nama' => 'Sapu Ijuk', 'harga_beli' => 10000, 'harga_jual' => 20000],
            ['barang_id' => 14, 'kategori_id' => 5, 'barang_kode' => 'PR02', 'barang_nama' => 'Panci Teflon', 'harga_beli' => 100000, 'harga_jual' => 150000],
            ['barang_id' => 15, 'kategori_id' => 5, 'barang_kode' => 'PR03', 'barang_nama' => 'Blender', 'harga_beli' => 200000, 'harga_jual' => 300000],
        ];
        DB::table('m_barang')->insert($data);
    }
}

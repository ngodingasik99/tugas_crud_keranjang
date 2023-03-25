<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\kategori;
use App\Models\produk;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(5)->create();
        kategori::factory(2)->create();
        // produk::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // kategori::create([
        //     'nama' => 'makanan',
        //     // 'nama' => 'minuman'
        // ]);
        // kategori::create([
        //     'nama' => 'minuman',
        //     // 'nama' => 'minuman'
        // ]);

        produk::create([
            'namaproduk' => 'nasi pecel',
            'harga' => '15000',
            'deskripsi' => 'manu baru disini',
            'kategori_id' => 1
        ]);
    }
}

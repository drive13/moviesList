<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MasterKategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('master_kategoris')->insert([
            'kategori' => 'Now Playing',
            'param' => 'now_playing',
        ]);
        DB::table('master_kategoris')->insert([
            'kategori' => 'Popular',
            'param' => 'popular',
        ]);
        DB::table('master_kategoris')->insert([
            'kategori' => 'Top Rated',
            'param' => 'top_rated',
        ]);
        DB::table('master_kategoris')->insert([
            'kategori' => 'Up Coming',
            'param' => 'upcoming',
        ]);
    }
}

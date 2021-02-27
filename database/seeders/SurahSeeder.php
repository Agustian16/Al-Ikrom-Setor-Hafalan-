<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Php;

class SurahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('table_surah')->insert([
         [
            'id'                    => 1,
            'nama_surah'     => 'Al-Fatihah',
            'jenis_surah'      => 'Mekah',
            'arti_surah'        => 'Pembukaan',
            'jumlah_ayat'           => 7,
         ],
            [
                'id'                => 2,
                'nama_surah' => 'Al-Baqarah',
                'jenis_surah'  => 'Madaniyah',
                'arti_surah'    => 'Sapi Betina',
                'jumlah_ayat'       =>  286,
                ] 
               ]);

    }
}


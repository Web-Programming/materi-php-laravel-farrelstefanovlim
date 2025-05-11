<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // insert data user
        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@example.com',
            'password' => Hash::make('password'),
        ]);

        //insert data mahasiswa menggunakan query builder
        // DB::table('mahasiswa')->insert(
        //     [
        //         'npm' => '2428250047',
        //         'nama_mahasiswa' => 'Farrel',
        //         'tempat_lahir' => 'Paris',
        //         'tanggal_lahir' => '2000-01-01',
        //         'alamat' => 'Palembang'
        //         'created_at' => date("Y-m-d H:i:s")
        //     ]
        //     );
        // DB::table('mahasiswa')
        //     ->where("npm", "2009250066")
        //     ->update(["npm" => "20092006P"]);

        //panggil model
        Mahasiswa::insert(
        [
            'npm' => '2428250047',
            'nama_mahasiswa' => 'Farrel',
            'tempat_lahir' => 'Paris',
            'tanggal_lahir' => '2000-01-01',
            'alamat' => 'Palembang',
            'created_at' => date("Y-m-d H:i:s")
        ]);

        //retrieve all data
        Mahasiswa::all();
        Mahasiswa::where('id', '<', 3)->get(); //select * from mahasiswa where id < 3

        Mahasiswa::select(['npm','nama'])->get(); //select npm from mahasiswa
    }
}

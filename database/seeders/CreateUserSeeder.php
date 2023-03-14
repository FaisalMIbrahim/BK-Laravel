<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;


class CreateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      User::create([
        'nis' => 'admin',
        'nama_lengkap' => 'Admin',
        'password' => bcrypt('12345678'),
        'role_user' => 1,
        'status' => 1
      ]);

      User::create([
        'nis' => '112345678',
        'nama_lengkap' => 'Guru BK',
        'password' => bcrypt('12345678'),
        'role_user' => 2,
        'status' => 1
      ]);
      User::create([
        'nis' => '112344466',
        'nama_lengkap'=>'Wali Kelas',
        'password' => bcrypt('12345678'),
        'role_user' => 3,
        'status' => 1
      ]);
      User::create([
        'nis' => '18552011',
        'nama_lengkap' => 'Siswa',
        'password' => bcrypt('12345678'),
        'role_user' => 4,
        'status' => 1
      ]);
    }
}

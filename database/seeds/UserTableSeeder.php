<?php

use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Kasi Aptel dan Persandian',
            'email' => 'kasi@brebeskab.go.id',
            'password' => bcrypt('secret'),
            'role' => 'kasi'
        ]);
        User::create([
            'name' => 'Kabid Informatika dan Statistik',
            'email' => 'kabid@brebeskab.go.id',
            'password' => bcrypt('secret'),
            'role' => 'kabid'
        ]);

        User::create([
            'name' => 'Kepala Dinas',
            'email' => 'kepaladinas@brebeskab.go.id',
            'password' => bcrypt('secret'),
            'role' => 'kepala'
        ]);
    }
}

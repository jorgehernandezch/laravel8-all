<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'      =>  'Root',
            'email'     =>  'root@root.com',
            'password'  =>  bcrypt('Root'),
            'email_verified_at' => Carbon::now()
        ])->assignRole('root');

        User::create([
            'name'      =>  'Admin',
            'email'     =>  'admin@admin.com',
            'password'  =>  bcrypt('Admin'),
            'email_verified_at' => Carbon::now()
        ])->assignRole('admin');
    }
}

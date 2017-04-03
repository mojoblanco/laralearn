<?php

use Illuminate\Database\Seeder;

class UsersAndAdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
            'name'      => 'John Doe',
            'email'     => 'john@example.com',
            'password'  => Hash::make('password'),
        ]);

        App\Admin::create([
            'name'      => 'Jane Doe',
            'email'     => 'jane@example.com',
            'password'  => Hash::make('password'),
        ]);
    }
}

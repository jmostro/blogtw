<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Javier Mondini',
            'username' => 'jmostro',
            'email' => 'hilifer@gmail.com',
            'password' => bcrypt('asdqwe123')
        ]);
        factory(User::class, 10)->create();
    }
}

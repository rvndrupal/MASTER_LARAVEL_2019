<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 29)->create();

        App\User::create([
        	'name' => 'rodrigo',
        	'email'=> 'rodrigo@gmail.com',
        	'password' => bcrypt('rorro13')
        ]);
    }
}

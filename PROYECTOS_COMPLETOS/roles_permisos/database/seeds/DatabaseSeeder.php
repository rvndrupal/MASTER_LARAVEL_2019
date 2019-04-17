<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Role; //agragar rol

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(PermissionsTableSeeder::class);
         factory(App\Product::class, 50)->create();
         factory(App\User::class, 2)->create();


         Role::create([
            'name'  => 'Admin',
            'slug'  => 'admin',
            'special' => 'all-access'
        ]);

        App\User::create([
            'name'=>'rodrigo',
            'email'=>'rodrigo@gmail.com',
            'password'=>bcrypt('rorro'),

        ]);
    }
}

<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // $files_arr = scandir( dirname(__FILE__) ); //store filenames into $files_array
        // foreach ($files_arr as $key => $file){
        //     if ($file !== 'DatabaseSeeder.php' && $file[0] !== "." ){
        //         $this->call( explode('.', $file)[0] );
        //     }
        // }

        $this->call([
            ProductsImageTableSeeder::class,
            ProductsTableSeeder::class,
            UserTableSeeder::class,
        ]);
    }
}

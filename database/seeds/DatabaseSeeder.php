<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call(UserTableSeeder::class);
        DB::table('tags')->insert([
            'id' => 1,
            'name' => 'nameoftag',
            'created_at'    =>  time(),
            'updated_at'    =>  time(),
        ]);


        Model::reguard();
    }
}

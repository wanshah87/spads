<?php

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
        //Untuk tambah database seed ke dalam database
        DB::table('users')->insert([
          'name'  =>  'Muhamad Rizzuan Shah Bin Ahmad Tohar',
          'username'  =>  'wanshah',
          'email' =>  'wanshah87@gmail.com',
          'password'  =>  Hash::make('wanshah87'),
      ]);
    }
}

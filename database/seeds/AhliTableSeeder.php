<?php

use Illuminate\Database\Seeder;

class AhliTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Untuk tambah database seed ke dalam database Ahli
        DB::table('ahlis')->insert([
          'nama'  =>  'Muhamad Rizzuan Shah Bin Ahmad Tohar',
          'no_mykad'  =>  '880924085678',
          'no_ahli'  =>  '8440',
          'no_telefon'  =>  '0136273391',
          'alamat'  =>  'No.21, Jalan Raja, Kg. Manjoi, 30020 Ipoh, Perak',
          'email' =>  'wanshah87@gmail.com',
      ]);
    }
}

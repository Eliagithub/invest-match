<?php

namespace Database\Seeders;
useDb;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class userTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      DB::table('userecords')->insert([
        //admin
        'type' =>'Admin',
         'name'=>'Admin',
          'email'=>'admin@gmail.com',
          'password'=> hash::make('55555')
      ]);
    }
}

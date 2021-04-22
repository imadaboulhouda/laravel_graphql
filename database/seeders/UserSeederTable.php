<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("users")->insert(
            [
                [
            "name"=>'Imad',
            "email"=>'imad@gmail.com',
            "password"=>encrypt("123456789")
            
        ],[
            "name"=>'Idbrahim',
            "email" => 'idbarhim@gmail.com',
            "password" => encrypt("123456789")
        ]]);
    }
}

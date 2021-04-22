<?php

namespace Database\Seeders;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;
use App\Models\Category;
class CategorySeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   $data = [];
        for($i=1;$i<=100;$i++)
        {
            array_push($data,[
                "name"=>"categories $i",
                "user_id"=>($i%2 == 0) ? 4 :3 
            ]);  
        }

        DB::table("categories")->insert($data);

    }
}

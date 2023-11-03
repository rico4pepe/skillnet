<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Staff;

class StaffTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // This is to create multiple rows that we will use loop through to insert multiple dummy data into database
        $staff = [
                [
                    "fname"=> "Jame",
                    "lname"=> "Larson",
                    "email"=> "gg@mail.com",
                    "phone_number"=> "08122557899",
                    "address"=> "6 bamigboye stree",

                ],
                [
                    "fname"=> "Chris",
                    "lname"=> "Owolabi",
                    "email"=> "cc@mail.com",
                    "phone_number"=> "08120557899",
                    "address"=> "26 olamigboye street",

                ],

        ];

        foreach($staff as $key => $value) {
                Staff::create($value);
        }
    }
}

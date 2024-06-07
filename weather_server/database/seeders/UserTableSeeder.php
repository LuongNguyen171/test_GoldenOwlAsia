<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;



class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            //
            "userName" => "Nguyễn Hữu Lương",
            "userAvt" => "https://i.pinimg.com/1200x/1b/dd/65/1bdd654181279a6ecf6ff2b6cfce9fac.jpg",
            "userPhoneNumber" => "048598595",
            "userAddress" => "Thủ Đức ,Thành phố Hồ Chí Minh",
            "userEmail" => "luongnguyendz01@gmail.com",
            "userPassword" =>  Hash::make("luongnguyen170102@"),
            "userRole" => true
        ]);
        DB::table('users')->insert([
            //
            "userName" => "Lê Huyền Trang",
            "userAvt" => "https://leplateau.edu.vn/wp-content/uploads/2023/10/anh-mang-gai-1.jpg",
            "userPhoneNumber" => "056056850",
            "userAddress" => "Bình Thạnh ,Thành phố Hồ Chí Minh",
            "userEmail" => "lehuyen@gmail.com",
            "userPassword" =>  Hash::make("xinhvc2022"),
            "userRole" => true
        ]);
    }
}

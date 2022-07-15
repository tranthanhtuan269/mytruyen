<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('authors')->insert([
            ['slug' => 'doan-du', 'name' => 'Đoàn Dự'],
            ['slug' => 'ta-ton', 'name' => 'Tạ Tốn'],
        ]);

        \DB::table('categories')->insert([
            ['slug' => 'xuyen-khong', 'name' => 'Xuyên Không'],
            ['slug' => 'tien-hiep', 'name' => 'Tiên Hiệp'],
        ]);

        \DB::table('stories')->insert([
            ['slug' => Str::of('HỆ THỐNG BÁ ĐẠO')->slug('-'), 'name' => 'Hệ thống bá đạo', 'author_id' => 1, 'image' => 'https://static.8cache.com/cover/eJzLyTDWN0j38a7IDMwyNQl2Nwv3Mc8wKqzM9zQ2MDSycHUtSo6sSg8JNQ4yszTzSTXJ1zX388vINffNSHQyzLB0Twlyr0pzS_ZINg51SrVw9wpMzqnMsci3LTcyNNXNMDYyAgC_Ax3Y/mang-theo-hokage-khuay-dao-di-gioi.jpg', 'category_id' => 2],
            ['slug' => Str::of('NỮ THẦN, CẦU BAO NUÔI')->slug('-'), 'name' => 'Nữ thần, cầu bao nuôi', 'author_id' => 1, 'image' => 'https://static.8cache.com/cover/eJzLyTDWN0j38a7IDMwyNQl2Nwv3Mc8wKqzM9zQ2MDSycHUtSo6sSg8JNQ4yszTzSTXJ1zX388vINffNSHQyzLB0Twlyr0pzS_ZINg51SrVw9wpMzqnMsci3LTcyNNXNMDYyAgC_Ax3Y/mang-theo-hokage-khuay-dao-di-gioi.jpg', 'category_id' => 2],
            ['slug' => 'ke-thu-ho-vu-tru', 'name' => 'Kẻ thủ hộ vũ trụ', 'author_id' => 1, 'image' => 'https://static.8cache.com/cover/eJzLyTDWN0j38a7IDMwyNQl2Nwv3Mc8wKqzM9zQ2MDSycHUtSo6sSg8JNQ4yszTzSTXJ1zX388vINffNSHQyzLB0Twlyr0pzS_ZINg51SrVw9wpMzqnMsci3LTcyNNXNMDYyAgC_Ax3Y/mang-theo-hokage-khuay-dao-di-gioi.jpg', 'category_id' => 2],
            ['slug' => 'vo-thuong-tien-de', 'name' => 'Vô Thượng Tiên Đế', 'author_id' => 2, 'image' => 'https://static.8cache.com/cover/eJzLyTDWN0j38a7IDMwyNQl2Nwv3Mc8wKqzM9zQ2MDSycHUtSo6sSg8JNQ4yszTzSTXJ1zX388vINffNSHQyzLB0Twlyr0pzS_ZINg51SrVw9wpMzqnMsci3LTcyNNXNMDYyAgC_Ax3Y/mang-theo-hokage-khuay-dao-di-gioi.jpg', 'category_id' => 2],
        ]);

        \DB::table('chapters')->insert([
            ['slug' => Str::of('Chương 1: Kẻ thủ hộ')->slug('-'), 'name' => 'Chương 1: Kẻ thủ hộ', 'content'=> 'abc', 'story_id' => 3],
            ['slug' => Str::of('Chương 2: Thời Mạt Pháp- TRỌNG SINH')->slug('-'), 'name' => 'Chương 2: Thời Mạt Pháp- TRỌNG SINH', 'content'=> 'abc', 'story_id' => 3],
            ['slug' => Str::of('Chương 3: Thiên Nhãn- TÀN HỒN TRUYỀN THỪA')->slug('-'), 'name' => 'Chương 3: Thiên Nhãn- TÀN HỒN TRUYỀN THỪA', 'content'=> 'abc', 'story_id' => 3],
            ['slug' => Str::of('Chương 4: Thiên địa vô thượng quyết')->slug('-'), 'name' => 'Chương 4: Thiên địa vô thượng quyết', 'content'=> 'abc', 'story_id' => 3],
        ]);
    }
}

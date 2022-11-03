<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Kategori;
use App\Models\Post;

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
        // 
    User::create([
        'name' => 'Naufal Mahdi',
        'email' => 'naupal11746@gmail.com',
        'password' => bcrypt('12345')
    ]);

    Kategori::create([
        'name' => 'Pertanian',
        'slug' => 'pertanian'
    ]);

    Kategori::create([
        'name' => 'Pembangunan',
        'slug' => 'pembangunan'
    ]);

    Post::create([
        'title' => 'Judul Pertama',
        'slug' => 'judul-pertama',
        'excerpt' => 'lorem ipsummmmmmmmmmm',
        'body' => 'loremmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm.',
        'kategori_id' => 1,
        'user_id' => 1
    ]);


    Post::create([
        'title' => 'Judul Kedua',
        'slug' => 'judul-kedua',
        'excerpt' => 'lorem ipsummmmmmmmmmm',
        'body' => 'loremmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm.',
        'kategori_id' => 1,
        'user_id' => 1
    ]);


    Post::create([
        'title' => 'Judul Ketiga',
        'slug' => 'judul-ketiga',
        'excerpt' => 'lorem ipsummmmmmmmmmm',
        'body' => 'loremmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm.',
        'kategori_id' => 2,
        'user_id' => 1
    ]);

    }
}

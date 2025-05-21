<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Berita;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Faker\Factory as Faker;
use Illuminate\Support\Str;

class BeritaSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        $userIds = User::pluck('id');
        $userIds = $userIds->shuffle();

        foreach (range(1, 10) as $i) {
            Berita::create([
                'username' => $faker->userName,
                'judul' => $faker->sentence(6),
                'deskripsi' => $faker->paragraph(5),
                'image' => $this->downloadDummyImage('berita_' . $i),
                'views' => rand(0, 100),
                'user_id' => $userIds->random(),
            ]);
        }
    }

    protected function downloadDummyImage($filename)
    {
        $url = 'https://picsum.photos/600/400';
        $contents = file_get_contents($url);

        $path = 'berita/' . $filename . '.jpg';
        Storage::disk('public')->put($path, $contents);

        return $path;
    }
}

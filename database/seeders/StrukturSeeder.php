<?php

namespace Database\Seeders;

use App\Models\Struktur;
use Faker\Factory as Faker;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class StrukturSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create('id_ID');

        $data = [
            '1' => 1,
            '2' => 2,
            '3' => 4,
            '4' => 4,
        ];

        foreach ($data as $tingkat => $jumlah) {
            for ($i = 0; $i < $jumlah; $i++) {
                Struktur::create([
                    'Nama' => $faker->name,
                    'Jabatan' => $faker->jobTitle,
                    'sttt' => $tingkat,
                    'image' => $this->generateDummyImage(Str::slug($tingkat . '-' . $i)),
                ]);
            }
        }
    }

    protected function generateDummyImage($filename)
    {
        $url = 'https://picsum.photos/300';

        $imageContent = file_get_contents($url);

        $path = 'struktur/' . $filename . '.jpg';
        Storage::disk('public')->put($path, $imageContent);

        return $path;
    }
}

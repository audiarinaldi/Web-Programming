<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Publisher;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Publisher::create([
            'name' => 'Pulpen Pensil',
            'address' => 'Jalan Kemana Aja no 99',
            'phone' =>'080987643',
            'email' => 'ppcontact@gmail.com',
            'image'=>'image/Logo.png'
        ]);

        Publisher::create([
            'name' => 'Mamang Pintar',
            'address' => 'Pasar Minggu 87',
            'phone' =>'0812653477',
            'email' => 'mamangtokobuku@gmail.com',
            'image'=>'image/Logo.png'
        ]);

        Publisher::create([
            'name' => 'Kiki Buku Majalah',
            'address' => 'Jalan Mangga Besar no 1',
            'phone' =>'0899888443',
            'email' => 'kikimabes@gmail.com',
            'image'=>'image/Logo.png'
        ]);

        Publisher::create([
            'name' => 'Gramada Buku',
            'address' => 'Gajah mada no 10',
            'phone' =>'087898152',
            'email' => 'gramada@gmail.com',
            'image'=>'image/Logo.png'
        ]);

        Publisher::create([
            'name' => 'Suka suka Buku',
            'address' => 'Gajah no 16',
            'phone' =>'087800352',
            'email' => 'sukaduaa@gmail.com',
            'image'=>'image/Logo.png'
        ]);
    }
}

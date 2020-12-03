<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
        // \App\Models\product::factory(30)->create();
        
        DB::table('umkms')->insert([
            'name'=>'Berdistraksi',
            'path_photo'=>'images/umkm/berdistraksi.jpg',
        ]);
        DB::table('umkms')->insert([
            'name'=>'By Lily',
            'path_photo'=>'images/umkm/bylily.png',
        ]);
        DB::table('umkms')->insert([
            'name'=>'desoyjoy',
            'path_photo'=>'images/umkm/desoyjoy.png',
        ]);
        DB::table('umkms')->insert([
            'name'=>'Gambarnya Dong Kak',
            'path_photo'=>'images/umkm/gambarnyadongkak.jpg',
        ]);
        DB::table('umkms')->insert([
            'name'=>'Kanigara Books',
            'path_photo'=>'images/umkm/kanigara.jpg',
        ]);
        DB::table('umkms')->insert([
            'name'=>'Kia.clo',
            'path_photo'=>'images/umkm/kiaclo.png',
        ]);
        DB::table('umkms')->insert([
            'name'=>'Langitsoremu.co',
            'path_photo'=>'images/umkm/langitsoremuco.png',
        ]);
        DB::table('umkms')->insert([
            'name'=>'Macrame',
            'path_photo'=>'images/umkm/macrame.png',
        ]);
        DB::table('umkms')->insert([
            'name'=>'Made By Tempa',
            'path_photo'=>'images/umkm/madebytempa.jpg',
        ]);
        DB::table('umkms')->insert([
            'name'=>'Magna',
            'path_photo'=>'images/umkm/magna.jpg',
        ]);
        DB::table('umkms')->insert([
            'name'=>'Mantra Puspa',
            'path_photo'=>'images/umkm/mantrapuspa.png',
        ]);
        DB::table('umkms')->insert([
            'name'=>'Merekat Di Jiwa',
            'path_photo'=>'images/umkm/merekatdijiwa.jpg',
        ]);
        DB::table('umkms')->insert([
            'name'=>'Mon Cherri',
            'path_photo'=>'images/umkm/moncherri.png',
        ]);
        DB::table('umkms')->insert([
            'name'=>'Peculiar Moods',
            'path_photo'=>'images/umkm/peculiarmoods.jpg',
        ]);
        DB::table('umkms')->insert([
            'name'=>'Potlot Studio',
            'path_photo'=>'images/umkm/potlot.jpg',
        ]);
        DB::table('umkms')->insert([
            'name'=>'Relaxine',
            'path_photo'=>'images/umkm/relaxine.jpg',
        ]);
        DB::table('umkms')->insert([
            'name'=>'Suns and Sea',
            'path_photo'=>'images/umkm/sunsandsea.png',
        ]);
        DB::table('umkms')->insert([
            'name'=>'Sundara Gonicraft',
            'path_photo'=>'images/umkm/sundara.jpg',
        ]);
        DB::table('umkms')->insert([
            'name'=>'Veeda',
            'path_photo'=>'images/umkm/veeda.jpg',
        ]);
        DB::table('umkms')->insert([
            'name'=>'Vert Terre',
            'path_photo'=>'images/umkm/vertterre.jpg',
        ]);
        DB::table('umkms')->insert([
            'name'=>'Weekdays Club  ',
            'path_photo'=>'images/umkm/weekdaysclub.jpg',
        ]);
        DB::table('umkms')->insert([
            'name'=>'Your DreamWeaver',
            'path_photo'=>'images/umkm/yourdreamweaver.jpg',
        ]);
    }
}

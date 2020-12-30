<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\product;
use Products;
use App\Models\umkm;

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
        DB::table('admins')->insert([
            'email'=>'adminajisaka',
            'name'=>'adminajisaka',
            'password'=>'$2y$10$ykIqX.1yLY7eFRLLUBTRhOqyx3.v66ytxpjsgFwih/n8.yIRlqK2G',
            ]);


        DB::table('umkms')->insert([
            'name'=>'Berdistraksi',
            'path_photo'=>'images/umkm/berdistraksi.jpg',
            'description'=>'Berdistraksi is a brand that established to accommodate productivity and creativity issues in Indonesia. Delivering ideas about "Everyone can be a creator" and "There is no right and wrong in art" we came out with our main product: DIY Kit Merangkai. We design every aspect in the product to make it as easy as possible to understand and also make it environmentally friendly through the waste management from the waste product.
            <br><br>
            We are not just selling DIY Kit, we also sell beaded basic accessories: bag, choker, and bracelet. Because the majority of our market are women, we try to deliver women empowerment campaigns through our collections.
            <br><br>
            Kode Promo : HAVEAWONDERFULDAY',
            'instagram_link'=>'https://www.instagram.com/berdistraksi_____/'
            ]);
        product::create([
            'name'=>'Iris Bag DIY Kit',
            'umkm_id'=>umkm::where('name', 'Berdistraksi')->first()->id,
            'description'=>'Delivering idea about "Everyone can be a creator” we came out with DIY Kit MERANGKAI #1 to make our beaded
            bag, IRIS BAG. You can see the bag’s model on <a href="https://www.instagram.com/p/CCh-1aeB_jI/?igshid=100an3q4bbv8x">Instagram</a> <br>
            We design every aspect in the product as easy as possible to understand.
            <br><br>
            This DIY kit include <br>
            1. Beads    <br>
            2. Clear thread <br>
            3. Booklet and its QR code for online access <br>
            4. Stickers
            <br><br>
            Varians (10% off discount) : <br>
            — clear beads : <s>IDR 120.000</s> 108.000<br>
            — pearl beads : <s>IDR 90.000</s> 81.000<br>
            — black beads : <s>IDR 100.000</s> 90.000',
            'kode_promo'=>'HAVEAWONDERFULDAY',
            'path_photo'=>'images/umkm/products/berdistraksi-1.jpg'
        ]);
        product::create([
            'name'=>'4PM Choker',
            'umkm_id'=>umkm::where('name', 'Berdistraksi')->first()->id,
            'description'=>"In frame, 4pm Choker<br>
            It is close to the end, we barely hanging on. Things aren't exactly easy but we always try our best. Grab 4pm choker to
            accompany your rush hour but keep it fabulous.<br>
            #IWearWhatIWant
            <br><br>
            Materials : Acrylic Beads<br>
            Color : Brown<br>
            Price (10% off discount) : <s>IDR 50.000</s> 45.000 ",
            'kode_promo'=>'HAVEAWONDERFULDAY',
            'path_photo'=>'images/umkm/products/berdistraksi-2.png'
        ]);
        product::create([
            'name'=>'12pm Choker',
            'umkm_id'=>umkm::where('name', 'Berdistraksi')->first()->id,
            'description'=>"In frame, 12pm Choker<br>
            Amidst the chaotic disorganization, 12pm choker bring you a momentary inspiration. Grab your 12pm choker to
            accompany your day or a gift for your beloved one.<br>
            #IWearWhatIWant
            <br><br>
            Materials : Crystal Dope Beads<br>
            Color : Lavender Purple<br>
            Price (10% off discount) : <s>IDR 50.000</s> 45.000 ",
            'kode_promo'=>'HAVEAWONDERFULDAY',
            'path_photo'=>'images/umkm/products/berdistraksi-3.png'
        ]);
        product::create([
            'name'=>'Silhoutte Bag',
            'umkm_id'=>umkm::where('name', 'Berdistraksi')->first()->id,
            'description'=>"In frame, Silhouette Bag<br>
            Keep it elegant but functional, bring your notebook, pen, lip cream, and ready to go.<br>
            #IWearWhatIWant
            <br><br>
            Materials : Acrylic Beads<br>
            Color : Black<br>
            Price (10% off discount) : <s>IDR 250.000</s> 225.000 ",
            'kode_promo'=>'HAVEAWONDERFULDAY',
            'path_photo'=>'images/umkm/products/berdistraksi-4.png'
        ]);
        product::create([
            'name'=>'Alloy Choker Collection',
            'umkm_id'=>umkm::where('name', 'Berdistraksi')->first()->id,
            'description'=>"In frame, Alloy Choker Collection, suit you for date night, party, and formal dinner.<br>
            An alloy is a combination of metals. This collection consist of two different colour of chokers, clear and silver. It shine and
            fluorescent but also mechanically strong. It is more like us we are beautiful and strong at the same time, no one can bring
            you down.
            <br><br>
            Available in clear and silver<br>
            Materials : Crystal Beads<br>
            Price : IDR 50.000 each<br>
            Bundling (clear and silver) : <s>IDR 100.000</s> 75.000 ",
            'kode_promo'=>'HAVEAWONDERFULDAY',
            'path_photo'=>'images/umkm/products/berdistraksi-5.png'
        ]);
        DB::table('umkms')->insert([
            'name'=>'By Lily',
            'description'=>'By Lily Studio dan By Lily Beauty merupakan sebuah karya dari Priscillia Judithia dibilang kreatif dan kecantikan. By Lily Studio berfokus pada kerajinan tangan kreatif (all handmade stuff), dan By Lily Beauty merupakan line kosmetik dari founder sebagai bentuk kecintaannya terhadap dunia kosmetika. Jika digabungkan nama toko menjadi By Lily Store dengan tagline “made by love” dimana semua produk yang dihasilkan dibuat langsung dari tangan founder dengan sepenuh hati. Melalui perencanaan kurang lebih satu tahun, By Lily Studio dan By Lily Beauty dibuka secara resmi diplatform Instagram maupun e-commerce Shopee pada tanggal 21 Juni 2020
            <br><br>
            Kode diskon yang tersedia : PASARAYAXBLS untuk mendapatkan pesanan dengan harga spesial Pasaraya melalui semua platform By Lily Store (Line, Whatsapp, Shopee).',
            'path_photo'=>'images/umkm/bylily.png',
            'instagram_link'=>'https://www.instagram.com/bylilyofficial/'
        ]);
        product::create([
            'name'=>'[By Lily Beauty] stain me 2in1 lip and cheek cream',
            'umkm_id'=>umkm::where('name', 'By Lily')->first()->id,
            'description'=>"Merupakan produk 2in1 dimana bias dijadikan sebagai cream blush maupun lipcream.
            Dengan warna yang pigmented, maka hanya dibutuhkan sedikit produk untuk
            memakainya.
            <br><br>
            Harga : <s>IDR 40.000</s> 38.500<br>
            Bundle: Rp 60.000",
            'kode_promo'=>'PASARAYAXBLS',
            'path_photo'=>'images/umkm/products/bylily-1.jpg'
        ]);
        product::create([
            'name'=>'[By Lily Studio] Gummy Bear Hook Earrings',
            'umkm_id'=>umkm::where('name', 'By Lily')->first()->id,
            'description'=>"Aksesoris anting kait yang kekinian dan lucu dengan harga yang terjangkau. Tersedia
            dalam berbagai warna pelangi, bias sepasang sama warna maupun sepasang campur
            warna.
            <br><br>
            Harga : <s>IDR 25.000</s> 20.000<br>",
            'kode_promo'=>'PASARAYAXBLS',
            'path_photo'=>'images/umkm/products/bylily-2.jpg'
        ]);
        product::create([
            'name'=>'[By Lily Studio] Gummy Bear Hoop Earrings',
            'umkm_id'=>umkm::where('name', 'By Lily')->first()->id,
            'description'=>"Aksesoris anting tusuk yang lucu dan merupakan model lain dari gummy bear earring
            sebelumnya. Tersedia dalam warna pelangi (namun saat ini hanya tersedia 4 warna saja
            seperti digambar).
            <br><br>
            Harga : <s>IDR 25.000</s> 20.000<br>",
            'kode_promo'=>'PASARAYAXBLS',
            'path_photo'=>'images/umkm/products/bylily-3.jpg'
        ]);
        product::create([
            'name'=>'[By Lily Studio] Polaroid Deco set',
            'umkm_id'=>umkm::where('name', 'By Lily')->first()->id,
            'description'=>"Merupakan set foto polaroid (kertas foto biasa maupun kertas polaroid Fujifilm asli)
            yang didekorasi seunik mungkin sehingga cocok untuk dijadikan hadiah maupun
            dikoleksi pribadi. Yang menjadikan produk ini special adalah karena dekorasi tidak
            akan pernah sama dari satu foto dengan foto lain didalam set sehingga pula tidak akan
            pernah sama dengan set lainnya
            <br><br>
            Photo Paper : <s>IDR 25.000</s> 20.000<br>
            Fujifilm    : <s>IDR 45.000</s> 40.000",
            'kode_promo'=>'PASARAYAXBLS',
            'path_photo'=>'images/umkm/products/bylily-4.jpg'
        ]);
        product::create([
            'name'=>'[By Lily Studio] Beads Keyring',
            'umkm_id'=>umkm::where('name', 'By Lily')->first()->id,
            'description'=>"Merupakan gantungan kecil yang bias digunakan sebagai (khususnya) gantungan
            binder, hiasan gantungan tas maupun gantungan kunci. Dibuat khusus untuk pembeli
            yang menjadikan beads keyring berbeda untuk satu customer ke costumer lainnya.
            Hanya bisa request nuansa warna yang diinginkan, namun creator akan meminta
            feedback pembeli (apakah sudah deal atau belum) dengan maksimal 3x revisi.
            <br><br>
            Harga : <s>IDR 30.000</s> 28.500",
            'kode_promo'=>'PASARAYAXBLS',
            'path_photo'=>'images/umkm/products/bylily-5.jpg'
        ]);
        DB::table('umkms')->insert([
            'name'=>'CLS Cloth',
            'description'=>'C’EST LA SOCIETE /sie-la-sosiete/: Berasal dari Bahasa Perancis yang juga berarti “Ini-lah masyarakat”. Adalah sebuah Clothing Brand yang terinspirasi oleh apa yang sedang terjadi di tengah masyarakat atau individu.
            <br><br>
            KODE PROMO : CLSPASARAYA',
            'path_photo'=>'images/umkm/cls.png',
            'instagram_link'=>'https://www.instagram.com/clscloth.id/'
        ]);
        product::create([
            'name'=>'CLS .002',
            'umkm_id'=>umkm::where('name', 'CLS Cloth')->first()->id,
            'description'=>"“Do not hesitate, because tomorrow will be worse.”
            <br><br>
            From Chapter 1 : “Your peace, my peace, their peace, whose peace?”
            <br><br>
            Price : IDR 100,000 (After discount)<br>
            Discount : 20%
            ",
            'kode_promo'=>'CLSPASARAYA',
            'path_photo'=>'images/umkm/products/cls-1.png'
        ]);
        product::create([
            'name'=>'CLS .005',
            'umkm_id'=>umkm::where('name', 'CLS Cloth')->first()->id,
            'description'=>"“Do not hesitate, because tomorrow will be worse.”
            <br><br>
            From Chapter 2 : “Meet your fear from yesterday.”
            <br><br>
            Price : IDR 100,000 (After discount)<br>
            Discount : 20% <br>
            ",
            'kode_promo'=>'CLSPASARAYA',
            'path_photo'=>'images/umkm/products/cls-2.png'
        ]);
        product::create([
            'name'=>'CLS .006',
            'umkm_id'=>umkm::where('name', 'CLS Cloth')->first()->id,
            'description'=>"“Do not hesitate, because tomorrow will be worse.”
            <br><br>
            From Chapter 2 : “Meet your fear from yesterday.”
            <br><br>
            Price : IDR 100,000 (After discount)<br>
            Discount : 20%
            ",
            'kode_promo'=>'CLSPASARAYA',
            'path_photo'=>'images/umkm/products/cls-3.png'
        ]);
        product::create([
            'name'=>'CLS .007',
            'umkm_id'=>umkm::where('name', 'CLS Cloth')->first()->id,
            'description'=>"“Do not hesitate, because tomorrow will be worse.”
            <br><br>
            From Chapter 2 : “Meet your fear from yesterday.”
            <br><br>
            Price : IDR 100,000 (After discount)<br>
            Discount : 20% 
            ",
            'kode_promo'=>'CLSPASARAYA',
            'path_photo'=>'images/umkm/products/cls-4.png'
        ]);
        product::create([
            'name'=>'CLS .008 Long Sleve',
            'umkm_id'=>umkm::where('name', 'CLS Cloth')->first()->id,
            'description'=>"“Do not hesitate, because tomorrow will be worse.”
            <br><br>
            From Chapter 2 : “Meet your fear from yesterday.”
            <br><br>
            Price : IDR 100,000 (After discount)<br>
            Discount : 20%
            ",
            'kode_promo'=>'CLSPASARAYA',
            'path_photo'=>'images/umkm/products/cls-5.png'
        ]);
        DB::table('umkms')->insert([
            'name'=>'desoyjoy',
            'description'=>'Founded in 2014, Desoyjoys  first line of products was bags. Then in 2017, Ayude as a founder applied her pop culture-infused paintings on watches and received overwhelming response from her follower, resulting in brand new line of products, Toywatch. Time by the time Desoyjoy wants to be more creative and innovative to make something different. With Desoyjoy products hopefully could give a good motivation to enjoy the day :)
            <br><br>
            <a href="https://linktr.ee/desoyjoy">Linktree Desoyjoy</a><br>
            KODE PROMO : DESOYJOYXAJISAKA',
            'path_photo'=>'images/umkm/desoyjoy.png',
            'instagram_link'=>'https://www.instagram.com/desoyjoy/'
        ]);
        product::create([
            'name'=>'Cat "Felis"',
            'umkm_id'=>umkm::where('name', 'desoyjoy')->first()->id,
            'description'=>"Harga Rp 100.000 diskon 5%",
            'kode_promo'=>'DESOYJOYXAJISAKA',
            'path_photo'=>'images/umkm/products/desoyjoy-1.jpg'
        ]);
        product::create([
            'name'=>'Doggy " Little Canis"',
            'umkm_id'=>umkm::where('name', 'desoyjoy')->first()->id,
            'description'=>"harga Rp 100.000 diskon 5%",
            'kode_promo'=>'DESOYJOYXAJISAKA',
            'path_photo'=>'images/umkm/products/desoyjoy-2.jpg'
        ]);
        product::create([
            'name'=>'Bunga "Sunflower Head"',
            'umkm_id'=>umkm::where('name', 'desoyjoy')->first()->id,
            'description'=>"harga Rp 100.000 diskon 5%",
            'kode_promo'=>'DESOYJOYXAJISAKA',
            'path_photo'=>'images/umkm/products/desoyjoy-3.jpg'
        ]);
        product::create([
            'name'=>'Dino "Claire Dino"',
            'umkm_id'=>umkm::where('name', 'desoyjoy')->first()->id,
            'description'=>"harga Rp 100.000 diskon 5%",
            'kode_promo'=>'DESOYJOYXAJISAKA',
            'path_photo'=>'images/umkm/products/desoyjoy-4.jpg'
        ]);
        DB::table('umkms')->insert([
            'name'=>'Djoealin',
            'description'=>'Brand (Online Store) yang menjual produk handmade & heartmade aksesoris unik dengan material dari berbagai macam manik-manik yang cantik seperti nostalgia tren pada era 90an.
            <br><br>
            Find Us on <a href="https://shopee.co.id/drheaky" style="user-select: none;">Shopee</a>
            <br><br>
            Contact Person<br>
            Thea – 085850711261 (WhatsApp Active)<br>
            Email nurrafa.dhea@gmail.com ',
            'path_photo'=>'images/umkm/djoealin.jpg',
            'instagram_link'=>'https://www.instagram.com/djoealin/'
        ]);
        product::create([
            'name'=>'COLORFUL BEADED STRAP',
            'umkm_id'=>umkm::where('name', 'Djoealin')->first()->id,
            'description'=>"Tali manik-manik warna-warni, bisa sebagai tali utk menggantungkan masker atau kacamata dan bisa juga dijadikan kalung ataupun gelang lilit
            <br><br>
            IDR 65.000/pcs
            <br><br>
            Beli Colorful Beaded Strap bonus 1 Flotalla Ring (Variasi Random)",
            'path_photo'=>'images/umkm/products/djoealin-1.jpg'
        ]);
        product::create([
            'name'=>'FLOWER GARDEN RING',
            'umkm_id'=>umkm::where('name', 'Djoealin')->first()->id,
            'description'=>"Cincin berbentuk sekumpulan bunga seperti di taman yang terbuat dari manik pasir dan manik batang dengan perpaduan warna pastel yang lembut dan cantik.
            <br><br>
            IDR 25.000/pcs
            <br><br>
            Bundling IDR 60.000 Beli 3 pcs Flotalla Ring atau Flower Garden Ring (Boleh Mix)",
            'path_photo'=>'images/umkm/products/djoealin-2.jpg'
        ]);
        product::create([
            'name'=>'Flotalla Ring',
            'umkm_id'=>umkm::where('name', 'Djoealin')->first()->id,
            'description'=>"Cincin berbentuk bunga yang terbuat dari manik kristal cantik yang berkilau.
            <br><br>
            IDR 25.000/pcs
            <br><br>
            Bundling IDR 60.000 Beli 3 pcs Flotalla Ring atau Flower Garden Ring (Boleh Mix)",
            'path_photo'=>'images/umkm/products/djoealin-3.jpg'
        ]);
        product::create([
            'name'=>'Flotalla Bracelet',
            'umkm_id'=>umkm::where('name', 'Djoealin')->first()->id,
            'description'=>"Gelang berbentuk bunga yang terbuat dari manik kristal cantik yang berkilau.
            <br><br>
            IDR 55.000/pcs
            <br><br>
            Discount 20% Untuk pembelian minimal 2pcs Purple Holo Bracelet atau Flotalla Bracelet",
            'path_photo'=>'images/umkm/products/djoealin-4.jpg'
        ]);
        product::create([
            'name'=>'Purple Holo Bracelet',
            'umkm_id'=>umkm::where('name', 'Djoealin')->first()->id,
            'description'=>"Gelang holo bernuansa ungu yang terbuat dari manik bentuk hati atau bintang dengan kombinasi mutiara berwarna gradasi ungu-silver.
            <br><br>
            IDR 45.000/pcs
            <br><br>
            Discount 20% Untuk pembelian minimal 2pcs Purple Holo Bracelet atau Flotalla Bracelet",
            'path_photo'=>'images/umkm/products/djoealin-5.jpg'
        ]);
        DB::table('umkms')->insert([
            'name'=>'Gambarnya Dong Kak',
            'description'=>'Gambarnyadongkak merupakan jasa pembuatan vektor desain wajah dengan harga yang terjangkau dan hasil terbaik. Gambarnyadongkak merupakan alternatif pemberian hadiah, ataupun acara-acara penting bagi orang tersayang.
            <br><br>
            Gunakan kode GAMBARNYADONGKAKDISC akan mendapatkan potongan sebesar 5% disetiap pembelian vector jenis apapun',
            'path_photo'=>'images/umkm/gambarnyadongkak.jpg',
            'instagram_link'=>'https://www.instagram.com/gambarnyadongkak/'
        ]);
        product::create([
            'name'=>'BASIC STYLE (untuk 1 wajah atau lebih)',
            'umkm_id'=>umkm::where('name', 'Gambarnya Dong Kak')->first()->id,
            'description'=>"vector wajah simple dengan pemakaian warna dasar tetapi di buat lebih soft. Pengerjaan 1-2 hari setelah payment.<br><br>
            What you get :<br>
            1. softcopy to your email<br>
            2. custom size<br>
            3. High quality desing<br>
            4. Hard copy ( for request only)<br><br>
            SIZE :<br>
            1. 15x20cm (6r)<br>
            2. 20x25 cm (8r)<br>
            3. 30x30 cm (recommended)<br><br>
            Pricelist:<br>
            1. IDR 35K/Face (half body)<br>
            2. IDR 40k/Face (fullbody)<br>
            3. IDR 10K/ Caption(custom)<br>
            4. IDR 50K/frame and print (by request)<br>",
            'kode_promo'=>'GAMBARNYADONGKAKDISC',
            'path_photo'=>'images/umkm/products/GambarnyaDongKak-1.jpg'
        ]);
        product::create([
            'name'=>'FRAMING STYLE (untuk 1 wajah atau lebih)',
            'umkm_id'=>umkm::where('name', 'Gambarnya Dong Kak')->first()->id,
            'description'=>"Vector wajah dengan penggunaan water colour dan tekstur, beserta hiasan sehingga menambah kesan manis dan indah. Sangat cocok untuk hadiah. Pengerjaan 2-3 hari setelah payment<br><br>
            SIZE :<br>
            1. 15x20cm (6r)<br>
            2. 20x25 cm (8r)<br>
            3. 30x30 cm (recommended)<br><br>
            Pricelist:<br>
            1. IDR 40k/Face (halbody only)<br>
            2. IDR 10K/ Caption(custom)<br>
            3. IDR 50K/frame and print (by request)",
            'kode_promo'=>'GAMBARNYADONGKAKDISC',
            'path_photo'=>'images/umkm/products/GambarnyaDongKak-2.jpg'
        ]);
        DB::table('umkms')->insert([
            'name'=>'Gemash Daily',
            'description'=>'Gemash Daily. Co adalah sebuah brand celana pendek unisex gemes gituu yang bisa bikin kamu ngerasa makin unch tiap pake celana gemash. Gemash Daily menghadirkan berbagai motif lucu, unik dan menggemashkan biar kamu nggak bosen pake celana yang itu itu aja selama kuliah online di rumah. Dan bikin kamu makin uwu ngadepin tugas-tugas dari dosen.
            <br><br>
            Gunakan kode GEMASHXAJISAKA dan anda akan mendapatkan potongan sebesar 5% disetiap pembelian di Gemash Daily',
            'path_photo'=>'images/umkm/gemashdaily.png',
            'instagram_link'=>'https://www.instagram.com/gemashdaily.co/'
        ]);
        product::create([
            'name'=>'Hampers Gemash',
            'umkm_id'=>umkm::where('name', 'Gemash Daily')->first()->id,
            'description'=>"Sekarang kamu ga perlu bingung lagi nyari hadiah yang unik, lucu dan bermanfaat buat temen kamu terutama selama banyak beraktivitas di rumah di masa pandemi ini.
            <br><br>
            Karena Hampers ini berisi :
            <br>
            - 3 pcs celana pendek gemash
            <br>
            -dilengkapi dengan pandemic's starter pack(1 handsannitizer dan 1 daily use mask)
            <br><br>
            Oiya kamu bisa custom isi hampersnya lho, misal mau ditambah makanan atau barang lainnya, langsung kasih tau aja ke admin nya. Akan kami berikan pelayanan terbaik!
            <br>
            Kamu mau beli celana pendeknya aja buat nyantai di rumah? Boleh banget!",
            'kode_promo'=>'GEMASHXAJISAKA',
            'path_photo'=>'images/umkm/products/gemashdaily-1.png'
        ]);
        product::create([
            'name'=>'Celana Gemash',
            'umkm_id'=>umkm::where('name', 'Gemash Daily')->first()->id,
            'description'=>"Hallo sobat Gemash! Sekarang kamu ga perlu bingung cari celana pendek yang gemash dan bisa bikin kamu makin unch beraktivitas sehari-hari. Karena @gemashdaily.co punya celana yang gemes-gemes yang bisa bikin kamu makin uwu.
            <br><br>
            HARGA:<br>
            Beli 1 = 30K<br>
            Beli 4 = 110K<br>
            Beli 8 = 200K
            <br><br>
            Yuk diorder celana gemes nya. Biar kamu makin uwu buat kuliah online, skripsian dan berbagai aktivitas lainnya. Kamu juga bisa jadiin celana gemash ini hadiah ke temen kamu loh! Karena Gemash Daily punya Hampers Gemash jugaa.
            <br><br>
            What are you waiting for? Feel the gemashness of Gemash Daily!",
            'kode_promo'=>'GEMASHXAJISAKA',
            'path_photo'=>'images/umkm/products/gemashdaily-2.png'
        ]);
        DB::table('umkms')->insert([
            'name'=>'Kanigara Books',
            'description'=>'Kanigara adalah small business yang bergerak pada bidang office supplies. Kanigara menyediakan buku tulis vintage yang dapat memenuhi kebutuhan produktivitas para konsumen.
            Kanigara menerima pesanan dalam jumlah besar untuk kebutuhan sovenir wedding, ulang tahun, dan wisuda. Anda dapat mengirimkan custom design anda pada email kami. 
            <br><br> 
            Kanigara bekerja sama dengan AJISAKA UGM 2020 dan terdapat berlaku diskon sebesar 20% dengan promotion code: KNGR2020 berlaku hanya pada tanggal 26 Desember 2020-31 Januari 2021. <br>
            Untuk pemesanan dapat melalui <a href="https://msha.ke/kanigara">Link Disini</a>',
            'path_photo'=>'images/umkm/kanigara.jpg',
            'instagram_link'=>'https://www.instagram.com/kanigarabooks'
        ]);
        product::create([
            'name'=>'',
            'umkm_id'=>umkm::where('name', 'Kanigara Books')->first()->id,
            'description'=>"",
            'kode_promo'=>'KNGR2020',
            'path_photo'=>'images/umkm/products/Kanigara-1.png'
        ]);
        product::create([
            'name'=>'',
            'umkm_id'=>umkm::where('name', 'Kanigara Books')->first()->id,
            'description'=>"",
            'kode_promo'=>'KNGR2020',
            'path_photo'=>'images/umkm/products/Kanigara-2.png'
        ]);
        product::create([
            'name'=>'',
            'umkm_id'=>umkm::where('name', 'Kanigara Books')->first()->id,
            'description'=>"",
            'kode_promo'=>'KNGR2020',
            'path_photo'=>'images/umkm/products/Kanigara-3.png'
        ]);
        product::create([
            'name'=>'',
            'umkm_id'=>umkm::where('name', 'Kanigara Books')->first()->id,
            'description'=>"",
            'kode_promo'=>'KNGR2020',
            'path_photo'=>'images/umkm/products/Kanigara-4.png'
        ]);
        product::create([
            'name'=>'',
            'umkm_id'=>umkm::where('name', 'Kanigara Books')->first()->id,
            'description'=>"",
            'kode_promo'=>'KNGR2020',
            'path_photo'=>'images/umkm/products/Kanigara-5.png'
        ]);
        DB::table('umkms')->insert([
            //masih kosong
            'name'=>'Kia.clo',
            'description'=>'@kia.clo adalah brand pakaian yang menjual produk-produk handmade, yaitu tiedye yang dikemas dalam bentuk piyama, kemeja, celana, ataupun outer. Produk ini dapat dibeli melalui shopee @kia.clo atau WhatsApp.',
            'path_photo'=>'images/umkm/kiaclo.png',
            'instagram_link'=>'https://www.instagram.com/kia.clo'
        ]);
        product::create([
            'name'=>'',
            'umkm_id'=>umkm::where('name', 'Kia.clo')->first()->id,
            'description'=>"",
            'path_photo'=>'images/umkm/products/kiaclo-1.jpg'
        ]);
        product::create([
            'name'=>'',
            'umkm_id'=>umkm::where('name', 'Kia.clo')->first()->id,
            'description'=>"",
            'path_photo'=>'images/umkm/products/kiaclo-2.jpg'
        ]);
        product::create([
            'name'=>'',
            'umkm_id'=>umkm::where('name', 'Kia.clo')->first()->id,
            'description'=>"",
            'path_photo'=>'images/umkm/products/kiaclo-3.jpg'
        ]);
        product::create([
            'name'=>'',
            'umkm_id'=>umkm::where('name', 'Kia.clo')->first()->id,
            'description'=>"",
            'path_photo'=>'images/umkm/products/kiaclo-4.jpg'
        ]);
        product::create([
            'name'=>'',
            'umkm_id'=>umkm::where('name', 'Kia.clo')->first()->id,
            'description'=>"",
            'path_photo'=>'images/umkm/products/kiaclo-5.jpg'
        ]);
        DB::table('umkms')->insert([
            'name'=>'Langitsoremu.co',
            'description'=>"Langitsoremu merupakan small creative business yang berdiri sejak tahun 2019. Nama brand ini terinspirasi dari indahnya langit sore yang selalu owner lihat dari jendela kereta commuter line saat sepulang kuliah. Seluruh desain orisinil pada produk Langitsoremu digambar secara digital oleh founder Langitsoremu yaitu @shafarizqitha. Kalian dapat terus mengikuti update-an karya dan produk terbaru kami, dengan cara follow instagram kami @langitsoremu.co!
            <br><br>
            Langitsoremu gives more colors in your life Happy Shopping!
            <br><br>
            Kode Diskon : LANGITSOREMU10",
            'instagram_link'=>'https://www.instagram.com/langitsoremu.co/',
            'path_photo'=>'images/umkm/langitsoremuco.png',
        ]);
        product::create([
            'name'=>'RESIN PHONEGRIP',
            'umkm_id'=>umkm::where('name', 'Langitsoremu.co')->first()->id,
            'description'=>"Phonegrip berbahan dasar Resin (beberapa desain dengan glitter) dengan berbagai desain unik yang gemas siap ditempel di casing smartphone kamu! Berfungsi sebagai hiasan casing sekaligus penyangga smartphone saat kamu menonton video atau selfie! Psst.. ada bonus stickernya loh! Dapatkan sekarang juga dengan potongan harga 10%!
            <br><br>
            Harga Normal : Rp25.000.
            <br>
            Diskon : 10%,",
            'kode_promo'=>'LANGITSOREMU10',
            'path_photo'=>'images/umkm/products/langitsoremuco-1.jpg'
        ]);
        product::create([
            'name'=>'ACRYLIC PHONEGRIP',
            'umkm_id'=>umkm::where('name', 'Langitsoremu.co')->first()->id,
            'description'=>"Phonegrip berbahan dasar Acrylic tebal 4mm dengan berbagai desain unik yang gemas siap ditempel di casing smartphone kamu! Berfungsi sebagai hiasan casing sekaligus penyangga smartphone saat kamu menonton video atau selfie! Psst.. ada bonus stickernya loh! Dapatkan sekarang juga dengan potongan harga 10%!
            <br><br>
            Harga Normal : Rp40.000.
            <br>
            Diskon : 10%",
            'kode_promo'=>'LANGITSOREMU10',
            'path_photo'=>'images/umkm/products/langitsoremuco-2.jpg'
        ]);
        product::create([
            'name'=>'COTTON MASK VOL. 1',
            'umkm_id'=>umkm::where('name', 'Langitsoremu.co')->first()->id,
            'description'=>"Masker non-medis berbahan Cotton (2ply) dengan desain unik yang gemas siap nemenin kamu beraktivitas dengan tetap aman dan nyaman di tengah pandemi! Tersedia dalam 2 desain (Rimba dan Odd Space) dan juga 2 jenis tali karet (Earloop dan Headloop). Psst.. ada bonus stickernya loh! Dapatkan sekarang juga dengan potongan harga 10%!
            <br><br>
            Harga Normal : Rp29.000.
            <br>
            Diskon : 10%",
            'kode_promo'=>'LANGITSOREMU10',
            'path_photo'=>'images/umkm/products/langitsoremuco-3.jpg'
        ]);
        DB::table('umkms')->insert([
            'name'=>'Macrame',
            'description'=>"Awal September 2020 lalu, saya berinisiatif membuat usaha kecil-kecilan berupa kerajinan tangan macrame. Macrame adalah seni menyimpul tali untuk menciptakan motif geometrik yang digunakan sebagai hiasan, dekorasi, atau aksesoris. Usaha ini saya beri nama 'Macrame Njonjae' (baca : nyonyae), karena biasanya nyonya-nyonya suka membuat kerajinan tangan. Usaha macrame saya ini menggunakan sistem pre order karena dapat menyesuaikan permintaan dari customer. Waktu pengerjaan 3-7 hari tergantung tingkat kerumitan barang. Harganya pun variatif sesuai dengan ukuran, material yang digunakan, dan warna tali. Produk best seller dari Macrame Njonjae adalah ukulele hanger. Sementara ini saya baru menjual beberapa produk, ke depannya akan rilis banyak produk baru. Saya menerima request apapun dari teman-teman, saya juga menerima jasa pembuatan dekorasi wedding beserta souvenir. Silakan kunjungi Instagram @macramenjonjae untuk melihat produk yang lainnya. Terima kasih.
            <br><br>
            KODE UNIK VOUCHER = MCRNJO309",
            'instagram_link'=>'https://www.instagram.com/macramenjonjae/',
            'path_photo'=>'images/umkm/macrame.png',
        ]);
        product::create([
            'name'=>'Macrame Ukulele Hanger - Mahogra',
            'umkm_id'=>umkm::where('name', 'Macrame')->first()->id,
            'description'=>"Price : <s>Rp 50.000</s> Rp 47.500
            <br><br>
            Ini dia produk best seller kami, hanger ukulele yang unik. Kami beri nama \"Mahogra\" yang dalam Bahasa Sanskerta artinya \"sangat kuat\". Menggunakan material twisted cotton rope 4mm dan stik kayu jati, berukuran 95 x 15 cm, dapat digunakan untuk ukulele soprano maupun concerto. Daripada ukulelemu tergeletak dan tidak terawat, kamu bisa pakai macrame hanger ini sebagai gantungan ukulele sekaligus membuat ruanganmu tampak lebih estetik!",
            'kode_promo'=>'MCRNJO309',
            'path_photo'=>'images/umkm/products/Macrame-1.jpg'
        ]);
        product::create([
            'name'=>'Macrame Coaster Kombinasi',
            'umkm_id'=>umkm::where('name', 'Macrame')->first()->id,
            'description'=>"Price : Rp <s>25.000</s> Rp 23.750
            <br><br>
            Musim hujan gini enaknya minum kopi atau teh panas sambil Netflix n chill, ya kan? Jangan lupa pakai macrame coaster dari Macrame Njonjae supaya minumanmu tetap hangat. Selain itu coaster ini juga dapat digunakan sebagai properti foto lho. Buat kamu pemilik online shop yuk pakai macrame coaster ini agar foto produkmu makin estetik! Bisa request warna ya! Material twisted cotton rope 4mm, diameter 15 cm include tassel.",
            'kode_promo'=>'MCRNJO309',
            'path_photo'=>'images/umkm/products/Macrame-2.jpg'
        ]);
        product::create([
            'name'=>'Macrame Headband One Color',
            'umkm_id'=>umkm::where('name', 'Macrame')->first()->id,
            'description'=>"Price : <s>Rp 28.000</s> Rp 26.040
            <br><br>
            Aduh, punya bandana tapi nggak estetik banget nih, nggak bisa dipakai buat nongkrong~ Tenang, kami punya macrame headband yang desainnya cantik dan warnanya menggemaskan, cocok buat OOTD. Menggunakan material twisted cotton rope 4mm dan pengait dari karet, sehingga dapat menyesuaikan ukuran kepala. Bisa pilih warna lain selama stok masih ada yaa!",
            'kode_promo'=>'MCRNJO309',
            'path_photo'=>'images/umkm/products/Macrame-3.jpg'
        ]);
        product::create([
            'name'=>'Macrame Rainbow Bubble Gum',
            'umkm_id'=>umkm::where('name', 'Macrame')->first()->id,
            'description'=>"Price : <s>Rp 55.000</s> Rp 52.250
            <br><br>
            Wow gemas sekali warnanya! Cocok digunakan sebagai hiasan dinding kamar anak perempuan, nursery room, buat kado ulang tahun orang tersayang juga lucu banget. Bisa juga digunakan sebagai essential oil diffuser. Materialnya twisted cotton rope 13mm dan 4mm. Ukuran 21 x 25 cm. Yuk dekor ruanganmu dengan macrame rainbow wall hanging ini!",
            'kode_promo'=>'MCRNJO309',
            'path_photo'=>'images/umkm/products/Macrame-4.jpg'
        ]);
        product::create([
            'name'=>'Macrame Wall Hanging - Niagara',
            'umkm_id'=>umkm::where('name', 'Macrame')->first()->id,
            'description'=>"Price : Rp <s>150.000</s> Rp 140.000
            <br><br>
            Dinamakan Niagara karena bentuknya menyerupai tiga air terjun besar. Kombinasi warna yang disusun secara acak tetapi polanya simetris membuat wall hanging ini sangat unik. Menggunakan material twisted cotton rope 4mm, single strand, dan stik kayu jati. Ukuran 78 x 36 cm. Sangat cocok digunakan untuk menghias ruangan yang bertema earth tone. Aesthetic banget kan?",
            'kode_promo'=>'MCRNJO309',
            'path_photo'=>'images/umkm/products/Macrame-5.jpg'
        ]);
        DB::table('umkms')->insert([
            //description kosong
            'name'=>'Made By Tempa',
            'description'=>'MADE BY TEMPA is a creative project of artist TEMPA. With its colorful, graphic-led approach, MADE BY TEMPA takes its cues from pop culture, product design, craft, and the spirit of visual art itself.<br>
            The brand is MADE FOR EVERYBODY who got the spirit of art as a whole.
            <br><br>
            Play It Heavy And Loud.
            <br><br>
            MADE BY TEMPA
            <br><br>
            Discount 5% selama event berlangsung dengan Kode: MBTXPASARAYA',
            'instagram_link'=>'https://www.instagram.com/madebytempa/',
            'path_photo'=>'images/umkm/madebytempa.jpg',
        ]);
        product::create([
            'name'=>'DESERT	SOCK',
            'umkm_id'=>umkm::where('name', 'Made By Tempa')->first()->id,
            'description'=>"Socks Rajut<br>
            All	Size<br>
            Discount	5% selama event	berlangsung <br>
            Kode : MBTXPASARAYA<br>
            HARGA	NORMAL :Rp.	75.000<br>
            DISCOUNT	:Rp.	71.250",
            'kode_promo'=>'MBTXPASARAYA',
            'path_photo'=>'images/umkm/products/MadebyTempa-1.jpg'
        ]);
        product::create([
            'name'=>'KISS	THE	LIGHT',
            'umkm_id'=>umkm::where('name', 'Made By Tempa')->first()->id,
            'description'=>"Socks Rajut<br>
            All	Size<br>
            Discount	5% selama event	berlangsung<br>
            HARGA	NORMAL :Rp.	75.000<br>
            DISCOUNT	:Rp.	71.250",
            'kode_promo'=>'MBTXPASARAYA',
            'path_photo'=>'images/umkm/products/MadebyTempa-2.jpg'
        ]);
        product::create([
            'name'=>'CAKRA TIE DYE T.SHIRT',
            'umkm_id'=>umkm::where('name', 'Made By Tempa')->first()->id,
            'description'=>"T.SHIRT<br>
            S	:	P	67	cm	x	L	49	cm
            <br>
            M	:	P	73	cm	x	L	53	cm
            <br>
            L	:	P	77	cm	x	L	58	cm
            <br>
            XL	:	P	79	cm	x	L	62	cm
            <br>
            XXL	:	P	79	cm	x	L	64	cm
            <br>
            Discount	5% selama event	berlangsung <br>
            HARGA	NORMAL :Rp.	270.000<br>
            DISCOUNT	:Rp.	256.500",
            'kode_promo'=>'MBTXPASARAYA',
            'path_photo'=>'images/umkm/products/MadebyTempa-3.jpg'
        ]);
        product::create([
            'name'=>'SUNNTEMPLE	TIE	DYE	T.SHIRT',
            'umkm_id'=>umkm::where('name', 'Made By Tempa')->first()->id,
            'description'=>"T.SHIRT<br>
            S	:	P	67	cm	x	L	49	cm
            <br>
            M	:	P	73	cm	x	L	53	cm
            <br>
            L	:	P	77	cm	x	L	58	cm
            <br>
            XL	:	P	79	cm	x	L	62	cm
            <br>
            XXL	:	P	79	cm	x	L	64	cm
            <br>
            Discount	5% selama event	berlangsung <br>
            HARGA	NORMAL :Rp.	270.000<br>
            DISCOUNT	:Rp.	256.500",
            'kode_promo'=>'MBTXPASARAYA',
            'path_photo'=>'images/umkm/products/MadebyTempa-4.jpg'
        ]);
        product::create([
            'name'=>'DYNASTY BUCKET	HAT',
            'umkm_id'=>umkm::where('name', 'Made By Tempa')->first()->id,
            'description'=>"Bucket Hat<br>
            All Size
            <br>
            Discount	5% selama event	berlangsung <br>
            HARGA	NORMAL :Rp.	200.000<br>
            DISCOUNT	:Rp.	190.000",
            'kode_promo'=>'MBTXPASARAYA',
            'path_photo'=>'images/umkm/products/MadebyTempa-5.jpg'
        ]);
        DB::table('umkms')->insert([
            'name'=>'Magna',
            'description'=>"Magna Body & Co is a company with a vision to utilize the natural ingredients that the earth has. We believe that the earth holds a lot of wealth that must be rewarded with kindness. For this reason, Magna and Co exists as a bridge for the utilization of natural products which are of course organic, vegan and cruelty free.
            <br><br>
            Potongan Produk yang diberikan : 55k/pcs 100k/get 2 pcs. Harga asli 65K
            <br>
            Kode #MagnAjisaka2020",
            'instagram_link'=>'https://www.instagram.com/magnabody.co',
            'path_photo'=>'images/umkm/magna.jpg',
        ]);
        product::create([
            'name'=>'Wild Strawberry Hair Mask',
            'umkm_id'=>umkm::where('name', 'Magna')->first()->id,
            'description'=>"Magna Hair Mask is here to solve your hair problems, with different variants. Magna Hair Mask works by nourishing the hair shaft to the ends to repair split ends and soften hair. Suitable for those of you who have problems with dry, split ends and tend to fall out. If you are a person who frequently dyes, straightens, or perms your hair, Magna Hair Mask can be the best treatment because Magna Hair Mask acts as a deep treatment to repair damaged hair that you experience.",
            'kode_promo'=>'#MagnAjisaka2020',
            'path_photo'=>'images/umkm/products/Magna-1.jpeg'
        ]);
        product::create([
            'name'=>'Madagascan Vanilla Hair Mask',
            'umkm_id'=>umkm::where('name', 'Magna')->first()->id,
            'description'=>"Magna Hair Mask is here to solve your hair problems, with different variants. Magna Hair Mask works by nourishing the hair shaft to the ends to repair split ends and soften hair. Suitable for those of you who have problems with dry, split ends and tend to fall out. If you are a person who frequently dyes, straightens, or perms your hair, Magna Hair Mask can be the best treatment because Magna Hair Mask acts as a deep treatment to repair damaged hair that you experience.",
            'kode_promo'=>'#MagnAjisaka2020',
            'path_photo'=>'images/umkm/products/Magna-2.jpeg'
        ]);
        product::create([
            'name'=>'Belgian Chocolate Hair Mask',
            'umkm_id'=>umkm::where('name', 'Magna')->first()->id,
            'description'=>"Magna Hair Mask is here to solve your hair problems, with different variants. Magna Hair Mask works by nourishing the hair shaft to the ends to repair split ends and soften hair. Suitable for those of you who have problems with dry, split ends and tend to fall out. If you are a person who frequently dyes, straightens, or perms your hair, Magna Hair Mask can be the best treatment because Magna Hair Mask acts as a deep treatment to repair damaged hair that you experience.",
            'kode_promo'=>'#MagnAjisaka2020',
            'path_photo'=>'images/umkm/products/Magna-4.jpeg'
        ]);
        product::create([
            'name'=>'Jicama Body Scrub',
            'umkm_id'=>umkm::where('name', 'Magna')->first()->id,
            'description'=>"With original yam, fruit extract helps exfoliate the skin.<br>
            1. Brighten the skin<br>
            2. Remove dead skin cells<br>
            3. Moisturizes and nourishes the skin with Vitamin A",
            'kode_promo'=>'#MagnAjisaka2020',
            'path_photo'=>'images/umkm/products/Magna-5.jpeg'
        ]);
        product::create([
            'name'=>'Brunnies Body Scrub',
            'umkm_id'=>umkm::where('name', 'Magna')->first()->id,
            'description'=>"in the form of a cream lotion containing scrub granules, it prevents dead skin cells from maintaining skin smoothness, moisture, and health.<br>
            - helps skin softness and moisture.<br>
            - Chocolate extract can help skin glow and tighter.<br>",
            'kode_promo'=>'#MagnAjisaka2020',
            'path_photo'=>'images/umkm/products/Magna-6.jpeg'
        ]);
        DB::table('umkms')->insert([
            'name'=>'Mantra Puspa',
            'description'=>"Halo! Mantrapuspa mengumpulkan energi dari bunga asli yang sudah dikeringkan, lalu mengolahnya menjadi kerajinan: buku catatan, aksesoris, dan hiasan meja yang manis! Boleh untuk menyenangkan diri sendiri maupun diberikan sebagai hadiah kepada yang terkasih. Semuanya dibuat dengan tangan, mengalirkan ketulusan yang bersumber dari dalam hati.
            <br><br>
            Tengok kerajinan bunga kering Mantrapuspa di galeri Instagram: @mantrapuspa.id. Alamat surel kami: mantrapuspa@gmail.com. May the flowers bloom in your heart!
            <br><br>
            Diskon Khusus Pasaraya Ajisaka<br>
            - Diskon 5% untuk setiap pembelian jewelry<br>
            -Jewelry Bundling Package (varian bebas memilih di Instagram @mantrapuspa.id!)<br>
            - Puspita Package: Get 10% discount for 1 necklace + 1 bracelet<br>
              IDR <s>125.000</s> 112.500    |     Kode Voucher: PUSPITA<br>
            - Kesuma Package: Get 10% discount for 1 pair of earrings + 1 bracelet<br>
              IDR <s>125.000</s> 112.500    |     Kode Voucher: KESUMA<br>",
            'instagram_link'=>'https://www.instagram.com/mantrapuspa.id/',
            'path_photo'=>'images/umkm/mantrapuspa.png',
        ]);
        product::create([
            'name'=>'Handmade Journal',
            'umkm_id'=>umkm::where('name', 'Mantra Puspa')->first()->id,
            'description'=>"Buku catatan buatan tangan dengan ukuran ukuran B6 (14cm x 18cm) dengan 40 lembar kertas bookpaper di dalamnya, dijahit dengan hati-hati 💫 yang bikin istimewa, energi bunga asli tersimpan pada sampulnya. Tenang, sampul buku catatan ini dilapisi plastik tebal transparan untuk mempertahankan keutuhan bunga di dalamnya. Tersedia dalam 2 warna: baby pink dan baby blue, dengan ragam desain sampul edisi terbatas!
            <br><br>
            Tiap pembelian journal mendapat bonus 3 pcs pressed flower for journaling (random flower)",
            'kode_promo'=>'JURNALMANTRA',
            'path_photo'=>'images/umkm/products/mantra puspa-1.png'
        ]);
        product::create([
            'name'=>'Bougainvillea Earrings',
            'umkm_id'=>umkm::where('name', 'Mantra Puspa')->first()->id,
            'description'=>"Price <s>IDR 75.000</s> IDR 71.200/pair<br><br>
            Mahkota bunga bugenvil asli yang sudah dikeringkan, terabadikan dalam sepasang anting untuk menunjang tampilan eleganmu. Warnanya yang cerah lembut akan menjadikan harimu berbunga. Pembelian dilengkapi pouch silver. Selain berfungsi untuk mewadahi anting-anting agar terlindungi dari goresan, kita juga berkontribusi mengurangi penggunaan plastik sekali pakai lhoo kawan ;)",
            'kode_promo'=>'BUGENVIL',
            'path_photo'=>'images/umkm/products/mantra puspa-2.png'
        ]);
        product::create([
            'name'=>'Daisy Necklace',
            'umkm_id'=>umkm::where('name', 'Mantra Puspa')->first()->id,
            'description'=>"Price IDR <s>75.000</s> IDR 71.200/pcs<br><br>
            Bunga daisy asli yang sudah dikeringkan diabadikan dalam sebuah liontin untuk membuat hari-harimu jadi berbunga, dibuat dengan kasih oleh Mantrapuspa. Dihubungkan oleh rantai silver manis sepanjang 20 cm + 5 cm yang dapat diatur, memungkinkan kalungmu tetap on point bagi yang berhijab maupun tidak. Pembelian dilengkapi pouch silver.",
            'kode_promo'=>'KALUNGMANTRA',
            'path_photo'=>'images/umkm/products/mantra puspa-3.png'
        ]);
        product::create([
            'name'=>'Flower Bracelet',
            'umkm_id'=>umkm::where('name', 'Mantra Puspa')->first()->id,
            'description'=>"Price IDR <s>50.000</s> IDR 47.500/pcs<br><br>
            Bunga-bunga liar asli—dipetik di tengah perjalanan, entah terencana maupun tidak—diabadikan dalam sebuah mata gelang. Izinkan ia melingkari pergelangan tanganmu, dan menghangatkan hari-harimu! Talinya berupa rantai silver sepanjang 11 cm + 5 cm (dapat diatur). Dilengkapi pouch silver untuk menyimpan kekuatan mantra si bunga.",
            'kode_promo'=>'GELANGMANTRA',
            'path_photo'=>'images/umkm/products/mantra puspa-4.png'
        ]);
        product::create([
            'name'=>'Mini Bouquet in the Tube',
            'umkm_id'=>umkm::where('name', 'Mantra Puspa')->first()->id,
            'description'=>"Get 10% discount for each Mini Bouquet in the Tube | <s>IDR 40.000</s> IDR 36.000 <br><br>
            Karena bunga mampu berbahasa, kehadirannya sering menjadi tanda apresiasi maupun kasih sayang. Hadiahkan rangkaian baby breath kering dalam tabung untuk mereka yang terkasih, kelak ungkapan kasihmu terkenang selalu. Tabung mika setinggi 20 cm siap untuk melindungi buket bungamu.",
            'kode_promo'=>'MINIBOUQUET',
            'path_photo'=>'images/umkm/products/mantra puspa-5.png'
        ]);
        DB::table('umkms')->insert([
            //kosong
            'name'=>'Merekat Di Jiwa',
            'description'=>'Merekat di Jiwa adalah fashion brand yang memiliki tujuan untuk mengeksplorasi tekstil Indonesia dan mengempower pengrajin lokal yang ada di Indonesia dengan konsep play-fair dan sustainable bisnis! Sebagai small brand kami ingin ikut serta dalam event Pasaraya yang akan diselenggarakan oleh Ajisaka UGM! Berikut kami sertakan informasi terkait brand dan product kamiii!',
            'instagram_link'=>'https://www.instagram.com/merekat_di_jiwa',
            'path_photo'=>'images/umkm/merekatdijiwa.jpg',
        ]);
        product::create([
            'name'=>'DIZANO',
            'umkm_id'=>umkm::where('name', 'Merekat Di Jiwa')->first()->id,
            'description'=>"Handpainted white dots and made from super comfortable rayon, is the best way to express our best seller DIZANO shirt!<br><br>
            Normal Price: 189.000<br>
            Promo Price: 175.000",
            'path_photo'=>'images/umkm/products/MerekatDiJiwa-1.jpg'
        ]);
        product::create([
            'name'=>'NATUNA from #LirikLurikCollection',
            'umkm_id'=>umkm::where('name', 'Merekat Di Jiwa')->first()->id,
            'description'=>"Specially made for this tropical weather like in Indonesia! Made from linen combined with lurik from Yogyakarta<br><br>
            Normal Price: 149.000<br>
            Promo Price: 140.000<br>
            Bundling with kelana pants: 310.000",
            'path_photo'=>'images/umkm/products/MerekatDiJiwa-2.jpeg'
        ]);
        product::create([
            'name'=>'Kelana Pants from #LirikLurikCollection',
            'umkm_id'=>umkm::where('name', 'Merekat Di Jiwa')->first()->id,
            'description'=>"Made from linen combined with lurik from Yogyakarta Breathable A line pants that is suitable for any occasions<br><br>
            Normal Price: 149.000<br>
            Promo Price: 140.000<br>
            Bundling with natuna tank: 310.000",
            'path_photo'=>'images/umkm/products/MerekatDiJiwa-3.jpeg'
        ]);
        product::create([
            'name'=>'ARKANA from our #LirikLurikCollection',
            'umkm_id'=>umkm::where('name', 'Merekat Di Jiwa')->first()->id,
            'description'=>"It is made from cotton linen and signature Yogyakarta’s lurik!<br><br>
            Normal Price: 169.000<br>
            Promo Price: 149.000",
            'path_photo'=>'images/umkm/products/MerekatDiJiwa-4.jpeg'
        ]);
        product::create([
            'name'=>'KIYA',
            'umkm_id'=>umkm::where('name', 'Merekat Di Jiwa')->first()->id,
            'description'=>"KIYA Shirt is made from cotton linen fabric combined with white stripes Yogyakarta Lurik, it can be wear as a shirt or outer!<br><br>
            Normal Price: 189.000<br>
            Promo Price: 169.000",
            'path_photo'=>'images/umkm/products/MerekatDiJiwa-5.jpeg'
        ]);
        DB::table('umkms')->insert([
            'name'=>'Mon Cherri',
            'description'=>"Another local brand (online based shop) who creates handmade accessories with love. Prioritizing the quality of materials, affordability of prices, so that all women can appear more colorful nor elegant. #WomenSupportingWomen
            Producing in Malang, since May 2020.
            <br><br>
            DISCOUNT 5% for every total of purchase + big chance for free gift<br>
            DISCOUNTCODE #CherishAjisaka<br>
            (~END OF DECEMBER)",
            'instagram_link'=>'https://www.instagram.com/MONCHERRI.ID/',
            'path_photo'=>'images/umkm/moncherri.png',
        ]);
        product::create([
            'name'=>'Silk Scrunchies (start from IDR 10K)',
            'umkm_id'=>umkm::where('name', 'Mon Cherri')->first()->id,
            'description'=>"Shop the trend! The scrunchies: Made from 100%pure silk, with various pastels and vibrant colors. Very gentle to your hair (will not damage your hair). Shop with code #CherishAjisaka and enjoy 5% discount for your total purchases. (and surprise free gift from us)",
            'kode_promo'=>'#CherishAjisaka',
            'path_photo'=>'images/umkm/products/moncherri.id-1.png'
        ]);
        product::create([
            'name'=>'Silk Cotton Brocade Masks (Start from IDR 8K)',
            'umkm_id'=>umkm::where('name', 'Mon Cherri')->first()->id,
            'description'=>"Keep your mask chic! The masks: Made with 3ply fabric, with various fabric and design. Air-blow tested fashionably checked. Shop with code #CherishAjisaka and enjoy 5% discount for your total purchases. (and surprise free gift from us) ",
            'kode_promo'=>'#CherishAjisaka',
            'path_photo'=>'images/umkm/products/moncherri.id-2.png'
        ]);
        product::create([
            'name'=>'Silk Bandana (Start from IDR 15K)',
            'umkm_id'=>umkm::where('name', 'Mon Cherri')->first()->id,
            'description'=>"Not so morning ladies? We got your back. Wear bandana for your not- so morning hair, and feel fresh in instan timet!  Very gentle to your hair (will not damage your hair). Shop with code #CherishAjisaka and enjoy 5% discount for your total purchases. (and surprise free gift from us) ",
            'kode_promo'=>'#CherishAjisaka',
            'path_photo'=>'images/umkm/products/moncherri.id-3.png'
        ]);
        product::create([
            'name'=>'Silk Scrunchies (start from IDR 10K) ',
            'umkm_id'=>umkm::where('name', 'Mon Cherri')->first()->id,
            'description'=>"Shop the trend! The scrunchies: Made from 100%pure silk, with various pastels and vibrant colors. Very gentle to your hair (will not damage your hair). Shop with code #CherishAjisaka and enjoy 5% discount for your total purchases. (and surprise free gift from us) ",
            'kode_promo'=>'#CherishAjisaka',
            'path_photo'=>'images/umkm/products/moncherri.id-4.png'
        ]);
        product::create([
            'name'=>'Beads Strap Masker and Beads Bracelets 
            <br>(start from IDR 12K)',
            'umkm_id'=>umkm::where('name', 'Mon Cherri')->first()->id,
            'description'=>"Shop the trend! The straps for your masks: Made from colourful beads, with custom-able pastels and vibrant colors. Shop with code #CherishAjisaka and enjoy 5% discount for your total purchases. (and surprise free gift from us)",
            'kode_promo'=>'#CherishAjisaka',
            'path_photo'=>'images/umkm/products/moncherri.id-5.png'
        ]);
        DB::table('umkms')->insert([
            //description sama instagram
            'name'=>'Peculiar Moods',
            'description'=>"Peculiarmoods is an artsy-craftsy business managed by two 'nona' based in Yogyakarta. Established in April 16th, 2019, Peculiarmoods is such a new babyborn excited for another journey ahead. The trigger came when we recognized the lack of artsy local pride among our society. We initiated to provide artsy-cutesy local products with affordable price which later being accepted and got such unexpected responses.
            <br><br>
            Kode Unik : PECULIAR1",
            'instagram_link'=>'https://www.instagram.com/peculiarmoods',
            'path_photo'=>'images/umkm/peculiarmoods.jpg',
        ]);
        product::create([
            'name'=>'Enamel Pin',
            'umkm_id'=>umkm::where('name', 'Peculiar Moods')->first()->id,
            'description'=>"Harga: 15-20k<br>
            Diskon: 10-20%<br>
            Berlaku: Selama Acara",
            'kode_promo'=>'PECULIAR1',
            'path_photo'=>'images/umkm/products/Peculiarmoods-1.jpg'
        ]);
        product::create([
            'name'=>'Mini Scarf',
            'umkm_id'=>umkm::where('name', 'Peculiar Moods')->first()->id,
            'description'=>"Mini scarf from the self-awareness series<br>
            50 x 50 cm<br>
            Well manufactured with fine material (satin silk)<br>
            Harga: 75k<br>
            Diskon: 40%<br>
            Berlaku: Selama Acara",
            'kode_promo'=>'PECULIAR1',
            'path_photo'=>'images/umkm/products/Peculiarmoods-2.jpg'
        ]);
        product::create([
            'name'=>'Sticker Pack',
            'umkm_id'=>umkm::where('name', 'Peculiar Moods')->first()->id,
            'description'=>"Sticker packfrom the self-awareness series<br>
            Contains 8 cutting stickers<br>
            Harga: 15k<br>
            Diskon: 20%<br>
            Berlaku: Selama Acara",
            'kode_promo'=>'PECULIAR1',
            'path_photo'=>'images/umkm/products/Peculiarmoods-3.jpg'
        ]);
        product::create([
            'name'=>'Artsy Sock',
            'umkm_id'=>umkm::where('name', 'Peculiar Moods')->first()->id,
            'description'=>"Unisex and all size<br>
            Material: Cotton<br>
            Harga: 45k<br>
            Diskon: 20%<br>
            Berlaku: Selama Acara",
            'kode_promo'=>'PECULIAR1',
            'path_photo'=>'images/umkm/products/Peculiarmoods-4.jpg'
        ]);
        product::create([
            'name'=>'\'See-through\'',
            'umkm_id'=>umkm::where('name', 'Peculiar Moods')->first()->id,
            'description'=>"Transparent Socks<br>
            Harga: 30k<br>
            Diskon: 17%<br>
            Berlaku: Selama Acara",
            'kode_promo'=>'PECULIAR1',
            'path_photo'=>'images/umkm/products/Peculiarmoods-5.jpg'
        ]);
        DB::table('umkms')->insert([
            'name'=>'Potlot Studio',
            'description'=>'Nama Potlot berasal dari kata “Potensi Lokal To”. Melalui nama ini, kami mencobauntuk
            mengangkat kreativitas warga lokal dalam bidang Seni Rupa,
            dengan media yang sering dijumpai seperti tembok, kaos, canvas, Kertas gambar,
            bahkan tong sampah.
            Pada awalnya potlot terbentuk untuk mengembangkan kreativitas masyarakat sekitar
            dalam bidang Seni Rupa. Tak sedikit masyarakat sekitar yang senang belajar
            menggambar maupun melukis bersama Potlot. Pada waktu itu media yang digunakan
            untuk menggambar adalah apapun yang ada di sekitar seperti tembok, tong sampah,
            canvas, kaos, dll.
            Seiring berjalannya waktu, kini Potlot fokus untuk bergerak dibidang melukis, Drawing,
            Mural, Custom Painting, Sign Painting, Custom gift Painting, dll.
            <br><br>
            Kode Promo : LocalMade15',
            'instagram_link'=>'https://www.instagram.com/potlotstudio/',
            'path_photo'=>'images/umkm/potlot.jpg',
        ]);
        product::create([
            'name'=>'Bracelet Genuine Leather',
            'umkm_id'=>umkm::where('name', 'Potlot Studio')->first()->id,
            'description'=>"Gelang Kulit/Bracelet leather terbuat dari
            kulit asli jenis Crazy Horse (CH) yang
            memiliki texture Vintage.<br><br>
            Dimensi ukuran gelang ini memiliki ukuran
            lebar 1cm dengan ukuran panjang dari
            ujung ke ujung 20,5cm<br><br>
            Gelang ini bisa digunakan oleh
            perempuan maupun laki-laki (unisex)",
            'kode_promo'=>'LocalMade15',
            'path_photo'=>'images/umkm/products/Potlot Studio-1.jpg'
        ]);
        product::create([
            'name'=>'Leather Keychain',
            'umkm_id'=>umkm::where('name', 'Potlot Studio')->first()->id,
            'description'=>"Gantungan kunci kulit asli menggunakan
            type kulit Fullgrain berwarna Tan/Light
            brown, dengan hook ring kancing
            pengunci semuanya selaras berwarna
            Emas Bakar yang memberikan kesan
            Vintage, sangat cocok di padukan dengan
            jenis kulit Fullgrainn ini, Kulit yang
            mempunyai ciri tidak menghilangkan
            karakteristik kulitnya.<br><br>
            L: 2,2cm<br>
            P: 11cm dari ujung cantelan ke ujung kulit<br>
            Tebal lembar kulit: 3mm<br><br>
            Gelang ini bisa digunakan oleh
            perempuan maupun laki-laki (unisex)",
            'kode_promo'=>'LocalMade15',
            'path_photo'=>'images/umkm/products/Potlot Studio-2.jpg'
        ]);
        product::create([
            'name'=>'Maplewood Necklace',
            'umkm_id'=>umkm::where('name', 'Potlot Studio')->first()->id,
            'description'=>"Kalung Kayu Maple skateboard terbuat
            dari daur ulang papan Skateboard
            (Unisex) dengan finishing coating clear
            sehingga sedikit terlihat glossy
            Warna kalung sendiri mengambil dari
            warna bawaan papan skateboard utuh
            yang berarti bukan di warnai oleh penjual
            sendiri.
            Tali kalung bisa di perkecil dan di perbesar
            lingkarnya sehingga memudahkan dalam
            penggunaan kalung tersebut<br><br>
            Ukuran dari kepala kalung sendiri kurang
            lebih 2,5cm X 4cm",
            'kode_promo'=>'LocalMade15',
            'path_photo'=>'images/umkm/products/Potlot Studio-3.jpg'
        ]);
        product::create([
            'name'=>'Leather Strap Mask',
            'umkm_id'=>umkm::where('name', 'Potlot Studio')->first()->id,
            'description'=>"Tali/gantungan masker ini menggunakan jenis kulit Crazy
            Horse yang memberikan kesan Vintage Classic, serta benang
            putih yang melilit berwarna netral sehingga menjadi eye
            catching dan mudah di mix and match dengan masker
            bagaimanapun.
            Kulit jenis Crazy Horse ini semakin sering dipakai, secara
            alami akan menghasilkan tampilan vintage-nya, karena
            terkena goresan dan gesekan.<br><br>
            Panjang Tali Masker/Gantungan Masker ini 55cm dari ujung
            pengait ke ujung pengait lagi.
            Terdapat Conector yang bisa digunakan ketika masker tidak
            dipakai, agar masker selalu tertutup.
            Tali Masker/Gantungan Masker ini bisa digunakan untuk Pria
            dan Wanita juga Wanita yang berhijab.<br><br>
            Tali Masker/Gantungan Masker ini bisa digunakan oleh
            perempuan maupun laki-laki (unisex)",
            'kode_promo'=>'LocalMade15',
            'path_photo'=>'images/umkm/products/Potlot Studio-4.jpg'
        ]);
        DB::table('umkms')->insert([
            //description foto
            'name'=>'Relaxine.',
            'description'=>'Beauty is special because it\'s so personal and can be extremely grounding during times of uncertainty. In Relaxine, we bridge fun and personal narratives to own your daily beauty experience that are fun, easy, imperfect, personal and relaxing.<br>
            Small things, big purpose. The little things that is often overlooked.<br>
            While beauty trends, tools and products evolved and contantly change, some words of wisdom have stood to the test of time.<br>
            Relaxine. was started after going through a year of research. We\'re inspired by colours, little things that made us feel the joy, the hectic busy lifestyle most of us have, and realizing the fact that people love beautiful things. Using a handmade press-on nails is not a culture yet here in Indonesia, but people love cute nails!<br>
            We had a vision of making a new community-driven beauty space, where we can help to remind people to take a breather amidst the busy and chaotic time we live in. Doing our nails was quite the answer in our heads.<br>
            Visit us on : <a href = "https://relaxine-inc.com/">Relaxine.</a>
            <br><br>
            Kode Promo : RELAXINEDIAJISAKA',
            'instagram_link'=>'https://www.instagram.com/__relaxine/',
            'path_photo'=>'images/umkm/relaxine.jpg',
        ]);
        product::create([
            'name'=>'La Casa',
            'umkm_id'=>umkm::where('name', 'Relaxine.')->first()->id,
            'description'=>"Short oval nail shape, with multi-color o tips to give a \"my nails but better\" look and instant comfort<br><br>
            Our Press On Nails Nails cost 129K/set that includes 1 liquid nail glue, 1 jelly tabs glue, 1 cuticle pusher, 1 nail buffer, 1 instruction card, and 1 alcohol swabs. BUT  for this event, we would like to give a 10K discount for all the attached 5 products. Thus, our price for this event would be 119K.",
            'kode_promo'=>'RELAXINEDIAJISAKA',
            'path_photo'=>'images/umkm/products/Relaxine-1.jpg'
        ]);
        product::create([
            'name'=>'Milky Dye',
            'umkm_id'=>umkm::where('name', 'Relaxine.')->first()->id,
            'description'=>"Coffin nail shape with a pastel tie dye art for a casual and calming look that you won't get enough on staring at.<br><br>
            Our Press On Nails Nails cost 129K/set that includes 1 liquid nail glue, 1 jelly tabs glue, 1 cuticle pusher, 1 nail buffer, 1 instruction card, and 1 alcohol swabs. BUT  for this event, we would like to give a 10K discount for all the attached 5 products. Thus, our price for this event would be 119K ",
            'kode_promo'=>'RELAXINEDIAJISAKA',
            'path_photo'=>'images/umkm/products/Relaxine-2.jpg'
        ]);
        product::create([
            'name'=>'The Mood',
            'umkm_id'=>umkm::where('name', 'Relaxine.')->first()->id,
            'description'=>"Coffin nail shape with cow prints that will give a pop out on your daily looks!<br><br>
            Our Press On Nails Nails cost 129K/set that includes 1 liquid nail glue, 1 jelly tabs glue, 1 cuticle pusher, 1 nail buffer, 1 instruction card, and 1 alcohol swabs. BUT  for this event, we would like to give a 10K discount for all the attached 5 products. Thus, our price for this event would be 119K ",
            'kode_promo'=>'RELAXINEDIAJISAKA',
            'path_photo'=>'images/umkm/products/Relaxine-3.jpg'
        ]);
        product::create([
            'name'=>'Aladdine',
            'umkm_id'=>umkm::where('name', 'Relaxine.')->first()->id,
            'description'=>"Pre-fall nails will never go outdated with lilac and a colorful pastel tips.<br>
            Get the ultimate pastel perfection with the touch of Aladdine.<br><br>
            Our Press On Nails Nails cost 129K/set that includes 1 liquid nail glue, 1 jelly tabs glue, 1 cuticle pusher, 1 nail buffer, 1 instruction card, and 1 alcohol swabs. BUT  for this event, we would like to give a 10K discount for all the attached 5 products. Thus, our price for this event would be 119K ",
            'kode_promo'=>'RELAXINEDIAJISAKA',
            'path_photo'=>'images/umkm/products/Relaxine-4.jpg'
        ]);
        product::create([
            'name'=>'The Balance-Thing',
            'umkm_id'=>umkm::where('name', 'Relaxine.')->first()->id,
            'description'=>"Combination of curated patterns that act as a mindful expression and a reminder to always be in a balance state whenever we look down.<br><br>
            Our Press On Nails Nails cost 129K/set that includes 1 liquid nail glue, 1 jelly tabs glue, 1 cuticle pusher, 1 nail buffer, 1 instruction card, and 1 alcohol swabs. BUT  for this event, we would like to give a 10K discount for all the attached 5 products. Thus, our price for this event would be 119K ",
            'kode_promo'=>'RELAXINEDIAJISAKA',
            'path_photo'=>'images/umkm/products/Relaxine-5.jpg'
        ]);
        DB::table('umkms')->insert([
            'name'=>'Sun Sand Sea',
            'description'=>'Sun Sand Sea adalah Small Business atau UMKM yang bergerak dalam bidang fashion/semi-distro. UMKM Sun Sand Sea berbasis bisnis online yang menjual dan memamerkan produknya di Instagram @sunsandsea.store dan juga Shopee sunsandsea.store. Saat ini Sun Sand Sea banyak menjual dan memproduksi produk fashion dengan teknik tie dye.
            <br><br>
            Kode Promo : “BOLEHKURANG?”',
            'instagram_link'=>'https://www.instagram.com/sunsandsea.store/',
            'path_photo'=>'images/umkm/sunsandsea.png',
        ]);
        product::create([
            'name'=>'Sun Sand Sea Tie Dye T-Shirt',
            'umkm_id'=>umkm::where('name', 'Sun Sand Sea')->first()->id,
            'description'=>"T-shirt yang diproduksi dengan teknik tie dye serta berbahan Cotton Combed 24s yang relatif tebal tetapi sangat nyaman digunakan. Tie Dye T-shirt Sun Sand Sea dilengkapi dengan sablon brand Sun Sand Sea dengan tinta rubber. Tie Dye T-shirt Sun Sand Sea memiliki bermacam-macam variasi warna, bahkan bahan dasar kaos juga memiliki 4 warna dasar yaitu putih, hitam, biru dongker, dan merah maroon. 
            Tie Dye T-Shirt Sun Sand Sea dijual dengan harga Rp.59.000,- per pcs dan untuk harga diskon menjadi Rp.52.500,- per pcs.",
            'kode_promo'=>'“BOLEHKURANG?”',
            'path_photo'=>'images/umkm/products/Sun Sand Sea-1.jpg'
        ]);
        product::create([
            'name'=>'Masker Tie Dye Sun Sand Sea',
            'umkm_id'=>umkm::where('name', 'Sun Sand Sea')->first()->id,
            'description'=>"Masker kain 2 lapis yang diproduksi dengan teknik tie dye. Masker Sun Sand Sea memiliki bermacam-macam variasi warna dan juga dilengkapi dengan sablon brand. Masker Tie Dye dibandrol dengan harga Rp.15.000,- per pcs dan untuk harga diskon menjadi Rp.13.000,- per pcs.",
            'kode_promo'=>'“BOLEHKURANG?”',
            'path_photo'=>'images/umkm/products/Sun Sand Sea-2.jpg'
        ]);
        product::create([
            'name'=>'Sun Sand Sea Baseball Cap',
            'umkm_id'=>umkm::where('name', 'Sun Sand Sea')->first()->id,
            'description'=>"Baseball Cap yang berbahan dasar canvas dengan 3 variasi warna yaitu Putih, Hitam, dan Hijau Army. Sun Sand Sea Baseball Cap dilengkapi dengan patch bordir logo Sun Sand Sea. Sun Sand Sea Baseball Cap ini unisex dan all size. Sun Sand Sea Baseball Cap dibandrol dengan harga Rp.54.000,- per pcs dan untuk harga diskon menjadi Rp.27.000,-per pcs.",
            'kode_promo'=>'“BOLEHKURANG?”',
            'path_photo'=>'images/umkm/products/Sun Sand Sea-3.jpg'
        ]);
        DB::table('umkms')->insert([
            //kodepromo udah ada, cek di deskripsi paling bawah takutnya salah
            'name'=>'Sundara Gonicraft',
            'description'=>'Hand made product of sacks from Yogyakarta, Indonesia.
            <br><br>
            Mobile: +62 812-2570-0458 / +62 852-3863-9692
            Sambilegi Lor RT05/RW54 No.01, Maguwoharjo, Depok, Sleman Daerah Istimewa Yogyakarta 55281
            <br><br>
            Intagram: @sundara_gonicraft.<br>
            YouTube: sundara gonicraft<br>
            Facebook : Sundara_Gonicraft<br>
            Shopee: sundara_gonicraft<br>
            Tokopedia: sundara_gonicraft<br><br>
            Kode Promo : SundaraXAjisaka',
            'instagram_link'=>'https://www.instagram.com/sundara_gonicraft/',
            'path_photo'=>'images/umkm/sundara.jpg',
        ]);
        product::create([
            'name'=>'Anandhita Totebag vol 2 ',
            'umkm_id'=>umkm::where('name', 'Sundara Gonicraft')->first()->id,
            'description'=>"<s>IDR Rp 80.000,00</s> Rp 72.000,00<br>
            Sebuah totebag ramah lingkungan dari Sundara yang unik, rustic dan ramah lingkungan ini akan memberikan kesan tersendiri bagi pemakainya. Ukuran nya yang cukup besar bisa muat banyak barang, dapat membantu teman-teman yang harus membawa banyak barang tapi tetap ingin terlihat simple. Di kerjakan secara professional dan sepenuh hati serta penggunaan bahan-bahan dan goni pilihan,tas ini memberikan kenyamanan dan nilai estetik bagi para penggunanya.",
            'kode_promo'=>'SundaraXAjisaka',
            'path_photo'=>'images/umkm/products/Sundara Gonicraft-1.jpg'
        ]);
        product::create([
            'name'=>'Arysakayla Bucket Hat',
            'umkm_id'=>umkm::where('name', 'Sundara Gonicraft')->first()->id,
            'description'=>"<s>IDR Rp 66.500,00</s> Rp 59.850,00<br>
            Alternative baru untuk topi yang kami berikan ini adalah hasil pemanfaatan alam yang kami wujudkan dalam bentuki bucket hat. Dengan memadukan motif pilihan menambah kesan rustic dan unik pada topi ini. Stylish, nyaman dan unik adalah hal yang kami angkat pada setiap produk kami tanpa mengurangi kegunaan dasar nya,begitu pula pada topi ini.",
            'kode_promo'=>'SundaraXAjisaka',
            'path_photo'=>'images/umkm/products/Sundara Gonicraft-2.jpg'
        ]);
        product::create([
            'name'=>'Arimbi Waist Bag vol 3',
            'umkm_id'=>umkm::where('name', 'Sundara Gonicraft')->first()->id,
            'description'=>"<s>IDR Rp 78.000,00</s> Rp 70.200,00<br>
            Pemanfaatan alam kali ini kami wujudkan dalam bentuk waist bag, tas selempang yang simple dan mudah di bawa kemana-mana, tas jenis ini memiliki cukup banyak peminat karena kepraktisan nya. Maka dari itu kami turut menghadirkan waist bag versi kami yang berbahan dasar dari goni tapi juga kuat. Dengan ukuran yang cukup luas tas ini mampu memuat banyak barang untuk sebuah waist bag, di dukung dengan design unik dan rustic yang kami tampilkan pada produk ini bisa menambah kesan stylish bagi penggunanya.",
            'kode_promo'=>'SundaraXAjisaka',
            'path_photo'=>'images/umkm/products/Sundara Gonicraft-3.jpg'
        ]);
        product::create([
            'name'=>'Sundara Pouch',
            'umkm_id'=>umkm::where('name', 'Sundara Gonicraft')->first()->id,
            'description'=>"<s>IDR Rp 35.000,00</s> Rp 31.500,00<br>
            Simple,nyaman,mudah dibawa dan stylish adalah poin-poin yang kami munculkan pada produk kali ini. Bagaimana memanfaatkan alam untuk menjadi produk pouch yang simple tapi juga stylish, kami menjawab nya dengan menghadirkan Sundara Pouch. Dengan ukuran yang cukup besar mampu memuat beragam jenis barang. Permukaan yang nyaman di pegang walaupun berbahan dasar goni menjadi bukti bahwa kami selalu memikirkan kenyamanan dalam setiap pembuatan produk kami. Dengan produk-produk ini kami mencoba mengajak teman-teman kaum muda semua untuk menjadi unjung tombak dalam menjaga dan memanfaatkan lingkungan kita.",
            'kode_promo'=>'SundaraXAjisaka',
            'path_photo'=>'images/umkm/products/Sundara Gonicraft-4.jpg'
        ]);
        product::create([
            'name'=>'Burlap Shoes Sundara',
            'umkm_id'=>umkm::where('name', 'Sundara Gonicraft')->first()->id,
            'description'=>"<s>IDR Rp 210.000,00</s> Rp 189.000,00<br>
            Sepatu termasuk barang yang memiliki permintaan yang cukup tinggi. Terbukti banyak sekali brand-brand lokal maupun luar berlomba-lomba untuk mengeluarkan berbgai jenis dan model sepatu unggulan. Kami ikut serta dalam meramaikan nya dengan mengusung sepatu yang ber material dari alam. Dengan material goni membuat produk kami berbeda dari produk-produk yang ada di pasaran. Model dan bahan yang kami pilih secara selektif juga menjadi nilai tambah pada sepatu ini, selain itu pengerjaan nya masih menggunakan tangan manusia, bisa di katakan sepatu kami 99% hand made ,sehingga setiap sepatu ini adalah hasil kerja keras dan cinta pengerajin yang disalurkan melalui tangan mereka kedalam sepatu ini.",
            'kode_promo'=>'SundaraXAjisaka',
            'path_photo'=>'images/umkm/products/Sundara Gonicraft-5.jpg'
        ]);
        DB::table('umkms')->insert([
            'name'=>'Veeda',
            'description'=>'Sebuah brand apparel lokal yang berdiri pada tahun 2020 dengan tujuan menjadi salah satu dari berbagai macam platform untuk memberikan informasi edukatif dalam wadah yang menyenangkan, ekspresif, dan keren melalui produk apparel kami. Dengan bangga kami mempersembahkan produksi dan tema pertama kami bertajuk “NATIONAL HEROES” sepanjang November hingga penghujung 2020 ini.
            <br><br>
            Dalam rangka menyukseskan acara Festival AJISAKA Tahun 2020 kami memberikan promo produk dengan kode “VDXAJSK”, yaitu :<br>
            1. Harga satuan Rp. 150.000,- mejadi Rp. 125.000,-<br>
            2. Harga bundling 2 pcs menjadi Rp. 225.000,-',
            'instagram_link'=>'https://www.instagram.com/veeda_co/',
            'path_photo'=>'images/umkm/veeda.jpg',
        ]);
        product::create([
            'name'=>'K.H. Abdurrahman Wahid',
            'umkm_id'=>umkm::where('name', 'Veeda')->first()->id,
            'description'=>"Dr.(H.C.) K. H. Abdurrahman Wahid atau yang biasa dikenal dengan Gus Dur merupakan Presiden Indonesia ke-4 yang selalu membawa semangat “PLURALISME” dalam kehidupan berbangsa dan bernegara. Kami mengangkat tema ini karena semakin tebalnya perpecahanan dan perselisihan dalam kehidupan bernegara ini. Melalui desain pada kaos ini kami mengangkat kembali semangat pluralisme, semangat bhinneka tunggal ika, saling menghargai, menghormati, dan bertoleransi satu dan lainnya karena pada dasarnya Indonesia terbentuk dalam keanekaragaman Suku, Agama, Ras, dan Budaya.",
            'kode_promo'=>'“VDXAJSK”',
            'path_photo'=>'images/umkm/products/Veeda-1.jpg'
        ]);
        product::create([
            'name'=>'Raden Mas Soewardi Soerjaningrat',
            'umkm_id'=>umkm::where('name', 'Veeda')->first()->id,
            'description'=>"Raden Mas Soewardi Soerjaningrat atau yang biasa dikenal dengan Ki Hadjar Dewantara bisa disebut sebagai Bapak Pendidikan Nasional karena beliau sosok pelopor pendidikan bagi bangsa Indonesia pada saat penjajahan Belanda. Pendidikan merupakan pondasi yang penting bagi kemajuan suatu Negara. Kita semua adalah asset bangsa yang kelak akan menjadi pemimpin atau penggerak Negara ini.",
            'kode_promo'=>'“VDXAJSK”',
            'path_photo'=>'images/umkm/products/Veeda-2.jpg'
        ]);
        product::create([
            'name'=>'Raden Adjeng Kartini',
            'umkm_id'=>umkm::where('name', 'Veeda')->first()->id,
            'description'=>"Raden Adjeng Kartini sosok yang dikenal sebagai pelopor kebangkitan perempuan pribumi. Semangat inilah yang kami bawa untuk ditujukan kepada perempuan-perempuan hebat yang ada di Indonesia, yang peduli terhadap bangsa dan Negara ini. ",
            'kode_promo'=>'“VDXAJSK”',
            'path_photo'=>'images/umkm/products/Veeda-3.jpg'
        ]);
        DB::table('umkms')->insert([
            //gada kode promo
            //coba dicek kode promonya takut salah
            'name'=>'Vert Terre',
            'description'=>'Vert Terre adalah brand eco-friendly dari Yogyakarta yang dibentuk pada tahun 2018, dan mulai menjadi offline store pada tahun 2019. Bermula dari keingintahuan kami akan less waste lifestyle, Vert Terre mengangkat konsep ramah lingkungan untuk anak muda yang di kemas secara cantik dan menarik. Produk-produk yang dijual di Vert Terre sebagian besar merupakan produk lokal ramah lingkungan yang telah di kurasi dan setiap produknya memiliki cerita tersendiri. Dengan toko kecil di rumah yang hangat, Vert Terre berharap dapat menjadi tempat bertemu dan berkenalan antara kamu dan produk-produk ramah lingkungan!
            <br><br>
            Jenis Promo yang diberikan : Free 1 Sedotan Bambu (Worth 8,000 rupiah)<br>
            Kode Unik : PASARAYAVERTTERRE<br>
            Masa berlaku : 26 Desember 2020 - 31 Januari 2021',
            'instagram_link'=>'https://www.instagram.com/vert.erre/',
            'path_photo'=>'images/umkm/vertterre.jpg',
        ]);
        product::create([
            'name'=>'Natural Green Shampoo (Bulk – Pembelian curah per ml)',
            'umkm_id'=>umkm::where('name', 'Vert Terre')->first()->id,
            'description'=>"Harga : IDR 100 rupiah / ml<br>
            Variant : Kemiri (Unscented), Aloevera Stroberi, Aloevera Pandan<br>
            No SLS, No Paraben, Vegan Friendly, Eco Friendly.<br><br>
            Deskripsi Produk :<br>
            Green Shampoo Natural merupakan produk dari Sanggar Anak Alam, Bantul, Yogyakarta yang di jual dalam bentuk curah / bulk di Vert Terre. Shampoo ini menggunakan bahan-bahan yang ramah lingkungan sehingga residu nya tidak mencemari air ketika di bilas. Selain itu, kamu dapat membelinya dengan membawa botol kosongmu sendiri, untuk mengurangi penggunaan sampah kemasan!",
            'kode_promo'=>'PASARAYAVERTTERRE',
            'path_photo'=>'images/umkm/products/Vert Terre-1.jpeg'
        ]);
        product::create([
            'name'=>'Sabun lerak (Bulk – Pembelian curah per ml)',
            'umkm_id'=>umkm::where('name', 'Vert Terre')->first()->id,
            'description'=>"Harga : IDR 50 rupiah / ml<br><br>
            Deskripsi Produk : <br>
            Sabun Lerak merupakan multipurpose cleanser yang ramah lingkungan, namun kebanyakan oleh customer kami digunakan sebagai sabun cuci piring alami. Sabun ini sangat lembut di tangan sehingga cocok untuk yang memiliki kulit sensitive ketika mencuci. Selain bersih dalam mengangkat minyak, wanginya yang segar membuat sabun ini menjadi anti serangga alami.",
            'kode_promo'=>'PASARAYAVERTTERRE',
            'path_photo'=>'images/umkm/products/Vert Terre-2.jpg'
        ]);
        product::create([
            'name'=>'Sikat Gigi Bambu',
            'umkm_id'=>umkm::where('name', 'Vert Terre')->first()->id,
            'description'=>"Harga : IDR 25,000<br><br>
            Deskripsi Produk :<br>
            Sikat gigi plastik ternyata menyumbang 50 juta pound sampah ke TPA setiap tahunnya, terutama karena sikat gigi setiap orang harus diganti berkala setiap 3 bulan. Sikat gigi dengan gagang bambu ini dapat menjadi alternatif yang ramah lingkungan! Gagangnya dapat terurai ketika di buang dan menjadi kompos alami. Bulu sikatnya juga halus sehingga nyaman dan aman ketika di pakai, bahkan untuk anak-anak.",
            'kode_promo'=>'PASARAYAVERTTERRE',
            'path_photo'=>'images/umkm/products/Vert Terre-3.jpeg'
        ]);
        product::create([
            'name'=>'Lulur Tradisional (Bulk – Pembelian curah per gr)',
            'umkm_id'=>umkm::where('name', 'Vert Terre')->first()->id,
            'description'=>"Harga : IDR 460 rupiah / gr<br>
            Variant : Coklat, Kopi, Jasmine, Susu Rempah, Lemon Apel, Bengkoang, Cendana, Stroberi<br><br>
            Deskripsi Produk :<br>
            Lulur tradisional yang di produksi rumahan di Surakarta ini selalu menjadi favorite customer kami! Wanginya yang kaya akan rempah dan bahan-bahannya yang natural membuat rileks saat digunakan, sekaligus ramah lingkungan karena residu nya tidak mencemari air ketika di bilas. Terbuat dari sangrai beras, pandan, dan rempah-rempah lokal sesuai dengan variant yang ada.",
            'kode_promo'=>'PASARAYAVERTTERRE',
            'path_photo'=>'images/umkm/products/Vert Terre-4.jpeg'
        ]);
        product::create([
            'name'=>'Roasted Green Tea (Bulk – Pembelian curah per gr)',
            'umkm_id'=>umkm::where('name', 'Vert Terre')->first()->id,
            'description'=>"Harga : IDR 170 rupiah / gr<br><br>
            Deskripsi Produk :<br>
            Ini adalah teh hijau dari perkebunan teh daerah Bedakah, Wonosobo. Teh ini konvensional, sehingga tanpa sortir (campur daun, tangkai, dan daun muda). Sebenarnya, teh ini biasa dikonsumsi sendiri dan dijual di pasar lokal ajaa jd rasanya 'unik' dan beda dengan teh pabrikan. Proses pengolahan tehnya jg menarik krn pakai wajan tanah liat, jadi fresh dan ada sensasi roastednya. Teh ini paling cocok dinikmati dgn secuil gula aren / gula jawa asli tanpa campuran. Teh ini dijual dalam bentuk curah / bulk juga, sehingga bisa di beli dengan membawa wadah sendiri!",
            'kode_promo'=>'PASARAYAVERTTERRE',
            'path_photo'=>'images/umkm/products/Vert Terre-5.jpeg'
        ]);
        DB::table('umkms')->insert([
            'name'=>'Weekdays Club',
            'description'=>'WEEKDAYSCLUB adalah lifestyle brand yang menggunakan weekdays (senin-jumat) sebagai referensi dan di kemas dengan naratif isu-isu yang sedang berkembang serta aliran pop culture yang kental. Di bentuk pada tahun 2019 di bawah naungan Ikatan Keluarga Mahasiswa Manajemen UGM, WEEKDAYSCLUB sudah mengeluarkan beberapa artikel, diantaranya volume 1 yaitu “Weekdays Club”, lalu yang pada oktober lalu beredar yaitu “Brave New World”, dan juga artikel yang baru saja keluar, yaitu “Demi Sesuap Ilmu dan Koneksi”.
            <br><br>
            Kode unik yang bisa digunakan untuk membeli produk-produk WEEKDAYSCLUB di Pasaraya adalah #RAYACLUB.',
            'instagram_link'=>'https://www.instagram.com/weekdays.club/',
            'path_photo'=>'images/umkm/weekdaysclub.jpg',
        ]);
        product::create([
            'name'=>'“STAY SAFE” T-shirt',
            'umkm_id'=>umkm::where('name', 'Weekdays Club')->first()->id,
            'description'=>"“Stay Safe” t-shirt merupakan artikel yang keluar dalam series volume 2 bertajuk “Brave New World”. “Stay Safe” datang untuk menfasilitasi The Weekdays agar selalu nyaman dalam berkegiatan sehari-hari. Dengan bahan cotton combed 30, “Stay Safe” t-shirt diyakini dapat membuat nyaman para penggunanya. “Stay Safe” t-shirt bisa dibeli melalui DM ke @weekdays.club, menghubungi admin melalui Whatsapp, atau melalui akun Shopee WEEKDAYSCLUB. Dapatkan “Stay Safe” t-shirt dengan harga spesial yaitu Rp94.000 hanya di Pasaraya, dengan memasukkan kode “RAYACLUB”. Go get yours!<br><br>
            Harga asli = Rp99.000<br>
            Harga Pasaraya = Rp94.000",
            'kode_promo'=>'#RAYACLUB',
            'path_photo'=>'images/umkm/products/WeekdaysClub-1.jpg'
        ]);
        product::create([
            'name'=>'“BRAVE NEW WORLD” T-shirt',
            'umkm_id'=>umkm::where('name', 'Weekdays Club')->first()->id,
            'description'=>"“Brave New World” t-shirt merupakan artikel yang keluar dalam series volume 2 bertajuk “Brave New World”. “Brave New World” datang untuk menfasilitasi The Weekdays agar selalu nyaman dalam berkegiatan sehari-hari. Dengan bahan cotton combed 30, “Brave New World” t-shirt diyakini dapat membuat nyaman para penggunanya. “Brave New World” t-shirt bisa dibeli melalui DM ke @weekdays.club, menghubungi admin melalui Whatsapp, atau melalui akun Shopee WEEKDAYSCLUB. Dapatkan “Stay Safe” t-shirt dengan harga spesial yaitu Rp94.000 hanya di Pasaraya, dengan memasukkan kode “RAYACLUB”. Go get yours!<br><br>
            Harga asli = Rp99.000<br>
            Harga Pasaraya = Rp94.000",
            'kode_promo'=>'#RAYACLUB',
            'path_photo'=>'images/umkm/products/WeekdaysClub-2.jpg'
        ]);
        product::create([
            'name'=>'“DEMI SESUAP ILMU DAN KONEKSI” Notebook',
            'umkm_id'=>umkm::where('name', 'Weekdays Club')->first()->id,
            'description'=>"“Demi Sesuap Ilmu dan Koneksi” notebook merupakan artikel lanjutan dari artikel volume 2 dengan tajuk yang sama. Pada produk ini WEEKDAYSCLUB berusaha menangkap isu mengenai masih banyaknya pelajar, mahasiswa, atau pekerja yang masih susah mendapat koneksi internet yang layak, atau dalam metafora “koneksi” dalam hal teman, lingkungan kerja, atau lingkungan pendidikan. Oleh karena itu WEEKDAYSCLUB berusaha menfasilitasi para #PejuangKoneksi tersebut dengan notebook yang multiguna. Dengan bahan cover ivory dan isi bookpaper dengan 40 lembar A5, diharap bisa membantu #PejuangKoneksi menghadapi hari-hari. Notebook ini dibandrol dengan harga spesial yaitu Rp15.000 dengan menyantumkan kode “RAYACLUB”.<br><br>
            Harga asli = Rp17.000<br>
            Harga Pasaraya = Rp15.000",
            'kode_promo'=>'#RAYACLUB',
            'path_photo'=>'images/umkm/products/WeekdaysClub-3.jpg'
        ]);
        product::create([
            'name'=>'“DEMI SESUAP ILMU DAN KONEKSI” Fabric Mask',
            'umkm_id'=>umkm::where('name', 'Weekdays Club')->first()->id,
            'description'=>"“Demi Sesuap Ilmu dan Koneksi” fabric mask merupakan artikel lanjutan dari artikel volume 2 dengan tajuk yang sama. Pada produk ini WEEKDAYSCLUB berusaha menangkap isu mengenai masih banyaknya pelajar, mahasiswa, atau pekerja yang masih susah mendapat koneksi internet yang layak, atau dalam metafora “koneksi” dalam hal teman, lingkungan kerja, atau lingkungan pendidikan. Oleh karena itu WEEKDAYSCLUB berusaha menfasilitasi para #PejuangKoneksi tersebut dengan masker yang aman dan nyaman. Dengan bahan satin silk dan katun halus dengan tiga lapis kain, diharap bisa membantu #PejuangKoneksi menghadapi hari-hari. Masker kain ini dibandrol dengan harga spesial yaitu Rp18.000 dengan menyantumkan kode “RAYACLUB”.<br><br>
            Harga asli = Rp20.000<br>
            Harga Pasaraya = Rp18.000",
            'kode_promo'=>'#RAYACLUB',
            'path_photo'=>'images/umkm/products/WeekdaysClub-4.jpg'
        ]);
        product::create([
            'name'=>'“PEJUANG KONEKSI” Mug',
            'umkm_id'=>umkm::where('name', 'Weekdays Club')->first()->id,
            'description'=>"“Demi Sesuap Ilmu dan Koneksi” mug merupakan artikel lanjutan dari artikel volume 2 dengan tajuk yang sama. Pada produk ini WEEKDAYSCLUB berusaha menangkap isu mengenai masih banyaknya pelajar, mahasiswa, atau pekerja yang masih susah mendapat koneksi internet yang layak, atau dalam metafora “koneksi” dalam hal teman, lingkungan kerja, atau lingkungan pendidikan. Oleh karena itu WEEKDAYSCLUB berusaha menfasilitasi para #PejuangKoneksi tersebut dengan masker yang aman dan nyaman. Dengan bahan satin silk dan katun halus dengan tiga lapis kain, diharap bisa membantu #PejuangKoneksi menghadapi hari-hari. Masker kain ini dibandrol dengan harga spesial yaitu Rp28.500 dengan menyantumkan kode “RAYACLUB”.<br><br>
            Harga asli = Rp30.000<br>
            Harga Pasaraya = Rp28.500",
            'kode_promo'=>'#RAYACLUB',
            'path_photo'=>'images/umkm/products/WeekdaysClub-5.jpg'
        ]);
        DB::table('umkms')->insert([
            //gada kode promo
            'name'=>'Your DreamWeaver',
            'description'=>"I'm a girl weaving hopes and dreams.
            If you're looking for an unique and handmade gift for yourself or your loved ones Handmade Weaving Arts would be a thoughtful choice.
            Tell me about your dreams and I will turn them into beautiful Handmade Weaving Arts. It could be wall hanging, tapestry totebag, bookmark, and more.
            Every design of tapestry is unique and one-of-a-kind.
            Your Dream also provides you DIY Weaving Kit and Yarn Bundle to weave your own dreams.
            <br><br>
            Instagram: @yourdreamweaver.id
            <br><br>
            Bring more love and joy into your home with Handmade Weaving Arts.",
            'instagram_link'=>'https://www.instagram.com/yourdreamweaver.id/',
            'path_photo'=>'images/umkm/yourdreamweaver.jpg',
        ]);
        product::create([
            'name'=>'KEBUN MIMPI woven wall hanging',
            'umkm_id'=>umkm::where('name', 'Your DreamWeaver')->first()->id,
            'description'=>"harga : 320k (disc. 5%)<br>
            Deskripsi : Hiasan dinding yang dibuat dengan teknik weaving. 100% handmade dan hanya ada 1 di dunia.<br>
            Material : Cotton, velvet, loopy, chennile yarn<br>
            Size : 22 cm x 37 cm (approx)",
            'path_photo'=>'images/umkm/products/YourDreamWeaver-1.jpg'
        ]);
        product::create([
            'name'=>'REKAH - Woven Bookmark',
            'umkm_id'=>umkm::where('name', 'Your DreamWeaver')->first()->id,
            'description'=>"Harga : 30k<br>
            Deskripsi:<br>
            - pembatas buku unik dibuat dengan teknik weaving. 100% handmade dan hanya ada 1 di dunia.<br>
            - bisa custom",
            'path_photo'=>'images/umkm/products/YourDreamWeaver-2.jpg'
        ]);
        product::create([
            'name'=>'Handwoven Tapestry Totebag',
            'umkm_id'=>umkm::where('name', 'Your DreamWeaver')->first()->id,
            'description'=>"Harga : 299k<br>
            Deskripsi : PRE ORDER (5-7 hari)<br>
            - Totebag bahan kanvas premium dengan ukuran 35 cm x 40 cm (hitam)<br>
            - Tali kulit sintetis (panjang 60 cm)<br>
            - Tapestry dibuat dengan teknik weaving dengan menggunakan benang soft cotton dan milk cotton<br>
            - Boleh pilih maksimal 5 warna benang dan menentukan warna benang yang dominan pada tapestry<br>
            - One-of-a kind totebag dengan desain tapestry random / freestyle weaving atau memilih desain sendiri<br>",
            'path_photo'=>'images/umkm/products/YourDreamWeaver-3.jpeg'
        ]);
        product::create([
            'name'=>'DIY Weaving kit',
            'umkm_id'=>umkm::where('name', 'Your DreamWeaver')->first()->id,
            'description'=>"Harga : 175k<br>
            Deskripsi :<br>
            - Frame loom yang terbuat dari kayu ukuran 16 cm x 21 cm dilengkapi dengan comb, shuttle, heddle<br>
            - 7 benang dengan berbagai jenis dan warna<br>
            - 1 benang WARP <br>
            -  1 jarum tapestry plastik <br>
            - Video tutorial teknik weaving basic yang dikirimkan via e-mail dan bisa didownload.",
            'path_photo'=>'images/umkm/products/YourDreamWeaver-4.jpg'
        ]);
        product::create([
            'name'=>'Yarn Bundle',
            'umkm_id'=>umkm::where('name', 'Your DreamWeaver')->first()->id,
            'description'=>"Harga : 38k<br>
            Deskripsi : <br>
            - 6 benang dengan berbagai jenis dan warna (soft cotton, milk cotton, chennile)<br>
            - bisa digunakan untuk kreasi weaving small",
            'path_photo'=>'images/umkm/products/YourDreamWeaver-5.jpg'
        ]);
    }
}

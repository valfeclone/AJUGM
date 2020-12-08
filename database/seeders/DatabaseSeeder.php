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
            'path_photo'=>'images/umkm/products/bylily-5.jpg'
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
            'path_photo'=>'images/umkm/products/desoyjoy-1.jpg'
        ]);
        product::create([
            'name'=>'Doggy " Little Canis"',
            'umkm_id'=>umkm::where('name', 'desoyjoy')->first()->id,
            'description'=>"harga Rp 100.000 diskon 5%",
            'path_photo'=>'images/umkm/products/desoyjoy-2.jpg'
        ]);
        product::create([
            'name'=>'Bunga "Sunflower Head"',
            'umkm_id'=>umkm::where('name', 'desoyjoy')->first()->id,
            'description'=>"harga Rp 100.000 diskon 5%",
            'path_photo'=>'images/umkm/products/desoyjoy-3.jpg'
        ]);
        product::create([
            'name'=>'Dino "Claire Dino"',
            'umkm_id'=>umkm::where('name', 'desoyjoy')->first()->id,
            'description'=>"harga Rp 100.000 diskon 5%",
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
        DB::table('umkms')->insert([
            'name'=>'Gemash Daily',
            'description'=>'.',
            'path_photo'=>'images/umkm/gemashdaily.png',
            'instagram_link'=>'https://www.instagram.com/gemashdaily.co/'
        ]);
        DB::table('umkms')->insert([
            'name'=>'Kanigara Books',
            'description'=>'Kanigara adalah small business yang bergerak pada bidang office supplies. Kanigara menyediakan buku tulis vintage yang dapat memenuhi kebutuhan produktivitas para konsumen.
            Kanigara menerima pesanan dalam jumlah besar untuk kebutuhan sovenir wedding, ulang tahun, dan wisuda. Anda dapat mengirimkan custom design anda pada email kami. <br> Kanigara bekerja sama dengan AJISAKA UGM 2020 dan terdapat berlaku diskon sebesar 20% dengan promotion code: KNGR2020 berlaku hanya pada tanggal 26 Desember 2020-31 Januari 2021. <br>
            Untuk pemesanan dapat melalui <a href="https://msha.ke/kanigara">Link Disini</a>',
            'path_photo'=>'images/umkm/kanigara.jpg',
            'instagram_link'=>'https://www.instagram.com/'
        ]);
        DB::table('umkms')->insert([
            //masih kosong
            'name'=>'Kia.clo',
            'description'=>'@kia.clo adalah brand pakaian yang menjual produk-produk handmade, yaitu tiedye yang dikemas dalam bentuk piyama, kemeja, celana, ataupun outer. Produk ini dapat dibeli melalui shopee @kia.clo atau WhatsApp.',
            'path_photo'=>'images/umkm/kiaclo.png',
            'instagram_link'=>'https://www.instagram.com/'
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
        DB::table('umkms')->insert([
            'name'=>'Macrame',
            'description'=>"Awal September 2020 lalu, saya berinisiatif membuat usaha kecil-kecilan berupa kerajinan tangan macrame. Macrame adalah seni menyimpul tali untuk menciptakan motif geometrik yang digunakan sebagai hiasan, dekorasi, atau aksesoris. Usaha ini saya beri nama 'Macrame Njonjae' (baca : nyonyae), karena biasanya nyonya-nyonya suka membuat kerajinan tangan. Usaha macrame saya ini menggunakan sistem pre order karena dapat menyesuaikan permintaan dari customer. Waktu pengerjaan 3-7 hari tergantung tingkat kerumitan barang. Harganya pun variatif sesuai dengan ukuran, material yang digunakan, dan warna tali. Produk best seller dari Macrame Njonjae adalah ukulele hanger. Sementara ini saya baru menjual beberapa produk, ke depannya akan rilis banyak produk baru. Saya menerima request apapun dari teman-teman, saya juga menerima jasa pembuatan dekorasi wedding beserta souvenir. Silakan kunjungi Instagram @macramenjonjae untuk melihat produk yang lainnya. Terima kasih.
            <br><br>
            KODE UNIK VOUCHER = MCRNJO309",
            'instagram_link'=>'https://www.instagram.com/macramenjonjae/',
            'path_photo'=>'images/umkm/macrame.png',
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
        DB::table('umkms')->insert([
            'name'=>'Magna',
            'description'=>"Magna Body & Co is a company with a vision to utilize the natural ingredients that the earth has. We believe that the earth holds a lot of wealth that must be rewarded with kindness. For this reason, Magna and Co exists as a bridge for the utilization of natural products which are of course organic, vegan and cruelty free.
            <br><br>
            Potongan Produk yang diberikan : 55k/pcs 100k/get 2 pcs. Harga asli 65K
            <br>
            Kode #MagnAjisaka2020",
            'instagram_link'=>'https://www.instagram.com/',
            'path_photo'=>'images/umkm/magna.jpg',
        ]);
        DB::table('umkms')->insert([
            'name'=>'Mantra Puspa',
            'description'=>"Halo! Mantrapuspa mengumpulkan energi dari bunga asli yang sudah dikeringkan, lalu mengolahnya menjadi kerajinan: buku catatan, aksesoris, dan hiasan meja yang manis! Boleh untuk menyenangkan diri sendiri maupun diberikan sebagai hadiah kepada yang terkasih. Semuanya dibuat dengan tangan, mengalirkan ketulusan yang bersumber dari dalam hati.
            <br><br>
            Tengok kerajinan bunga kering Mantrapuspa di galeri Instagram: @mantrapuspa.id. Alamat surel kami: mantrapuspa@gmail.com. May the flowers bloom in your heart!",
            'instagram_link'=>'https://www.instagram.com/mantrapuspa.id/',
            'path_photo'=>'images/umkm/mantrapuspa.png',
        ]);
        DB::table('umkms')->insert([
            //kosong
            'name'=>'Merekat Di Jiwa',
            'description'=>'Merekat di Jiwa adalah fashion brand yang memiliki tujuan untuk mengeksplorasi tekstil Indonesia dan mengempower pengrajin lokal yang ada di Indonesia dengan konsep play-fair dan sustainable bisnis! Sebagai small brand kami ingin ikut serta dalam event Pasaraya yang akan diselenggarakan oleh Ajisaka UGM! Berikut kami sertakan informasi terkait brand dan product kamiii!',
            'instagram_link'=>'https://www.instagram.com/',
            'path_photo'=>'images/umkm/merekatdijiwa.jpg',
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
        DB::table('umkms')->insert([
            //description sama instagram
            'name'=>'Peculiar Moods',
            'description'=>"Peculiarmoods is an artsy-craftsy business managed by two 'nona' based in Yogyakarta. Established in April 16th, 2019, Peculiarmoods is such a new babyborn excited for another journey ahead. The trigger came when we recognized the lack of artsy local pride among our society. We initiated to provide artsy-cutesy local products with affordable price which later being accepted and got such unexpected responses.  
            <br><br>
            Kode Unik : PECULIAR1",
            'instagram_link'=>'https://www.instagram.com/',
            'path_photo'=>'images/umkm/peculiarmoods.jpg',
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
        DB::table('umkms')->insert([
            //description foto
            'name'=>'Relaxine',
            'description'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Modi quae rerum pariatur, sequi voluptas tempora voluptatem illo unde aperiam numquam mollitia deleniti autem non nam quasi aliquam quisquam vitae assumenda.
            <br><br>
            Kode Promo : RELAXINEDIAJISAKA',
            'instagram_link'=>'https://www.instagram.com/__relaxine/',
            'path_photo'=>'images/umkm/relaxine.jpg',
        ]);
        DB::table('umkms')->insert([
            'name'=>'Suns and Sea',
            'description'=>'Sun Sand Sea adalah Small Business atau UMKM yang bergerak dalam bidang fashion/semi-distro. UMKM Sun Sand Sea berbasis bisnis online yang menjual dan memamerkan produknya di Instagram @sunsandsea.store dan juga Shopee sunsandsea.store. Saat ini Sun Sand Sea banyak menjual dan memproduksi produk fashion dengan teknik tie dye.
            <br><br>
            Kode Promo : “BOLEHKURANG?”',
            'instagram_link'=>'https://www.instagram.com/sunsandsea.store/',
            'path_photo'=>'images/umkm/sunsandsea.png',
        ]);
        DB::table('umkms')->insert([
            //kodepromo
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
            Tokopedia: sundara_gonicraft',
            'instagram_link'=>'https://www.instagram.com/sundara_gonicraft/',
            'path_photo'=>'images/umkm/sundara.jpg',
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
        DB::table('umkms')->insert([
            //gada kode promo
            'name'=>'Vert Terre',
            'description'=>'Vert Terre adalah brand eco-friendly dari Yogyakarta yang dibentuk pada tahun 2018, dan mulai menjadi offline store pada tahun 2019. Bermula dari keingintahuan kami akan less waste lifestyle, Vert Terre mengangkat konsep ramah lingkungan untuk anak muda yang di kemas secara cantik dan menarik. Produk-produk yang dijual di Vert Terre sebagian besar merupakan produk lokal ramah lingkungan yang telah di kurasi dan setiap produknya memiliki cerita tersendiri. Dengan toko kecil di rumah yang hangat, Vert Terre berharap dapat menjadi tempat bertemu dan berkenalan antara kamu dan produk-produk ramah lingkungan!
            <br><br>
            Jenis Promo yang diberikan : Free 1 Sedotan Bambu (Worth 8,000 rupiah)',
            'instagram_link'=>'https://www.instagram.com/vert.erre/',
            'path_photo'=>'images/umkm/vertterre.jpg',
        ]);
        DB::table('umkms')->insert([
            'name'=>'Weekdays Club',
            'name'=>'Vert Terre',
            'description'=>'WEEKDAYSCLUB adalah lifestyle brand yang menggunakan weekdays (senin-jumat) sebagai referensi dan di kemas dengan naratif isu-isu yang sedang berkembang serta aliran pop culture yang kental. Di bentuk pada tahun 2019 di bawah naungan Ikatan Keluarga Mahasiswa Manajemen UGM, WEEKDAYSCLUB sudah mengeluarkan beberapa artikel, diantaranya volume 1 yaitu “Weekdays Club”, lalu yang pada oktober lalu beredar yaitu “Brave New World”, dan juga artikel yang baru saja keluar, yaitu “Demi Sesuap Ilmu dan Koneksi”.
            <br><br>
            Kode unik yang bisa digunakan untuk membeli produk-produk WEEKDAYSCLUB di Pasaraya adalah #RAYACLUB.',
            'instagram_link'=>'https://www.instagram.com/weekdays.club//',
            'path_photo'=>'images/umkm/weekdaysclub.jpg',
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
    }
}

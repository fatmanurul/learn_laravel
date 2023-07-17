<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
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
        

        // User::create([
        //   'name' => 'fatma nh',
        //   'email' => 'fatma@gmail.com',
        //   'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Diraya sabila',
        //     'email' => 'drysbl@gmail.com',
        //     'password' => bcrypt('54321')
        //   ]);

        User::factory(3)->create();
  
        Category::create([
            'name' => 'Brownies',
            'slug' => 'brownies'
        ]);

        Category::create([
          'name' => 'Biskuit butir cokelat',
          'slug' => 'biskuit-butir-cokelat',
        ]);

       Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Sejarah Brownies',
        //     'slug' => 'sejarah-brownies',
        //     'excerpt' => 'Brownies atau Bronis merupakan sebuah makanan yang dipanggang yang berbentuk persegi, datar atau bar dikembangkan di Amerika Serikat pada akhir abad ke-19 dan dipopulerkan di Amerika Serikat dan Kanada pada paruh pertama abad ke-20.',
        //     'body' => 'Sejarah brownies pertama kali muncul di hadapan publik pada tahun 1893. Saat itu, digelar sebuah acara berupa pameran yang bertajuk Columbian Exposition yang diselenggarakan salah satu kota besar di Amerika, Chicago, Illinois. Pada saat itu, seorang koki dari Hotel Palmer House membuat suatu inovasi kue setelah sang pemilik hotel Bertha Palmer memintanya untuk menghidangkan makanan penutup untuknya dan para perempuan yang hadir pada pameran tersebut. Sang koki diminta untuk membuat kue yang lain daripada yg lain dipotong kecil-kecil agar mudah dimakan.',
        //     'category_id' => 1,
        //     'user_id' => 1

        // ]);
        // Post::create([
        //     'title' => 'Asal mula',
        //     'slug' => 'asal-mula',
        //     'excerpt' => 'Sungguh sangat sulit untuk memastikan asal mula kue brownies ini, konon dari banyaknya cerita yang beredar, kue brownies berawal dari seorang koki yang lupa memasukkan bahan kue pengembang yang disebut bubuk pengembang dalam resep adonan kue bolu cokelatnya sehingga hasilnya setelah kue bolu tersebut dipanggang tidak mengembang, seperti halnya kue-kue bolu yang biasa dia buat. Tekstur kue bolu cokelat yang harusnya lembut, tebal, dan banyak berpori, menjadi bantat, padat, dan sedikit basah.',
        //     'body' => 'Adapun cerita lainnya tentang asal mula brownies adalah diceritakan seorang pemuda pengusaha kue yang mengalami krisis keuangan dan hampir membuat usahanya gulung tikar. Dia punya seorang karyawan yang masih temannya sendiri yang setiap pagi akan menjualkan kue-kue buatannya. Pada suatu hari dengan modal terakhir yang dia miliki, pemuda pengusaha kue tersebut membeli bahan-bahan untuk membuat kue cokelat.

        //     Hampir semalam suntuk dia berusaha keras membuat kue cokelat lezat seperti yang tertera pada resep kue cokelat. Pekerjaannya baru selesai saat fajar tiba. Namun, alangkah kecewanya pemuda tersebut setelah melihat hasil kue cokelatnya yang jauh berbeda dari yang terdapat pada buku panduan resep kue cokelat. Modal terakhir yang dia punya pun telah habis untuk bahan-bahan kue cokelat tersebut.
            
        //     Seperti biasanya pada pagi harinya, sang karyawan datang mengambil kue hasil buatan majikannya tersebut. Tanpa bertanya karena melihat sang majikan tengah tertidur lelap akibat kelelahan membuat kue semalaman, dia mengambil kue-kue cokelat tersebut dan menjualnya pada para pelanggan kue sang majikan. Para pelanggan sangat menikmati kue cokelat itu dan kembali memesan untuk keesokan harinya, mereka mengira kue itu resep baru dari si pemuda tersebut. Dengan banyaknya pesanan kue cokelat yang dikira gagal itu, sang pemuda selamat dari gulung tikar.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Sejarah Biskuit butir cokelat',
        //     'slug' => 'sejarah-biskuit-butir-cokelat',
        //     'excerpt' => 'Biskuit butir cokelat adalah jenis kue kering yang berasal dari Amerika Serikat dan memiliki butir cokelat (potongan kecil cokelat manis) sebagai bahan pembeda. ',
        //     'body' => 'Sekitar tahun 1938, Ruth Graves Wakefield menambahkan potongan bit dari batang cokelat semi-manis Nestlé ke dalam biskuit.

        //     Resep tradisional menggabungkan adonan yang terdiri dari mentega dan gula cokelat dan putih, butir cokelat semi-manis dan vanilla. Variasi termasuk resep dengan jenis cokelat lainnya serta bahan tambahan seperti kacang atau havermut. Ada juga versi vegan dengan substitusi bahan seperti butir cokelat vegan, margarin vegan, dan sebagainya.',
        //     'category_id' => 2,
        //     'user_id' => 1

        // ]);

        // Post::create([
        //     'title' => 'Penemuan Biskuit butir cokelat',
        //     'slug' => 'penemuan-biskuit-butir-cokelat',
        //     'excerpt' => 'Biskuit butir cokelat ditemukan oleh koki Amerika Ruth Graves Wakefield dan koki Sue Brides pada tahun 1938. ',
        //     'body' => 'Dia menemukan resep selama periode ketika dia memiliki Toll House Inn, di Whitman, Massachusetts. Di era ini, Toll House Inn adalah restoran populer yang menampilkan masakan rumah. Sering salah dilaporkan bahwa ia secara tidak sengaja mengembangkan biskuit, dan bahwa ia berharap butir cokelat akan meleleh, membuat biskuit cokelat. Bahkan, ia menyatakan bahwa ia sengaja menemukan biskuit itu. Dia berkata, "Kami telah menyajikan biskuit kacang butterscotch tipis dengan es krim. Semua orang tampaknya menyukainya, tetapi saya mencoba memberi mereka sesuatu yang berbeda. Jadi saya datang dengan biskuit Toll House."[2] Dia menambahkan potongan bit dari cokelat semi-manis Nestlé ke dalam biskuit.[3] Resep asli di Toll House Tried and True Recipes[4] disebut "Biskuit Cokelat Renyah Tool House".',
        //     'category_id' => 2,
        //     'user_id' => 2

        // ]);

    }
}

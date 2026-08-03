<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Umkm;
use App\Models\Gallery;
use App\Models\Article;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Create admin user
        User::factory()->create([
            'name' => 'Admin Nagari',
            'email' => 'admin@pematangpanjang.com',
            'password' => bcrypt('password123'),
        ]);

        // Sample UMKM data
        Umkm::create([
            'nama' => 'Warung Makan Padang Sederhana',
            'slug' => 'warung-makan-padang-sederhana',
            'deskripsi' => 'Warung makan yang menyajikan masakan Padang autentik dengan cita rasa yang lezat dan harga terjangkau. Telah berdiri sejak tahun 2010 dan menjadi favorit masyarakat setempat.',
            'whatsapp' => '628123456789',
            'instagram' => 'https://instagram.com/warungpadangsederhana',
            'is_active' => true,
        ]);

        Umkm::create([
            'nama' => 'Kerajinan Anyaman Bambu Sari',
            'slug' => 'kerajinan-anyaman-bambu-sari',
            'deskripsi' => 'Usaha kerajinan tangan yang mengolah bambu menjadi berbagai produk anyaman seperti keranjang, tas, dan hiasan rumah. Produk berkualitas tinggi dengan harga kompetitif.',
            'whatsapp' => '628987654321',
            'is_active' => true,
        ]);

        Umkm::create([
            'nama' => 'Toko Kelontong Berkah',
            'slug' => 'toko-kelontong-berkah',
            'deskripsi' => 'Toko kelontong yang melayani kebutuhan sehari-hari masyarakat. Menyediakan berbagai produk sembako, makanan ringan, dan kebutuhan rumah tangga.',
            'whatsapp' => '628111222333',
            'is_active' => true,
        ]);

        // Sample Articles data
        Article::create([
            'judul' => 'Pembangunan Jalan Desa Fase II Dimulai',
            'slug' => 'pembangunan-jalan-desa-fase-ii-dimulai',
            'kategori' => 'berita',
            'konten' => "Nagari Pematang Panjang kembali melanjutkan pembangunan infrastruktur jalan desa fase kedua yang dimulai pada minggu ini. Proyek ini merupakan kelanjutan dari fase pertama yang telah berhasil diselesaikan tahun lalu.\n\nWali Nagari H. Ahmad Fauzi, S.Sos menyampaikan bahwa pembangunan ini merupakan prioritas utama dalam meningkatkan aksesibilitas dan konektivitas antar jorong di wilayah nagari. \"Pembangunan jalan ini sangat penting untuk memperlancar aktivitas ekonomi dan sosial masyarakat,\" ujarnya.\n\nPembangunan fase II ini akan mencakup perbaikan dan peningkatan kualitas jalan sepanjang 2,5 kilometer yang menghubungkan Jorong Pematang Tengah dengan Jorong Lubuk Basung. Dana yang digunakan berasal dari APBN melalui program Dana Desa dan ADD (Alokasi Dana Desa).\n\nRencananya, pembangunan akan selesai dalam waktu 3 bulan dan diharapkan dapat meningkatkan perekonomian masyarakat, terutama untuk transportasi hasil pertanian dan akses ke fasilitas umum.",
            'is_published' => true,
        ]);

        Article::create([
            'judul' => 'Tips Mengembangkan UMKM di Era Digital',
            'slug' => 'tips-mengembangkan-umkm-di-era-digital',
            'kategori' => 'artikel',
            'konten' => "Di era digital seperti sekarang ini, UMKM (Usaha Mikro, Kecil, dan Menengah) memiliki peluang besar untuk berkembang dengan memanfaatkan teknologi. Berikut adalah beberapa tips yang dapat membantu UMKM di Nagari Pematang Panjang untuk berkembang:\n\n1. **Manfaatkan Media Sosial**\nMedia sosial seperti Instagram, Facebook, dan WhatsApp Business dapat menjadi alat pemasaran yang sangat efektif. Posting foto produk secara rutin dan berinteraksi dengan pelanggan.\n\n2. **Pelajari E-commerce**\nPlatform seperti Shopee, Tokopedia, dan marketplace lainnya dapat memperluas jangkauan pasar UMKM hingga ke luar daerah.\n\n3. **Tingkatkan Kualitas Produk**\nKualitas produk tetap menjadi kunci utama. Pastikan produk yang dihasilkan memiliki standar kualitas yang baik dan konsisten.\n\n4. **Manajemen Keuangan yang Baik**\nPisahkan keuangan pribadi dan usaha. Catat semua pemasukan dan pengeluaran untuk memudahkan evaluasi bisnis.\n\n5. **Jaringan dan Kolaborasi**\nBangun jaringan dengan sesama pelaku UMKM dan bergabung dengan komunitas atau organisasi yang relevan.\n\nDengan menerapkan tips-tips di atas, diharapkan UMKM di nagari dapat berkembang dan bersaing di era digital ini.",
            'is_published' => true,
        ]);

        Article::create([
            'judul' => 'Program Pelatihan Komputer untuk Masyarakat',
            'slug' => 'program-pelatihan-komputer-untuk-masyarakat',
            'kategori' => 'berita',
            'konten' => "Pemerintah Nagari Pematang Panjang bekerja sama dengan Dinas Komunikasi dan Informatika Kabupaten Sijunjung mengadakan program pelatihan komputer dasar untuk masyarakat. Program ini bertujuan untuk meningkatkan literasi digital masyarakat.\n\nPelatihan akan dilaksanakan selama 2 minggu di Balai Nagari dengan materi yang mencakup:\n- Pengenalan komputer dan internet\n- Microsoft Office (Word, Excel, PowerPoint)\n- Media sosial untuk promosi usaha\n- E-commerce dan marketplace\n\nKepala Dinas Kominfo Kabupaten Sijunjung, Drs. Bambang Sutrisno, M.Kom, mengatakan bahwa program ini merupakan bagian dari upaya pemerintah dalam mewujudkan Indonesia Digital 2024.\n\nPendaftaran dibuka untuk 30 peserta dengan prioritas bagi pelaku UMKM, ibu-ibu PKK, dan pemuda karang taruna. Pelatihan akan dimulai pada tanggal 15 Februari 2024 dan gratis untuk semua peserta.\n\nBagi yang berminat dapat mendaftar di Kantor Nagari atau menghubungi nomor WhatsApp: 0811-6655-4433.",
            'is_published' => true,
        ]);
    }
}

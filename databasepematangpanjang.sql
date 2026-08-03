-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 22, 2026 at 02:43 AM
-- Server version: 11.8.8-MariaDB-log
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u551251001_pematangP`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `kategori` enum('artikel','berita') NOT NULL,
  `konten` longtext NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `judul`, `slug`, `kategori`, `konten`, `gambar`, `is_published`, `created_at`, `updated_at`) VALUES
(4, 'Meriahkan HUT RI ke-80, Nagari Pematang Panjang Gelar Lomba Seni Budaya Minangkabau (Lancagh Kaji dek Baulang, Lancgh Jalan dek Batuik)', 'meriahkan-hut-ri-ke-80-nagari-pematang-panjang-gelar-lomba-seni-budaya-minangkabau-lancagh-kaji-dek-baulang-lancgh-jalan-dek-batuik', 'artikel', 'Pematang Panjang, Agustus 2025 – Dalam rangka memeriahkan Hari Ulang Tahun Republik Indonesia ke-80, Nagari Pematang Panjang menyelenggarakan Lomba Seni Budaya yang berlangsung di Pasar Rakyat Pematang Panjang pada tanggal 12, 13, dan 14 Agustus 2025.\r\nKegiatan ini dipromotori oleh Kasi Pelayanan Nagari Pematang Panjang, Andrean Febrizal, dan secara resmi dibuka oleh Wali Nagari Pematang Panjang, Mulyadi, S.Pd. Ragam Perlombaan Seni Budaya dan dibantu Oleh PHBN, Mahasiswa UNAND dan Mahasiswa UMMY yang sedang melansungkan KKN di Nagari Pematang Panjang\r\n\r\nBerbagai cabang perlombaan digelar dengan tujuan melestarikan warisan budaya Minangkabau, di antaranya:\r\n•	Solo Song Lagu Minang (Pelataran Pasar Rakyat Pematang Panjang)\r\n•	Tari Pasambahan Tingkat SD (Pelataran Pasar Rakyat Pematang Panjang)\r\n•	Pidato Adat Pasambahan Mengaji Kematian (Rumah Gadang Piliang Godang)\r\n\r\nTujuan dan Makna\r\nKegiatan ini bertujuan untuk menumbuhkan rasa cinta masyarakat, khususnya generasi muda, terhadap seni dan budaya Minangkabau. Selain itu, lomba ini juga menjadi sarana dalam memeriahkan peringatan HUT RI ke-80 dengan mengedepankan nilai-nilai adat dan tradisi sebagai identitas bangsa.\r\n\r\nDukungan Anggaran dan Antusiasme\r\nSeluruh rangkaian acara didukung melalui Dana Desa yang dialokasikan dalam APB Nagari Pematang Panjang, sehingga melibatkan partisipasi luas dari masyarakat.\r\n\r\nAntusiasme masyarakat terlihat jelas sejak hari pertama. Anak-anak, pelajar, tokoh adat, hingga orang tua hadir untuk memberikan dukungan. Suasana Pasar Rakyat Pematang Panjang penuh dengan semarak penampilan seni yang tidak hanya menghibur, tetapi juga mendidik dan sarat makna kebersamaan.\r\nDalam sambutannya, Wali Nagari Pematang Panjang, Mulyadi, S.Pd, menyampaikan apresiasi setinggi-tingginya kepada seluruh panitia dan peserta. Beliau menegaskan bahwa kegiatan ini merupakan langkah penting untuk memperkuat kebersamaan masyarakat sekaligus menjaga kelestarian seni budaya Minangkabau di tengah kemajuan zaman.', 'articles/qIq8zr5WqF0CX5HjlY9UefFf16bE4ZCrcT9UbKRm.jpg', 1, '2025-08-20 01:43:23', '2025-08-20 01:54:08'),
(5, 'Gastronomi dalam Lintas Waktu: Eksistensi Rendang Belalang yang takkan pernah hilang', 'gastronomi-dalam-lintas-waktu-eksistensi-rendang-belalang-yang-takkan-pernah-hilang', 'artikel', 'Rendang selama ini dikenal sebagai salah satu ikon kuliner Indonesia yang mendunia. Bahkan, CNN pernah menobatkannya sebagai makanan terenak di dunia. Umumnya, masyarakat mengenal rendang dalam bentuk rendang daging sapi, ayam, telur, atau lokan. Namun, di Nagari Pematang Panjang, Kabupaten Sijunjung, Sumatera Barat, terdapat varian rendang yang tak banyak diketahui orang, yakni rendang belalang, sebuah sajian khas yang hanya bisa ditemukan di Sijunjung. Meskipun jarang dikenal rendang belalang ini memiliki potensi menjadi lebih terkenal karena keunikannya dan trend global terhadap pangan berbasis serangga semakin meningkat  karena faktor keberlanjutan dan kesehatan , sehingga berpotensi menjadi produk ekspor khas indonesia, khususnya di nagari Pematang Panjang, Kabupaten Sijunjung. Yarlisna Yati yang kerap dipanggil Mak Yar selaku pemilik rumah sebagai posko KKN Unand mengajak tim mahasiswa KKN Unand di Pematang Panjang untuk melihat proses pembuatan rendang belalang mulai dari pengenalan alat dan bahan yang digunakan sampai rendang siap untuk disantap.\r\nBerbeda dengan rendang daging yang lebih populer pada umumnya. Rendang belalang memiliki keunggulan tersendiri. Dari segi gizi, belalang ternyata memiliki kandungan protein yang sangat tinggi, mencapai sekitar 24 persen lebih tinggi dibandingkan protein pada daging sapi, domba, maupun unggas, yang sangat bermanfaat untuk membangun otot dan memperbaiki jaringan tubuh. Kandungan lemaknya pun sangat rendah, hanya sekitar 1,5 persen, sehingga menjadi sumber protein yang sehat. Dr. Fitrini, S.P., M.Ec selaku DPL dari tim mahasiswa KKN Unand di nagari Pematang Panjang juga ikut menyarankan mahasiswanya untuk ikut serta dalam melihat proses pembutan rendang belalang.\r\nRendang belalang memiliki rasa yang unik, rasanya cenderung gurih, manis, dan krispi  seperti udang kering. Rendang belalang kaya akan zat besi, zinc, asam amino esensial, dan vitamin B yang bermanfaat bagi kesehatan tubuh. Dan produksinya yang ramah lingkungan hanya memerlukan sumber daya seperti air, pakan dan lahan, yang jauh lebih sedikit dibanding peternakan sapi atau ayam, sehingga lebih berkelanjutan. Tim mahasiswa KKN Unand juga ikut mencoba bagaimana rasa rendang belalang tersebut.\r\nProses pembuatan rendang belalang dimulai dari kegiatan berburu belalang di sawah yang telah selesai masa panennya. Kegiatan ini biasanya dilakukan warga secara berkelompok, membawa obor atau senter sebagai penerang, serta botol bekas untuk menampung hasil tangkapan. Namun, tidak semua jenis belalang bisa dikonsumsi. Salah satu yang dihindari adalah belalang kunyit karena rasanya yang pahit dan tidak cocok diolah menjadi makanan. Sebelum dimasak menjadi rendang, belalang yang sudah ditangkap akan disangrai terlebih dahulu untuk menghilangkan bau menyengat. Setelah itu, bagian kaki dan sayap dibuang agar teksturnya lebih nyaman saat dimakan. Proses memasak rendang belalang sama seperti rendang pada umumnya. Bumbu yang digunakan meliputi cabai, bawang merah, bawang putih, kunyit, lengkuas, dan serai yang dihaluskan.\r\nTahapan memasaknya dimulai dengan menyiapkan kuali besar yang diletakan di atas tungku kayu bakar, karena akan memberikan aroma khas yang tidak dapat digantikan oleh kompor modern. Didalam kuali tersebut santan segar dimasukkan dan direbus perlahan hingga mulai mendidih, setelah itu bumbu halus yang terbuat dari campuran rempah-rempah pilihan seperti cabai, bawang merah, bawang putih, lengkuas, kunyit, jahe, dan serai ditambahkan ke dalam santan. Perpaduan ini kemudian dimasak sambil terus diaduk, agar santan tidak pecah dan bumbu merata, hingga teksturnya mengental dan mengeluarkan aroma harum yang menggugah selera.\r\nBelalang yang telah melalui proses pembersihan menyeluruh termasuk membuang sayap dan kaki kemudian dimasukkan ke dalam kuali. Dengan gerakan perlahan, belalang diaduk bersama bumbu dan santan, memastikan setiap bagian terselimuti rempah dengan sempurna. Proses memasak ini membutuhkan kesabaran, karena memakan waktu lebih dari dua jam di atas api kecil. Selama waktu tersebut, rasa dari bumbu perlahan meresap ke dalam daging belalang, sementara santan dan rempah-remah mengalami proses karamalisasi yang memberikan rasa gurih dan pekat. Hasil akhirnya adalah rendang belalang dengan warna cokelat kehitaman khas, tekstur kering, dan cita rasa kaya yang memadukan gurih, pedas, dan sedikit manis. Proses panjang ini bukan hanya sekadar memasak, melainkan bagian dari tradisi kuliner yang diwariskan secara turun-temurun di Nagari Pematang Panjang, Sijunjung, menjadikannya warisan rasa yang istimewa dan penuh makna.\r\nRendang belalang bukan hanya menarik perhatian karena bahan bakunya yang tidak biasa, tetapi juga karena nilai budaya dan kearifan lokal yang melekat di dalamnya. Di Kabupaten Sijunjung, khususnya di Nagari Pematang Panjang, kuliner ini lahir dari tradisi panjang yang terjalin erat dengan kehidupan masyarakat setempat. Proses mendapatkan bahan bakunya, yakni belalang, bukan sekadar aktivitas mencari makanan, tetapi telah menjadi bagian dari interaksi sosial yang mempererat hubungan antarwarga. Saat musim panen tiba atau menjelang sore hari, warga sering berkumpul di persawahan untuk berburu belalang. Kegiatan ini dilakukan dengan suasana penuh canda, gotong royong, dan saling berbagi hasil tangkapan. Tradisi ini tidak hanya menumbuhkan rasa kebersamaan, tetapi juga menjadi bentuk nyata dari kearifan lokal dalam memanfaatkan sumber daya alam yang ada secara berkelanjutan.\r\nRendang belalang kemudian diolah menggunakan resep yang diwariskan secara turun-temurun oleh para leluhur. Proses memasaknya yang memakan waktu berjam-jam mencerminkan kesabaran dan kecintaan masyarakat terhadap masakan mereka. Hasilnya adalah hidangan dengan cita rasa gurih, tekstur renyah namun lembut, dan aroma rempah yang khas. Bagi para penikmat kuliner, rendang belalang menawarkan pengalaman gastronomi yang langka. Kelezatan dan keunikan rasanya mampu memikat lidah, sementara cerita dan nilai budaya di baliknya memberikan dimensi yang lebih dalam dari sekadar hidangan. Untuk memperkenalkan rendang belalang, tim mahasiswa KKN Unand di Pematang Panjang membuat program kerja yaitu video profil nagari, dimana salah satu isi video profil tersebut  menginformasikan mengenai pembuatan rendang belalang. Dan dengan adanya video profile nagari tersebut dapat membantu memperkenalkan rendang belalang ke masyarakat luas.', 'articles/CudCgwLkhZYrnAHxWblPGM8Zvpfd8JAGqJJLkihW.jpg', 1, '2025-08-20 02:55:57', '2025-08-20 02:55:57'),
(6, 'Edukasi Program Kerja Remaja S.I.A.P ( Sadar Internet Anti Penyimpangan) di Era Digital oleh Mahasiwa KKN Unand  di Pematang Panjang 2025', 'edukasi-program-kerja-remaja-siap-sadar-internet-anti-penyimpangan-di-era-digital-oleh-mahasiwa-kkn-unand-di-pematang-panjang-2025', 'artikel', 'Di tengah pesatnya perkembangan teknologi digital, remaja Indonesia saat ini hidup dalam lingkungan yang sangat terhubung dengan dunia maya. Akses terhadap internet, media sosial, dan berbagai platform interaktif menjadi bagian tak terpisahkan dari kehidupan sehari-hari mereka, baik untuk keperluan belajar, berinteraksi dengan teman, maupun mencari hiburan. Perkembangan ini membuka peluang besar bagi remaja untuk mengembangkan kreativitas, memperluas wawasan, dan memanfaatkan teknologi sebagai sarana membangun masa depan. Namun, di balik potensi besar tersebut, tersembunyi pula berbagai risiko yang dapat menjerumuskan mereka ke dalam perilaku menyimpang di ranah digital. Fenomena ini tidak lagi bersifat kasuistis, melainkan telah menjadi masalah serius yang memerlukan perhatian bersama. Melihat kondisi tersebut, mahasiswa KKN Unand di Pematang Panjang membuat program kerja edukasi remaja SIAP (Sadar Internet Anti Penyimpangan) yang berlokasi di SMPN 13 Pematang Panjang.\r\nHasil survei UNICEF menunjukkan fakta yang mengkhawatirkan sekitar 45% remaja Indonesia berusia 14–24 tahun pernah menjadi korban cyberbullying. Bentuknya beragam, mulai dari pelecehan verbal melalui aplikasi pesan instan, penyebaran foto atau video pribadi tanpa izin, hingga tindakan perundungan yang dilakukan secara terus-menerus di media sosial. Perundungan daring ini tidak hanya berdampak pada kesehatan mental korban, tetapi juga dapat memengaruhi prestasi belajar, hubungan sosial, dan rasa percaya diri mereka. Kondisi ini diperburuk dengan tingginya arus informasi di internet yang tidak selalu disertai dengan kemampuan menyaring dan memverifikasi kebenarannya. Dr. Fitrini, S.P., M.Ec selaku DPL dari tim mahasiswa KKN Unand di nagari Pematang Panjang juga ikut menyarankan mahasiswanya untuk memberikan edukasi mengenai penyimpangan dan penyalahgunaan media sosial di masyarakat khususnya di kalangan remaja.\r\nDi sisi lain, hasil pengukuran tingkat literasi digital nasional pada tahun 2022 menunjukkan skor 3,54 dalam skala 1–5. Angka ini memang mengalami peningkatan dibandingkan tahun sebelumnya, yang menandakan adanya kemajuan dalam kecakapan digital, etika berinternet, kesadaran keamanan siber, dan pemahaman budaya digital. Akan tetapi, skor tersebut masih berada pada kategori “sedang”, yang berarti masih banyak ruang perbaikan. Rendahnya kesadaran terhadap etika digital dan lemahnya kemampuan melindungi data pribadi membuat sebagian remaja rentan terpapar dampak negatif dunia maya, mulai dari penipuan online, penyalahgunaan identitas, paparan konten kekerasan atau pornografi, hingga keterlibatan dalam aktivitas ilegal seperti perjudian online. Kondisi ini turut dirasakan di lingkungan SMP 13 Pematang Panjang, di mana pihak sekolah melihat adanya kebutuhan mendesak untuk mengawasi aktivitas digital siswa. Dari hal tersebut, salah satu guru meminta mahasiswa KKN Unand Pematang Panjang untuk merancang sebuah aplikasi yang dapat memantau dan merekam histori penggunaan ponsel murid, sehingga potensi penyimpangan dapat diperiksa.\r\nFakta-fakta ini menjadi sinyal bahwa kemajuan teknologi perlu diimbangi dengan pembentukan karakter digital yang kuat. Remaja tidak hanya perlu dibekali kemampuan teknis dalam menggunakan teknologi, tetapi juga pengetahuan untuk mengidentifikasi risiko, keterampilan berpikir kritis dalam memilah informasi, serta kesadaran akan tanggung jawab sebagai warga digital yang beretika. Kondisi tersebut semakin menegaskan pentingnya hadirnya gerakan SIAP (Sadar Internet Anti Penyimpangan) sebagai salah satu pendekatan edukatif yang menyasar langsung kelompok remaja. Gerakan ini dirancang untuk membekali generasi muda dengan pengetahuan, kesadaran, dan keterampilan yang memadai agar mereka mampu memanfaatkan teknologi digital secara bijak. SIAP tidak hanya memandang internet sebagai sarana hiburan atau komunikasi semata, melainkan juga sebagai ruang yang kompleks, penuh peluang sekaligus tantangan yang harus dihadapi dengan kecerdasan dan kewaspadaan. Dalam kerangka ini, remaja diajak memahami bahwa di balik layar gawai yang mereka gunakan setiap hari, terdapat potensi risiko yang nyata mulai dari perundungan online (cyberbullying), pelanggaran privasi akibat penyalahgunaan data pribadi, hingga paparan informasi palsu atau hoaks yang dapat menyesatkan opini dan perilaku. Oleh karena itu, edukasi yang diberikan oleh mahasiswa KKN UNAND di Pematang Panjang secara khusus menyoroti bahaya cyberbullying, memberikan pemahaman menyeluruh mengenai bentuk-bentuknya, dampak yang ditimbulkan, serta strategi pencegahan agar remaja mampu melindungi diri sekaligus menghargai orang lain di ruang digital.\r\nEdukasi yang diberikan oleh mahasiswa KKN Universitas Andalas di Pematang Panjang tidak hanya berfokus pada isu cyberbullying, tetapi juga merangkum berbagai ancaman digital lainnya yang kerap mengintai remaja. Salah satunya adalah fenomena kecanduan perjudian digital yang sering terselubung dalam bentuk permainan daring berbayar, serta berbagai perilaku menyimpang lainnya di ruang maya. Kondisi ini semakin memperkuat urgensi pendidikan literasi digital yang komprehensif. Melalui gerakan SIAP, remaja tidak hanya diajarkan cara mengidentifikasi dan menghindari risiko tersebut, tetapi juga dibekali keterampilan praktis seperti melakukan verifikasi informasi, menjaga keamanan akun, mengelola jejak digital, serta mengembangkan etika komunikasi yang sehat di media sosial. Langkah awal untuk menjadi digital citizen yang bertanggung jawab dimulai dari kesadaran bahwa keamanan dan kenyamanan di dunia maya bukan hanya tanggung jawab pihak berwenang atau platform penyedia layanan, melainkan juga tanggung jawab setiap individu. Dengan kesadaran ini, generasi muda diharapkan dapat menjadi pengguna internet yang produktif, kreatif, dan berintegritas, sekaligus mampu berkontribusi dalam menciptakan ekosistem digital yang aman dan sehat.\r\nImplementasi program SIAP sebaiknya dilakukan melalui kombinasi pendekatan formal, informal, dan digital. Di ranah pendidikan, sekolah bisa memasukkan literasi digital dalam kurikulum, dengan materi tentang etika digital, keamanan online, serta simulasi penanganan kasus cyberbullying. Di luar kelas, kampanye kreatif di media sosial menggunakan tagar seperti #RemajaSIAP dapat melahirkan konten edukatif yang menarik bagi generasi Gen Z. Pelatihan seperti fact-checking, pengaturan privasi akun, serta pengenalan terhadap digital self-defense juga penting agar remaja tidak mudah terjebak dalam informasi palsu atau konten eksploitasi. Lebih dari itu, kolaborasi antarlembaga dan komunitas menjadi fondasi kuat program ini. Orang tua perlu dilibatkan untuk mendampingi penggunaan gadget secara sehat, guru dan tokoh masyarakat dapat menjadi penggerak diskusi di lingkungan sekolah, dan pihak berwenang seperti Kominfo atau Polri dapat memberikan sosialisasi tentang aspek hukum seperti Undang-Undang ITE. Dalam ranah narkoba dan konten negatif, Badan Narkotika Nasional (BNN) bahkan telah memperkuat strategi pencegahan melalui pelatihan penyuluh serta edukasi berbasis karakter animasi anti-narkoba.\r\nRemaja juga perlu dilibatkan sebagai agent of change bukan hanya sebagai target edukasi. Mereka potensial menjadi influencer positif, pelapor konten berbahaya, atau anggota komunitas digital sehat. Partisipasi aktif ini akan menjadikan gerakan SIAP lebih hidup dan berdampak. Internet kemudian tidak hanya menjadi ruang konsumsi, tapi juga ruang kreatif dan edukatif yang menumbuhkan karakter produktif, kritis, dan bertanggung jawab.', 'articles/kxQBc04NZsdmg3CCNS42WikBP7BMpdGWM9npEMef.jpg', 1, '2025-08-20 02:59:13', '2025-08-20 02:59:13'),
(7, 'Posyandu Bulanan Terpadu: Wujud Sinergi Mahasiswa KKN, Pustu, dan Kader dalam Meningkatkan Kesehatan Masyarakat', 'posyandu-bulanan-terpadu-wujud-sinergi-mahasiswa-kkn-pustu-dan-kader-dalam-meningkatkan-kesehatan-masyarakat', 'berita', 'Kegiatan Posyandu Bulanan Terpadu kembali dilaksanakan di Jorong Pondok Jago, Nagari Pematang Panjang, sebagai bentuk komitmen bersama dalam meningkatkan pelayanan kesehatan masyarakat. Kegiatan ini merupakan hasil kolaborasi antara mahasiswa KKN Unand Pematang Panjang, pihak Puskesmas Pembantu (Pustu), serta kader kesehatan setempat, dan mendapat dukungan penuh dari pemerintah nagari.\r\nPelayanan kesehatan difokuskan pada dua kelompok utama, yaitu balita dan lansia. Pada balita, dilakukan pemeriksaan berupa pengukuran tinggi badan, berat badan, dan lingkar kepala guna memantau tumbuh kembang serta status gizi anak. Selain itu, balita juga mendapatkan imunisasi yang diberikan langsung oleh Bidan Tia selaku pengelola Pustu Jorong Pondok Jago, sebagai langkah pencegahan penyakit sejak dini. Sementara itu, para lansia memperoleh layanan pemeriksaan kesehatan meliputi pengukuran tinggi dan berat badan, pemeriksaan tekanan darah, pengecekan kadar gula darah, serta skrining hipertensi. Pemeriksaan ini dilaksanakan oleh mahasiswa keperawatan bersama kader kesehatan dan bidan, sebagai upaya deteksi dini penyakit tidak menular yang banyak dialami oleh kelompok usia lanjut.\r\nTidak hanya pemeriksaan fisik, lansia juga mengikuti sesi penyuluhan dan diskusi mengenai hipertensi yang disampaikan oleh mahasiswa kebidanan. Dalam penyuluhan tersebut, disampaikan pentingnya menjaga pola hidup sehat, mengontrol tekanan darah secara rutin, serta meningkatkan kesadaran akan pencegahan komplikasi akibat hipertensi. Selain itu, kegiatan ini juga diisi dengan psikoedukasi bagi orang tua balita mengenai dampak screen time pada anak. Edukasi yang disampaikan oleh mahasiswa psikologi membahas pengaruh penggunaan gawai berlebihan terhadap perkembangan anak, serta memberikan arahan tentang pola asuh yang tepat dalam mengatur penggunaan layar agar tetap seimbang dan sesuai dengan usia anak.\r\nKegiatan posyandu ini turut didukung oleh kehadiran 10 mahasiswa KKN dari berbagai jurusan yang membantu pelaksanaan kegiatan serta melakukan stimulasi perkembangan kepada anak-anak balita melalui aktivitas edukatif. Secara keseluruhan, lebih dari 50 balita dan lansia hadir dan mengikuti rangkaian kegiatan dengan antusias. Serta Kegiatan ini juga dihadiri langsung oleh Bapak Wali Nagari beserta perangkat nagari lainnya, sebagai bentuk dukungan dan perhatian pemerintah nagari terhadap peningkatan kesehatan masyarakat. Diharapkan, melalui kegiatan Posyandu Bulanan Terpadu ini, kesadaran masyarakat terhadap pentingnya kesehatan sejak usia dini hingga lanjut usia semakin meningkat.', 'articles/oLaAMSrC8Ud85pSX3cPil33Vtuf9xJwKbFrJOu9R.jpg', 1, '2026-01-07 17:20:50', '2026-01-07 17:33:57'),
(8, 'Penerimaan Penghargaan Proklim Utama di Kementerian Lingkungan Hidup', 'penerimaan-penghargaan-proklim-utama-di-kementerian-lingkungan-hidup', 'berita', 'Prestasi membanggakan kembali ditorehkan oleh masyarakat Nagari Pematang Panjang, Kecamatan Sijunjung, Kabupaten Sijunjung. Pada 24 Oktober 2023, nagari Pematang Panjang berhasil meraih Penghargaan Program Kampung Iklim Kategori Utama dari Kementerian Lingkungan Hidup dan Kehutanan (KLHK) Republik Indonesia.\r\nPenghargaan bergengsi tersebut diserahkan langsung dalam acara nasional yang diselenggarakan oleh KLHK dan dihadiri oleh perwakilan pemerintah daerah, pegiat lingkungan, serta komunitas dari seluruh Indonesia. Suasana penuh apresiasi terasa kental, menandai komitmen bersama dalam menghadapi tantangan perubahan iklim.\r\nPenghargaan ProKlim Utama merupakan tingkatan tertinggi dalam Program Kampung Iklim, yang diberikan kepada wilayah yang dinilai konsisten dan berkelanjutan dalam melaksanakan aksi nyata adaptasi dan mitigasi perubahan iklim. Penilaian dilakukan berdasarkan berbagai indikator, seperti pengelolaan lingkungan berbasis masyarakat, pengurangan emisi gas rumah kaca, pengelolaan sampah, penghijauan, ketahanan pangan, serta kesiapsiagaan menghadapi dampak perubahan iklim.\r\nKeberhasilan Nagari Pematang Panjang tidak lepas dari partisipasi aktif seluruh masyarakat, mulai dari pemerintah nagari, tokoh masyarakat, kelompok tani, kader lingkungan, hingga generasi muda. Berbagai inovasi lingkungan yang dilakukan, seperti pengelolaan sampah terpadu, pemanfaatan lahan pekarangan, penghijauan, serta edukasi lingkungan secara berkelanjutan, menjadi bukti nyata bahwa kolaborasi masyarakat mampu memberikan dampak besar bagi kelestarian alam.\r\nPerwakilan nagari yang menerima penghargaan menyampaikan rasa syukur dan bangga atas capaian ini. Menurutnya, penghargaan tersebut bukan hanya simbol prestasi, tetapi juga amanah untuk terus menjaga komitmen dalam melindungi lingkungan.\r\nProgram Kampung Iklim sendiri merupakan inisiatif nasional KLHK yang mendorong peran aktif masyarakat dalam menghadapi perubahan iklim melalui aksi lokal yang berdampak global. Hingga saat ini, ribuan lokasi ProKlim telah terbentuk di seluruh Indonesia sebagai garda terdepan pembangunan berketahanan iklim.\r\nDengan diraihnya ProKlim Utama, Nagari Pematang Panjang resmi masuk dalam jajaran kampung inspiratif tingkat nasional. Prestasi ini diharapkan tidak hanya mengharumkan nama daerah, tetapi juga memperkuat semangat masyarakat dalam mewujudkan pembangunan yang berwawasan lingkungan dan berkelanjutan.', 'articles/UWKdSIcQrGKXMulyvhtglu7xvIIHZn7x9Jtaag6U.jpg', 1, '2026-01-17 05:09:00', '2026-01-17 05:10:07'),
(9, 'Juara 1 Tingkat Provinsi, Penghargaan Posyandu, Kader Posyandu Terbaik', 'juara-1-tingkat-provinsi-penghargaan-posyandu-kader-posyandu-terbaik', 'berita', 'Prestasi membanggakan kembali diraih Nagari Pematang Panjang di tingkat provinsi. Pada ajang Penilaian Posyandu Berprestasi Tingkat Provinsi, Posyandu Nagari Pematang Panjang tampil unggul dengan meraih Juara 1, sekaligus mencatatkan prestasi melalui penghargaan Kader Posyandu Terbaik Tingkat Provinsi.\r\nPenghargaan ini diberikan berdasarkan hasil penilaian menyeluruh yang mengacu pada kebijakan dan pedoman terbaru pengelolaan Posyandu, meliputi aspek pelayanan kesehatan ibu dan anak, inovasi kegiatan, administrasi, peran kader, serta dampak nyata bagi masyarakat. Prestasi tersebut menjadi bukti nyata komitmen Nagari Pematang Panjang dalam meningkatkan kualitas layanan kesehatan berbasis masyarakat.\r\nKeberhasilan ini tidak terlepas dari peran aktif para kader posyandu yang secara konsisten memberikan pelayanan, edukasi kesehatan, serta pendampingan kepada masyarakat. Kader Posyandu Nagari Pematang Panjang dinilai unggul dalam dedikasi, kedisiplinan, kreativitas program, serta kemampuan berkolaborasi dengan perangkat nagari dan tenaga kesehatan.\r\nSelain itu, dukungan penuh dari pemerintah nagari, TP-PKK, tenaga kesehatan, serta partisipasi masyarakat menjadi faktor penting dalam pencapaian prestasi tersebut. Sinergi yang terbangun selama ini menjadikan Posyandu tidak hanya sebagai pusat layanan kesehatan, tetapi juga sebagai ruang edukasi dan pemberdayaan masyarakat.\r\nPenghargaan Juara 1 Tingkat Provinsi ini diharapkan dapat menjadi motivasi bagi seluruh kader dan pengelola posyandu untuk terus meningkatkan kualitas pelayanan. Pemerintah Nagari Pematang Panjang berkomitmen menjadikan prestasi ini sebagai pijakan untuk mempertahankan dan mengembangkan inovasi Posyandu yang berkelanjutan.\r\nDengan capaian ini, Nagari Pematang Panjang tidak hanya mengharumkan nama daerah di tingkat provinsi, tetapi juga menegaskan peran strategis Posyandu sebagai garda terdepan dalam mewujudkan masyarakat yang sehat, mandiri, dan sejahtera.', 'articles/WbHmEHjUYzVno3zi1sua3XHMBmvuHQIvyPGZzOC7.jpg', 1, '2026-01-17 05:27:24', '2026-01-17 05:27:24'),
(10, 'Daftar Kelengkapan Permohonan & Persyaratan Pembuatan Surat Pelayanan', 'daftar-kelengkapan-permohonan-persyaratan-pembuatan-surat-pelayanan', 'artikel', 'Berikut adalah daftar persyaratan administrasi untuk pengurusan surat-menyurat di Kantor Nagari:\r\n\r\n1. Surat Keterangan Belum Nikah\r\n\r\nFotocopy Kartu Keluarga (KK) dan KTP (1 Lembar)\r\n\r\n2. Surat Pengantar Nikah / NA\r\n\r\nSurat Izin Menikah dari Ninik Mamak\r\n\r\nFotocopy KTP kedua calon pengantin (1 Lembar)\r\n\r\nFotocopy KK kedua calon pengantin (1 Lembar)\r\n\r\nFotocopy Ijazah (1 Lembar)\r\n\r\nFotocopy Akte Kelahiran (1 Lembar)\r\n\r\nFotocopy Catin Imunisasi Pustu bagi pengantin wanita (1 Lembar)\r\n\r\nFotocopy KTP Wali & Saksi (1 Lembar)\r\n\r\nSurat Izin Atasan (Asli) bagi TNI, POLRI, dan PNS (1 Lembar)\r\n\r\nFotocopy Surat Cerai bagi yang cerai hidup (1 Lembar) atau Surat Keterangan Meninggal Dunia bagi yang cerai mati (1 Lembar)\r\n\r\nPas Photo ukuran 2x3 (8 Lembar) dan 4x6 (2 Lembar), latar belakang biru\r\n\r\nBagi yang pindah nikah: Pas Photo ukuran 3x4 (2 Lembar), Fotocopy KK dan KTP (1 Lembar)\r\n\r\n3. Surat Keterangan Penghasilan Orang Tua\r\n\r\nFotocopy Kartu Keluarga (KK) dan KTP (1 Lembar)\r\n\r\n4. Surat Keterangan Ahli Waris\r\n\r\nFotocopy Kartu Keluarga (KK) dan KTP Penerima dan Pemberi Waris (1 Lembar)\r\n\r\n5. Surat Keterangan Kejandaan / Duda\r\n\r\nFotocopy Kartu Keluarga (KK) dan KTP yang meninggal (1 Lembar)\r\n\r\n6. Surat Keterangan Kelahiran\r\n\r\nFotocopy Kartu Keluarga (KK) dan KTP (1 Lembar)\r\n\r\n7. Surat Keterangan Kurang Mampu (SKKM / SKTM)\r\n\r\nFotocopy Kartu Keluarga (KK) dan KTP (1 Lembar)\r\n\r\n8. Surat Pengurusan KIP Kuliah\r\n\r\nFotocopy Kartu Keluarga (KK) dan KTP (1 Lembar)\r\n\r\n9. Surat Keterangan Lainnya\r\n\r\nFotocopy Kartu Keluarga (KK) dan KTP (1 Lembar)\r\n\r\nCatatan Penting: Pengurusan surat GRATIS apabila tidak ada kendala di Jorong.', 'articles/fumF7IdOIffGtOw9FnYwKkEIzthuUA5RHrQfZGzj.jpg', 1, '2026-01-17 13:49:43', '2026-01-17 13:50:59');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('laravel-cache-admin@gmail.com|185.213.83.19', 'i:1;', 1777506334),
('laravel-cache-admin@gmail.com|185.213.83.19:timer', 'i:1777506334;', 1777506334),
('laravel-cache-admin@gmail.com|185.213.83.253', 'i:1;', 1777435415),
('laravel-cache-admin@gmail.com|185.213.83.253:timer', 'i:1777435415;', 1777435415),
('laravel-cache-admin@pematang.com|114.10.95.48', 'i:1;', 1755322987),
('laravel-cache-admin@pematang.com|114.10.95.48:timer', 'i:1755322987;', 1755322987),
('laravel-cache-admin@pematang.com|114.10.95.94', 'i:4;', 1755322543),
('laravel-cache-admin@pematang.com|114.10.95.94:timer', 'i:1755322543;', 1755322543),
('laravel-cache-admin@pematang.com|36.69.6.109', 'i:1;', 1766232532),
('laravel-cache-admin@pematang.com|36.69.6.109:timer', 'i:1766232532;', 1766232532),
('laravel-cache-admin@pematangpanjang|2404:c0:9850:7850:4479:e842:648d:e24b', 'i:5;', 1784187014),
('laravel-cache-admin@pematangpanjang|2404:c0:9850:7850:4479:e842:648d:e24b:timer', 'i:1784187014;', 1784187014),
('laravel-cache-juliman57@guru.smp.belajar.id|182.4.68.97', 'i:1;', 1755693123),
('laravel-cache-juliman57@guru.smp.belajar.id|182.4.68.97:timer', 'i:1755693123;', 1755693123);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `gambar` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `judul`, `deskripsi`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'Rumah Gadang Caniago', NULL, 'gallery/tDsOChR53YStiq5BeHp94iqnHuGMnR9Xvq206JSd.jpg', '2025-08-15 19:12:02', '2025-08-15 19:46:11'),
(2, 'Taman Makam Pahlawan Puspa Bangsa', NULL, 'gallery/UzlHZxWvoZ0NUl1DVgooxwW48vA8xBuvlyh8ZeNq.jpg', '2025-08-15 19:47:38', '2025-08-15 19:47:38'),
(3, 'Pasar Rakyat Nagari Pematang Panjang', NULL, 'gallery/epKpsOXRRANXkRPwrtqSq7ytVWVQIsjkuT7crOGv.jpg', '2025-08-15 19:48:20', '2025-08-15 19:48:20'),
(4, 'Pemandangan Pemukiman Nagari Pematang Panjang', NULL, 'gallery/8ij1tPuYNamdmiq5wcNJ2mIKC6zGpl8XQiAh3he4.jpg', '2025-08-15 19:49:44', '2025-08-15 19:49:44'),
(5, 'Rumah Adat Minang', NULL, 'gallery/7clUflqS5Pqml3t3h4DPF0KHz3CJxpwp3nMnwJjB.jpg', '2025-08-15 19:50:06', '2025-08-15 19:50:06'),
(6, 'Rumah Adat Minang', NULL, 'gallery/0tx1csL9Rrvmu0moqXHhNiMxFucf3Ssf8rM81zEt.jpg', '2025-08-15 19:50:28', '2025-08-15 19:50:28'),
(7, 'Rumah Adat Minang', NULL, 'gallery/QTE4nNon3YGY0VNZNbtmtf59wqYeflkMEQAnLAMG.jpg', '2025-08-15 19:50:53', '2025-08-15 19:51:05'),
(8, 'Masjid Sekitaran Nagari Pematang Panjang', NULL, 'gallery/W0Tpgl4JdWVN80X4WrpYllXsbFGB3L1dQCpb84fj.jpg', '2025-08-15 19:51:59', '2025-08-15 19:51:59'),
(9, 'lomba solo song', 'Kegiatan perlombaan ini dilaksanakan dalam rangka memeriahkan HUT RI yang ke 80 di Pelataran Pasar Rakyat Pematang Panjang, dilaksanakan 2 Tingkat Tingkat SD dan Tingkat UMUM', 'gallery/KEa0Vl8G3BbIRmUBZ7TeBAZ4yPxaXsu5Cc9181Ls.jpg', '2025-08-20 01:58:44', '2025-08-20 02:00:31'),
(10, 'Rumah Gadang Melayu Kampuang Pinang', NULL, 'gallery/Mch8SR8ZYUtTJeXntkbJgrPqc0L4cJDzDeOe0jP2.jpg', '2026-01-17 03:11:52', '2026-01-17 03:25:03'),
(11, 'Rumah Gadang Melayu Lontiak', NULL, 'gallery/8LY0dLelff6jFKjmzaToCnpU2UnaFXXbytX1tn9m.jpg', '2026-01-17 03:24:29', '2026-01-17 03:24:29'),
(12, 'Rumah Gadang Melayu Kobou', NULL, 'gallery/q8IoSMMVEUBRyToEyKgqHnyOjkmApnp9QUQZG8wM.jpg', '2026-01-17 03:26:33', '2026-01-17 03:26:33'),
(13, 'Rumah Gadang Malayu Mudiak', NULL, 'gallery/vkizFOpd4ehH1PRhzkfcRUYBXN8dPwzKBUlEZp3Q.jpg', '2026-01-17 03:28:28', '2026-01-17 03:28:28'),
(14, 'Rumah Gadang Melayu Diligh', NULL, 'gallery/tLboo2lQvefJw3ydAbPPO3KugSpHO3ccNRRc26aW.jpg', '2026-01-17 03:29:43', '2026-01-17 03:29:43'),
(15, 'Rumah Gadang Melayu Tongah', NULL, 'gallery/D1iN8LlZiLRDlQsJIysStAS72FzEap5XXkl55g15.jpg', '2026-01-17 03:30:55', '2026-01-17 03:30:55'),
(16, 'Rumah Gadang Patopang Usagh', NULL, 'gallery/kqRV6UNNJttxF2k037pUHmaUWqhBe6M3LRbopMxC.jpg', '2026-01-17 03:32:19', '2026-01-17 03:32:19'),
(17, 'Rumah Gadang Patopang Taka', NULL, 'gallery/9ZCHdn0ynsi84cm0QZeggVGmkyjbWehXy1speJop.jpg', '2026-01-17 03:33:24', '2026-01-17 03:33:24'),
(18, 'Rumah Gadang Patopang Uma Baru', NULL, 'gallery/aYKdx6xScvrB8OlFMbupfQ4j5M33E3ZW8Th40aPz.jpg', '2026-01-17 03:34:31', '2026-01-17 03:34:31'),
(19, 'Rumah Gadang Patopang Kapalo Koto', NULL, 'gallery/YLl16KRAN7iIRUlskX93aG7WbnzAUFJCuWlaTcsY.jpg', '2026-01-17 03:35:48', '2026-01-17 03:35:48'),
(20, 'Rumah Gadang Patopang Bua Manggi', NULL, 'gallery/LRr63JonaTIC1e6bU5mHKZ4HTmru34SliwpRpX83.jpg', '2026-01-17 03:36:49', '2026-01-17 03:36:49'),
(21, 'Rumah Gadang Piliang Tongah Pegawai', NULL, 'gallery/zFsXfwNiIAJhNlCeZIvEfsbwIhZQcLAYeanUrKH3.jpg', '2026-01-17 03:38:05', '2026-01-17 03:38:05'),
(22, 'Rumah Gadang Piliang Tongah Monti', NULL, 'gallery/FgDjLN04TmtwWxFIhPjCbwz5wWmHoq9QTGJus2oo.jpg', '2026-01-17 03:39:57', '2026-01-17 03:39:57'),
(23, 'Rumah Gadang Piliang Uma Baukigh', NULL, 'gallery/IsNedMY8qrSH9EQQQ0XUvrnLY4K5UH6ViyGYG0wY.jpg', '2026-01-17 03:40:56', '2026-01-17 03:40:56'),
(24, 'Rumah Gadang Piliang Tongah', NULL, 'gallery/3kXPwWTwOsVAT64bMMrk6Gst71FRTdCEyljgbtm3.jpg', '2026-01-17 03:44:19', '2026-01-17 03:44:19'),
(25, 'Rumah Gadang Piliang Lokuok', NULL, 'gallery/aAN5iKIIAKumLVchi0CpwzTuNK7Jq6NSkRCndrwu.jpg', '2026-01-17 03:45:37', '2026-01-17 03:45:37'),
(26, 'Rumah Gadang Piliang Godang', NULL, 'gallery/DcyYkqFM7rNxaNFKY05jT3vvX4ZAfmXUO2MBiTZC.jpg', '2026-01-17 03:46:42', '2026-01-17 03:46:42'),
(27, 'Rumah Gadang Caniago', NULL, 'gallery/GdcK2v8yS4JozD5W68NhK18UygcEmmO5y2590uHi.jpg', '2026-01-17 03:47:59', '2026-01-17 03:47:59'),
(28, 'Peta Penyebaran Galo-Galo', NULL, 'gallery/JAYDG5a1T2joaaKLM5UVhT5zMkY59HqgQqIfML3y.jpg', '2026-01-17 03:52:34', '2026-01-17 03:52:34'),
(29, 'Peta Administrsi Sijunjung', NULL, 'gallery/oWvT1cVRAahMOWtOSHzOtPH2NdeTh794jcXhFAoN.jpg', '2026-01-17 04:00:19', '2026-01-17 04:00:19');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_07_23_091402_create_umkms_table', 1),
(5, '2025_07_23_091502_create_galleries_table', 1),
(6, '2025_07_23_091524_create_articles_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('0DVShEP7fC0Otd8otC8ZtDv9HMufKWfJsHenZNz0', NULL, '213.180.203.86', 'Mozilla/5.0 (compatible; YandexBot/3.0; +http://yandex.com/bots)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZjg5NXdqWHZZRnlpOEJQOTZLbkJKSTNKZkRJNmpXRmhSR1lFUDNORyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHBzOi8vbmFnYXJpcGVtYXRhbmdwYW5qYW5nLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1784602804),
('2uetecqXbshaxFzWW4IkX4FFy17hhU0Qu8mIxiQ6', NULL, '223.91.164.170', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.102 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidDJzSlBtM2ZCWlB5amtUUkQwRm1VSWZET09wcUk5V2dldjhWVEhneCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHBzOi8vbmFnYXJpcGVtYXRhbmdwYW5qYW5nLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1784667639),
('5o91cpZqH9xovGxws7UMoSrJuJaUzzsaCjUGZjdf', NULL, '2404:c0:d001:61ff:f469:c8fe:2994:ba69', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Code/1.129.1 Chrome/148.0.7778.280 Electron/42.6.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicUVEWVRpMDJ5ZTYwRUtZM0pDTmRTSEZTbGlXMmhGT2RBRWx3RTJwcyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzg6Imh0dHBzOi8vbmFnYXJpcGVtYXRhbmdwYW5qYW5nLmNvbS91bWttIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1784560645),
('ACxdGx6pUInzmq2e48ibKYeFWWsqgAZcBBHrlLjt', NULL, '112.49.162.176', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.102 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTVVUQ2pqMU5tczRyVEgzNEJnZkpXSG5GT1JFd3Q3WWdjVkxlVDdleiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHBzOi8vbmFnYXJpcGVtYXRhbmdwYW5qYW5nLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1784629423),
('apcbt2HneA4BICVgVjpFt9roqlgi3PyegWJqxXiz', NULL, '103.190.46.156', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/150.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibm5zQkw0TDNORHYxOEJxbVg0OGFZeVlhd2tkVnBzdm1YRjFxM2IwSCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHBzOi8vbmFnYXJpcGVtYXRhbmdwYW5qYW5nLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1784688185),
('C6l4x7rTa54D1m7q3SsTW8M6DZWcxraveZfKej9E', NULL, '198.20.67.199', 'Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; WOW64; Trident/6.0)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiaGpMQ0kxdHYzeE0xaU1VY3JFSU9tNEIxTFoxRW9aSXVyYXJ5TXU0diI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHBzOi8vd3d3Lm5hZ2FyaXBlbWF0YW5ncGFuamFuZy5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1784640349),
('d51L52oP559vA0wL7DjTeV2rV2BfgATvaG6WMFPl', NULL, '207.32.150.78', 'Mozilla/5.0 (iPhone; CPU iPhone OS 17_3_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) EdgiOS/140.0.3485.52 Version/17.0 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicGFjSXNkVzQ5WDRvWm9WaGR5UUk5ajVZZGNIamVKbUF4akR5N2I1RiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzg6Imh0dHBzOi8vbmFnYXJpcGVtYXRhbmdwYW5qYW5nLmNvbS9wZXRhIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1784625369),
('EYJeE6O2hdvHCii1GZMzigLPvhJWqfLGBmsTAfgM', NULL, '198.20.67.199', 'Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; WOW64; Trident/6.0)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidXBHdmRSRlBvakc2MThIbFlvNTBmQ3RGUFFxYlVzWUNyREZPbzgwRyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTE0OiJodHRwczovL3d3dy5uYWdhcmlwZW1hdGFuZ3BhbmphbmcuY29tL2FydGlrZWwvanVhcmEtMS10aW5na2F0LXByb3ZpbnNpLXBlbmdoYXJnYWFuLXBvc3lhbmR1LWthZGVyLXBvc3lhbmR1LXRlcmJhaWsiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1784640352),
('g0Yjk4yrQ1h4ptni4wxhv6gGOfBUxnuXV99bcajN', NULL, '2404:c0:d001:61ff:f469:c8fe:2994:ba69', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Code/1.129.1 Chrome/148.0.7778.280 Electron/42.6.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMlJiT1FLa2Q5Wk5lUGtTYVJJTU5QVWdrWmpOSEV6a1lYcHVod1U3biI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHBzOi8vbmFnYXJpcGVtYXRhbmdwYW5qYW5nLmNvbS9nYWxlcmkiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1784560645),
('GBMxEjg7vAyJmKXCdBQXD0wO5E4DztyNu0hnlSsM', NULL, '2404:c0:d001:61ff:f469:c8fe:2994:ba69', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Code/1.129.1 Chrome/148.0.7778.280 Electron/42.6.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTURjWjEyWTd2dmc1eWtoc1Z5RlE4bmRiMjE2aEVuR0FaZ0VDaUtkUSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTA6Imh0dHBzOi8vbmFnYXJpcGVtYXRhbmdwYW5qYW5nLmNvbS9pbmZvcm1hc2kvcHJvZmlsIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1784560037),
('goZSNoSjJnYoSduDR8FU81hRNmJ2P7NLzos7JlKK', NULL, '216.73.217.142', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; ClaudeBot/1.0; +claudebot@anthropic.com)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUkVyZ3ZLeklxcldNRnZJb0N5QUxzRmdJcjhQWDJ3TmVTZ0FWVnR6dSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHBzOi8vbmFnYXJpcGVtYXRhbmdwYW5qYW5nLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1784664003),
('Icg8dwzsXBjV6XMNEPyVyhM0rjpe6L5Mc95MXXXJ', NULL, '103.106.216.68', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiaWg5RTRPQktCaUN0Q0xGSURJM2VqZjhjSXpHUUZSQnB3Q3FNcG84ciI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTM6Imh0dHBzOi8vbmFnYXJpcGVtYXRhbmdwYW5qYW5nLmNvbS9pbmZvcm1hc2kvdmlzaS1taXNpIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1784620836),
('iXhZsTDckkksLCDHX1iPaKQVafz7Wklg1rjv94oD', NULL, '54.38.147.192', 'Mozilla/5.0 (compatible; AhrefsBot/7.0; +http://ahrefs.com/robot/)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZjZPdFNTdzlraW10VEZBOG00Mm5MUDExdEc4MUFjSFBTT2VnZkJYTiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NjM6Imh0dHBzOi8vbmFnYXJpcGVtYXRhbmdwYW5qYW5nLmNvbS9pbmZvcm1hc2kvc3RydWt0dXItb3JnYW5pc2FzaSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1784562266),
('jYrFdVO1yCJUFoC0fL96iW4d55le4bopzWUgfnWg', NULL, '2404:c0:d001:61ff:f469:c8fe:2994:ba69', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Code/1.129.1 Chrome/148.0.7778.280 Electron/42.6.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNHNoMGpCQzd2anpDNEkzanNaaGdWWkVERUo3SDc4UDYxaGEyOVhGcyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTM6Imh0dHBzOi8vbmFnYXJpcGVtYXRhbmdwYW5qYW5nLmNvbS9pbmZvcm1hc2kvdmlzaS1taXNpIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1784560037),
('kQH4ybW9LkaaFcWt35qd5LXCAtXtBG3ZRkhyHcVe', NULL, '2001:4860:7:806::e3', 'Mozilla/5.0 (X11; CrOS x86_64 14541.0.0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMGtHRDNUdFR1aGhwbjMwRmZPUDdFTWwzRWtBQ05PRHpaVVFqc1Z5byI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTA6Imh0dHBzOi8vbmFnYXJpcGVtYXRhbmdwYW5qYW5nLmNvbS9pbmZvcm1hc2kvcHJvZmlsIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1784609568),
('mhz0nVjPcjDEIvZVgFyIQ6Psv1PHhnkw4NAgce1R', NULL, '40.88.21.235', 'DuckDuckBot/1.1; (+http://duckduckgo.com/duckduckbot.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZUw3NVlWWWJ4QzhGZ1JGd1FUVXQ2cDN1TW44S0MzY0Fad3RqdUhCWCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHBzOi8vbmFnYXJpcGVtYXRhbmdwYW5qYW5nLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1784575049),
('NDMhjYJx00Ntedh36B6MZGM9EILw3F0nWJGavJjm', NULL, '47.128.120.47', 'Mozilla/5.0 (Linux; Android 5.0) AppleWebKit/537.36 (KHTML, like Gecko) Mobile Safari/537.36 (compatible; Bytespider; spider-feedback@bytedance.com)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWUV4em9abERJSEo4b1pDR0pDaWJDcHFyaDdrY0ptd0RlcUJaeEpabyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NjE6Imh0dHBzOi8vbmFnYXJpcGVtYXRhbmdwYW5qYW5nLmNvbS91bWttL2J1YnVrLWtvcGktYXNsaS1jYXAtcm0iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1784560795),
('ohmCzc5EPEgYaOnjOD9BpTeyqH2BBm3KCRxxmZ82', NULL, '2404:c0:d001:61ff:f469:c8fe:2994:ba69', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Code/1.129.1 Chrome/148.0.7778.280 Electron/42.6.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidjFJQ2l5Q1lIR0hVeTFRcVZRdjNoNXBXTWNNakh5c0tPN1djWkRudyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHBzOi8vbmFnYXJpcGVtYXRhbmdwYW5qYW5nLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1784560018),
('OsBg5H5ZYGKfCgmDskD7nSHYD5JjYrfdAUXqu86c', NULL, '198.20.67.199', 'Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; WOW64; Trident/6.0)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiOEl2TmROWkU0bmNobXFnR1R6YU9VeGdTZGZ3c3dWd25ZTmFtcWk1MyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHBzOi8vd3d3Lm5hZ2FyaXBlbWF0YW5ncGFuamFuZy5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1784640363),
('ql1sH7rJKCCEdjXrKbkFh1pP5BMKwIp6yZyPf56u', NULL, '180.153.236.251', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36 Edg/140.0.0.0; 360Spider', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoia3NsdGpkS25Ob2VYRVBqWE9ZYkswSVhEOGZMTllmaFBMQ2xub0RFTCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHBzOi8vbmFnYXJpcGVtYXRhbmdwYW5qYW5nLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1784627768),
('QvY7M3KWvBvOOTjaUCyeJKaPzPKOzNO6p1MaLt6x', NULL, '134.199.210.198', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMnNNeDkwYmQ1TjVDemZ3dVYwN1JaRjFYdGlCUjllZEplSWR3bFp0WiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHBzOi8vbmFnYXJpcGVtYXRhbmdwYW5qYW5nLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1784660943),
('S2kvB3Fij2itpsbfhPjbDcDIVGtxmH8ZGtwhBVeN', NULL, '2001:4860:7:506::d9', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/150.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWFp4cVNTa2U3Um5uV2dyU3Btc2QxeEhHZU9ZSXNDaDhvdWMyeDltSiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTA6Imh0dHBzOi8vbmFnYXJpcGVtYXRhbmdwYW5qYW5nLmNvbS9pbmZvcm1hc2kvcHJvZmlsIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1784617087),
('sUhiMwK1NdSjfswN63zMyoo9PYGyBwjulblcGZPs', NULL, '47.128.120.75', 'Mozilla/5.0 (Linux; Android 5.0) AppleWebKit/537.36 (KHTML, like Gecko) Mobile Safari/537.36 (compatible; Bytespider; spider-feedback@bytedance.com)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiYUg3Q2k1MmJRWEhiYm1EZG80ZDBXQlUwYjdyR1liREkxbVJXaTVEZiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTI1OiJodHRwczovL25hZ2FyaXBlbWF0YW5ncGFuamFuZy5jb20vYXJ0aWtlbC9nYXN0cm9ub21pLWRhbGFtLWxpbnRhcy13YWt0dS1la3Npc3RlbnNpLXJlbmRhbmctYmVsYWxhbmcteWFuZy10YWtrYW4tcGVybmFoLWhpbGFuZyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1784604631),
('sV2E6dk1sZq8XD5HVBufuVrUjvUoAMqpVM2PzoZx', NULL, '216.73.217.142', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; ClaudeBot/1.0; +claudebot@anthropic.com)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieDJFcWtVaWE0M3RHQVRQNUozMDUwYURybXYwcDQ1TzVLNmtxc3hSWiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHBzOi8vbmFnYXJpcGVtYXRhbmdwYW5qYW5nLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1784575268),
('UGJiNWybE5GdV9kFs7x9amfwrlrtOPs7kRktmmNH', NULL, '66.249.71.40', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/150.0.7871.128 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiYzhxVVJkcXlLZDJLUXFZVlREMnhoVnhxT2ZaMjE2b01LWjU1TmtoVSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHBzOi8vbmFnYXJpcGVtYXRhbmdwYW5qYW5nLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1784576644),
('uWQgLJuwAj82STeT96ywS6nZHGeG87lM0ye96mSe', NULL, '198.244.242.164', 'Mozilla/5.0 (compatible; AhrefsBot/7.0; +http://ahrefs.com/robot/)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibndnRGVIYm1pNlQ4VEN5QTRMSXl1RW5UMDRDbHdBRkVZc0RaNDZYSyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTI6Imh0dHBzOi8vbmFnYXJpcGVtYXRhbmdwYW5qYW5nLmNvbS91bWttL2RhZGlhaC1rZXJiYXUiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1784610977),
('W9SOLcpxlafyiYFmS2ewBdFJEUf2yC0DXeWsgOWO', NULL, '2001:4860:7:406::df', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/150.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNTlab0ZiNjIzN0JDTU9kNGRTYVpiQVlBM2Z4bHBhbE15U3hHQlhuTiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTM6Imh0dHBzOi8vbmFnYXJpcGVtYXRhbmdwYW5qYW5nLmNvbS9pbmZvcm1hc2kvdmlzaS1taXNpIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1784620830),
('Wa4q5d26vAG9k7o2UfY9eNM3ler0iH4YF319p8BY', NULL, '2a02:4780:6:c0de::8', 'Go-http-client/2.0', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiRW1ySkJaMHRzM2JQdTVLSVR1QnlpZE1RcU1ueHJTREtCbTRSM0ZEdSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1784653133),
('wgx4X3sA4BR4aoeabKKsllH3KE4etFmi22DGsWwL', NULL, '51.195.215.174', 'Mozilla/5.0 (compatible; AhrefsBot/7.0; +http://ahrefs.com/robot/)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibU94dDJnZWlxU2xhUXdxNkhPcldzbEplczMwUFBFMnFxNlROOEIxSyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTEwOiJodHRwczovL25hZ2FyaXBlbWF0YW5ncGFuamFuZy5jb20vYXJ0aWtlbC9qdWFyYS0xLXRpbmdrYXQtcHJvdmluc2ktcGVuZ2hhcmdhYW4tcG9zeWFuZHUta2FkZXItcG9zeWFuZHUtdGVyYmFpayI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1784569336),
('WVCjdzZ2rxY9scOxzRbI8tjWduVmzi8ex94NeAgV', NULL, '92.216.198.177', 'Mozilla/5.0 (Linux; Android 8.0; Pixel 2 Build/OPD3.170816.012) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/45.0.6877.1260 Mobile Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMk1kZ0FkSUZOZm1BUk5nR0NWcXAwODlON2lYV2xQRXNsdGZOOW1CeSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTA5OiJodHRwczovL25hZ2FyaXBlbWF0YW5ncGFuamFuZy5jb20vYXJ0aWtlbC9kYWZ0YXIta2VsZW5na2FwYW4tcGVybW9ob25hbi1wZXJzeWFyYXRhbi1wZW1idWF0YW4tc3VyYXQtcGVsYXlhbmFuIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1784675771),
('Yeex4O3qbP5lyEyTtC7Iu1LoqNQ0wzlfFZccVGWX', NULL, '198.20.67.199', 'Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; WOW64; Trident/6.0)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUjZhZkV0YUNUQUlWVG41N1F6cVY1V1RHMzdjYTliZE5pZVZYaVVxViI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTc6Imh0dHBzOi8vd3d3Lm5hZ2FyaXBlbWF0YW5ncGFuamFuZy5jb20vaW5mb3JtYXNpL3Zpc2ktbWlzaSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1784640354),
('yV0EUOjaW4oy7JZKwGXYW8lP5Wl0jiYMJZqqnrxr', NULL, '2404:c0:d001:61ff:f469:c8fe:2994:ba69', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/150.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiaUlUdWNZNnlVc3JMUmREd2Zoajg1bUliM2UwSzY1dkVnaFlxMzBPWCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHBzOi8vbmFnYXJpcGVtYXRhbmdwYW5qYW5nLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1784562100);

-- --------------------------------------------------------

--
-- Table structure for table `umkm`
--

CREATE TABLE `umkm` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `whatsapp` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `umkm`
--

INSERT INTO `umkm` (`id`, `nama`, `slug`, `deskripsi`, `gambar`, `whatsapp`, `instagram`, `is_active`, `created_at`, `updated_at`) VALUES
(2, 'Kerajinan Anyaman Bambu Sari', 'kerajinan-anyaman-bambu-sari', 'Usaha kerajinan tangan yang mengolah bambu menjadi berbagai produk anyaman seperti keranjang, tas, dan hiasan rumah. Produk berkualitas tinggi dengan harga kompetitif.', NULL, '628987654321', NULL, 1, '2025-08-15 18:49:57', '2025-08-15 18:49:57'),
(3, 'Toko Kelontong Berkah', 'toko-kelontong-berkah', 'Toko kelontong yang melayani kebutuhan sehari-hari masyarakat. Menyediakan berbagai produk sembako, makanan ringan, dan kebutuhan rumah tangga.', NULL, '628111222333', NULL, 1, '2025-08-15 18:49:57', '2025-08-15 18:49:57'),
(4, 'KERUPUK KULIT JIMMY & JEFRI', 'kerupuk-kulit-jimmy-jefri', 'Kerupuk Kulit Jimmy & Jefri merupakan usaha keluarga milik Bapak Andi yang bergerak di sektor kuliner dan telah dijalankan secara turun-temurun sejak awal tahun 2000-an. UMKM ini memproduksi kerupuk kulit berkualitas dengan cita rasa khas yang telah dipercaya oleh banyak pelanggan.\r\n\r\nBerkat kualitas produk yang terjaga dan proses produksi yang konsisten, Kerupuk Kulit Jimmy & Jefri tidak hanya dipasarkan di wilayah Nagari Pematang Panjang, tetapi juga telah menjangkau pemasaran hingga ke luar pulau. Usaha ini juga dikenal sebagai salah satu pemasok kerupuk kulit utama di Kabupaten Sijunjung dan sekitarnya.\r\n\r\nProduk kerupuk kulit tersedia dalam berbagai pilihan ukuran kemasan, dengan harga yang terjangkau mulai dari Rp5.000 hingga Rp100.000 per kemasan, sehingga cocok untuk kebutuhan rumah tangga maupun penjualan kembali. Dengan pengalaman panjang dan komitmen terhadap kualitas, UMKM ini terus berkontribusi dalam mendukung perekonomian lokal nagari.\r\n\r\nAlamat : Jl. Lintas Sumatera Simp. Empat Pematang Panjang', 'umkm/sZKM1hwxjP31VqWUfnVAxOoLN8u1GuD4acG99diT.jpg', '6285363572777', NULL, 1, '2026-01-06 14:41:30', '2026-01-06 15:31:07'),
(5, 'BUBUK KOPI ASLI CAP RM', 'bubuk-kopi-asli-cap-rm', 'Bubuk Kopi SLI Cap RM merupakan produk kopi lokal berkualitas yang diproduksi langsung oleh Pak Mardianto, pelaku UMKM yang telah merintis usahanya sejak tahun 2020 di Jorong Koman Kaciak, Nagari Pematang Panjang. Produk ini lahir dari komitmen untuk menghadirkan cita rasa kopi asli daerah dengan kualitas yang konsisten dan harga yang terjangkau.\r\nBahan baku kopi berasal dari petani lokal pilihan, sehingga kesegaran dan keaslian biji kopi tetap terjaga. Proses pengolahan dilakukan dengan peralatan yang memadai, mulai dari mesin roasting/sangrai untuk menghasilkan tingkat kematangan yang pas, hingga mesin penggiling yang menjaga tekstur bubuk kopi tetap halus dan merata. Proses ini memastikan aroma dan rasa kopi tetap kuat saat diseduh.\r\nBubuk Kopi SLI Cap RM memiliki cita rasa khas dan autentik, dengan aroma kopi yang menggugah serta rasa yang mantap di lidah. Tersedia dalam dua varian:\r\n\r\nKopi Reguler =cocok untuk konsumsi harian dengan rasa seimbang\r\n\r\nKopi Tubruk =memiliki rasa lebih kuat dan pekat, ideal bagi pecinta kopi sejati\r\n\r\nProduk ini ditujukan untuk semua kalangan pecinta kopi, baik untuk dinikmati sendiri di rumah maupun disajikan kepada tamu. Tersedia dalam berbagai pilihan berat, mulai dari 100 gram, dengan harga yang disesuaikan berdasarkan berat kemasan.', 'umkm/7IfUbXUzysD1TCVmJpGf5vsWTYdhoYl5UgumCBkp.jpg', '6282391878669', NULL, 1, '2026-01-14 07:12:13', '2026-01-14 07:48:06'),
(6, 'KERAJINAN RAJUT', 'kerajinan-rajut', 'Kerajinan milik Salah satu warga Nagari Pematang Panjang di jorong Koman Kacik ini merupakan Usaha Rumahan Produk Kerajinan Rajut Berkualitas dengan Harga Terjangku', 'umkm/m8Xvz02xwa3usXuGcgIvgTFFQ2xjM9JM0tQELEVc.jpg', NULL, NULL, 1, '2026-01-30 01:44:00', '2026-01-30 01:44:00'),
(7, 'ARUM MADU GALO GALO', 'arum-madu-galo-galo', 'Usaha Madu Klulut atau yang di Nagari Pematang Panjang ini dikenal dengan madu Galo Galo Mempunyai Cita rasa yang Khas dengan sedikit rasa asam yang menyegarkan,\r\nHarga\r\n100ml =RP 50.000\r\n250ml =RP 100.000\r\n500ml =RP 150.000\r\nAlamat :Nagari Pematang Panjang', 'umkm/7Oz3mwUzHvf0nGrpWlCSWNmgNa0nyJGNDbjs4xHc.jpg', '6281270008722', NULL, 1, '2026-01-30 02:01:55', '2026-01-30 02:01:55'),
(8, 'DADIAH KERBAU', 'dadiah-kerbau', 'Usaha Dadiah Kerbau Harga RP.25.000', 'umkm/UVH8ge3V87wJTPN9a6hVf8a3ze1Ad9CULn3TKduv.jpg', '6285278632505', NULL, 1, '2026-01-30 02:06:54', '2026-01-30 02:06:54');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin Nagari', 'admin@pematangpanjang.com', '2025-08-15 18:49:57', '$2y$12$WxnYJE1ZpjeIoVUyiH7Q5.tLR2rnBkinMVu87d1bFasAVxQlh6uPC', 'QqQrjBy09QGx7kYb9mg0i314CsSl1nCy5dJ3oeneUadonR7oHtQqM9oWxPt9', '2025-08-15 18:49:57', '2025-08-15 18:49:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `articles_slug_unique` (`slug`),
  ADD KEY `articles_is_published_created_at_index` (`is_published`,`created_at`),
  ADD KEY `articles_kategori_is_published_index` (`kategori`,`is_published`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `galleries_created_at_index` (`created_at`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `umkm`
--
ALTER TABLE `umkm`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `umkm_slug_unique` (`slug`),
  ADD KEY `umkm_is_active_created_at_index` (`is_active`,`created_at`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `umkm`
--
ALTER TABLE `umkm`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

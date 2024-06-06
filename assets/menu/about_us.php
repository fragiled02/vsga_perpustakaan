<?php
include '../php/functions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="../bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="../css/stye.css">
</head>
<body>

<?php
    include "../template/nav.php"
?>

<main class="container my-5">
    <section class="mb-5">
        <h1 class="text-center">About Us</h1>
        <p class="lead text-center">Selamat datang di Perpustakaan READMI, oasis pengetahuan yang menghubungkan Anda dengan dunia literasi tanpa batas. Di sini, setiap lembar buku membuka jendela baru menuju pemahaman dan inspirasi. Kami berkomitmen untuk menyediakan koleksi yang luas dan terkini, lingkungan yang nyaman untuk belajar, serta akses mudah ke sumber-sumber informasi yang akan mendukung perjalanan intelektual Anda. Bergabunglah dengan kami dalam petualangan menemukan, belajar, dan tumbuh bersama komunitas pembaca READMI.</p>
    </section>

    <section class="mb-5">
        <h2 class="mb-4">Visi & Misi</h2>
        <p><strong>Visi:</strong> Menjadi pusat pengetahuan terkemuka yang menginspirasi dan memberdayakan komunitas melalui literasi dan pembelajaran sepanjang hayat.</p>
        <p><strong>Misi:</strong> Menyediakan akses mudah dan gratis ke berbagai sumber informasi, mendukung pembelajaran dan penelitian, serta menciptakan lingkungan yang inklusif dan menyenangkan bagi semua pengguna.</p>
    </section>

    <section class="mb-5">
        <h2 class="mb-4">Profil Perusahaan</h2>
        <p>ReadMi didirikan pada tahun 2020 dengan tujuan utama untuk meningkatkan literasi dan mempromosikan budaya membaca di kalangan masyarakat. Kami menyediakan berbagai koleksi buku, jurnal, dan materi digital untuk semua usia dan minat. Perpustakaan kami dilengkapi dengan fasilitas modern untuk mendukung kegiatan belajar dan penelitian.</p>
    </section>

    <section class="mb-5">
        <h2 class="mb-4">Pengalaman Perusahaan</h2>
        <p>Sejak didirikan, ReadMi telah melayani ribuan anggota dengan berbagai latar belakang. Kami bangga dengan rekam jejak kami dalam menyediakan layanan yang luar biasa dan beragam program literasi. ReadMi secara rutin mengadakan acara seperti diskusi buku, lokakarya penulisan, dan sesi bercerita untuk anak-anak.</p>
    </section>

    <section class="mb-5">
        <h2 class="mb-4">Produk</h2>
        <ul>
            <li>Koleksi Buku Cetak</li>
            <li>Buku Digital dan e-Books</li>
            <li>Jurnal dan Majalah</li>
            <li>Audio Books</li>
            <li>Ruang Baca dan Diskusi</li>
            <li>Layanan Riset dan Referensi</li>
        </ul>
    </section>

    <section class="mb-5">
        <h2 class="mb-4">Galeri Foto</h2>
        <div id="photoCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../img/library1.jpg" class="d-block w-100" alt="Library Image 1">
                </div>
                <div class="carousel-item">
                    <img src="../img/library2.jpg" class="d-block w-100" alt="Library Image 2">
                </div>
                <div class="carousel-item">
                    <img src="../img/library3.jpg" class="d-block w-100" alt="Library Image 3">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#photoCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#photoCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <section class="mb-5">
        <h2 class="mb-4">Daftar Klien</h2>
        <ul>
            <li>Sekolah SMKN 2 Depok</li>
            <li>Universitas AMIKOM Yogyakarta</li>
            <li>Komunitas Literasi Kanisius Sengkan</li>
            <li>Perusahaan ReadMe</li>
            <li>Lembaga Pendidikan Indonesia</li>
        </ul>
    </section>


</main>

<?php
    include "../template/footer.php"
?>

</body>
    <script src="../bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function topFunction() {
            document.body.scrollTop = 0; // For Safari
            document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
        };

        setTimeout(topFunction, 320);
    </script>
</html>
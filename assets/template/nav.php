<header class="mb-4">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-body-secondary">

        <!-- Container Navbar -->
    <div class="container-xl">

        <!-- Judul Navbar -->
        <a class="navbar-brand fw-bolder" href="../php/home.php">ADMIN READMI</a>

        <!-- Toggle Navbar -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Isi Navbar -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

            <li class="nav-item">
            <a class="nav-link" href="./tampil_anggota.php">Tampil Anggota</a>
            </li>

            <li class="nav-item">
            <a class="nav-link" href="./tampil_buku.php">Tampil Buku</a>
            </li>

            <li class="nav-item">
            <a class="nav-link" href="./tampil_transaksi.php">Tampil Transaksi</a>
            </li>

            <li class="nav-item">
            <a class="nav-link" href="#">Tampil Laporan</a>
            </li>

            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Lainnya
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="./tambah_anggota.php">Tambah Anggota</a></li>
                <li><a class="dropdown-item" href="./tambah_buku.php">Tambah Buku</a></li>
                <li><a class="dropdown-item" href="./tambah_transaksi.php">Tambah Transaksi</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Logout</a></li>
            </ul>
            </li>

            <li class="nav-item">
            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
            </li>

        </ul>
        <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        </div>
    </div>
    </nav>

</header>
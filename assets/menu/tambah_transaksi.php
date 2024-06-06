<?php
    include "../php/functions.php";
    check_message('transaksi');
    $komen = 'Masukkan';
    $buku = jalankanSQL("SELECT * FROM buku");
    $anggota = jalankanSQL("SELECT * FROM anggota");

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $transaksi = jalankanSQL("

            SELECT 
                *
            FROM 
                transaksi
            INNER JOIN 
                anggota ON transaksi.id_anggota = anggota.id
            INNER JOIN 
                buku ON transaksi.id_buku = buku.id
            WHERE transaksi.id = $id;
        ")[0];

        //print_r($transaksi);

        $komen = 'Update';
    };
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VSGA - Latihan HTML</title>
    <link rel="stylesheet" href="../bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="../css/stye.css">
</head>
<body>
<?php
    include "../template/nav.php"
?>
<div class="container-md d-flex justify-content-center align-items-center" style="min-height: 80vh;">
    <form class="align-middle w-75 shadow p-4 bg-body rounded custom-hover1" action="../php_act/transaksi_act.php" method="POST">
    <h3 class="mb-3"><?php echo(@$komen); ?> Data Transaksi</h3>
        <div class="form-group mb-3">
            <label for="id_buku">Buku:</label>
            <select id="id_buku" name="id_buku" class="form-select form-select-sm" aria-label=".form-select-sm example" required>
                <option selected disabled>Pilih Buku</option>
<?php
    $nomor = 0;
    foreach ($buku as $key => $value) {
        $nomor += 1;
        ?>
        <option value="<?php echo(@$value['id']); ?>" <?php echo(@$value['id'] == $transaksi['id_buku'] ? 'selected' : ''); ?>>
        <?php echo(@$value['judul']); ?>
        </option>
    <?php
    };
?>
            </select>
        </div>
        <div class="form-group mb-3">
            <label for="id_anggota">Anggota:</label>
            <select id="id_anggota" name="id_anggota"  class="form-select form-select-sm" aria-label=".form-select-sm example" required>
                <option selected disabled>Pilih Anggota</option>
<?php
    $nomor = 0;
    foreach ($anggota as $key => $value) {
        $nomor += 1;
        ?>
        <option value="<?php echo(@$value['id']); ?>" <?php echo(@$value['id'] == $transaksi['id_anggota'] ? 'selected' : ''); ?>>
        <?php echo(@$value['nama']); ?>
        </option>
    <?php
    };
?>
            </select>
        </div>

        <div class="form-group mb-3">
            <label for="tanggal_pinjam">Tanggal Pinjam:</label>
            <input type="date" class="form-control w-50" id="tanggal_pinjam" name="tanggal_pinjam" placeholder="Masukkan Tanggal Peminjaman Anda" required
            value="<?php echo(@$transaksi['tanggal_pinjam']); ?>"
            >
        </div> 

        <input class="d-none" type="hidden" name="id" value="<?php echo(@$transaksi['id']); ?>">

        <button type="submit" class="btn btn-primary">Submit</button>
        <a class="btn btn-secondary" href="../php/home.php">Home</a>
    </form>
</div>

</body>
    <script src="../bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
</html>
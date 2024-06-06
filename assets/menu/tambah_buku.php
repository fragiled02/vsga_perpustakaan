<?php
    include "../php/functions.php";
    check_message('buku');
    $komen = 'Masukkan';
    $buku = null;

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $buku = jalankanSQL("SELECT * FROM buku WHERE id = $id")[0];
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
    <form class="align-middle w-75 shadow p-4 bg-body rounded custom-hover1" action="../php_act/buku_act.php" method="POST">
    <h3 class="mb-3"><?php echo(@$komen); ?> Data Buku</h3>

        <div class="form-group mb-3">
            <label for="judul">Judul Buku</label>
            <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukkan Judul Buku" value="<?php echo(@$buku['judul']); ?>" required>
        </div>

        <div class="form-group mb-3">
            <label for="tahun">Tahun Terbit</label>
            <input type="text" class="form-control" id="tahun" name="tahun" placeholder="Masukkan Tahun Terbit" value="<?php echo(@$buku['tahun']); ?>" required> 
        </div>

        <div class="form-group mb-3">
            <label for="pengarang">Pengarang Buku</label>
            <input type="text" class="form-control" id="pengarang" name="pengarang" placeholder="Masukkan Pengarang Buku" value="<?php echo(@$buku['pengarang']); ?>" required> 
        </div>

        <div class="form-group mb-3">
            <label for="penerbit">Penerbit Buku</label>
            <input type="text" class="form-control" id="penerbit" name="penerbit" placeholder="Masukkan Penerbit Buku" value="<?php echo(@$buku['penerbit']); ?>" required> 
        </div>



        <input class="d-none" type="hidden" name="id" value="<?php echo(@$buku['id']); ?>">

        <button type="submit" class="btn btn-primary">Submit</button>
        <a class="btn btn-secondary" href="../php/home.php">Home</a>
    </form>
</div>

</body>
    <script src="../bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
</html>
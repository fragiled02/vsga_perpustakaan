<?php
    include "../php/functions.php";
    check_message('anggota');
    $komen = 'Masukkan';
    $anggota = null;

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $anggota = jalankanSQL("SELECT * FROM anggota WHERE id = $id")[0];
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
    <form class="align-middle w-75 shadow p-4 bg-body rounded custom-hover1" action="../php_act/anggota_act.php" method="POST">
    <h3 class="mb-3"><?php echo(@$komen); ?> Data Anggota</h3>

        <div class="form-group mb-3">
            <label for="nama">Nama Anda</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Anda" value="<?php echo(@$anggota['nama']); ?>" required>
        </div>

        <div class="form-group mb-3">
            <label for="alamat">Alamat Anda</label>
            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan Alamat Anda" value="<?php echo(@$anggota['alamat']); ?>" required> 
        </div>

        <div class="form-group mb-3">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email" value="<?php echo(@$anggota['email']); ?>" required>
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>

        <div class="form-group mb-3">
            <label for="telp">Nomor Anda</label>
            <input type="text" class="form-control" id="telp" name="telp" placeholder="Masukkan Nomor Anda" value="<?php echo(@$anggota['telp']); ?>" required>
        </div>  
        
        <div class="form-group mb-3 d-flex">
            <p class="me-2">Pilih Gender Anda: </p>
            <input class="form-check-input" type="radio" name="kelamin" id="kelamin1" value="L" <?php echo(@$anggota['kelamin'] == 'L' ? 'checked' : ''); ?> required>
            <label class="form-check-label me-2" for="form_gender">Male</label>
            <input class="form-check-input" type="radio" name="kelamin" id="kelamin2" value="P" <?php echo(@$anggota['kelamin'] == 'P' ? 'checked' : ''); ?> required>
            <label class="form-check-label" for="form_gender">Female</label>
        </div>

        <input class="d-none" type="hidden" name="id" value="<?php echo(@$anggota['id']); ?>">

        <button type="submit" class="btn btn-primary">Submit</button>
        <a class="btn btn-secondary" href="../php/home.php">Home</a>
    </form>
</div>

</body>
    <script src="../bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
</html>
<?php
include '../php/functions.php';
check_message('buku');
$data = jalankanSQL("SELECT * FROM buku");

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

<main>

<div class="container-xl justify-content-center border shadow" style="min-height: 50vh;">
    <table class="table table-striped w-100 h-auto">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Judul</th>
                <th scope="col">Tahun</th>
                <th scope="col">Pengarang</th>
                <th scope="col">Penerbit</th>
                <th scope="col">Menu</th>
            </tr>
        </thead>
        <tbody>
<?php
    $nomor = 0;
    foreach ($data as $key => $value) {
        $nomor += 1;
        ?>
            <tr>
                <th scope="row"><?php echo(@$nomor); ?></th>
                <td><?php echo(@$value['judul']); ?></td>
                <td><?php echo(@$value['tahun']); ?></td>
                <td><?php echo(@$value['pengarang']); ?></td>
                <td><?php echo(@$value['penerbit']); ?></td>
                <td><a class="btn btn-primary" href="./tambah_buku.php?id=<?php echo(@$value['id']); ?>">Edit</a>
                <a class="btn btn-danger" onclick="return confirmDelete()" href="../php_act/buku_act.php?id=<?php echo(@$value['id']); ?>">Hapus</a></td>
            </tr>
     <?php
    };
?>
        </tbody>
    </table>
</div>

</main>

<footer class="bg-dark">
    <div class="container">
        <p>Kontak: (123) 456-7890 | Email: contoh@gmail.com</p>
        <p>Alamat: Jl. Contoh No. 123, Kota ABC</p>
        <p>Jam Operasional: Senin - Jumat, 08:00 - 17:00</p>
        <div class="social-media">
            <a href="#">Facebook</a> | <a href="#">Twitter</a> | <a href="#">Instagram</a>
        </div>
    </div>
</footer>

</body>
    <script src="../bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function topFunction() {
            document.body.scrollTop = 0; // For Safari
            document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
        };

        setTimeout(topFunction, 320);

        function confirmDelete(){
            return confirm("Apakah anda ingin menghapus data?");
        };

    </script>
</html>
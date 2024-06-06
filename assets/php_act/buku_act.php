<?php
include '../php/functions.php';
include '../php/koneksi.php';

if(isset($_POST['judul'])){
    try{
        $judul = $_POST['judul'];
        $tahun = $_POST['tahun'];
        $pengarang = $_POST['pengarang'];
        $penerbit = $_POST['penerbit'];

        $id = false;
        $status = false;

        if(!isset($_POST['id'])){
            exit;
        };
      
        if($_POST['id'] == null){
            $status = jalankanSQL("

            INSERT INTO 
            buku(judul, tahun, pengarang, penerbit) 
            VALUES
            ('$judul', '$tahun', '$pengarang', '$penerbit')

            ");
        }else if(isset($_POST['id'])){
            $id = $_POST['id'];
            $status = jalankanSQL("

            UPDATE 
            buku
            SET
            judul = '$judul',
            tahun = '$tahun',
            pengarang = '$pengarang',
            penerbit = '$penerbit',
            WHERE
            id = $id

            ");
        };



        if($status && !$id){
            header("Location: ../menu/tampil_buku.php?messageInsert=success");
        }else if($status && isset($_POST['id'])){
            header("Location: ../menu/tampil_buku.php?messageUpdate=success");
        }
        else{
            die(mysqli_error($koneksi));
        };

    }catch(Exception $e) {
        echo($e->getMessage());
    };
};

if(isset($_GET['id'])){
    $id = $_GET['id'];
    jalankanSQL("DELETE FROM buku WHERE id = $id");
    header("Location: ../menu/tampil_buku.php?messageDelete=success");
};
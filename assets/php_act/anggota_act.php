<?php
include '../php/functions.php';
include '../php/koneksi.php';

if(isset($_POST['nama'])){
    try{
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $email = $_POST['email'];
        $telp = $_POST['telp'];
        $kelamin = $_POST['kelamin'];

        $id = false;
        $status = false;

        if(!isset($_POST['id'])){
            exit;
        };
      
        if($_POST['id'] == null){
            $status = jalankanSQL("

            INSERT INTO 
            anggota(nama, alamat, email, telp, kelamin) 
            VALUES
            ('$nama', '$alamat', '$email', '$telp', '$kelamin')

            ");
        }else if(isset($_POST['id'])){
            $id = $_POST['id'];
            $status = jalankanSQL("

            UPDATE 
            anggota
            SET
            nama = '$nama',
            alamat = '$alamat',
            email = '$email',
            telp = '$telp',
            kelamin = '$kelamin'
            WHERE
            id = $id

            ");
        };



        if($status && !$id){
            header("Location: ../menu/tampil_anggota.php?messageInsert=success");
        }else if($status && isset($_POST['id'])){
            header("Location: ../menu/tampil_anggota.php?messageUpdate=success");
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
    jalankanSQL("DELETE FROM anggota WHERE id = $id");
    header("Location: ../menu/tampil_anggota.php?messageDelete=success");
};
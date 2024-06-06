<?php
include '../php/functions.php';
include '../php/koneksi.php';

if(isset($_POST['id_anggota'])){
    try{

        

        $id_anggota = $_POST['id_anggota'];
        $id_buku = $_POST['id_buku'];
        $tanggal_pinjam = $_POST['tanggal_pinjam'];
        $tanggal_kembali = null;

        if(isset($_POST['tanggal_kembali'])){
            $tanggal_kembali = $_POST['tanggal_kembali'];
        };
        


        $id = false;
        $status = false;

      
        if(!isset($_POST['id'])){
            $status = jalankanSQL("

            INSERT INTO 
            transaksi(id_anggota, id_buku, tanggal_pinjam) 
            VALUES
            ($id_anggota, $id_buku, '$tanggal_pinjam')

            ");
        }else if(isset($_POST['id'])){
            $id = $_POST['id'];
            $status = jalankanSQL("

            UPDATE 
            transaksi
            SET
            id_anggota = $id_anggota,
            id_buku = $id_buku,
            tanggal_pinjam = '$tanggal_pinjam',
            tanggal_kembali = '$tanggal_kembali'
            WHERE
            id = $id

            ");
        };



        if($status && !$id){
            header("Location: ../menu/tampil_transaksi.php?messageInsert=success");
        }else if($status && isset($_POST['id'])){
            header("Location: ../menu/tampil_transaksi.php?messageUpdate=success");
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
    jalankanSQL("DELETE FROM transaksi WHERE id = $id");
    header("Location: ../menu/tampil_transaksi.php?messageDelete=success");
};
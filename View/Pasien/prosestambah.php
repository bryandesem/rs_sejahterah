<?php
include_once('../../Model/Pasien.php');
$psn = new Pasien();

$psn->id = $_GET ['id_pasien'];
$psn->nama = $_GET ['nama_pasien'];
$psn->jeniskelamin = $_GET ['jk_pasien'];
$psn->tgl = $_GET ['tgl_pasien'];
$psn->alamat = $_GET ['alamat_pasien'];
$psn->noruang = $_GET ['no_ruang'];

$psn->insert();

header('Location: /index.php?page=homePasien');
?>
        
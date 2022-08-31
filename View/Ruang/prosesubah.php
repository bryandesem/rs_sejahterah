<?php
include_once('../../Model/Ruang.php');
$rng = new Ruang();

$rng->noruang = $_GET ['no_ruang'];
$rng->namaruang = $_GET ['nama_ruang'];

$rng->update();

header('Location: /index.php?page=homeRuang');
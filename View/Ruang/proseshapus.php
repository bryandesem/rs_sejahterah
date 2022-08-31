<?php
$no = 0;
if (isset($_POST['no'])) {
    $no = $_POST['no'];
}else {
    header("Location: index.php");
}
include_once('../../Model/Ruang.php');
$rng = new Ruang();
$rng->noruang = $no;
$rng->delete();
header("Location: /index.php?page=homeRuang");
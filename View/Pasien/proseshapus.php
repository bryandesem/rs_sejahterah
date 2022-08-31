<?php
$id = 0;
if (isset($_POST['id'])) {
    $id = $_POST['id'];
}else {
    header("Location: index.php");
}

include_once('../../Model/Pasien.php');
$psn = new Pasien();

$psn->id = $id;
$psn->delete();

header("Location: /index.php?page=homePasien");
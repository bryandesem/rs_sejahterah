<?php
$no = 0;
if (isset($_GET['no'])) {
    $no = $_GET['no'];
}else {
    header("Location: index.php");
}

include_once('Model\Ruang.php');
$rng = new Ruang();
$ruangList = $rng->getByPrimarykey($no);
$ruang = [];
while($rng = mysqli_fetch_assoc($ruangList)){
    $ruang = $rng;
}
if (count($ruang)=== 0){
    header("Location: index.php");
}
?>
<h1>Form Ubah Ruang</h1>
    <form action="View/Ruang/prosesubah.php" meethod="get">
        <div class = "form-group">
            <label for="">Nomor Ruang</label>
            <input type="text" class="form-control" readonly value="<?=$ruang['no_ruang'] ?>" 
            name="no_ruang" placeholder='Nomor Ruang' required/>
        </div>    
        <div class = "form-group">
            <label for="">Nama Ruang</label>
            <input type="text" class="form-control" value="<?=$ruang['nama_ruang'] ?>" 
            name="nama_ruang" placeholder='Nama Ruang' required/>
        </div>
            <a href="index.php?page=homeRuang" class="btn btn-info">Kembali</a>
            <button type="submit" class="btn btn-success">Simpan</button>
    </form>

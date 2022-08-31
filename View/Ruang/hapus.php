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

<h1 align= 'center'>Anda Yakin Ingin Hapus File Ini ?</h1>
<!-- Pembuka Modal -->
<p align= 'center'>
<a class = "btn btn-info" href="index.php?page=homeRuang">Kembali</a>
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter">Yakin ?</button>
</p>
<!-- Isi Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Sekali Lagi saya tanya</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Anda Yakin Banget ingin menghapusnya ?
                    <form action="View/Ruang/proseshapus.php" method ="Post">
                        <table class="table table-borderless table-sm">
                            <tr>
                                <td>Nomor</td>
                                <td><?=$ruang['no_ruang']?> </td>
                            </tr>
                            <tr>
                                <td>Nama</td>
                                <td><?=$ruang['nama_ruang']?> </td>
                            </tr>
            </div>
                <div class="modal-footer">
                        </table>
                        <input type="hidden" name="no" value="<?=$ruang['no_ruang']?>">
                        <a class = "btn btn-info" href="index.php?page=homeRuang">Kembali</a>
                        <input class = "btn btn-danger" type="submit" value="Hapus">
                    </form>
                </div>
            </div>
        </div>
</div>
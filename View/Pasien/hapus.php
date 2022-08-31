<?php
$id = 0;
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}else {
    header("Location: index.php");
}

include_once('Model\Pasien.php');
$psn = new Pasien();
$psnList = $psn->getByPrimarykey($id);

$pasien = [];
while($psn = mysqli_fetch_assoc($psnList)){
    $pasien = $psn;
}

if (count($pasien)=== 0){
    header("Location: index.php");
}
?>
<p></p>
<h1 align= 'center'>Anda Yakin Ingin Hapus File Ini ?</h1>
<!-- Pembuka Modal -->
<p align= 'center'>
<a class = "btn btn-info"  href="index.php?page=homePasien">Kembali</a>
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
                <form action="View/Pasien/proseshapus.php" method ="Post">
                    <table class="table table-borderless table-sm">
                        <tr>
                            <td>ID</td>
                            <td><?=$pasien['id_pasien']?> </td>
                        </tr>
                        <tr>
                            <td>Nama</td>
                            <td><?=$pasien['nama_pasien']?> </td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td><?=$pasien['alamat_pasien']?> </td>
                        </tr>
                        <tr>
                            <td>Tanggal Lahir</td>
                            <td><?=$pasien['tgl_pasien']?> </td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td><?=$pasien['jk_pasien']?> </td>
                        </tr>
                        <tr>
                            <td>Ruangan</td>
                            <td><?=$pasien['no_ruang']?> </td>
                        </tr>       
            </div>
                <div class="modal-footer">
                    </table>
                        <input type="hidden" name="id" value="<?=$pasien['id_pasien']?>">
                        <a class = "btn btn-info" href="index.php?page=homePasien">Kembali</a>
                        <input class = "btn btn-danger" type="submit" value="Hapus">
                    </form>
                </div>
            </div>
        </div>
</div>

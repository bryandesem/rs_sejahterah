<h1>List Pasien, <?= date ( 'j F Y') ?></h1>
    <a class="btn btn-primary" href = 'index.php?page=registerPasien'>
        <i class="fa fa-user fa-fw"></i> Tambah Pasien</a>
    <p></p>
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-sm" >
            <tr class="bg-primary">
                <th>ID</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Tanggal Lahir</th>
                <th>Alamat</th>
                <th>Ruangan</th>
                <th>Action</th>
            </tr>
            <?php
            include_once('Model\Pasien.php');
            $psn = new Pasien();
            $psnList = $psn->getAll();
            while($pasien = mysqli_fetch_array($psnList)){
                $tanggallahir = date("j F Y", strtotime($pasien['tgl_pasien']));  
            ?>
                <tr>
                    <th><?=$pasien['id_pasien']?></th>
                    <th><?=$pasien['nama_pasien']?></th>
                    <th><?=$pasien['jk_pasien'] === 'L' ? 'Laki-laki' : 'Perempuan' ?></th>
                    <th><?=$tanggallahir?></th>
                    <th><?=$pasien['alamat_pasien']?></th>
                    <th><?='['.$pasien['no_ruang'].'] - '. $pasien['nama_ruang'] ?></th>
                    <th>
                        <a class="btn btn-outline-warning" 
                            href="index.php?page=editPasien&id=<?=$pasien['id_pasien']?>">
                            <i class="fa fa-pencil-square-o" aria-hidden="true"> Edit</i>
                        </a>
                        <a class="btn btn-outline-danger" 
                            href="index.php?page=deletePasien&id=<?=$pasien['id_pasien']?>">
                            <i class="fa fa-trash-o" aria-hidden="true"> Delete</i>
                        </a>
                            
                    </th>
                </tr>
            <?php
            }
            ?>
        </table>
    </div>
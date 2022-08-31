<h1>List Ruangan, <?= date ( 'j F Y') ?></h1>
    <a class="btn btn-primary" href = 'index.php?page=registerRuang'>
    <i class="fa fa-bed"></i> Tambah Ruangan</a>
    <p></p>
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-sm" >
            <tr class="bg-primary">
                <th>Nomor Ruang</th>
                <th>Nama Ruang</th>
                <th>Action</th>
            </tr>
            <?php
            include_once('Model\Ruang.php');
            $rng = new Ruang();
            $ruangList = $rng->getAll();
            while($ruang = mysqli_fetch_array($ruangList)){
            ?>
                <tr>
                    <th><?=$ruang['no_ruang']?></th>
                    <th><?=$ruang['nama_ruang']?></th>
                    <th>
                    <a class="btn btn-outline-warning " 
                        href="index.php?page=editRuang&no=<?=$ruang['no_ruang']?>">
                    <i class="fa fa-pencil-square-o" aria-hidden="true"> Edit</i>
                    </a>
                    <a class="btn btn-outline-danger " 
                        href="index.php?page=deleteRuang&no=<?=$ruang['no_ruang']?>">
                    <i class="fa fa-trash-o" aria-hidden="true"> Delete</i>
                    </a>
                            
                    </th>
                </tr>
            <?php
            }
            ?>
        </table>
    </div>
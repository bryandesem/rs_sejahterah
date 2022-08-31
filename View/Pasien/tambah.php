<h1>Form Tambah Pasien</h1>
    <form action="View/Pasien/prosestambah.php" method="get">
        <div class = "form-group">
            <label for="">ID Pasien</label>
            <input type="text" class="form-control" name="id_pasien" 
            placeholder='ID Pasien' required/>
            
        </div>

        <div class = "form-group">
            <label for="">Nama Pasien</label>
            <input type="text" class="form-control" name="nama_pasien" 
            placeholder='Nama Pasien' required/>
        </div> 

        <div class = "form-group">
            <label for="">Jenis Kelamin Pasien</label>
            <select class="form-control" name="jk_pasien">
                <option value="L">Laki-laki</option>
                <option value="P">Perempuan</option>
            </select>
        </div>

        <div class = "form-group">
            <label for="">Tanggal Lahir Pasien</label>
            <input type="date" class="form-control" class="form-control" name="tgl_pasien" 
            placeholder='Tanggal Lahir Pasien' required/>
        </div>

        <div class = "form-group">
            <label for="">Alamat Pasien</label>
            <textarea  class="form-control" name="alamat_pasien" placeholder= "Alamat Pasien"
            cols="20" rows="10"required></textarea>
        </div>

        <div class = "form-group">
            <label for="">Ruangan</label>
            <select class="form-control" name="no_ruang">
                <option value="" selected disabled>Pilih Ruangan</option>
                <?php
                include'Model/Ruang.php';
                $rng = new Ruang();
                $ruangList = $rng->getAll();
                while($ruang = mysqli_fetch_array($ruangList)){
                    ?>
                    <option value="<?= $ruang['no_ruang']?>">
                    [<?=$ruang['no_ruang']?>] - <?=$ruang['nama_ruang']?></option>
                    <?php
                }
                ?>
            </select>
        </div>

        <p>
            <a href="index.php?page=homePasien" class="btn btn-info">Kembali</a>
            <button class="btn btn-success" type="submit">Simpan</button>
        </p>

    </form>
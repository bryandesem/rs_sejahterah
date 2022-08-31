<h1>Form Tambah Ruang</h1>
    <form action="View/Ruang/prosestambah.php" method="get">
        <div class = "form-group">
            <label for="">Nomor Ruang</label>
            <input type="text" class="form-control" name="no_ruang" placeholder='Nomor Ruang' required/>
        </div>

        <div class = "form-group">
            <label for="">Nama Ruang</label>
            <input type="text" class="form-control" name="nama_ruang" placeholder='Nama Ruang' required/>
        </div> 
        <p>
            <a href="index.php?page=homeRuang" class="btn btn-info">Kembali</a>
            <button class="btn btn-success" type="submit">Simpan</button>
        </p>
    </form>
<!-- <script>
(function(){
    'use strict';
    window.addEventListener('load',function(){
        var forms = document.getElementsByClassName('needs-validation');


    })
})();
</script> -->
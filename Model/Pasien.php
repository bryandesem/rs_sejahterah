<?php
include __DIR__.'/../Config/Koneksi.php';

class Pasien{
    public $id;
    public $nama;
    public $jeniskelamin;
    public $tgl;
    public $alamat;
    public $noruang;

    public function getAll(){
        $query = 'SELECT * FROM pasien as p 
                    join ruang r on p.no_ruang = r.no_ruang';
        $con = new Koneksi();
        return mysqli_query($con->koneksi, $query);
    }

    public static function getAllRuang(){
        $query = 'SELECT * FROM ruang';
        $con = new Koneksi();
        return mysqli_query($con->koneksi, $query);
    }

    public function getByPrimarykey ($id){
        $query = "SELECT * FROM pasien as p 
                    join ruang r on p.no_ruang = r.no_ruang 
                    where id_pasien= '$id'";
        $con = new Koneksi();
        return mysqli_query($con->koneksi, $query);
    }

    public function insert(){
        $con = new Koneksi();
        $sql = mysqli_query($con->koneksi, "SELECT id_pasien FROM pasien where id_pasien ='$this->id'");
        if (mysqli_num_rows($sql) > 0) {
            echo '<script type="text/javascript"> alert("ID Sudah Digunakan !!!");
            window.location="/index.php?page=registerPasien"</script>';
            exit();
        } else {
            $query = "INSERT into pasien values (
                '$this->id',
                '$this->nama',
                '$this->jeniskelamin',
                '$this->tgl',
                '$this->alamat',
                '$this->noruang')";
            return mysqli_query($con->koneksi, $query);
        }
    }

    public function update(){
        $query = "UPDATE pasien set
            nama_pasien ='$this->nama',
            jk_pasien ='$this->jeniskelamin',
            tgl_pasien ='$this->tgl',
            alamat_Pasien ='$this->alamat',
            no_ruang = '$this->noruang'
            where id_pasien = '$this->id'";
        $con = new Koneksi();
        return mysqli_query($con->koneksi, $query);
    }

    public function delete(){
        $query = "DELETE from pasien where id_pasien = '$this->id'";
        $con = new Koneksi();
        return mysqli_query($con->koneksi, $query);
    }
}
  
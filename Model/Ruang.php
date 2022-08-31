<?php
include __DIR__.'/../Config/Koneksi.php';

class Ruang{
    public $noruang;
    public $namaruang;

    public function getAll(){
        $query = 'SELECT * FROM ruang';
        $con = new Koneksi();
        return mysqli_query($con->koneksi, $query);
    }

    public function getByPrimarykey ($no){
        $query = "SELECT * FROM ruang where no_ruang = '$no'";
        $con = new Koneksi();
        return mysqli_query($con->koneksi, $query);
    }

    public function insert(){
        $con = new Koneksi();
        $sql = mysqli_query($con->koneksi, "SELECT no_ruang FROM ruang where no_ruang ='$this->noruang'");
        if (mysqli_num_rows($sql) > 0) {
            echo '<script type="text/javascript"> alert("Ruangan Sudah Ada !!!");
            window.location="/index.php?page=registerRuang"</script>';
            exit();
        } else {
            $query = "INSERT into ruang values (
            '$this->noruang',
            '$this->namaruang')";

            return mysqli_query($con->koneksi, $query);
        }
    }

    public function update(){
        $query = "UPDATE ruang set
            nama_ruang ='$this->namaruang'
            where no_ruang = '$this->noruang'";
        $con = new Koneksi();
        return mysqli_query($con->koneksi, $query);
    }

    public function delete(){
        $query = "DELETE from ruang where no_ruang='$this->noruang'";
        $con = new Koneksi();
        return mysqli_query($con->koneksi, $query);
    }
}
<?php
class Koneksi{
    private $Host = 'localhost';
    private $Username = 'root';
    private $Perssword = '';
    private $dbName = 'rs_sejahtera';
    public $koneksi;

    public function __construct(){
        $this->koneksi = mysqli_connect($this->Host, 
        $this->Username, $this->Perssword, $this->dbName);
    }
}
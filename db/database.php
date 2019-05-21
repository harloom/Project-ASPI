<?php

include "Peserta.php";
class database
{

    public $host = "localhost";
    public $uname = "root";
    public $pass = "";
    public $db = "db_aspi";
    public $connect;
    // CALL daftar_peserta('Nanda','upload/foto/iasdasad.jph','082307304530','Bandar Lampung','upload/dokumen/iasdasad.jph','Solehudin','Pria','BandarLampung','Harloom@gmail.com','2019-04-12');

    public function __construct()
    {
        $this->connect = mysqli_connect($this->host, $this->uname, $this->pass, $this->db);

    }

    public function input(Peserta $peserta)
    {
        $sql = "CALL daftar_peserta('$peserta->id_peserta','$peserta->nama','$peserta->url_ktp','$peserta->no_hp','$peserta->alamat'
		,'$peserta->namaBelakang','$peserta->jenisKelamin','$peserta->asalKota','$peserta->email','$peserta->tglPendaftaran')";
        $flag = mysqli_query($this->connect, $sql);
        return $flag;

    }

    public function uploadKTP($img)
    {

        $nameFile = $img['foto_ktp']['name'];
        $sizeFile = $img['foto_ktp']['size'];
        $errorFile = $img['foto_ktp']['error'];
        $tmpFile = $img['foto_ktp']['tmp_name'];

        //cek apakah ada file/foto yang di upload
        if ($errorFile == 4) {

            return false;
        }

        $isValidEkstensi = ['jpg', 'jpeg', 'png'];
        $ektensiFoto = explode('.', $nameFile);
        $ektensiFoto = strtolower(end($ektensiFoto));
        if (!in_array($ektensiFoto, $isValidEkstensi)) {
            return false;
        }

        if ($sizeFile < 500000 && $sizeFile > 5000000) {
            return false;
        }

        $newNameFile = uniqid();
        $newNameFile .= '.';
        $newNameFile .= $ektensiFoto;

        move_uploaded_file($tmpFile, 'dashboard/upload/' . $newNameFile);

        return $newNameFile;

    }

    public function uploadFotoKontes($data, $id_peserta)
    {

        $file_ary = array();
        $file_count = count($data['foto_kontes']['size']);
        $file_keys = array_keys($data['foto_kontes']);

        for ($i = 0; $i < $file_count; $i++) {
            foreach ($file_keys as $key) {
                $file_ary[$i][$key] = $data['foto_kontes'][$key][$i];
            }
        }

        foreach ($file_ary as $file) {
            // print 'File Type: ' . $file['type'];
            // print 'File Size: ' . $file['size'];
            $nameFile = $file['name'];
            $sizeFile = $file['size'];
            $errorFile = $file['error'];
            $tmpFile = $file['tmp_name'];

            $isValidEkstensi = ['png'];
            $ektensiFoto = explode('.', $nameFile);
            $ektensiFoto = strtolower(end($ektensiFoto));
            if (!in_array($ektensiFoto, $isValidEkstensi)) {
                return false;
                // var_dump($ektensiFoto);
                die();
            }

            if ($sizeFile < 500000 && $sizeFile > 5000000) {
                return false;
            }

            $newNameFile = uniqid();
            $newNameFile .= '.';
            $newNameFile .= $ektensiFoto;
            move_uploaded_file($tmpFile, 'dashboard/upload_kontes/' . $newNameFile);
            $id = $id_peserta;
            $sqlFotoKontes = "CALL insert_foto_kontes ('$id','$newNameFile') ;";
            mysqli_next_result($this->connect);
            if (!mysqli_query($this->connect, $sqlFotoKontes)) {
                var_dump(mysqli_error($this->connect));
                
            } 

        }
        return true;
    }

    function getPeserta(){
        $sql = "CALL lihat_peserta() ;";
        $res =  mysqli_query($this->connect,$sql);
        $rows = [];
        while($row = mysqli_fetch_assoc($res)){
            $rows[] = $row;
        }
        return $rows;
    }

    function getDetailPeserta($id_peserta){
        $sql = "call lihat_detail_peserta ('$id_peserta');";
        $res = mysqli_query($this->connect,$sql);
        $row = mysqli_fetch_assoc($res);
        return $row;
    }

    function getFotoKontes($id_peserta){
        $sql ="call ambil_foto('$id_peserta');";
        $res = mysqli_query($this->connect,$sql);
        $rows = [];
        while($row = mysqli_fetch_assoc($res)){
            $rows[] = $row;
        }
        return $rows;
    }
    function cekTotal($sql){
        mysqli_next_result($this->connect);
        $res = mysqli_query($this->connect,$sql);
        $jumlah =  mysqli_fetch_assoc($res);
        return $jumlah['COUNT(*)'];
    }


    function _execute($sql){
        mysqli_next_result($this->connect);
        $res = mysqli_query($this->connect,$sql);
        if(!$res){
            return false;
            die();
        }
        return true;
    }
}

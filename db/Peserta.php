<?php

class Peserta{
  public $id_peserta;
  public $nama ; 
  public $url_ktp ; 
  public $no_hp ; 
  public $alamat ; 
  public $namaBelakang ; 
  public $jenisKelamin ; 
  public $asalKota ; 
  public $email ; 
  public $tglPendaftaran ; 



	function __construct( $id,$nama ,$url_ktp ,$no_hp , $alamat  , $namaBelakang, $jenisKelamin, $asalKota , $email ,$tglPendaftaran ){
    $this->id_peserta = $id;
    $this->nama = $nama;
    $this->url_ktp = $url_ktp;
    $this->no_hp = $no_hp;
    $this->alamat = $alamat;
    $this->namaBelakang = $namaBelakang;
    $this->jenisKelamin = $jenisKelamin;
    $this->asalKota = $asalKota;
    $this->email = $email;
    $this->tglPendaftaran = $tglPendaftaran;

  }




   //////////////////////////////////////////getter/////////////////////////
 
}

?>
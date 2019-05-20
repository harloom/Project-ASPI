<?php
class Peserta{
  private $nama ; 
  private $url_ktp ; 
  private $no_hp ; 
  private $alamat ; 
  private $fomulir ; 
  private $namaBelakang ; 
  private $jenisKelamin ; 
  private $asalKota ; 
  private $email ; 
  private $tglPendaftaran ; 



	function __construct( $nama ,$url_ktp ,$no_hp , $alamat , $fomulir , $namaBelakang, $jenisKelamin, $asalKota , $email ,$tglPendaftaran ){
    $this->nama = $nama;
    $this->url_ktp = $url_ktp;
    $this->no_hp = $no_hp;
    $this->alamat = $alamat;
    $this->fomulir = $fomulir;
    $this->namaBelakang = $namaBelakang;
    $this->jenisKelamin = $jenisKelamin;
    $this->asalKota = $asalKota;
    $this->email = $email;
    $this->tglPendaftaran = $tglPendaftaran;

  }
  
   //////////////////////////////////////////getter/////////////////////////
 
}

?>
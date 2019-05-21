<?php 
include("Peserta.php");
class database{

	var $host = "localhost";
	var $uname = "root";
	var $pass = "";
	var $db = "db_aspi";
	var $connect ;

	// CALL daftar_peserta('Nanda','upload/foto/iasdasad.jph','082307304530','Bandar Lampung','upload/dokumen/iasdasad.jph','Solehudin','Pria','BandarLampung','Harloom@gmail.com','2019-04-12');


	function __construct(){
		$this->connect =  mysqli_connect($this->host, $this->uname, $this->pass , $this->db);
    
	}



	function input(Peserta $peserta){
		$sql ="CALL daftar_peserta('$peserta->nama','$peserta->url_ktp','$peserta->no_hp','$peserta->alamat'
		,'$peserta->namaBelakang','$peserta->jenisKelamin','$peserta->asalKota','$peserta->email','$peserta->tglPendaftaran')"; 
		$flag = mysqli_query($this->connect,$sql);
			return $flag;
		
	}

	function uploadKTP($img){

		$nameFile = $img['foto_ktp']['name'];
		$sizeFile = $img['foto_ktp']['size'];
		$errorFile = $img['foto_ktp']['error'];
		$tmpFile = $img['foto_ktp']['tmp_name'];

		//cek apakah ada file/foto yang di upload
		if($errorFile == 4){ 

			return false;
		}

		$isValidEkstensi = ['jpg','jpeg','png'];
		$ektensiFoto = explode('.',$nameFile);
		$ektensiFoto = strtolower( end($ektensiFoto));
		if(!in_array($ektensiFoto,$isValidEkstensi)){
			return false;
		}

		if($sizeFile < 500000 && $sizeFile > 5000000){
			return false;
		}

		$newNameFile = uniqid();
		$newNameFile.='.';
		$newNameFile.=$ektensiFoto;


		move_uploaded_file($tmpFile,'dashboard/upload/'.$newNameFile);

		return $newNameFile;

	}

	function insertFotoTable($id_peserta, $nameFile){
			print $id_peserta." : ".$nameFile;
			$id_peserta = (int) $id_peserta;
			$sqlFotoKontes = "CALL insert_foto_kontes($id_peserta,'$nameFile')";
			$flag = mysqli_query($this->connect,$sqlFotoKontes);
			var_dump($flag);


	
		}

	function uploadFotoKontes($data,$id_peserta){
		$id = $id_peserta;
		$file_ary = array();
    $file_count = count($data['foto_kontes']['size']);
    $file_keys = array_keys($data['foto_kontes']);
	
    for ($i=0; $i<$file_count; $i++) {
        foreach ($file_keys as $key) {
            $file_ary[$i][$key] = $data['foto_kontes'][$key][$i];
        }
    }
		
		foreach ($file_ary as $file) {
					// print 'File Type: ' . $file['type'];
					// print 'File Size: ' . $file['size'];
					$nameFile =		$file['name'];
					$sizeFile = 	$file['size'];
					$errorFile = 	$file['error'];
					$tmpFile = 		$file['tmp_name'];

					$isValidEkstensi = ['jpg','jpeg','png'];
				$ektensiFoto = explode('.',$nameFile);
				$ektensiFoto = strtolower( end($ektensiFoto));
				if(!in_array($ektensiFoto,$isValidEkstensi)){
					return false;
				}

				if($sizeFile < 500000 && $sizeFile > 5000000){
					return false;
				}

				$newNameFile = uniqid();
				$newNameFile.='.';
				$newNameFile.=$ektensiFoto;
				move_uploaded_file($tmpFile,'dashboard/upload_kontes/'.$newNameFile);

				$this->insertFotoTable($id,$newNameFile);
			}
		

	}


	
} 


?>
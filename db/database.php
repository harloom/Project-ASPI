<?php 

class database{

	var $host = "localhost";
	var $uname = "root";
	var $pass = "";
	var $db = "db_aspi";

	function __construct(){
    mysqli_connect($this->host, $this->uname, $this->pass , $this->db);
    
	}

	function tampil_data(){
		$data = mysql_query("select * from peserta");
		while($d = mysql_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;

	}

	function input($nama,$alamat,$usia,$email){
		mysqli_query("insert into user values('','$nama','$alamat','$usia','$email')");
	}


} 

?>
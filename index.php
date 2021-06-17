<?php
	include "conn.php";
	if ($_SERVER['REQUEST_METHOD']=='GET'){

		$sql = "select * from mahasiswa";
		$koneksi = mysqli_query($conn, $sql);

		while ($data = mysqli_fetch_array($koneksi)){
			$datanya[]=array(
				'npm' => $data['npm'],
				'nama' => $data['nama'],
				'jurusan' => $data['jurusan']
			);
		}
		$respon[]=array(
			'status' => 'Ok',
			'kode' => '999',
			'data' => $datanya
		);
		header("Content-type: application/json");
		echo json_encode($respon);
	}
?>
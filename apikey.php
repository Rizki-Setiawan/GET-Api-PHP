<?php
	
	function getKey() {
		return ["1234", "rahasia", "secret"];
	}

	function isValid($input) {
		$apikey = $input["api_key"];
		if (in_array($apikey, getKey())){
			return true;
		}
		else {
			return false;
		}
	}

	function jsonOut($status, $message, $data){
		$respon = ["status"=>$status,"message"=>$message,"data"=>$data];
		header("Content-type: application/json");
		echo json_encode($respon);
	}

	function getFilm(){
		$film = [
			["title"=>"FP5"],
			["title"=>"FP2"]
		];
	}

	if (isValid($_GET)){
		jsonOut("Berhasil","apikey valid",getFilm());
	} else {
		jsonOut("Gagal","apikey not valid",null);
	}

?>
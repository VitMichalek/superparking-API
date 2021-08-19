<?php
include_once("m_core.php");

class MP{
	static $token = "";
	static function send($url,$data){
		$data["token"] = MP::$token;
		

		$cURLConnection = curl_init('https://mujparking.cz/api/v2');
		curl_setopt($cURLConnection, CURLOPT_POSTFIELDS, $data);
		curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);

		$apiResponse = curl_exec($cURLConnection);
		curl_close($cURLConnection);
		return $apiResponse;
	}
	static function addDomain($domain,$category = array()){
		$data = array();
		$data["domain"] = $domain;
		$data["category"] = $category;		
		return MP::send("/?addDomain",$data);
	}
	static function changeCategory($domain,$category = array()){
		$data = array();
		$data["domain"] = $domain;
		$data["category"] = $category;		
		return MP::send("/?changeCategory",$data);
	}
	static function getStats($domain,$from="1970-01-01",$to = ""){
		$data = array();
		$data["domain"] = $domain;
		$data["from"] = $from;
		$data["to"] = $to;
		return MP::send("/?getStats",$data);
	}
}


MP::$token = "muj tajny token";

//add new domain
$id = MP::addDomain("example.com",array("CD","CY"));

//changeCategory
MP::addDomain("example.com",array("ZZ"));


//get stats
MP::getStats("example.com","2021-08-1","2021-08-19");
?>
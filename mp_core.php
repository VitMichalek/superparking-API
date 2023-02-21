<?php


class SP{
	static $token = "";
	static function send($url,$data){
		$data["token"] = MP::$token;


		$cURLConnection = curl_init('https://superparking.cz/api/v2'.$url);
		curl_setopt($cURLConnection, CURLOPT_POSTFIELDS, http_build_query($data));
		curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);

		$apiResponse = curl_exec($cURLConnection);
		curl_close($cURLConnection);
		return $apiResponse;
	}
	static function addDomain($domain,$category = array(), $type = "R"){
		$data = array();
		$data["domain"] = $domain;
		$data["category"] = $category;
		$data["type"] = $type;
		return SP::send("/?addDomain",$data);
	}
	static function changeCategory($domain,$category = array(), $type = ""){
		$data = array();
		$data["domain"] = $domain;
		$data["category"] = $category;
		$data["type"] = $type;
		return SP::send("/?changeCategory",$data);
	}
	static function getStats($domain,$from="1970-01-01",$to = "",$group = "day"){
		$data = array();
		$data["domain"] = $domain;
		$data["from"] = $from;
		$data["to"] = $to;
		$data["group"] = $group;
		return SP::send("/?getStats",$data);
	}

	static function getCategoryList(){
		return SP::send("/?categoryList",array());
	}

	static function getDomainList(){
		return SP::send("/?domainList",array());
	}
	static function delDomain(){
		return SP::send("/?delDomain",array());
	}
}

?>

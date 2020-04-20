<?php 
class validate{
	public function analyseURL($url)
	{
		if($url != null){
			$url = rtrim($url, '/');
			$url = filter_var($url, FILTER_SANITIZE_URL);
			$url = explode("/", $url);
		}
		return $url;
	}
	public function hello(){
		echo "helo";
	}
}
$validate = new validate();
?>
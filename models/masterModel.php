<?php 
class masterModel extends db
{	
	function login($user,$pass){
		$sql = "SELECT * FROM user WHERE `username` = '$user' AND `password` = '$pass'";
		$data = $this->connect()->query($sql);
		$row=mysqli_num_rows($data);
		if($row>0){
			return true;
		}else
		return false;
	}
	function select_user($user){
		$sql = "SELECT * FROM `user` WHERE username = '$user'";
		$data = $this->connect()->query($sql);
		$row=mysqli_num_rows($data);
		if($row>0){
			return false;
		}else
		return true;
	}
	function show_user($user){
		$sql = "SELECT * FROM user WHERE `username` = '$user'";
		$data = $this->connect()->query($sql);
		$row=$data -> fetch_assoc();
		return $row;

	}
	function insert_user($user,$pass,$name,$address,$phone){
		$sql ="INSERT INTO `user`( `username`, `password`, `fullname`, `address`, `phone`, `level`) VALUES ('$user','$pass','$name','$address','$phone',1)";
		if($this->connect()->query($sql)){
			return true;
		}else{
			return false;
		}
	}
	function randomString()
	{
		$random = substr(md5(mt_rand()), 0, 7);
		return $random;
	}

	function link_img($img_name){
		$extension = explode(".",$img_name);
		$end_type = end($extension);
		$type = array("jpg","jpeg","png","gif");
		if(in_array($end_type, $type)){
			$new_img = rand().".".$end_type;
			$path = "upload/img/".$new_img;
			return $path;
		}else{
			return false;
		}
	}
}
	?>
<?php 
	
	class adminModel extends db
	{
		function select_transaction($status){
			$sql ="SELECT transaction.*,user.username,user.fullname,user.email,user.address address2,user.phone FROM `transaction` LEFT JOIN user on user.id = transaction.user_id WHERE status = $status";
			$data = $this->connect()->query($sql);
			return $data;
		}
		public function select_order($id_transacsion){
			$sql ="SELECT `order`.*,product.name,product.image_link FROM `order` LEFT JOIN product ON product.id = `order`.`product_id` WHERE `order`.`transaction_id` = $id_transacsion";
			$data = $this->connect()->query($sql);
			return $data;
		}
		public function delete_transaction($id){
			$sql ="DELETE FROM `transaction` WHERE `id` = $id";
			$this->connect()->query($sql);
		}
		public function delete_product($id){
			$sql ="DELETE FROM `product` WHERE `id` = $id";
			$this->connect()->query($sql);
		}
		public function update_transaction($id,$status){
			$sql ="UPDATE `transaction` SET `status` = $status WHERE `id` = $id";
			$this->connect()->query($sql);
		}
		public function select_product(){
			$sql = "SELECT product.* , catalog.name name_catalog from product LEFT JOIN catalog ON catalog_id = catalog.id";
			$data = $this->connect()->query($sql);
			return $data;
		}
		function select_catalog($id){
			$sql ="SELECT * FROM `catalog` WHERE `parent_id` = $id";
			$data = $this->connect()->query($sql);
			while ($row = $data->fetch_assoc()) {
			        $results[] = $row;
			    }   
			   echo json_encode($results);
		}
		public function add_product($catalog_id,$name,$price,$dismount,$img_link,$img_link1,$img_link2,$img_link3,$describes){
			$sql = "INSERT INTO `product`(`catalog_id`, `name`, `price`, `discount`, `image_link`, `image_link1`, `image_link2`, `image_link3`, `describes`) VALUES ($catalog_id,'$name',$price,$dismount,'$img_link','$img_link1','$img_link2','$img_link3','$describes')";
			$data = $this->connect()->query($sql);
			return $data;
		}
		public function delete_table_id($table,$id){
			$sql ="DELETE FROM `$table` WHERE id = $id";
			if($this->connect()->query($sql)){
				return true;
			}else{
				return fasle;
			}
		}
		public function show_product_by_id($id){
					$sql="SELECT * FROM `product` WHERE id =$id";
				$data = $this->connect()->query($sql);
			while ($row = $data->fetch_assoc()) {
			        $results[] = $row;
			    }   
			   echo json_encode($results);
		}
	}

 ?>
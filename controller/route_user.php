<?php 

switch ($control) {
		case 'ajax':
			$page =isset($_GET['page'])?$_GET['page']:1;
				$from = ($page-1)*$sotin1trang;
			switch ($action) {
					case 'dang-ky':
						$user =$_POST['user'];
						$phone = $_POST['phone'];
						$pass = $_POST['pass'];
						$name=$_POST['name'];
						$address= $_POST['address'];
						if($masterModel->select_user($user)){
							if($masterModel->insert_user($user,$pass,$name,$address,$phone)){
								echo "<div class='alert alert-success mt-3'><strong>Thông báo!</strong> Đăng ký thành công .</div>";
							}else{
								echo "<div class='alert alert-danger mt-3'><strong>Thông báo!</strong> Đăng ksy thất bại .</div>";
							}
							
						}else{
							echo "<div class='alert alert-danger mt-3'><strong>Thông báo!</strong> Tài khoản đã tồn tại .</div>";
						}
						break;
					case 'cua-hang':
						if(isset($_GET['type'])){
							$type = $_GET['type'];
							if($type=='default'){
									$data=  $userModel->show_all_product($from,$sotin1trang);
							}else{
								$data=$userModel->show_all_product_oder($type,$from,$sotin1trang);
							}
						}else{
							$data=  $userModel->show_all_product($from,$sotin1trang);
						}
						include('views/user/ajax/cuahang.php');
							/*$page =$_GET['page'];
							$from = ($page-1)*$sotin1trang;
							$data=  $userModel->show_all_product($from,$sotin1trang);
								include('views/user/ajax/cuahang.php');*/
						break;
					case 'thoi-trang-nam':
							
						if(isset($_GET['type'])){
							$type = $_GET['type'];
							if($type=='default'){
									$data=  $userModel->show_all_product_by_catalogparent('Thời trang nam',$from,$sotin1trang);
							}else{
								$data=  $userModel->show_all_product_by_catalogparent_order('Thời trang nam',$type,$from,$sotin1trang);
							}
						}else{
							$data=  $userModel->show_all_product_by_catalogparent('Thời trang nam',$from,$sotin1trang);
						}
						include('views/user/ajax/thoitrang.php');
						break;
					case 'thoi-trang-nu':
						
						if(isset($_GET['type'])){
							$type = $_GET['type'];
							if($type=='default'){
									$data=  $userModel->show_all_product_by_catalogparent('Thời trang nữ',$from,$sotin1trang);
							}else{
								$data=  $userModel->show_all_product_by_catalogparent_order('Thời trang nữ',$type,$from,$sotin1trang);
							}
						}else{
							$data=  $userModel->show_all_product_by_catalogparent('Thời trang nữ',$from,$sotin1trang);
						}
						include('views/user/ajax/thoitrang.php');
						break;
					case 'phu-kien':
						if(isset($_GET['type'])){
							$type = $_GET['type'];
							if($type=='default'){
									$data=  $userModel->show_all_product_by_catalogparent('Phụ kiện',$from,$sotin1trang);
							}else{
								$data=  $userModel->show_all_product_by_catalogparent_order('Phụ kiện',$type,$from,$sotin1trang);
							}
						}else{
							$data=  $userModel->show_all_product_by_catalogparent('Phụ kiện',$from,$sotin1trang);
						}
						include('views/user/ajax/thoitrang.php');
						break;
					case 'cuahang-order':
							$type = $_GET['type'];
							if($type=='default'){
								$data=$userModel->show_all_product();
							}else{
								$data=$userModel->show_all_product_oder($type);
								
							}
							include('views/user/ajax/cuahang.php');
						break;
					case 'danh-muc':
						if(isset($_GET['type'])){
								$data=  $userModel->show_all_product_by_catalog($_GET['type']);
								include('views/user/ajax/cuahang.php');
						}
						break;
					case 'seach':
						if(isset($_GET['type'])&&isset($_GET['key'])){
							$key = $_GET['key'];
							switch ($_GET['type']) {
								case 'thoi-trang-nam':
									$type='Thời trang nam';
									$data=  $userModel->show_product_seach($type,$key);
									break;
								case 'thoi-trang-nu':
									$type='Thời trang nữ';
									$data=  $userModel->show_product_seach($type,$key);
									break;
								case 'phu-kien':
									$type='Phụ kiện';
									$data=  $userModel->show_product_seach($type,$key);
									break;
								case 'cua-hang':
									$data=  $userModel->show_product_seach_all($key);
									break;
							}
							
							
							include('views/user/ajax/thoitrang.php');
						}
						break;
					case 'product-new':
						$data=  $userModel->show_4_product_new();
						include('views/user/ajax/thoitrangmoive.php');
						break;
					case 'footer':

						$catalog_nu = $userModel->show_all_catalog_by_catalogparent('Thời trang nữ');
						$catalog_nam = $userModel->show_all_catalog_by_catalogparent('Thời trang nam');
						include('views/user/ajax/footer.php');
						break;
					default:
						# code...
						break;
				}	
			
			break;
		case 'gioi-thieu':
			include('views/user/gioithieu.php');
			break;
		case 'cua-hang':
			$breadcrumb = 'Cửa hàng';
			$catalog = $userModel->show_all_catalog();	
			include('views/user/cuahang.php');
			break;
		case 'thoi-trang-nu':
			$breadcrumb = 'Thời trang nữ ';
			$catalog = $userModel->show_all_catalog_by_catalogparent('Thời trang nữ');
			include('views/user/thoi-trang.php');
			break;
		case 'phu-kien':
			$breadcrumb = 'Phụ kiện';
			$catalog = $userModel->show_all_catalog_by_catalogparent('Phụ kiện');
			
			include('views/user/thoi-trang.php');
			break;
		case 'thoi-trang-nam':
			$breadcrumb = 'Thời trang nam ';
			$catalog = $userModel->show_all_catalog_by_catalogparent('Thời trang nam');
			
			include('views/user/thoi-trang.php');
			break;
		case 'tai-khoan':
			switch ($action) {
				case 'dang-xuat':
					unset($_SESSION['user']);
					header('Location:?controller=tai-khoan');
					break;
				case 'doi-mat-khau':
					if(isset($_POST['submit'])){
						$pass = $_POST['pass'];
						$pass1 = $_POST['pass1'];
						$pass2 = $_POST['pass2'];
						if($pass!=$_SESSION['user']['password']){
							$_SESSION['err'] = "<div class='alert alert-danger'><strong>Lỗi !</strong>* Mật khẩu cũ không chính xác .</div>";
						}else if($pass1!=$pass2){
							$_SESSION['err'] = "<div class='alert alert-success'><strong>Lỗi !</strong>* Nhập lại mật khẩu không chính xác.</div>";
						}else{
							$userModel->update_pass($_SESSION['user']['username'],$pass1);
							$_SESSION['user'] = $masterModel->show_user($_SESSION['user']['username']);
							$_SESSION['err'] = "<div class='alert alert-success'><strong>Thành công!</strong> Đổi mật khẩu thành công </div> ";
						}
					}
					
					break;
				default:
					header('Location:?controller=tai-khoan&action=thong-tin-ca-nhan');
					break;
				case 'thong-tin-ca-nhan':
					if(isset($_POST['submit'])){
						$phone = $_POST['phone'];
						$email = $_POST['email'];
						$address  = $_POST['address'];
						$name  = $_POST['name'];

						if($userModel->update_info_user($_SESSION['user']['username'],$phone,$email,$address,$name)){
							$_SESSION['user'] = $masterModel->show_user($_SESSION['user']['username']);
							$_SESSION['sussess'] ="<p class='alert alert-success'>Cập nhật thành công </p>";
												
						}else{
							$_SESSION['sussess'] ="<p class='alert alert-danger'>Cập nhật thất bại </p>";
						}
						
					}

					break;
				case 'don-hang':
					
					break;
				}
		
					if(isset($_POST['login'])){
						$user= $_POST['user'];
						$pass=$_POST['pass'];
						if($masterModel->login($user,$pass)){
							$_SESSION['user'] = $masterModel->show_user($user);
							if($_SESSION['user']['level']==2){
								header('Location:?controller=admin');
							}else{
								if($action=="thanh-toan"){
								header('Location:?controller=thanh-toan');
									}else{
										include('views/user/tai-khoan.php');
									}
							}

						}else{
							$_SESSION['err'] = "Thông tin tài khoản hoặc mật khẩu không chính xác";
							include('views/user/tai-khoan.php');
						}	
					}else{
						include('views/user/tai-khoan.php');
				}
			
			break;
		case 'gio-hang':
					switch ($action) {
						case 'delete_cart':
							if(isset($_SESSION['cart'])){
								$id = $_GET['id'];
								unset($_SESSION['cart'][$id]);
								header('Location:?controller=gio-hang');
							}
							break;
						case 'update_cart':					
							if(isset($_POST['id'])&&isset($_POST['number'])){
									$id = $_POST['id'];
									$number = $_POST['number'];
									$cart = $_SESSION['cart'];
									if(array_key_exists($id,$cart)){
										if($number>0){
											$cart[$id] = array(
												'name' => $cart[$id]['name'],
												'id' => $cart['id'],
												'number' => $number,
												'price' =>$cart[$id]['price'],
												'img' =>$cart[$id]['img'],
												'size' =>$cart[$id]['size']
											);
										}else{
											unset($cart[$id]);
										}
									}

									$_SESSION['cart'] = $cart;}
								
							break;
						default:
							include ('views/user/gio-hang.php');
							break;
					}
			break;
		case 'trang-chu':		
			$data1=  $userModel->show_all_product_by_catalogparent_limit8('Thời trang nữ');
			$data2=  $userModel->show_all_product_by_catalogparent_limit8('Thời trang nam');
			$data3=  $userModel->show_all_product_by_catalogparent_limit8('Phụ kiện');
			include('views/user/index.php');
			break;
		case 'chi-tiet':
			if(isset($_GET['id'])&&is_numeric($_GET['id'])){
					$id = $_GET['id'];
						if($data = $userModel->show_product_by_id($id)){
							$breadcrumb = $userModel->show_name_catalog_catalogparen_by_productID($id);
							if(isset($_GET['cart'])){
										if(isset($_POST['id'])&&isset($_POST['number'])&&isset($_POST['size'])){
											$number = $_POST['number'];
											$size =$_POST['size'];
											if(!isset($_SESSION['cart'])){
												$cart= array();
												$cart[$id]= array(
													'name'=>$data['name'],
													'id' => $data['id'],
													'number'=>$number,
													'price' => $data['price'],
													'img' =>$data['image_link'],
													'size' =>$size
												);
											}else{
												$cart = $_SESSION['cart'];
												if(array_key_exists($id, $cart)){
													$cart[$id]= array(
													'name'=>$data['name'],
													'id' => $data['id'],
													'number'=>(int)$cart[$id]['number']+$number,
													'price' => $data['price'],
													'img' =>$data['image_link'],
													'size' =>$size
													);

												}else{
													$cart[$id]= array(
													'name'=>$data['name'],
													'id' => $data['id'],
													'number'=>$number,
													'price' => $data['price'],
													'img' =>$data['image_link'],
													'size' =>$size
													);
												}
											}
											$_SESSION['cart'] =$cart;
											echo "<pre>";
											print_r($_SESSION['cart']);
										}
									}
							include('views/user/chi-tiet-sp.php');
						}else{
							header('Location:?controller=trang-chu');
						}
						
					}else{
					header('Location:?controller=trang-chu');
				}


			
			break;
		
		case 'thanh-toan':

			if(isset($_POST['submit'])){
				if(isset($_SESSION['cart'])){
			
					$message = isset($_POST['comment'])?$_POST['comment']:'NULL';
					$amount = 0;
					foreach ($_SESSION['cart'] as $key => $value) {
						 $amount += $value['number'] * $value['price'];
					}
					if(isset($_SESSION['user'])){
						$user_id = $_SESSION['user']['id'];
						$userModel->insert_transaction($user_id,'NULL','NULL','NULL','NULL',$amount,$message);
						$transaction_id = $userModel->select_max_id_transaction();
						foreach ($_SESSION['cart'] as $key => $value) {
							$userModel->insert_oder($transaction_id,$value['id'],$value['number'],$value['size'],$value['price']*$value['number']);
						}
						include('views/user/thanh-toan-ok.php');
						unset($_SESSION['cart']);
						break;

					}else{
						$name = $_POST['name'];
						$phone = $_POST['phone'];
						$email = $_POST['email'];
						$address = $_POST['address'];
						$userModel->insert_transaction('NULL',$name,$email,$phone,$address,$amount,$message);
						$transaction_id = $userModel->select_max_id_transaction();
						foreach ($_SESSION['cart'] as $key => $value) {
							$userModel->insert_oder($transaction_id,$value['id'],$value['number'],$value['size'],$value['price']*$value['number']);
						}
						include('views/user/thanh-toan-ok.php');
						unset($_SESSION['cart']);
						break;
					}
					
	
				}
			}			
			include('views/user/thanh-toan.php');
				
			//}else{
			//		$_SESSION['err2'] = true;
			//		include('views/user/tai-khoan.php');
					
			
			break;
		case 'lien-he':
			if(isset($_POST['submit'])){
				if(isset($_SESSION['user'])){
					$user_id = $_SESSION['user']['id'];
					$title = $_POST['title'];
					$content = $_POST['content'];
					if($userModel->insert_contact($user_id,'','',$title,$content)){
						$_SESSION['alert'] = "Gửi thành công , Cảm ơn ".$_SESSION['user']['fullname'] ." đã phản hồi cho chúng tôi  !";
					}else{
						$_SESSION['alert'] = "Gửi thành thất bại  !";
					}
					
					
				}else{
					$name= $_POST['name'];
					$email = $_POST['email'];
					$title = $_POST['title'];
					$content = $_POST['content'];
					if($userModel->insert_contact('NULL',$name,$email,$title,$content)){
						$_SESSION['alert'] = "Gửi thành công , Cảm ơn bạn đã phản hồi cho chúng tôi  !";
					}else{
						$_SESSION['alert'] = "Gửi thành thất bại  !";
					}
					
					// /insert_contact($user_id,$name,$email,$title,$content)

				}
			}
			include('views/user/lienhe.php');
			break;
		case 'admin':
			if(isset($_SESSION['user'])&&$_SESSION['user']['level']==2){
				switch ($action) {
					case 'trang-chu':
						include('views/admin/index.php');
						break;
					
					default:
						header('Location:?controller=admin&action=trang-chu');
						break;
				}
			}else{
				header('Location:?controller=trang-chu');
			}
			break;
		default:
			header('Location:?controller=trang-chu');
			break;
	}

 ?>
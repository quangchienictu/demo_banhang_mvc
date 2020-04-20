<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="public/css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">


</head>
<body>
	<?php require_once('layout/header.php') ?>
	<div class="background"><div class="background-style"></div></div>
	
	<div class="page-tile">
		<div class="tile">
			<h1>Tháng 12 Thoả Thích mua sắm</h1>
			<h3>Giảm 25% cho tất cả các sản phẩm</h3>
			<div class="link">
				<a href="?controller=cua-hang">Mua ngay</a>
				<!-- <a  href="">Khuyến mại</a> -->
			</div>
		</div>
	</div>
	
	<div class="container">
		<section>
			<div class="row justify-content-around lk">
				<div class="col-sm-3 md-3 lg-3 xl-3">
					<img src="public/img/b2.png">
				</div>
				<div class="col-sm-3 md-3 lg-3 xl-3">
					<img src="public/img/b3.png">
				</div>
				<div class="col-sm-3 md-3 lg-3 xl-3">
					<img src="public/img/b4.png">
				</div>
				<div class="col-sm-3 md-3 lg-3 xl-3">
					<img src="public/img/b5.png">
				</div>
			</div>
		</section>
		<section>
			<div class="styles">
				<div class="style row">
					<div id="ef_boy" class="col-md-4">
						<a href="?controller=thoi-trang-nam">
							<img src="public/img/hover2.jpg">
							<div class="text">
								<h4>Thời trang nam</h4>
							</div>
						</a>
					</div>
					<div id="ef_girl" class="col-md-4">
						<a href="?controller=thoi-trang-nu">
							<img src="public/img/hover2.jpg">
							<div class="text">
								<h4>Thời trang nữ</h4>
							</div>
						</a>
					</div>
					<div id="ef_sr" class="col-md-4">
						<a href="?controller=phu-kien">
							<img src="public/img/hover1.jpg">
							<div class="text">
								<h4>Phụ kiện</h4>
							</div>
						</a>
					</div>
				</div>
			</div>
		</section>
		<section>

			<div class="container girl">
				<div class="row"><div class="con-12"><h2>Thời trang nữ</h2></div></div>
				<div class="row " >
					
						<?php while($row = $data1->fetch_assoc()){ ?>
						<div class="col-md-3">
							<div class="card">
								<img src="<?=$row['image_link']?>">
								<div class="content">
									<h2><?=$row['name']?></h2>
										<?php if($row['discount']>0){ ?>
										<p class="sell"><?=number_format($row['price']+$row['discount'])?><span> ₫</span></p>
									<?php } ?>
									<p><?=number_format($row['price'])?><span><u> ₫</u></span></p>
									<a href="?controller=chi-tiet&id=<?=$row['id']?>">Xem</a>


								</div>
							</div>
						</div>
					<?php } ?>
					
				</div>

				<div class="row"><div class="con-12"><h2>Thời trang nam</h2></div></div>
				<div class="row " >
					<?php while($row = $data2->fetch_assoc()){ ?>
						<div class="col-md-3">
							<div class="card">
								<img src="<?=$row['image_link']?>">
								<div class="content">
									<h2><?=$row['name']?></h2>
										<?php if($row['discount']>0){ ?>
										<p class="sell"><?=number_format($row['price']+$row['discount'])?><span> ₫</span></p>
									<?php } ?>
									<p><?=number_format($row['price'])?><span><u> ₫</u></span></p>
									<a href="?controller=chi-tiet&id=<?=$row['id']?>">Xem</a>
									
								</div>
							</div>
						</div>
					<?php } ?>
					
				</div>

				<!-- sản phẩm bán chạy -->
				<div class="row"><div class="con-12"><h2>Phụ kiện</h2></div></div>
				<div class="row " >
					
					
						<?php while($row = $data3->fetch_assoc()){ ?>
						<div class="col-md-3">
							<div class="card">
								<img src="<?=$row['image_link']?>">
								<div class="content">
									<h2><?=$row['name']?></h2>
									<?php if($row['discount']>0){ ?>
										<p class="sell"><?=number_format($row['price']+$row['discount'])?><span> ₫</span></p>
									<?php } ?>
									<p><?=number_format($row['price'])?><span><u>đ</u></span></p>
									<a href="?controller=chi-tiet&id=<?=$row['id']?>">Xem</a>
								</div>
							</div>
						</div>
					<?php } ?>
					
				
				</div>




				<!-- goi y -->
				<!-- 		<div class="row"><div class="con-12"><h2>Đề xuất cho bạn</h2></div></div>
								<div class="row " >
									<div class="row">
				<div class="col-md-3">
					<div class="card">
						<img src="./public/img/vong1.jpg">
						<div class="content">
							<h2>Áo khoác jean NAM CÁ TÍNH thời trang ANGEL cao cấp</h2>
							<p>4,200,000<span><u>đ</u></span></p>
							<a href="">Xem</a>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="card">
						<img src="public/img/vong2.jpg">
						<div class="content">
							<h2>Áo khoác jean NAM CÁ TÍNH thời trang ANGEL cao cấp</h2>
							<p>4,200,000<span><u>đ</u></span></p>
							<a href="">Xem</a>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="card">
						<img src="public/img/giay1.jpg">
						<div class="content">
							<h2>Áo khoác jean NAM CÁ TÍNH thời trang ANGEL cao cấp</h2>
							<p>4,200,000<span><u>đ</u></span></p>
							<a href="">Xem</a>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="card">
						<img src="public/img/giay2.jpg">
						<div class="content">
							<h2>Áo khoác jean NAM CÁ TÍNH thời trang ANGEL cao cấp</h2>
							<p>4,200,000<span><u>đ</u></span></p>
							<a href="">Xem</a>
						</div>
					</div>
				</div>
									</div>
								</div> -->
				<!-- end-goi y -->
			</div>
		</div>
	</section>
	<div class="container-fluid about-fluid">
		<section class="about container">
			<div class="about-style"></div>
			<div class="content">
				<p>NQCshop.Com - Shop Thời Trang Hàn Quốc xách tay Hàng Đầu Trái đất . Chúng tôi ra có mặt trên thị trường với mong muốn mang đến những sản phẩm thời trang tương lai tốt nhất tới tay người tiêu dùng </p>
			</div>
		</section>
	</div>
	
	<section>
		<div class="container">
			<div class="service row justify-content-md-center">
				<div class="item col-md-4">
					<img src="public/img/icon1.png">
					<h3>QUÀ TẶNG HẤP DẪN</h3>
					<p>Nhiều quà tặng hấp dẫn trong ngày</p>
				</div>
				<div class="item col-md-4">
					<img src="public/img/icon1.png">
					<h3>GIAO HÀNG NHANH</h3>
					<p>Giao hàng tận nơi, nhanh chóng trong ngày với khu vực nội thành</p>
				</div>
				<div class="item col-md-4">
					<img src="public/img/icon1.png">
					<h3>DỊCH VỤ KHÁCH HÀNG</h3>
					<p>Phục vụ nhiệt tình, chu đáo, với phương châm khách hàng là người được lợi cao nhất</p>
				</div>
			</div>
		</div>
	</section>
	<div class="banner">
		<img src="public/img/banner1.jpg">
	</div>
</div>
<footer id="footer">
	
</footer>
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script type="text/javascript" src="public/js/script.js"></script>
<script type="text/javascript" src="public/js/cart.js"></script>
<script type="text/javascript" src="public/js/footer.js"></script>
</html>

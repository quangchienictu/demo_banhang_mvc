<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="public/css/style.css">
	<link rel="stylesheet" type="text/css" href="public/css/style_gioithieu.css">
	<link rel="stylesheet" type="text/css" href="public/css/lienhe.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

</head>
<body>
	<?php require_once('layout/header.php') ?>
	<div class="background-gioithieu"><div class="background-style"></div></div>
	<div class="page-tile">
		<div class="tile">
			<h1>Liên hệ</h1>
		</div>
	</div>
	<div class="container lien-he">	
		<div class="row">
			<div class="col-md-6">
				<h3 class="text-center">Thông tin liên hệ</h3>
				<table>
					<tr>
						<td><b>Địa chỉ : </b>44-Quyết Thắng - Thái nguyên</td>
					</tr>
					<tr>
						<td><b>Hotline : </b>0966.43.9999 – 0988.554.940</td>
					</tr>
					<tr>
						<td><b>Website : </b> https://shopnqc.com</td>
					</tr>
					<tr>
						<td><b>Mail :</b> adminshop@gmail.com</td>
					</tr>
				</table>
			</div>
			<div class="col-md-6">
				<h3 class="text-center">Phản hồi khách hàng</h3>
				<?php if(isset($_SESSION['alert'])): ?>
					<div class="alert alert-success">
					  <strong>Thông báo!</strong> <?=$_SESSION['alert'] ?>
					</div>
					<?php unset($_SESSION['alert']); ?>
				<?php endif; ?>
				<form method="post">
					<div class="rep">
						<?php if(!isset($_SESSION['user'])): ?>
							<div class="form-group">
							<label for="usr">Tên của bạn:</label>
							<input name="name" type="text" class="form-control" id="usr" required="">
							</div>
							<div class="form-group">
							<label for="pwd">Email:</label>
							<input name="email" type="email" class="form-control" id="pwd" required="">
						</div>
						<?php endif; ?>
						<div class="form-group">
							<label for="pwd">Tiêu đề :</label>
							<input name="title" type="text" class="form-control" id="pwd" required="">
						</div>
						<div class="form-group">
							<label for="comment">Nội dung:</label>
							<textarea name="content" class="form-control" rows="5" id="comment" required=""></textarea>

						</div>
						<button type="submit" name="submit" class="btn btn-dark text-center">Gửi</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	
	
	<footer id="footer"></footer>


</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script type="text/javascript" src="script.js"></script>
<script type="text/javascript" src="public/js/cart.js"></script>
<script type="text/javascript" src="public/js/footer.js"></script>
</html>

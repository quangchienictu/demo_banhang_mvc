
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<div class="show">
					<h3>Về chúng tôi</h3>
					<ul>
						<li><a href="?controller=trang-chu">Trang chủ</a></li>
						<li><a href="?controller=gioi-thieu">Giới thiệu</a></li>
						<li><a href="?controller=tai-khoan">Tài khoản</a></li>
						<li><a href="">Giỏ hàng</a></li>
						<li><a href="?controller=lien-he">Liên hệ</a></li>
					</ul>
				</div>
			</div>

			<div class="col-md-3">
				<div class="show">
					<h3>Thời Trang Nữ</h3>
					<ul>
						<?php foreach ($catalog_nu as $key => $value) :?>
							<li><a href="?controller=thoi-trang-nu"><?=$value['name']?></a></li>
						<?php endforeach ?>


					</ul>
				</div>
			</div>
			<div class="col-md-3">
				<div class="show">
					<h3>Thời Trang Nam</h3>
					<ul>

						<?php foreach ($catalog_nam as $key => $value) :?>
							<li><a href="?controller=thoi-trang-nam"><?=$value['name']?></a></li>
						<?php endforeach ?>
					</ul>
				</div>
			</div>
			<div class="col-md-3">
				<div class="show">
					<h3>Fanpage Facebook</h3>
					<ul>
						<li><iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fblogyeuthuong0%2F&tabs=timeline&width=300&height=150&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=2052739441722696" width="300" height="150" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe></li>

					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="container">
			<div class="row copy-right">
				<div class="col-md-6">
					<p>Copyright © 2020 NQC</p> 
				</div>
				<div class="col-md-6">
					Powered by NQC
				</div>
			</div>
		</div>
	</div>



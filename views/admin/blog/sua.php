<div class="container-fluid">
	<h1 class="mt-4">Quản lý Blog</h1>
	<ol class="breadcrumb mb-4">
		<li class="breadcrumb-item active">Sửa</li>
	</ol>
	<div class="row">
		<div class="col-md-12">
			<?php if(isset($_SESSION['alert'])){echo $_SESSION['alert'];unset($_SESSION['alert']);
		} ?>
		</div>
	</div>
	<form method="post" enctype="multipart/form-data">
		<div class="row ">
		
			<div class="col-md-4">
				<div class="form-group">
					<label for="usr">Tiêu đề:</label>
					<textarea name="title" class="form-control" rows="5" required="" ><?=$data['title'] ?></textarea>
				</div>
				<div class="form-group">
					<label for="pwd">Ảnh đại diện:</label>
					<input name="img" type="file" class="form-control-file border mb-5" >
					<img src="<?=$data['image'] ?>" width="200px">
				</div>
				
			</div>
			<div class="col-md-8">
				<div class="form-group">
					<label for="pwd">Nội dung:</label>
					<textarea name="content" class="form-control" required="" id="content"><?=$data['content'] ?></textarea>
				</div>
				<div style="text-align: center;" class="mt-3">
					<a href="?controller=admin&action=show-blog" class="btn btn-danger">Huỷ bỏ</a>
					<button type="submit" name="submit" class="btn btn-success ml-3">Cập nhật</button>
				</div>
			</div>

		</div>
		
	</form>
	<!-- Modal -->
	<!-- Modal -->



</div>
</div>
</div>
<script type="text/javascript">  CKEDITOR.replace( 'content' );</script>
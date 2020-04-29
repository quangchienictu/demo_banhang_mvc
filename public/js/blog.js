var delete_blog = data =>{
	var r = confirm("Bạn có xác nhận xoá ");
	if (r == true) {
		$.ajax({
			url: "?controller=admin-ajax&action=delete-blog",
			method:"post",
			data:{id:data}
		}).done(function(data){
			location.reload();
		});
	} 
}
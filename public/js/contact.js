load_contact();
load_contact2();

function load_contact(){
	
	$.ajax({
		url:'?controller=admin-ajax&action=select_contact_user',
		type:'GET',
		dataType:'json'
	}).done(function(data){
		let employee="";
		let i = 1;
		$.each(data,function(key,value){
			employee +="<tr>";
			employee +="<td>"+i+"</td>";
			employee +="<td>"+value.username+"</td>";
			employee +="<td>"+value.fullname+"</td>";
			employee +="<td>"+value.email+"</td>";
			employee +="<td>"+value.phone+"</td>";
			employee +="<td>"+value.title+"</td>";
			employee +="<td style='max-width:400px;word-wrap: break-word;'>"+value.content+"</td>";
			employee +="<td style='max-width:100px;'>"+value.time+"</td>";
			employee +="<td><button class='btn btn-danger btn-delete-contact' data='"+value.id+"'>Xoá</button></td>";
			employee +="<tr>";
			i++;
		});
		$("#khachhangthanthiet").html(employee);

	});
}
function load_contact2(){
	
	$.ajax({
		url:'?controller=admin-ajax&action=select_contact_user_null',
		type:'GET',
		dataType:'json'
	}).done(function(data){
		let employee="";
		let i = 1;
		$.each(data,function(key,value){
			employee +="<tr>";
			employee +="<td>"+i+"</td>";
			employee +="<td>"+value.name+"</td>";
			employee +="<td>"+value.email+"</td>";
			employee +="<td>"+value.title+"</td>";
			employee +="<td style='max-width:400px;word-wrap: break-word;'>"+value.content+"</td>";
			employee +="<td style='max-width:50px;'>"+value.time+"</td>";
			employee +="<td><button class='btn btn-danger btn-delete-contact' data='"+value.id+"'>Xoá</button></td>";
			employee +="<tr>";
			i++;
		});
		$("#khachvanglai").html(employee);

	});
}
 $(document).on("click",".btn-delete-contact",function(){
 	var r = confirm("Bạn có chắc chắn xoá!");
 	var id = $(this).attr('data');
	if (r == true) {
		 $.ajax({
			url:'?controller=admin-ajax&action=delete_contact_user',
			type:'POST',
			data:{id:id}
		}).done(function(data){
			load_contact();
			load_contact2();
		});
	} 
 });
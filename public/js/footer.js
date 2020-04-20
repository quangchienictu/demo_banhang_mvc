	$.ajax({
		url: '?controller=ajax&action=footer',
		type: 'GET',
		dataType: 'html',

	}).done(function(ketqua) {
		$('#footer').html(ketqua);
	});
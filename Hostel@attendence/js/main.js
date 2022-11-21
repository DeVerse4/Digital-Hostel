$(document).ready(function(){
	$("form").submit(function(){
		var room = true;
		$(':radio').each(function(){
			name = $(this).attr('name');
			if (room && !$(':radio[name="' + name + '"]:checked').length) {
				// alert(name + " room Missing !");
				$('.alert').show();
				room = false;
			}
		});
		return room;
	});
});
if (window.matchMedia('(max-width:40em)').matches) {
	$('.logo').click(function() {
		$('#menu').addClass('menu-container-expanded');
		return false;
	});
	$(document).on('click', '.dropdown-label', function() {
		$(this).parent().find('.dropdown').toggle();
	});
	$('.dropdown input').change(function() {
		theparent = $(this).closest('.dropdown-container');
		thelabel = $(this).parent().text();
		theparent.find('.dropdown').hide();
		theparent.find('.dropdown-label').text(thelabel);
	});
}
$('#menu-button').click(function() {
	$('#menu').addClass('menu-container-expanded');
});
$('#close-button').click(function() {
	$('#menu').removeClass('menu-container-expanded');
});	
$('.industry-card').click(function() {
	if (window.matchMedia('(max-width:960px)').matches) { 
		$('.industry-card .card').css('opacity', '0');
		setTimeout(
			function() {
				$('.industry-card').css('opacity', '0');
			}, 600
		);
		setTimeout(
			function() {
				$( "#industry-dropdown-container" ).hide().load( "section-industry-dropdown.php" ).fadeIn(600);
			}, 1200
		);
		setTimeout(
			function() {
				$( "#industry-content" ).hide().load( "section-industry-content.php" ).fadeIn(600);
			}, 1800
		);
		setTimeout(
			function() {
				$('.industry-card').hide();
			}, 1900
		);
	} else {
		setTimeout(
			function() {
				$( "#industry-content" ).hide().load( "section-industry-content.php" ).fadeIn(600);
			}, 300
		);
	}
	return false;
});
$(document).on('click', '.sub-industry', function() {
	$('.overlay').fadeIn(300);
	$('.modal-container').fadeIn(300);
});
$(document).on('click', '.close-button', function() {
	$('.overlay').fadeOut(300);
	$('.modal-container').fadeOut(300);
	return false;
});
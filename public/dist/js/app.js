(function($) {
	if (location.hash) {
		$('#tabs a[href="' + location.hash + '"]').tab('show');
	}

	$('#el-button-menu-desktop').click(function() {
		$('body').toggleClass('menu-active');
	});

	$('[data-toggle="tooltip"]').tooltip();
})(jQuery);

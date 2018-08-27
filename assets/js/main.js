(function( $ ) {
	var $body = $( 'body' ),
		$stickyHeader = $body.find( '.stickyheader' );
	function adjustScrollClass($this) {
        if ($this.scrollTop() > 10) { // Set position from top to add class
            $stickyHeader.addClass('fixed-top bg-dark').removeClass("bg-white");
            $('.left-logo .navbar-brand').addClass("hide");
        }
        else {
            $stickyHeader.removeClass('fixed-top bg-dark').addClass("bg-white");
            $('.left-logo .navbar-brand').removeClass("hide");
        }		
	}
    $(window).on('scroll', function () {
        adjustScrollClass($(this));
	});	
})( jQuery );

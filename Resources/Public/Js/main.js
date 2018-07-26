// Resize header on scroll
    $(window).on('scroll', function(e) {
        var $window = $(window),
            scrollPos = $window.scrollTop();

        if (scrollPos < 60) {
            $('body').removeClass('scrolled');
        } else if (scrollPos + $window.scrollTop() == $(document).height()) {
            // alert('Scroll en bas de page');
        } else {
            $('body').addClass('scrolled');
        }
    });
// Change fontawesome icon and text for navbar-toggler when fontawesome icon is clicked
// Show/Hide collapsed menu when fontawesome icon is clicked
function change_icon(button) {
    $(button).find('i').remove();
    if ($(button).text().trim() == 'Menu') {
        $(button).html($('<i/>', { class: 'fa fa-times' })).append(' Close');
        $('.navbar-collapse').collapse('show');
    } else {
        $(button).html($('<i/>', { class: 'fa fa-bars' })).append(' Menu');
        $('.navbar-collapse').collapse('hide');
    }
}

// Smooth scrolling to top when logo is clicked
$(document).ready(function() {
    $('#navbar-logo').on('click', function() {
        $('html, body').animate({ scrollTop: 0 }, 1000, "easeInOutExpo");
        return false;
    });
});

// Smooth scrolling to top when brand is clicked
$(document).ready(function() {
    $('#navbar-brand').on('click', function() {
        $('html, body').animate({ scrollTop: 0 }, 1000, "easeInOutExpo");
        return false;
    });
});

// Smooth scrolling to href when a menu link is clicked
(function($) {
    "use strict"; // Start of use strict

    // Smooth scrolling using jQuery easing
    $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: (target.offset().top - 55)
                }, 1000, "easeInOutExpo");
                return false;
            }
        }
    });

    // Change fontawesome icon and text for navbar-toggler when a menu link is clicked
    // Hide collapsed menu when a menu link is clicked
    $('.js-scroll-trigger').click(function() {
        $('.navbar-collapse').collapse('hide');
        $('#navbar-toggler').html($('<i/>', { class: 'fa fa-bars' })).append(' Menu');
    });

})(jQuery); // End of use strict

// Set active menu link when screen is scrolled or menu link is clicked
var nav = $('nav'),
    nav_height = nav.outerHeight(),
    header = $('header'),
    sections = $('section'),
    footer = $('footer');

$(window).on('scroll', function() {
    var cur_pos = $(this).scrollTop();

    header.each(function() {
        var top = $(this).offset().top - nav_height,
            bottom = top + $(this).outerHeight();

        if (cur_pos >= top && cur_pos <= bottom) {
            nav.find('a').removeClass('active');
            sections.removeClass('active');

            $(this).addClass('active');
            nav.find('a[href="#' + $(this).attr('id') + '"]').addClass('active');
        }
    });

    sections.each(function() {
        var top = $(this).offset().top - nav_height,
            bottom = top + $(this).outerHeight();

        if (cur_pos >= top && cur_pos <= bottom) {
            nav.find('a').removeClass('active');
            sections.removeClass('active');

            $(this).addClass('active');
            nav.find('a[href="#' + $(this).attr('id') + '"]').addClass('active');
        }
    });

    footer.each(function() {
        var top = $(this).offset().top - nav_height,
            bottom = top + $(this).outerHeight();

        if (cur_pos >= top && cur_pos <= bottom) {
            nav.find('a').removeClass('active');
            sections.removeClass('active');

            $(this).addClass('active');
            nav.find('a[href="#' + $(this).attr('id') + '"]').addClass('active');
        }
    });

});
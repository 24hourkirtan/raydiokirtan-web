$(document).ready(function() {
    $('.menu-line-toggle').on('click', function() {
        var modal = $('.modal');
        modal.fadeToggle().toggleClass('modal-open');
        
        if (modal.hasClass('modal-open')) {
            $('.intro-heading').animate({'opacity': 0}, 200);
        } else {
            $('.intro-heading').animate({'opacity': 1}, 200);
        }
        
        
    });
    
    $('.modal-menu-item').on('click', function() {
        var item = $(this);
        var itemLink = item.attr('data-link');

        $('.modal-page').fadeOut();
        $('.modal-page-' + itemLink).fadeIn();
    });
});



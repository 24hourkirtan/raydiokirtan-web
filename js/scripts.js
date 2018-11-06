$(document).ready(function() {
    $('.menu-line-toggle').on('click', function() {
        var modal   = $('.modal');
        var menu    = $('.menu-line-toggle');
        
        modal.fadeToggle().toggleClass('modal-open');
        menu.toggleClass('active');
        
        if (modal.hasClass('modal-subpage')) {
            modal.removeClass('modal-subpage');
        }
        
        if (modal.hasClass('modal-open')) {
            $('.intro-heading').animate({'opacity': 0}, 200);
        } else {
            $('.intro-heading').animate({'opacity': 1}, 200, function() {
                $('.modal-page').fadeOut();
                $('.modal-page-1').fadeIn();
            });
            
        }
    });
    
    $('.modal-menu-item').on('click', function() {
        var item = $(this);
        var itemLink = item.attr('data-link');
        
        $('.modal').addClass('modal-subpage');
        $('.modal-page').fadeOut();
        $('.modal-page-' + itemLink).fadeIn();
    });
    
    $('.modal-close').on('click', function() {
        $('.menu-line-toggle').click();
    });
});



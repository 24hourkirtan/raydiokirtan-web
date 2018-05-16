$(document).ready(function() {
    $('.menu-line-toggle').on('click', function() {
        $('.modal').fadeToggle();
    });
    
    $('.modal-menu-item').on('click', function() {
        var item = $(this);
        var itemLink = item.attr('data-link');
        
        $('.modal-page').fadeOut();
        $('.modal-page-' + itemLink).fadeIn();
    });
});



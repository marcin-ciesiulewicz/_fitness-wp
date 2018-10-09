$(document).ready(function () {

    //background scroll
    $(window).scroll(function(){

        var wScroll = $(window).scrollTop();
    
        $('.js-parallax').css({
            'background-position' : 'center '+ (wScroll*0.5) +'%'
        });

    });

    // dropdown toggle
    $('.dropdown-menu a.dropdown-toggle').on('click', function(e) {

        var $subMenu = $(this).next(".dropdown-menu");
        $subMenu.toggleClass('show');
      
        return false;
    });


});
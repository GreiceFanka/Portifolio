$(function(e){$('#home').click(function(e){
    $('html,body').animate({scrolltop:$('#home').offset().top},800);
                });
    $('#habilities').click(function(e){
            $('html,body').animate({scrolltop:$('#habilities').offset().top},800);
                });
    $('#aboutme').click(function(e){
            $('html,body').animate({scrolltop:$('#aboutme').offset().top},800);
                });
    $('#contact').click(function(e){
            $('html,body').animate({scrolltop:$('#contact').offset().top},800);
                });
             });

   $('.navbar-nav li a').click(function() {
        if (!$(this).parent().hasClass('dropdown')) {
            $('.navbar-collapse').collapse('hide'); 
            }
    });
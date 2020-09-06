jQuery(document).ready(function(n) {

    n('#custom-proc').click(function(){
        n('html, body').animate({
            scrollTop: n("#custom-timeline").offset().top + 70
        }, 800);
    });

})
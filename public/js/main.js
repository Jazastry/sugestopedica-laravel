$(document).ready(function() {
    // Performs smooth scrolling from href to point in the page
    $(function() {            
        $('a[href*="#"]:not([href="#"])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html, body').animate({
                        scrollTop: target.offset().top - $('nav .navbar-header').height()
                    }, 1000);
                    return false;
                }
            }
        });
    });
    $(this).find('.description_cont').hide();
    var toggleDuration = 500;
    $('section.team_cont .member_cont').on('click', function() {
        var _this = this;
        $(this).find('.img_cont').slideToggle({
            duration: toggleDuration,
            start: function() {
                $(_this).find('.description_cont').slideToggle({
                    duration: toggleDuration
                });    
            }
        });        
    });
});

(function ($) {
    $(function () {

        $('.button-collapse').sideNav();
        $('.parallax').parallax();

        $(document).ready(function () {
            $('select').material_select();
        });
        $(document).ready(function () {
            $('.carousel').carousel();
            setInterval(function() {
                $('.carousel').carousel('next');
            }, 1500);
            $('.modal').modal();
            $('.anchor').scrollSpy({
                scrollOffset: -5
            });
        });

    }); // end of document ready
})(jQuery); // end of jQuery name space
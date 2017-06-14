(function ($) {
    $(function () {

        $('.button-collapse').sideNav();
        $('.parallax').parallax();

        $(document).ready(function () {
            $('select').material_select();
        });
        $(document).ready(function () {
            $('.carousel').carousel();
            $('.modal').modal();
            $('.anchor').scrollSpy({
                scrollOffset: 10
            });
        });

    }); // end of document ready
})(jQuery); // end of jQuery name space
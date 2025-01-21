

$(document).ready(function () {
    // Toggle submenu on clicking "Home"
    $('.toggle-submenu').click(function (e) {
        e.preventDefault(); // Prevent default link behavior

        $(this).siblings('.submenu').slideToggle(300); // Toggle submenu visibility

        // Toggle the arrow direction
        $(this).find('.arrow-icon').toggleClass('arrow-down');
    });

    // Hamburger menu toggle
    $('.nav-icon').click(function (e) {
        $('.nav-links').toggleClass('left-slider');
        e.stopPropagation();
    });

    // Close sidebar when clicking outside it
    $(document).click(function (e) {
        if (!$('.nav-links').is(e.target) && $('.nav-links').has(e.target).length === 0) {
            $('.nav-links').removeClass('left-slider');
        }
    });
});

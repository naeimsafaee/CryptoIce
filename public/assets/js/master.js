/** code by webdevtrick ( https://webdevtrick.com ) **/
(function($) {
    $(function() {
        $('nav ul li a:not(:only-child)').click(function(e) {
            $(this).siblings('.nav-dropdown').toggleClass("active");
            $('.dropdown').not($(this).siblings()).hide();
            e.stopPropagation();
        });
        $('html').click(function() {
            $('.nav-dropdown').removeClass("active");
        });

    });
})(jQuery);
// ----------------------------------



const menu = document.querySelector('#nav-toggle');
const menuLinks = document.querySelector('.sidebar');
const overlay = document.querySelector('.overlay');
const close = document.querySelector('.close');


menu.addEventListener('click', function() {
    menuLinks.classList.toggle('active')
    menu.classList.toggle('active')
    $('.overlay').fadeToggle()
    $('body').css("position" , "fixed")

})
overlay.addEventListener('click', function() {
    menuLinks.classList.remove('active')
    menu.classList.remove('active')
    $('.overlay').fadeOut(100)
    $('body').css("position" , "relative")
})
close.addEventListener('click', function() {
    menuLinks.classList.remove('active')
    menu.classList.remove('active')
    $('.overlay').fadeOut(100)
    $('body').css("position" , "relative")
})

// -------------------------------notif-popup

$(".notif").click(function (e) {
    $(this).toggleClass("active");
    e.stopPropagation();

});

$(".notif-popup").click(function (e) {
    e.stopPropagation();
});
$(".close-popup").click(function () {
    $(".notif").removeClass("active");
});
$(document).click(function () {
    $(".notif").removeClass("active");
});


$('.notification .content-box div').hide();
$('.notification ').click(function() {
    $(this).children(".content-box").children("div").slideToggle();
});

$(".Language-button").click(function (e) {
    $(this).find(".Language-popup").toggleClass("active");
    e.stopPropagation();

});

$(".Language-popup").click(function (e) {
    e.stopPropagation();
});

$(document).click(function () {
    $(".Language-popup").removeClass("active");
});


$(function () {



var anchor = $('a[href^="#"]'); //blokuje linkowanie tylko dla el z '#'

anchor.click(function (e) {
    e.preventDefault();


    var href = $(this).attr('href');

    var section = $(href);

    var height = section.offset().top;

    var px = section.offset().top;

    //$('html,body').scrollTop(px,0);

    $('html,body').animate({'scrollTop':px},1500);

});

});


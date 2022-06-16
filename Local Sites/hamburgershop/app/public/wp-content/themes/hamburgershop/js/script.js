//sp・tab用ドロワーメニュー
$(function () {
    $('.p-header__open').on('click', function () {
        $('body').toggleClass('is-open');
        $('.l-main').toggleClass('overlay');
    });
    $('.p-nav__close').on('click', function () {
        $('body').removeClass('is-open');
        $('.l-main').removeClass('overlay');
    });
});

$(window).resize(function () {
    //windowの幅をxに代入
    var x = $(window).width();
    //windowの分岐幅をyに代入
    var y = 1025;
    if (x >= y) {
        $('body').removeClass('is-open');
        $('.l-main').removeClass('overlay');
    }
});
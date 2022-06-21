//sp・tab用ドロワーメニュー
jQuery(function () {
    jQuery('.p-header__open').on('click', function () {
        jQuery('body').toggleClass('is-open');
        jQuery('.l-main').toggleClass('overlay');
    });
    jQuery('.p-nav__close').on('click', function () {
        jQuery('body').removeClass('is-open');
        jQuery('.l-main').removeClass('overlay');
    });
});

jQuery(window).resize(function () {
    //windowの幅をxに代入
    var x = jQuery(window).width();
    //windowの分岐幅をyに代入
    var y = 1025;
    if (x >= y) {
        jQuery('body').removeClass('is-open');
        jQuery('.l-main').removeClass('overlay');
    }
});
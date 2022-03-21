//https://moshashugyo.com/media/animate-on-scroll#単体でフェードインさせる JavaScript(jQuery)を記述する
$(function () {
    // aimation呼び出し
    if ($('.zoomin').length) {
        scrollAnimation();
    }

    // aimation関数
    function scrollAnimation() {
        $(window).scroll(function () {
            $(".zoomin").each(function () {
                let position = $(this).offset().top,
                    scroll = $(window).scrollTop(),
                    windowHeight = $(window).height();

                if (scroll > position - windowHeight ) {
                    $(this).addClass('is-animated');
                }
            });
        });
    }
    $(window).trigger('scroll');
});
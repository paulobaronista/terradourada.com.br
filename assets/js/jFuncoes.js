$(document).ready(function () {
    $("#lerMais").click(function () {
        $("#txtMobile").show();
        $("#lerMais").hide();
    });
});

$(document).on('ready', function () {
    $(".galeria-home").slick({
        dots: false,
        infinite: true,
        speed: 500,
        autoplay: true,
        autoplaySpeed: 5000,
    });
    $(".galeria-lancamento").slick({
        dots: false,
        infinite: true,
        speed: 500,
    });
});

$(document).ready(function () {
    $("#close").click(function () {
        $("#aviso").hide();
        window.location.href = "http://terradouradainc.com.br"
    });
});

$(document).ready(function () {
	$('#cookies').show();
	if (window.localStorage.getItem('accept_cookies')) {
		$('#cookies').hide();
		return false;
	}
	$(".btn_cookie").click(function () {
		window.localStorage.setItem('accept_cookies', true);
		$('#cookies').hide();
		return false;
	});
});

// Script Scroll OnPage
$(document).ready(function () {
    $(document).on("scroll", onScroll);
    $('.scrollink').on('click', function (e) {
        e.preventDefault();
        $(document).off("scroll");
        $('.scrollink').each(function () {
            $(this).removeClass('active');
        })
        $(this).addClass('active');
        var target = this.hash,
            $target = $(target);
        $('html, body').stop().animate({ scrollTop: $target.offset().top - 70 }, 500, 'swing', function () {
            // window.location.hash = target;
            $(document).on("scroll", onScroll);
        });
    });
});

function onScroll(event) {
    var scrollPos = $(document).scrollTop();
    $('#menuCenter .scrollink').each(function () {
        var currLink = $(this);
        var refElement = $(currLink.attr("href"));
        if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
            $('#menuCenter ul li .scrollink').removeClass("active");
            currLink.addClass("active");
        } else {
            currLink.removeClass("active");
        }
    });
}

$(document).on('ready', function () {
    $('.navbar-collapse a').click(function () {
        $(".navbar-collapse").collapse('hide');
    });
});

$(function () {
    $('.nome').clear();
    $('.email').clear();
    $('.phone').clear();
    $('.city').clear();
    $('.msg').clear();

    $('.btn_enviar').on('click', function () {
        var n, e, t, c, m;
        var msg = "";
        n = $('.nome').val();
        e = $('.email').val();
        t = $('.phone').val();
        c = $('.city').val();
        m = $('.msg').val();
    });
});

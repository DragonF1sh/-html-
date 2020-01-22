document.addEventListener('DOMContentLoaded', function () {

    ('li a').on('click', function (scroll) {

        var targetSec = this.attr('href');

        ('html, body').animate({

            scrollTop: targetSec.offset().top

        }, 500);
    });

});
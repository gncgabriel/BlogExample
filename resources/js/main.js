const card = $('.nc_card');
const card_list = $('.card_list')

var swiper = new Swiper('.swiper_banner_container', {
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    loop: true,
    centeredSlides: true,
    autoplay: {
        delay: 3000
    },
});

var swiper2 = new Swiper('.swiper_mais_lidas_mobile', {
    autoplay: {
        delay: 2500
    },
    pagination: {
        el: '.swiper-pagination',
    },
    loop: true,
});


card.on('mouseenter', function () {
    $(this).addClass('hover')
})

card.on('mouseleave', function () {
    $(this).removeClass('hover')
})

card_list.on('mouseenter', function () {
    $(this).addClass('hover')
})

card_list.on('mouseleave', function () {
    $(this).removeClass('hover')
})
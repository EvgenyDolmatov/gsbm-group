(function ($) {
    'use strict';

    $('.promo-slider').owlCarousel({
        items: 1,
        dots: true,
        dotsContainer: '.slider-dots',
        nav: true,
        navText: ["", ""]
    });

    // Active sidebar item
    window.onload = function (){
        let url = window.location.href;
        let link =  $('a[href="'+url+'"]');
        let button = link.closest('.accordion-item').find('.accordion-button');

        link.parent('li').addClass('active');
        button.removeClass('collapsed');
        button.attr('aria-expanded', true);
        link.closest('.accordion-collapse').removeClass('collapse').addClass('show');
    }

    // Collapse Tiles
    $('.tile .expand-btn').on('click', function () {

        let tile = $(this).closest('.tile');
        let autoHeight = $(this).closest('.tile-content').find('.tile-image img').height();

        if (!tile.hasClass('active')) {
            tile.addClass('active');
            $(this).find('span.arrow').animate(
                {deg: 180},
                {
                    duration: 300,
                    step: function (now) {
                        $(this).css({transform: 'rotate(' + now + 'deg)'});
                    }
                }
            );

            $(this).closest('.tile-content').animate({
                height: autoHeight,
            });

            $(this).closest('.tile-content').find('.tile-image').animate({
                opacity: 1,
            });

        } else {

            tile.removeClass('active');
            $(this).find('span.arrow').animate(
                {deg: 0},
                {
                    duration: 300,
                    step: function (now) {
                        $(this).css({transform: 'rotate(' + now + 'deg)'});
                    }
                }
            );

            $(this).closest('.tile-content').animate({
                height: '70px',
            });

            $(this).closest('.tile-content').find('.tile-image').animate({
                opacity: 0,
            });
        }
    });

    // Filter Services

    /*$(window).on('load', function () {
        let width = $(window).width();
        let serviceTiles = $('#service .tile').closest('.row').children('.col-12:nth-child(n+5)');
        let button = $('#more-services.btn');

        if (width < 576) {
            serviceTiles.css({display: 'none'});
            button.css({display: 'block'});

            button.on('click', function () {
                serviceTiles.css({display: 'block'});
                button.css({display: 'none'});
            });
        } else {
            serviceTiles.css({display: 'block'});
        }
    });*/

    // Mobile header
    $(document).on('click', '.navbar-burger.open', function () {
        $('body').css({overflowY: 'hidden'});

        let windowWidth = $(window).width();

        if (windowWidth > 576) {
            $('#mobile-menu')
                .css({display: 'block'})
                .animate({
                    left: '50%'
                });
        } else {
            $('#mobile-menu')
                .css({display: 'block'})
                .animate({
                    left: '0'
                });
        }
        $(this).removeClass('open');
        $(this).addClass('close');

        $('.navbar-burger span:last-child').css({display: 'none'});

        $('.navbar-burger span:first-child').animate({
            marginBottom: '-1px',
        });
        $({deg: 0}).animate({deg: '-45'}, {
            duration: 300,
            step: function (now) {
                $('.navbar-burger span:first-child').css({
                    transform: 'rotate(' + now + 'deg)'
                });
            }
        });
        $({deg: 0}).animate({deg: '45'}, {
            duration: 300,
            step: function (now) {
                $('.navbar-burger span:nth-child(2)').css({

                    transform: 'rotate(' + now + 'deg)'
                });
            }
        });
    });
    $(document).on('click', '.navbar-burger.close', function () {

        $('#mobile-menu').animate({
            left: '100%'
        });
        $(this).removeClass('close');
        $(this).addClass('open');

        $('.navbar-burger span:last-child').css({display: 'block'});

        $('.navbar-burger span:first-child').animate({
            marginBottom: '5px',
        });
        $({deg: -45}).animate({deg: '0'}, {
            duration: 300,
            step: function (now) {
                $('.navbar-burger span:first-child').css({
                    transform: 'rotate(' + now + 'deg)'
                });
            }
        });
        $({deg: 45}).animate({deg: '0'}, {
            duration: 300,
            step: function (now) {
                $('.navbar-burger span:nth-child(2)').css({

                    transform: 'rotate(' + now + 'deg)'
                });
            }
        });

        setTimeout(function () {
            $('#mobile-menu').css({display: 'none'});
            $('body').css({overflowY: 'auto'});
        }, 300)
    });


    $('#mobile-menu a.nav-link.parent-link').on('click', function (e) {
        e.preventDefault();

        let currentLink = $(this);
        let height = $(this).next('.nav-dropdown-list').height();
        let ownHeight = $(this).height() + 16;

        $('.nav-dropdown-list').removeClass('opened');
        $('.nav-item.dropdown').animate({
            height: ownHeight,
        });


        if (currentLink.hasClass('opened')) {
            currentLink.removeClass('opened');
            currentLink.parent('.nav-item.dropdown').animate({
                height: ownHeight,
            });
        } else {
            currentLink.addClass('opened');
            currentLink.parent('.nav-item.dropdown').animate({
                height: ownHeight + height,
            });
        }
    });

    // Scale Image
    $('.scale-btn').on('click', function () {

        let $imgSrc = $(this).parent().next('img').attr('src');
        let $imagePopup = $('.image-popup');

        $imagePopup.find('img').attr('src', $imgSrc);
        $imagePopup.css({
            display: 'block',
        });
    });

    $('#service .gallery-item').on('click', function () {

        let $imgSrc = $(this).find('img').attr('src');
        let $imagePopup = $('.image-popup');

        $imagePopup.find('img').attr('src', $imgSrc);
        $imagePopup.css({
            display: 'block',
        });
    });

    $('.popup').on('click', function (e) {
        let image = $(this).find('.image-container img');
        if (!image.is(e.target) && image.has(e.target).length === 0) {
            $(this).css({display: 'none'});
        }
    });


    // Change question form
    $('#type').on('change', function () {
        let $select = $(this);
        let $option = $select.val();

        $select.prop('checked', false);

        if ($option === 'single') {
            $('input.is-correct').attr('type', 'radio');
        }

        if ($option === 'multiple') {
            $('input.is-correct').attr('type', 'checkbox');
        }
    });

    // Add Question Option
    $('#add-option').on('click', function () {

        let optionContainer = $('.option-group');
        let checkboxType = optionContainer.find('input.is-correct').attr('type');
        let optionsCount = optionContainer.length;

        let option = '<div class="option-group d-flex justify-content-end mb-3">\n' +
                     '<input type="text" name="options[]" class="form-control">\n' +
                     '<input type="'+checkboxType+'" name="is_correct[]" class="form-radio is-correct" value="'+(optionsCount+1)+'">\n' +
                     '</div>';

        optionContainer.last().after(option);
    });

    // Remove Product Image
    $('a.remove').on('click', function (e){
        e.preventDefault();

        let $this = $(this);
        $.ajax({
            url: $this.attr('href'),
            method: 'GET',
            success: function (){
                $this.parent('.img-thumbnail').remove();
            }
        });
    });

    // Remove Alert
    $('.alert-wrap .close').on('click', function (){
       $(this).parent('.alert').remove();
    });
})(jQuery);

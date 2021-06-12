$(document).ready(function () {

	var hamburger = $('.hamburger')
	var navMenu = $('.nav-menu')

	hamburger.click(function () {
		hamburger.toggleClass('active')
		navMenu.toggleClass('active')
	})

	var nav_cat_open = $('.nav-cat-open')
	var nav_brand_open = $('.nav-brand-open')
	var nav_spec_open = $('.nav-spec-open')
	var nav_cat = $('.nav-categories')
	var nav_brand = $('.nav-brand')
	var nav_spec = $('.nav-spec')


	$('.close-mark').css('display', 'none')

	nav_cat_open.click(function () {
		nav_cat.toggleClass('sub-menu-show')
		$('.cat-open').toggleClass('rotate')
	})
	nav_brand_open.click(function () {
		nav_brand.toggleClass('sub-menu-show')
		$('.brand-open').toggleClass('rotate')
	})
	nav_spec_open.click(function () {
		nav_spec.toggleClass('sub-menu-show')
		$('.spec-open').toggleClass('rotate')
	})


	$(window).scroll(function () {
		if ($(window).scrollTop() >= 1) {
			$('.header').addClass('header-sticky');
		} else {
			$('.header').removeClass('header-sticky');
		}
	});

	$('.nav-item--entry').click(function () {
		$('.entry-block').addClass('active')
		hamburger.toggleClass('active')
		navMenu.toggleClass('active')
	})
	$('.entry__close').click(function () {
		$('.entry-block').removeClass('active')
	})

	$('.nav-item').click(function () {
		$(this).toggleClass('active');
		$(this).siblings().removeClass('active');
	})

	$('.hero-carousel').slick({
		dots: false,
		infinite: true,
		speed: 300,
		slidesToShow: 3,
		centerMode: true,
		variableWidth: true,
		// variableWidth: true,
		nextArrow: '<i class="fa fa-chevron-right" aria-hidden="true"></i>',
		prevArrow: '<i class="fa fa-chevron-left" aria-hidden="true"></i>',
		responsive: [
			{
				breakpoint: 1350,
				settings: {
					slidesToShow: 2,
					variableWidth: true,
				}
			},
			{
				breakpoint: 769,
				settings: {
					slidesToShow: 1,
				}
			}
		]
	});

	$('#tab1').click(function () {
		$(this).addClass('active')
		$(this).siblings().removeClass('active');
		$('#tab-panel1').addClass('active')
		$('#tab-panel2').removeClass('active')
	})

	$('#tab2').click(function () {
		$(this).addClass('active')
		$(this).siblings().removeClass('active');
		$('#tab-panel1').removeClass('active')
		$('#tab-panel2').addClass('active')
	})

	$('.item__header').click(function () {
		$(this).parent().toggleClass('active')
		// $(this).parent().siblings().removeClass('active')
	})



	$('.place-carousel').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: true,
		fade: true,
		// asNavFor: '.place-nav',
		nextArrow: '<i class="fa fa-chevron-right" aria-hidden="true"></i>',
		prevArrow: '<i class="fa fa-chevron-left" aria-hidden="true"></i>'
	});
	$('.place-nav').slick({
		slidesToShow: 3,
		slidesToScroll: 1,
		asNavFor: '.place-carousel',
		dots: false,
		centerMode: false,
		focusOnSelect: true
	});

	$('.goto').click(function(){
		$('.place-detail').addClass('active')
	})
	$('.place-detail__close').click(function(){
		$('.place-detail').removeClass('active');
	})
})
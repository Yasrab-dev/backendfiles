$(".menu-toggle").on("click", function() {
    $("body").toggleClass("open");
});
// hamburger

$(".news-slider").slick({
    dots: false,
    infinite: true,
    autoplay: false,
    arrows: true,
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [{
            breakpoint: 1152,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                infinite: true,
                dots: true,
            },
        },
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
            },
        },
        {
            breakpoint: 757,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            },
        },
    ],
});
$(".partner-slider").slick({
    dots: false,
    infinite: true,
    autoplay: false,
    arrows: false,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 1,
    responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                infinite: true,
                dots: true,
            },
        },
        {
            breakpoint: 650,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
            },
        },
        {
            breakpoint: 575,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
				arrows: true,
            },
        },
    ],
});
gsap.registerPlugin("ScrollTrigger");

// HOME ANIMATION JS
gsap.from("header", {
  y: -20,
  opacity: 0,
  duration: 3,
  scrollTrigger: "header",
});
gsap.from(".banner-content h1", {
  x: 40,
  opacity: 0,
  duration: 3,
  scrollTrigger: ".banner-content h1",
});
gsap.from(".site-btn", {
  x: -40,
  opacity: 0,
  duration: 3,
  scrollTrigger: ".site-btn",
});
gsap.from(".about h2", {
  y: -40,
  opacity: 0,
  duration: 3,
  scrollTrigger: ".about h2",
});
gsap.from(".about p", {
  y: 40,
  opacity: 0,
  duration: 3,
  scrollTrigger: ".about p",
});
gsap.from(".counter-title ", {
  y: -40,
  opacity: 0,
  duration: 3,
  scrollTrigger: ".counter-title ",
});
gsap.from(".partners h2", {
  scale: 0.8,
  opacity: 0,
  duration: 3,
  scrollTrigger: ".partners h2",
});
gsap.from(".news h2", {
  x: -40,
  opacity: 0,
  duration: 3,
  scrollTrigger: ".news h2",
});
gsap.from(".slider-block ", {
  x: 40,
  opacity: 0,
  duration: 3,
  scrollTrigger: ".slider-block ",
});
gsap.from(".services-block h2", {
  x: 40,
  opacity: 0,
  duration: 3,
  scrollTrigger: ".services-block h2",
});
gsap.from(".footer-heading  h2", {
  y: -30,
  opacity: 0,
  duration: 3,
  scrollTrigger: ".footer-heading  h2",
});
gsap.from(".footer-heading h3", {
  y: 30,
  opacity: 0,
  duration: 3,
  scrollTrigger: ".footer-heading h3",
});
gsap.from(".footer-links-block ", {
  y: 30,
  opacity: 0,
  duration: 3,
  scrollTrigger: ".footer-links-block ",
});
gsap.from(".footer-copyright ", {
  y: 30,
  opacity: 0,
  duration: 3,
  scrollTrigger: ".footer-copyright ",
});
// HOME ANIMATION JS

var tl = new TimelineMax({ repeat: 999 });

TweenMax.to(".background-image", 2, {
  scale: 0.8,
  repeat: -1,
  yoyo: true,
  ease: Power0.easeNone,
});
TweenMax.to(".collaboration-thumbnail", 1.5, {
  scale: 1.1,
  repeat: -1,
  yoyo: true,
  ease: Power0.easeNone,
});
// gsap animation

// counter
function visible(partial) {
    var $t = partial,
        $w = jQuery(window),
        viewTop = $w.scrollTop(),
        viewBottom = viewTop + $w.height(),
        _top = $t.offset().top,
        _bottom = _top + $t.height(),
        compareTop = partial === true ? _bottom : _top,
        compareBottom = partial === true ? _top : _bottom;
    return (
        compareBottom <= viewBottom && compareTop >= viewTop && $t.is(":visible")
    );
}



// COUNTER START HOME PAGE JS START:

var isAlreadyRun = false;

$(window).scroll( function(){

    $('.counter-block').each( function(i){

        var bottom_of_object = $(this).position().top + $(this).outerHeight() / 2;
        var bottom_of_window = $(window).scrollTop() + $(window).height();


            if( bottom_of_window > ( bottom_of_object + 20 )  ){
				if (!isAlreadyRun) {
					$('.count-number').each(function () {
	            	
	                $(this).prop('Counter', 0).animate({
	                    Counter: $(this).text()
	                }, {
	                        duration: 3500,
	                        easing: 'swing',
	                        step: function (now) {
	                            $(this).text(Math.ceil(now));
	                        }
	                    });
	            	});
				}
                isAlreadyRun = true;
            }
    }); 

});

// COUNTER START HOME PAGE JS END:




$(document).ready(function() {
    $(window).scroll(function() {
        if ($(".counter-block-main").length) {
            if (visible($(".counter-block-main"))) {
                $(".inst").counto(14, 1000);
                $(".capital").counto(1, 1000);
                $(".people").counto(20, 1000);
            }
        }
    });
});

// counter

// init Isotope
var $grid = $(".grid").isotope({
    itemSelector: ".element-item",
    layoutMode: "fitRows",
	fitRows: {
		equalheight: true
    }
});
// filter functions
var filterFns = {
    // show if number is greater than 50
    numberGreaterThan50: function() {
        var number = $(this).find(".number").text();
        return parseInt(number, 10) > 50;
    },
    // show if name ends with -ium
    ium: function() {
        var name = $(this).find(".name").text();
        return name.match(/ium$/);
    },
};
// bind filter button click
$(".filters-button-group").on("click", "button", function() {
    var filterValue = $(this).attr("data-filter");
    // use filterFn if matches value
    filterValue = filterFns[filterValue] || filterValue;
    $grid.isotope({
        filter: filterValue,
    });
});
// change is-checked class on buttons
$(".button-group").each(function(i, buttonGroup) {
    var $buttonGroup = $(buttonGroup);
    $buttonGroup.on("click", "button", function() {
        $buttonGroup.find(".is-checked").removeClass("is-checked");
        $(this).addClass("is-checked");
    });
});
TweenMax.to(".background-image", 3, {
    scale: 0.8,
    repeat: -1,
    yoyo: true,
    ease: Power0.easeNone,
});
TweenMax.to(".collaboration-thumbnail", 1.5, {
  scale: 1.1,
  repeat: -1,
  yoyo: true,
  ease: Power0.easeNone,
});

var bio_img = '';
var bio_title = '';
var bio_desg = '';
var bio_content = '';
var bio_fun = '';
var bio_quote_heading = '';
var bio_quote = '';
$( ".view_bio" ).click(function() {
	bio_img = $(this).attr("data-img");
	bio_title = $(this).attr("data-title");
	bio_desg = $(this).attr("data-designation");
	bio_content = $(this).attr("data-content");
	bio_fun = $(this).attr("data-fun");
	bio_quote_heading = $(this).attr("data-quoteh");
	bio_quote = $(this).attr("data-quote");
	$("#BioModal").modal('show');
});
const myModalEl = document.getElementById('BioModal');
myModalEl.addEventListener('show.bs.modal', event => {
	$(".bio-img img").attr("src", bio_img);
	$(".bio-title").text(bio_title);
	$(".bio-designation").text(bio_desg);
	$(".bio-content").text(bio_content);
	$(".bio-fun").html(bio_fun);
	$(".bio-head").text(bio_quote_heading);
	$(".bio-company").html(bio_quote);
});

$(".element-item .card, .element-item .card .content").mouseover(function(){
	$(this).children(".card-main-content").children("h4").css("opacity", "0");
	$(this).children(".card-main-content").children("h5").css("opacity", "0");
});
$(".element-item .card, .element-item .card .content").mouseout(function(){
	$(this).children(".card-main-content").children("h4").css("opacity", "1");
	$(this).children(".card-main-content").children("h5").css("opacity", "1");
});



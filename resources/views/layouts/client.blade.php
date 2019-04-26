<!DOCTYPE html>
<html class="no-js" lang="vi">

<head>
	<!-- CSS and Jquery start here -->
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>LẮP ĐẶT CAMERA QUAN SÁT GIÁ RẺ UY TÍN TẠI NPC VN</title>
	<meta name="description" content="Công ty NPC Việt Nam cung cấp lắp đặt camera quan sát, lắp camera chống trộm cho gia đình, camera giám sát cửa hàng… lắp camera giá rẻ, uy tín toàn quốc.">
	<meta property="fb:app_id" content="" />
	<meta name="DC.title" content="Camera NPC Việt Nam" />
	<meta name="geo.region" content="VN-HN" />
	<meta name="geo.placename" content="Hồ Chí Minh" />
	<!-- <meta name="geo.position" content="20.984321;105.818546" /> -->
	<!-- <meta name="ICBM" content="20.984321, 105.818546" /> -->
	@include("link.index")
	<link rel="stylesheet" type="text/css" href="{{asset('public/stylesheets/social-likes_birman.css')}}" />
	<script src="{{asset('public/js/social-likes.min.js')}}"></script>
	<!-- CSS and Jquery end here -->
</head>

<body lang="vi">
	<div id="wrapper">
		<h1 style="display:none;"><b>Lắp đặt camera quan sát giá rẻ </b>,<b> camera NPC</b></h1>
		<h2 style="display: none;">Tư vấn lắp đặt camera</h2>
		<!-- Top start here -->
		@include("index.top")
		<!-- Top end here -->
		@yield('content')
		<!-- Bottom end here -->
		@include("index.bottom")

		@include("index.footer")
	</div>
	<!-- Bottom end here -->
	</div>
	<div id="go_top" class="hidden-xs hidden-sm"><i class="fa fa-arrow-circle-up"></i></div>
	<div id="fixed-bottom" class="hidden-lg hidden-md">
		<div id="call-xs-sm"><a href="tel:093 888 4835"><i class="fa fa-phone">&nbsp;&nbsp;</i>Gọi 093 888 4835</a></div>
	</div>
	<script type="text/javascript" charset="utf-8">
		$(window).load(function() {
			equalheight('.thumbnail.products');
			equalheight('.thumbnail.news');
			equalheight('.equalheight1');
			equalheight('.equalheightbanner');
		});


		$(window).resize(function() {
			equalheight('.thumbnail.products');
			equalheight('.thumbnail.news');
			equalheight('.equalheight1');
			equalheight('.equalheightbanner');
		});

		$('#menu ul > li').hover(function() {
			$(this).children('ul').stop(true, true).delay(200).fadeIn(300);
		}, function() {
			$(this).children('ul').stop(true, true).fadeOut(300);
		});

		$('#prd-cate-list .sub-page > ul > li').hover(function() {
			$(this).children('ul').stop(true, true).delay(200).fadeIn(300);
		}, function() {
			$(this).children('ul').stop(true, true).fadeOut(300);
		});

		$('#prd-cate-list').hover(function() {
			$(this).children('ul.sub-page').stop(true, true).delay(200).slideDown(300);
		}, function() {
			$(this).children('ul.sub-page').stop(true, true).slideUp(300);
		});

		$('ul.dropdown-menu [data-toggle=dropdown]').on('click', function(event) {
			event.preventDefault();
			event.stopPropagation();
			$(this).parent().siblings().removeClass('open');
			$(this).parent().toggleClass('open');
		});

		$('.scrollfix').scrollFix({
			fixTop: 40
		});

		if ($(window).scrollTop() != "0")
			$("#go_top").fadeIn("slow");
		var scrollDiv = $("#go_top");
		$(window).scroll(function() {
			if ($(window).scrollTop() == "0")
				$(scrollDiv).fadeOut("slow")
			else
				$(scrollDiv).fadeIn("slow")
		});
		$("#go_top").click(function() {
			$("html, body").animate({
				scrollTop: $("#ScrollTo").offset().top
			}, "slow")
		});

		$('.mobileslider').flexslider({
			animation: "fade",
			animationLoop: true,
			directionNav: false,
			controlNav: false,
		});
		$('.bannerslider').flexslider({
			animation: "fade",
			animationLoop: true,
			directionNav: false,
		});

		$('.galleryslider').flexslider({
			animation: "slide",
			itemWidth: 122,
			controlNav: false,
		});

		$('.newsslider').flexslider({
			animation: "slide",
			direction: "vertical",
			controlNav: false,
			directionNav: false,
			slideshowSpeed: 3000,
		});

		$('#prd-cate-list .main-page > ul > li').hover(function() {
			$(this).children('ul').stop(true, true).delay(200).fadeIn(500);
		}, function() {
			$(this).children('ul').stop(true, true).fadeOut(500);
		});
	</script>
	<!-- Subiz -->
	<script type='text/javascript'>
		window._sbzq || function(e) {
			e._sbzq = [];
			var t = e._sbzq;
			t.push(["_setAccount", 50848]);
			var n = e.location.protocol == "https:" ? "https:" : "http:";
			var r = document.createElement("script");
			r.type = "text/javascript";
			r.async = true;
			r.src = n + "//static.subiz.com/public/js/loader.js";
			var i = document.getElementsByTagName("script")[0];
			i.parentNode.insertBefore(r, i)
		}(window);
	</script>
</body>

</html>
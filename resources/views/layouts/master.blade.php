<!DOCTYPE html>
<html>

<!-- Mirrored from www.lgpconseil.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 20 Nov 2020 22:34:07 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>DGI Consulting</title>
	<meta name="description" content="LGP Conseil, spécialiste en management des dynamiques humaines depuis 2002">
	<meta property="og:title"
		content="LGP Conseil, organisme de formation et cabinet conseil en management et évolution professionnelle." />
	<meta property="og:description"
		content="LGP Conseil, spécialiste en management des dynamiques humaines depuis 2002" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="index.html" />
	<meta property="og:image" content="images/seo/open-graph.jpg" />
	<meta property="og:site_name" content="LGP Conseil">
	<meta property="og:locale" content="fr_FR" />
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

	<link rel="shortcut icon" href="{{ asset('public/icones//Logo.ico') }}">
	<link rel="canonical" href="index.html" />
	<link rel="image_src" href="images/seo/thumbnail.jpg" />
	<link
		href="https://fonts.googleapis.com/css2?family=Didact+Gothic&amp;family=Shadows+Into+Light+Two&amp;display=swap"
		rel="stylesheet">
	<link rel="publisher" href="https://plus.google.com/115775484806590768912">

	<link rel="apple-touch-icon" sizes="180x180" href="images/favicons/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="images/favicons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="images/favicons/favicon-16x16.png">
	<link rel="manifest" href="images/favicons/manifest.json">
	<link rel="mask-icon" href="images/favicons/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="theme-color" content="#ffffff">

	<link rel="stylesheet" href="{{ asset('public/includes/externe/bootstrap/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('public/includes/externe/font-awesome/css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('public/includes/externe/animate/animate.min.css') }}">
	<link rel="stylesheet" href="{{ asset('public/includes/externe/simple-line-icons/css/simple-line-icons.min.css') }}">
	<link rel="stylesheet" href="{{ asset('public/includes/externe/owl.carousel/assets/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ asset('public/includes/externe/owl.carousel/assets/owl.theme.default.min.css') }}">
	<link rel="stylesheet" href="{{ asset('public/includes/externe/magnific-popup/magnific-popup.min.css') }}">

	<link rel="stylesheet" href="{{ asset('public/includes/css/theme3fdf.css?v=20201116-02') }}">
	<link rel="stylesheet" href="{{ asset('public/includes/css/theme-elements.css') }}">
	<link rel="stylesheet" href="{{ asset('public/includes/css/theme-blog.css') }}">

	<link rel="stylesheet" href="{{ asset('public/includes/css/skin3fdf.css?v=20201116-02') }}">
	<link rel="stylesheet" href="{{ asset('public/includes/css/custom3fdf.css?v=20201116-02') }}">

	<script src="{{ asset('public/includes/externe/modernizr/modernizr.min.js') }}"></script>

	<!-- UIkit CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.5.9/dist/css/uikit.min.css" />

	<!-- UIkit JS -->
	<script src="https://cdn.jsdelivr.net/npm/uikit@3.5.9/dist/js/uikit.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/uikit@3.5.9/dist/js/uikit-icons.min.js"></script>

</head>

<body>
	<div class="body">
 
		{{-- le header --}}
		@include('partials.header')

		<div role="main" class="main">
			@yield('content')
		</div>

		{{-- le footer --}}
		@include('partials.footer')

	</div>

	<!-- Vendor -->
	<script src="{{ asset('public/includes/externe/jquery/jquery.min.js') }}"></script>
	<script src="{{ asset('public/includes/externe/jquery.appear/jquery.appear.min.js') }}"></script>
	<script src="{{ asset('public/includes/externe/jquery.easing/jquery.easing.min.js') }}"></script>
	<script src="{{ asset('public/includes/externe/jquery-cookie/jquery-cookie.min.js') }}"></script>
	<script src="{{ asset('public/includes/externe/bootstrap/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('public/includes/externe/common/common.min.js') }}"></script>
	<script src="{{ asset('public/includes/externe/jquery.validation/jquery.validation.min.js') }}"></script>
	<script src="{{ asset('public/includes/externe/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js') }}"></script>
	<script src="{{ asset('public/includes/externe/jquery.gmap/jquery.gmap.min.js') }}"></script>
	<script src="{{ asset('public/includes/externe/jquery.lazyload/jquery.lazyload.min.js') }}"></script>
	<script src="{{ asset('public/includes/externe/isotope/jquery.isotope.min.js') }}"></script>
	<script src="{{ asset('public/includes/externe/owl.carousel/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('public/includes/externe/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
	<script src="{{ asset('public/includes/externe/vide/vide.min.js') }}"></script>

	<script src="{{ asset('public/includes/js/theme.js') }}"></script>

	{{-- <script src="404.html"></script> --}}
	<script src="{{ asset('public/includes/js/theme.init3fdf.js?v=20201116-02') }}"></script>

	<!-- jQuery CDN - Slim version (=without AJAX) -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
		integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
		crossorigin="anonymous"></script>
	<!-- Popper.JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
	  integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ"
	  crossorigin="anonymous"></script>
	<!-- Bootstrap JS -->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
	  integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm"
	  crossorigin="anonymous"></script>

	{{-- <script>      
		var pageTrackParams = {
			buzzeeServer: 'http://ids33023.delosmail.com/ServePage',
			fullUrl: true,
			PPRJ_ID: 73689319
		};
		var w2l = _paq = (typeof _paq !== 'object') ? [] : _paq;

		w2l.push(['w2l_trackPage', pageTrackParams]);
		var d = document, g = d.createElement('script'), s = d.getElementsByTagName('script')[0]; g.type = 'text/javascript'; g.defer = true; g.async = true; g.src = '../trk.buzzee.fr/w2lbuzzeetracking.js';
		s.parentNode.insertBefore(g, s); 
	</script> --}}
</body>

</html>

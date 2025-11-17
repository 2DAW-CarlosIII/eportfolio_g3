<!DOCTYPE HTML>
<!--
	Hyperspace by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>EPortfolio</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="{{ asset('/hyperspace/assets/css/main.css') }}" />
		<noscript><link rel="stylesheet" href="{{ asset('/hyperspace/assets/css/noscript.css') }}" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Sidebar -->
			@include('hyperspace.partials.sidebar')

		<!-- Wrapper -->
			@include('hyperspace.partials.wrapper')

		<!-- Footer -->
			@include('hyperspace.partials.footer')

		<!-- Scripts -->
			<script src="{{ asset('/hyperspace/assets/js/jquery.min.js') }}"></script>
			<script src="{{ asset('/hyperspace/assets/js/jquery.scrollex.min.js') }}"></script>
			<script src="{{ asset('/hyperspace/assets/js/jquery.scrolly.min.js') }}"></script>
			<script src="{{ asset('/hyperspace/assets/js/browser.min.js') }}"></script>
			<script src="{{ asset('/hyperspace/assets/js/breakpoints.min.js') }}"></script>
			<script src="{{ asset('/hyperspace/assets/js/util.js') }}"></script>
			<script src="{{ asset('/hyperspace/assets/js/main.js') }}"></script>
	</body>
</html>

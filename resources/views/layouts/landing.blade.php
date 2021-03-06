<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="HandheldFriendly" content="True">
	@include('layouts.favicon')
	<meta name="msapplication-TileColor" content="#667eea">
	<meta name="theme-color" content="#667eea">
	<link rel="manifest" href="{{ asset('assets/icon/site.webmanifest') }}">

	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="description" content="Kedele.me adalah platform marketing untuk produk olahan kedelai, juga sebagai sarana penghubung produsen dengan supplier">
	<meta name="keywords" content="tanaman, pertanian, perkebunan, kedelai, kedele, universitas jember, kabupaten jember ">
	<meta name="author" content="Startup Agroindustri Unej">
	<title>@yield('title')</title>
	<!-- include the site stylesheet -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600,700%7COpen+Sans:300,300i,600" rel="stylesheet">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="{{ asset('assets/css/font-awesome.css') }}">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="{{ asset('assets/css/plugins.css') }}">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="{{ asset('assets/style.css') }}">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="{{ asset('assets/css/colors.css') }}">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
	<!-- include the site stylesheet -->
	<style class="color_css"></style>
  @yield('css')
</head>
<body class="boxed-v pattern11">
	@yield('content')
	<!-- popup-holder of the page end here -->
	<!-- include jQuery -->
	<script src="{{ asset('assets/js/jquery.js') }}"></script>
	<!-- include jQuery -->
	<script src="{{ asset('assets/js/plugins.js') }}"></script>
	<!-- include jQuery -->
	<script src="{{ asset('assets/js/jquery.main.js') }}"></script>
  @yield('js')
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>
	<link rel="stylesheet" href="{{asset('css/app.css')}}">
	<link rel="stylesheet" href="{{asset('font-awesome/css/font-awesome.min.css')}}">
	@yield('styles')
</head>
<body>
	@include('partials.header')
	@yield('content')
	<script src="{{asset('js/app.js')}}"></script>
	@yield('javascript')
</body>
</html>
<!doctype html>
<html>
<head>@include('layout.default-head')
</head>
<body>
	<div class="container">
		<header class="row"> @include('layout.default-header') </header>
		<div id="main" class="row">@yield('content')</div>
		<footer class="row"> @include('layout.default-footer') </footer>
	</div>
</body>
</html>
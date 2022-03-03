<!DOCTYPE HTML>
<!--
	Telephasic by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Blog Lesly</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="/css/main.css" />
	</head>
	<body class="homepage is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header-wrapper">
					<div id="header" class="container">

						<!-- Logo -->
							

						<!-- Nav -->
							<nav id="nav">
								<ul>
								    <li> <h1 id="logo"><a href="{{route('index')}}">Blog Lesly</a></h1></li>
									<li><a href="{{route('Hobis')}}">hobbis</a></li>
									<li class="break"><a href="{{route('informacionescolar')}}">Informacion Escolar</a></li>
									
								</ul>
							</nav>

					</div>

					<!-- Hero -->
						<section id="hero" class="container">
							<header>
								<h2>@yield('titulo')
								
						</section>

				</div>

			
				<div class="col-8 col-12-narrower imp-narrower">

<!-- Content -->
	<article id="content">
		
		@yield('contenido')
		
	</article>

</div>
</div>
		
			
	
		<!-- Scripts -->
			<script src="/js/jquery.min.js"></script>
			<script src="/js/jquery.dropotron.min.js"></script>
			<script src="/js/browser.min.js"></script>
			<script src="/js/breakpoints.min.js"></script>
			<script src="/js/util.js"></script>
			<script src="/js/main.js"></script>

	</body>
</html>
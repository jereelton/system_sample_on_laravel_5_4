<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>

	<title>CSS3 EFFECTS</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

	<!-- Required meta tags -->
	<meta charset="utf-8" />
	<meta http-equiv="cache-control" content="no-cache" />
	<meta http-equiv="pragma" content="no-cache" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	
	<!-- Responsive meta tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="/resources/site/resources/jquery/jquery-3.3.1.min.js"></script>
	<!--<script src="/resources/site/resources/pooper/popper.min.js"></script>-->
	<script src="/resources/site/resources/bootstrap/js/bootstrap.min.js"></script>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="/resources/site/resources/bootstrap/css/bootstrap.min.css" />
	
	<!-- Specific Codes -->
	<script src="/resources/site/js/functions.js"></script>
	<link rel="stylesheet" href="/resources/site/css/normalize.css" />
	<link rel="stylesheet" href="/resources/site/css/styles.css" />
	<link rel="stylesheet" href="/resources/site/css/breakpoint_styles.css" />
	
</head>
<body>

<div class="container-fluid">
		
	<header id="header_page">
	
		<nav id="nav_page">

			<div id="div_ul_nav">

				<button id="button_nav_mobile" class="button_nav_menu button_nav_menu--open" onclick="return MenuToogle('div_ul_nav', 'ul_nav', 'button_nav_mobile');">
					Menu Open Close
				</button>

				<ul id="ul_nav">

					<li>
						<a href="">Inicio</a>
					</li>
					<li>
						<a href="">Sobre</a>
					</li>
					<li>
						<a href="">Galeria</a>
					</li>
					<li>
						<a href="">Contato</a>
					</li>
					
					<li>
		            @if (Route::has('login'))
	                    @if (Auth::check())
						<a href="{{ url('/profile') }}">{{ $username }}</a>
	                </li>
	                <li>
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                            Sair
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
	                </li>
	                    @else
						<a href="{{ route('login') }}">Entrar</a>
		            </li>
		            <li>
	                    <a href="{{ url('/register') }}">Registrar</a>
	                    @endif
		            @endif
					</li>

				</ul>

			</div>

		</nav>

	</header>

	<main>

		<header id="header_main">

			<h1 class="h1_main_title">HEADER MAIN TEMPLATE<strong>!<"HTML5 + CSS3">!</strong></h1>

		</header>

		<section id="main_section">

			<header class="header_section">
				
				<h3 class="h3_header_main_section">HEADER MAIN SECTION</h3>

			</header>

			<section id="articles_section"><!-- sub secao da secao main_section -->
				
				<!-- Iniciando o uso de GRIDs bootstrap -->
				<div class="row">

					<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 section1">

						<article>
							<h5 class="h5_article_title">ARTICLE 1 MAIN SECTION</h5>
							<img src="/resources/site/img/image1.jpeg" alt="Image 1" class="img_article" />
							<span>
								Texto do artigo em volta dos elementos aqui, para completar os espaços e 
								fazer um simples teste de layout
							</span>
						</article>

					</div>

					<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 section2">

						<article>
							<h5 class="h5_article_title">ARTICLE 2 MAIN SECTION</h5>
							<img src="/resources/site/img/image2.jpg" alt="Image 2" class="img_article" />
							<span>
								Texto do artigo em volta dos elementos aqui, para completar os espaços e 
								fazer um simples teste de layout
							</span>
						</article>

					</div>

					<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 section3">

						<article>
							<h5 class="h5_article_title">ARTICLE 3 MAIN SECTION</h5>
							<img src="/resources/site/img/image3.png" alt="Image 3" class="img_article" />
							<span>
								Texto do artigo em volta dos elementos aqui, para completar os espaços e 
								fazer um simples teste de layout
							</span>
						</article>

					</div>

					<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 section4">

						<article>
							<h5 class="h5_article_title">ARTICLE 4 MAIN SECTION</h5>
							<img src="/resources/site/img/image4.jpg" alt="Image 4" class="img_article" />
							<span>
								Texto do artigo em volta dos elementos aqui, para completar os espaços e 
								fazer um simples teste de layout
							</span>
						</article>

					</div>

				</div>

			</section>
			
			<footer id="footer_main_section"><!-- rodape main_section -->

				<h5 class="h5_footer_main_section">FOOTER MAIN SECTION</h5>

			</footer>

		</section><!-- fim main_section -->

		<section id="separator_section">				

			<article>
				<span class="span_msg_separator">
					"Texto do artigo em volta dos elementos aqui, para completar os espaços e 
					fazer um simples teste de layout"
				</span>
				<h5 class="h5_separator_title">SECTION SEPARATOR</h5>
			</article>

		</section><!-- fim separator_section -->

		<section id="added_section">

			<div class="row">

				<div class="col-sm-6 col-md-6 col-lg-6 section_added1">
					<h5 class="h5_section_added">SECTION ADDED 1</h5>
					<div class="div_content_added_section"></div>
				</div>

				<div class="col-sm-6 col-md-6 col-lg-6 section_added2">
					<h5 class="h5_section_added">SECTION ADDED 2</h5>
					<div class="div_content_added_section"></div>
				</div>

			</div>

		</section><!-- fim added_section -->

	</main>
	
	<footer id="footer_page"><!-- rodape da pagina -->

		<h6>FOOTER - (WEBDEVEL) TEIXEIRA Jereelton 2019</h6>
		<p>Texto do artigo em volta dos elementos aqui, para completar os espaços e fazer um simples teste de layout</p>
		<img src="/resources/site/img/logotipo_footer.png" alt="Image Footer" class="img_article" />

	</footer>

</div>

</body>
</html>
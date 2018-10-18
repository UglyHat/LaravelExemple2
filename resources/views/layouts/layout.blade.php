<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html lang="zxx">

<head>
	<title>@yield('header')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Communal Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

	<!-- Bootstrap Core CSS -->
	<link href="{{ asset('css/bootstrap.css') }}" rel='stylesheet' type='text/css' />

	<!-- Custom CSS -->
	<link href="{{ asset('css/style.css') }}" rel='stylesheet' type='text/css' />
	<!-- font-awesome icons -->
	<link href="{{ asset('css/fontawesome-all.min.css') }}" rel="stylesheet">
	<!-- //Custom Theme files -->

	<!-- side nav css file -->
	<link href="{{ asset('css/SidebarNav.min.css') }}" media='all' rel='stylesheet' type='text/css' />
	<!-- //side nav css file -->
	<!--webfonts-->
	<!-- logo -->
	<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
	<!-- titles -->
	<link href="//fonts.googleapis.com/css?family=Yanone+Kaffeesatz:200,300,400,700" rel="stylesheet">
	<!-- body -->
	<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i" rel="stylesheet">
	<!--//webfonts-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/fonts/FontAwesome.otf">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/fonts/fontawesome-webfont.eot">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/fonts/fontawesome-webfont.svg">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/fonts/fontawesome-webfont.ttf">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/fonts/fontawesome-webfont.woff">
</head>
<body class="cbp-spmenu-push">
	@php($red = Route::current()->getName())
	<div class="main-content">
		<div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
			<!--left-fixed -navigation-->
			<aside class="sidebar-left">
				<h1>
					<a href="{{ route('home') }}" class="logo">
						Exercice 2
					</a>
				</h1>
				<ul class="sidebar-menu">
					<li class="treeview @if($red == 'edit_byid') active @else NULL @endif">
						<a href="{{ route('edit_byid') }}">
							<i class="fas fa-home"></i>
							<span>Editer Utilisateur</span>
						</a>
					</li>
					<li class="treeview @if($red == 'delete_byid') active @else NULL @endif">
						<a href="{{ route('delete_byid') }}">
							<i class="fas fa-info"></i>
							<span>Supprimer Membre</span>
						</a>
					</li>
					<li class="treeview @if($red == 'premium') active @else NULL @endif">
						<a href="{{ route('premium') }}">
							<i class="fab fa-buromobelexperte"></i>
							<span>Page Premium</span>
						</a>
					</li>
					<li class="treeview @if($red == 'users_all' || $red == 'users_list' || $red == 'profile') active open @else NULL @endif">
						<a href="#">
							<i class="fas fa-plus"></i>
							<span>Informations</span>
							<i class="fa fa-angle-left pull-right"></i>
						</a>
						<ul class="treeview-menu @if($red == 'users_all') active @else NULL @endif">
							<li>
								<a href="{{ route('users_all') }}">
									<i class="fa fa-angle-right"></i>ID et Em@il</a>
							</li>
							<li>
								<a href="{{ route('users_list') }}">
									<i class="fa fa-angle-right"></i>Liste</a>
							</li>
							<li>
								<a href="{{ route('profile') }}">
									<i class="fa fa-angle-right"></i>Profil</a>
							</li>
						</ul>
					</li>
					<li class="treeview @if($red == 'interface') active @else NULL @endif">
						<a href="{{ route('interface') }}">
							<i class="fab fa-buromobelexperte"></i>
							<span>Interface</span>
						</a>
					</li>
					<li class="treeview @if($red == 'edit_own') active @else NULL @endif">
						<a href="{{ route('edit_own') }}">
							<i class="fas fa-info"></i>
							<span>Editer mes infos</span>
						</a>
					</li>
				</ul>
				<button type="button" class="btn btn-info btn-lg btn-block mt-5 w3ls-btn p-1 text-uppercase font-weight-bold" data-toggle="modal"
				    aria-pressed="false" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
				</button>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
			</aside>
		</div>
	</div>
	<!--left-fixed -navigation-->
	<!-- header-starts -->
	<header class="header-section">
		<div class="header-left  clearfix">
			<!--logo start-->
			<div class="brand">
				<button id="showLeftPush">
					<i class="fas fa-bars"></i>
				</button>
			</div>
			<!--logo end-->
		</div>
		<div class="header-right">
		</div>
	</header>
	<!-- //header-ends -->
	<!-- main content start 
	<div id="page-wrapper"> @yield('content2') 
		<div class="banner">
			<div class="banner_text_agile">
				 Carousel 
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner">
						<div class="carousel-item active text-center">
							<i class="fab fa-connectdevelop"></i>
							<h3 class="b-w3ltxt text-capitalize mt-4">start your own business</h3>
							<p class="mx-auto text-capitalize mt-2">onec consequat sapien ut leo cursus rhoncus. Nullam dui mi, vulputate ac metus semper.</p>
							<a class="btn btn-banner mt-md-3 mt-2 text-capitalize" href="services.html" role="button">explore services</a>
						</div>
						slider text 
						<div class="carousel-item text-center">
							<i class="fab fa-connectdevelop"></i>
							<h3 class="b-w3ltxt text-capitalize mt-4">great possibilities</h3>
							<p class="mx-auto text-capitalize mt-2">onec consequat sapien ut leo cursus rhoncus. Nullam dui mi, vulputate ac metus semper.</p>
							<a class="btn btn-banner mt-md-3 mt-2 text-capitalize" href="services.html" role="button">explore services</a>
						</div>
						slider text 
						<div class="carousel-item text-center">
							<i class="fab fa-connectdevelop"></i>
							<h3 class="b-w3ltxt text-capitalize mt-4">offer business solutions</h3>
							<p class="mx-auto text-capitalize mt-2">onec consequat sapien ut leo cursus rhoncus. Nullam dui mi, vulputate ac metus semper.</p>
							<a class="btn btn-banner mt-md-3 mt-2 text-capitalize" href="services.html" role="button">explore services</a>
						</div>
						 slider text 
					</div>
				</div>
				 Carousel 
			</div>


		</div> -->
		<!-- //banner -->
		<!-- about -->
		<section class="wthree-row py-sm-5 py-3">
			<div class="container py-md-5">
				<div class="py-lg-5 py-3 bg-pricemain text-center"> @yield('content')  <!--
					<h3 class="agile-title text-uppercase">about us</h3>
					<span class="w3-line"></span>
				</div>
				<div class="row py-lg-5 pt-md-5 pt-3 d-flex justify-content-center">
					<div class="card col-lg-3 col-md-6 border-0">
						<div class="card-body bg-light">
							<div class="card-img-top pt-3">
								<h5 class=" card-title">day trading</h5>
							</div>
							<p class="card-text mb-3 ">Class aptent taciti sociosqu ad litora torquent per conubia nostra per inceptos himenaeos.</p>
						</div>
						<img class="card-img-top" src="images/a1.png" alt="Card image cap">
					</div>
					<div class="card col-lg-3 col-md-6 border-0 mt-md-0 mt-5">
						<img class="card-img-top" src="images/a2.jpg " alt="Card image cap ">
						<div class="card-body bg-light text-center">
							<h5 class="card-title ">custom menus</h5>
							<p class="card-text mb-3 ">Class aptent taciti sociosqu ad litora torquent per conubia nostra per inceptos himenaeos.</p>
							<a href="#ab-bot" class="btn scroll">View More</a>
						</div>
					</div>
					<div class="card col-lg-3 col-md-6 border-0 mt-lg-0 mt-5 ">
						<img class="card-img-top " src="images/a3.jpg " alt="Card image cap ">
						<div class="card-body bg-light text-center">
							<h5 class="card-title ">user friendly</h5>
							<p class="card-text mb-3 ">Class aptent taciti sociosqu ad litora torquent per conubia nostra per inceptos himenaeos.</p>
							<a href="#ab-bot" class="btn scroll">View More</a>
						</div>
					</div>
					<div class="card col-lg-3 col-md-6 border-0 mt-lg-0 mt-5 text-right">
						<div class="card-body bg-light">
							<h5 class="card-title  pt-3">annual bonus</h5>
							<p class="card-text mb-3 ">Class aptent taciti sociosqu ad litora torquent per conubia nostra per inceptos himenaeos.</p>
						</div>
						<img class="card-img-top " src="images/a4.png " alt="Card image cap ">
					</div> -->
				</div>
			</div>
		</section>
		<!--
		 about-bottom 
		<section class="wthree-row py-sm-5 py-3" id="ab-bot">
			<div class="row justify-content-center align-items-center no-gutters abbot-main">
				<div class="col-lg-6 p-0">
					<img src="images/s1.jpg" class="img-fluid" alt="" />
				</div>
				<div class="col-lg-6 p-0 abbot-right">
					<div class="card">
						<div class="card-body px-sm-5 py-5 px-4">
							<h3 class="stat-title card-title align-self-center">we offer high end business solution</h3>
							<span class="w3-line"></span>
							<p class="card-text align-self-center my-3">
								Vestibulum volutpat non eros ut vulputate. Nunc id risus accumsan Donec mi nulla, auctor nec sem a, ornare auctor mi. Sed
								mi tortor, commodo a felis in, fringilla tincidunt nulla.</p>
							<p class="card-text align-self-center mb-4">Donec mi nulla, auctor nec sem a, ornare auctor mi. Sed mi tortor, commodo a felis in, fringilla tincidunt nulla.
								Vestibulum volutpat non eros ut vulputate.</p>
							<a href="about.html" class="btn btn-primary abt_card_btn bg-light">Know More</a>
						</div>
					</div>
				</div>
			</div>
			<div class="row  align-items-center no-gutters abbot-grid2">
				<div class="col-lg-6 py-lg-3 px-lg-5 p-sm-5 px-3 py-5 abbot-right">
					<h3 class="stat-title card-title align-self-center pt-3 text-center">Talents & Expertise</h3>
					<span class="w3-line mx-auto text-center d-block"></span>
					<div class="progress_agile mx-auto mt-5">
						<div class="progress-outer mt-3">
							<div class="progress">
								<div class="progress-bar progress-bar-info progress-bar-striped active" style="width:90%; box-shadow:-1px 10px 10px rgba(91, 192, 222, 0.7);"></div>
								<div class="progress-value">90%</div>
							</div>
							<h6 class="text-right text-capitalize pt-3">economic growth</h6>
						</div>
						<div class="progress-outer  my-4">
							<div class="progress">
								<div class="progress-bar progress-bar-warning progress-bar-striped active" style="width:80%; box-shadow:-1px 10px 10px rgba(240, 173, 78,0.7);"></div>
								<div class="progress-value">80%</div>
							</div>
							<h6 class="text-right text-capitalize pt-3">skills</h6>
						</div>
						<div class="progress-outer">
							<div class="progress">
								<div class="progress-bar progress-bar-success progress-bar-striped active" style="width:70%; box-shadow:-1px 10px 10px rgba(116, 195, 116,0.7);"></div>
								<div class="progress-value">70%</div>
							</div>
							<h6 class="text-right text-capitalize pt-3">projects</h6>
						</div>
					</div>
				</div>
				<div class="col-lg-6 p-0">
					<img src="images/b4.jpg" class="img-fluid" alt="" />
				</div>
			</div>
		</section>
		 //about bottom
		 stats 
		<section class="agile_stats">
			<div class="container-fluid pt-5">
				<div class="row pt-lg-5 w3-abbottom">
					<div class="col-lg-6 px-sm-5 px-3">
						<div class="stats_agile mb-5">
							<h3 class="stat-title text-uppercase">we develop the future</h3>
							<span class="w3-line"></span>
							<p class="mt-3">Donec consequat sapien ut leo cursus rhoncus. Nullam dui mi, vulputate ac metus at, semper varius orci. Nulla accumsan
								ac elit in congue. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
						</div>
						<div class="row">
							<div class="counter col-4">
								<i class="far fa-smile fa-2x"></i>
								<div class="timer count-title count-number mt-2" data-to="5100" data-speed="1500"></div>
								<p class="count-text text-capitalize">happy customers</p>
							</div>

							<div class="counter col-4 px-4">
								<i class="fas fa-database fa-2x"></i>
								<div class="timer count-title count-number mt-2" data-to="4783" data-speed="1500"></div>
								<p class="count-text text-capitalize">projects</p>
							</div>

							<div class="counter col-4">
								<i class="fab fa-slideshare fa-2x"></i>
								<div class="timer count-title count-number mt-2" data-to="2184" data-speed="1500"></div>
								<p class="count-text text-capitalize">expertise</p>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<img src="images/psd.png" class="img-fluid" alt="" />
					</div>
				</div>
			</div>
		</section>
		//stats 

		 services bottom 
		<div class="serv_bottom py-5">
			<div class="container py-sm-3">
				<div class="d-sm-flex justify-content-around pb-4">
					<h4 class="agile-ser_bot text-capitalize text-white">check our newest projects</h4>
					<a href="portfolio.html" class="text-uppercase serv_link align-self-center bg-light btn px-sm-4 px-2">explore now</a>
				</div>
				<hr>
				<h5 class="text-center text-uppercase text-white pt-4">everything you need is here</h5>
			</div>
		</div>
		 //services bottom 
		 slide 
		<section class="wthree-row py-sm-5 py-3 slide-bg">
			<div class="container py-md-5 py-3">
				<div class="p-lg-5 bg-pricemain">
					<h3 class="agile-title text-uppercase text-white">expert consultants</h3>
					<span class="w3-line"></span>
					<h5 class="agile-title text-capitalize pt-4"> We help young companies expand to new territories</h5>
					<p class="text-light py-4">Aliquam ac est vel nisl condimentum interdum vel eget enim. Curabitur mattis orci sed leo mattis, nec maximus nibh faucibus.
						Mauris et justo vel nibh rhoncus venenatis. Nullal condimentum interdum vel eget enim. Curabitur mattis orci sed le.
					</p>
					<a href="services.html" class="text-uppercase serv_link align-self-center bg-light btn px-4">our services</a>
				</div>
			</div>
		</section>
		 //slide 
		 footer -->
		<div class="footer py-md-5 pt-sm-3 pb-sm-5">
			<div class="container">
				<div class="row p-sm-5 px-3 py-5">
					<!-- footer grid top -->
					<div class="col-lg-8">
						<div class="footer-top">
							<h2>
								<a href="/home">Exercice 2
								</a>
							</h2>
							<p class="mt-2">Ceci est un excercice Laravel.
							</p>
						</div>
						<!-- //footer grid top -->
						<!-- footer-bottom -->
						<div class="footer-bottom pt-5">
							<div class="row">
								<!-- footer grid1 -->
								<div class="col-sm-4 footv3-left">
									<h3 class="mb-3 w3f_title">Navigation Membre</h3>
									<ul class="list-agileits">
										<li class="mb-3">
											<a href="{{ route('premium') }}">
												Page Premium
											</a>
										</li>
										<li class="mb-3">
											<a href="{{ route('users_list') }}">
												Liste
											</a>
										</li>
										<li>
											<a href="{{ route('profile') }}">
												Profil
											</a>
										</li>
									</ul>
								</div>
								<!-- //footer grid1 -->
								<!-- footer grid2 -->
								<div class="col-sm-4  footv3-left my-sm-0 my-5">
									<h3 class="mb-3 w3f_title">Navigation Admin</h3>
									<ul class="list-agileits">
										<li class="mb-3">
											<a href="{{ route('edit_byid') }}">
												Editer Utilisateur
											</a>
										</li>
										<li class="mb-3">
											<a href="{{ route('delete_byid') }}">
												Supprimer Utilisateur
											</a>
										</li>
										<li  class="mb-3">
											<a href="{{ route('users_all') }}">
												ID et Em@il
											</a>
										</li>
										<li>
											<a href="{{ route('interface') }}">
												Interface
											</a>
										</li>
									</ul>
								</div>
								<!-- //footer grid2 -->
								<!-- footer grid3 -->
								<div class="col-sm-4 footv3-left">
									<h3 class="w3f_title mb-3">Mes Travaux</h3>
									<ul class="list-agileits">
										<li>
											<a href="https://github.com/UglyHat">
												Github
											</a>
										</li>
										<li class="my-3">
											<a href="https://www.youtube.com/playlist?list=PLkG-AvrWr_Z_SpOn5zjucIIygzBAAqFfL">
												Youtube
											</a>
										</li>
									</ul>
								</div>
								<!-- //footer grid3 -->
							</div>
						</div>
						<!-- //footer bottom -->
					</div>
					<!-- //footer bottom -->
					<!-- footer right -->
					<div class="col-lg-4 mt-lg-0 mt-5">
						<h3 class="mb-3 w3f_title">Contactez Moi</h3>
						<div class="fv3-contact">
							<span class="fas fa-envelope-open mr-2"></span>
							<p>
								<a href="mailto:example@email.com">rpagot@hotmail.fr</a>
							</p>
						</div>
						<div class="fv3-contact my-3">
							<span class="fas fa-phone-volume mr-2"></span>
							<p>+33 7 50470232</p>
						</div>
						<div class="footerv2-w3ls pt-4">
							<h3 class="w3f_title">Réseaux sociaux</h3>
							<ul class="social-iconsv2 agileinfo pt-3">
								<li>
									<a href="https://twitter.com/Dopamine8766">
										<i class="fab fa-twitter"></i>
									</a>
								</li>
								<li>
									<a href="https://www.linkedin.com/in/romainpagot42/">
										<i class="fab fa-linkedin-in"></i>
									</a>
								</li>
							</ul>
						</div>
					</div>
					<!-- //footer right -->
				</div>
				<!-- //footer row -->
			</div>
			<!-- copyright -->
			<div class="cpy-right text-center pb-sm-0 pb-5">
				<p>© Romain Pagot @ Stylimmo, Design by
					<a href="http://w3layouts.com"> W3layouts.</a>
				</p>
			</div>
			<!-- //copyright -->
			<!-- //footer container -->
		</div>
		<!-- //footer -->
		<!-- login and register modal -->
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Login</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<img src="images/modal.jpg" alt="" class="img-fluid" />
						<form action="#" method="post" class="p-3">
							<div class="form-group">
								<label for="recipient-name" class="col-form-label">Username</label>
								<input type="text" class="form-control" placeholder=" " name="Name" id="recipient-name" required="">
							</div>
							<div class="form-group">
								<label for="password" class="col-form-label">Password</label>
								<input type="password" class="form-control" placeholder=" " name="Password" id="password" required="">
							</div>
							<div class="right-w3l">
								<input type="submit" class="form-control" value="Login">
							</div>
							<div class="row sub-w3l my-3">
								<div class="col sub-agile">
									<input type="checkbox" id="brand1" value="">
									<label for="brand1" class="text-dark">
										<span></span>Remember me?</label>
								</div>
								<div class="col forgot-w3l text-right">
									<a href="#" class="text-dark">Forgot Password?</a>
								</div>
							</div>
							<p class="text-center dont-do">Don't have an account?
								<a href="#" data-toggle="modal" data-target="#exampleModal1" class="text-dark">
									Register Now</a>
							</p>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel1">Register</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<img src="images/modal.jpg" alt="" class="img-fluid" />
						<form action="#" method="post" class="p-3">
							<div class="form-group">
								<label for="recipient-name" class="col-form-label">Username</label>
								<input type="text" class="form-control" placeholder=" " name="Name" id="recipient-rname" required="">
							</div>
							<div class="form-group">
								<label for="recipient-email" class="col-form-label">Email</label>
								<input type="email" class="form-control" placeholder=" " name="Email" id="recipient-email" required="">
							</div>
							<div class="form-group">
								<label for="password1" class="col-form-label">Password</label>
								<input type="password" class="form-control" placeholder=" " name="Password" id="password1" required="">
							</div>
							<div class="form-group">
								<label for="password2" class="col-form-label">Confirm Password</label>
								<input type="password" class="form-control" placeholder=" " name="Confirm Password" id="password2" required="">
							</div>
							<div class="sub-w3l">
								<div class="sub-agile">
									<input type="checkbox" id="brand2" value="">
									<label for="brand2" class="mb-3 text-dark">
										<span></span>I Accept to the Terms & Conditions</label>
								</div>
							</div>
							<div class="right-w3l">
								<input type="submit" class="form-control" value="Register">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- //login and register modal -->
	</div>
	<!-- js-->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- js-->

	<!-- for toggle left push menu script -->
	<script src="js/classie.js "></script>
	<script>
		var menuLeft = document.getElementById('cbp-spmenu-s1'),
			showLeftPush = document.getElementById('showLeftPush'),
			body = document.body;

		showLeftPush.onclick = function () {
			classie.toggle(this, 'active');
			classie.toggle(body, 'cbp-spmenu-push-toright');
			classie.toggle(menuLeft, 'cbp-spmenu-open');
			disableOther('showLeftPush');
		};


		function disableOther(button) {
			if (button !== 'showLeftPush') {
				classie.toggle(showLeftPush, 'disabled');
			}
		}
	</script>
	<!-- //Classie -->
	<!-- //for toggle left push menu script -->
	<!-- side nav js -->
	<script src="js/SidebarNav.min.js"></script>
	<script>
		$('.sidebar-menu').SidebarNav()
	</script>
	<!-- //side nav js -->
	<!-- script for password match -->
	<script>
		window.onload = function () {
			document.getElementById("password1").onchange = validatePassword;
			document.getElementById("password2").onchange = validatePassword;
		}

		function validatePassword() {
			var pass2 = document.getElementById("password2").value;
			var pass1 = document.getElementById("password1").value;
			if (pass1 != pass2)
				document.getElementById("password2").setCustomValidity("Passwords Don't Match");
			else
				document.getElementById("password2").setCustomValidity('');
			//empty string means no validation error
		}
	</script>
	<!-- script for password match -->
	<!-- start-smooth-scrolling -->
	<script src="js/move-top.js "></script>
	<script src="js/easing.js "></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll ").click(function (event) {
				event.preventDefault();

				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- //end-smooth-scrolling -->
	<!-- smooth-scrolling-of-move-up -->
	<script>
		$(document).ready(function () {
			/*
			 var defaults = {
				 containerID: 'toTop', // fading element id
				 containerHoverID: 'toTopHover', // fading element hover id
				 scrollSpeed: 1200,
				 easingType: 'linear' 
			 };
			 */

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<script src="js/SmoothScroll.min.js "></script>
	<!-- //smooth-scrolling-of-move-up -->
	<script src="js/counter.js"></script>
	<!-- //stats -->
	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.js ">
	</script>
	<!-- //Bootstrap Core JavaScript -->

</body>
<script 
src="https://code.jquery.com/jquery-3.3.1.min.js"
integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
crossorigin="anonymous">
</script>
<script 
src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js">
</script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
<script src="js/lib/sweetalert/sweetalert.min.js"></script>
<link rel="stylesheet" href="css/lib/sweetalert/sweetalert.css">
<script src="{{ asset('js/app.js') }}"></script>
@yield('js-content')
</html>
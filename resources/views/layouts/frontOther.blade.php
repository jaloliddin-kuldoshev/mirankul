<!DOCTYPE html>
<html  lang="ru">
<head>
	<meta charset="utf-8" />
	<title>@yield('title')</title>
	<meta name="description" content="" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('site/css/lightbox.min.css') }}">
	<link rel="stylesheet" href="{{ asset('site/css/bootstrap.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('site/libs/font-awesome-4.2.0/css/font-awesome.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('site/css/slick.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{ asset('site/css/animate.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('site/css/hover.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('site/css/mediaelementplayer.min.css') }}">
	<link rel="stylesheet" href="{{ asset('site/css/main.css') }}" />
	<link rel="stylesheet" href="{{ asset('site/css/media.css') }}" />


</head>
<body>




	<!-- header  section -->

	<section class="header-section">

		<div class="container">
			<div class="forma-top-right bheader" id="bmyHeader">

				<div class="container">
					<nav class="navbar navbar-inverse my_navbar-inverse">
						<div class="my-container-fluid">

							<div class="navbar-header">
								<button type="button" class="navbar-toggle my_navbar-toggle_add" data-toggle="collapse" data-target="#myNavbar">
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>                        
								</button>
								<div class="bascett_adp emty">
									<a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span>0</span></a>
								</div>
								<a href="{{ action('IndexController@index') }}" class="navbar-brand my_navbar-brand" href="#"><img src="{{ asset('site/img/logom2.png') }}"></a>
							</div>

							<div class="collapse navbar-collapse " id="myNavbar">
								<ul class="nav navbar-nav my_navbar-nav">      
									<li><a href="{{ action('IndexController@index') }}" class="my_navbar-nav_a com_header_a {{ request()->is('/') ? 'active' : '' }}">Главная</a></li>
									<li><a href="{{ action('IndexController@company') }}/?type=3" class="my_navbar-nav_a com_header_a {{ request()->is('company') ? 'active' : '' }}">О нас</a></li>
									<li><a href="{{ action('IndexController@company') }}/?type=2" class="my_navbar-nav_a com_header_a {{ request()->is('company') ? 'active' : '' }}">Услуги</a></li>   
									<li><a href="{{ action('IndexController@company') }}/?type=1" class="my_navbar-nav_a com_header_a {{ request()->is('company') ? 'active' : '' }}">Галерея</a></li>                       
									<li><a href="{{ action('IndexController@vacancy') }}" class="my_navbar-nav_a com_header_a {{ request()->is('vacancy') ? 'active' : '' }}">Вакансии</a></li>
									<li><a href="{{ action('IndexController@contacts') }}" class="my_navbar-nav_a com_header_a {{ request()->is('contacts') ? 'active' : '' }}">Контакты</a></li>
									<li><button class="my_navbar-nav_a chan_header_a chan_header_a1" id="myBtn">Оставить заявку</button></li>
									<li class="bascett_li emty">
										<a class="my_navbar-nav_a com_header_a bascett" href="{{ action('IndexController@cart') }}">
											<i class="fa fa-shopping-cart" aria-hidden="true"></i>
											<span id="count">{{Session::has('cart') ? Session::get('cart')->totalQty : '' }}</span>
										</a>
									</li>
								</ul>
							</div>

						</div>
					</nav>
				</div>


			</div>
		</div>

	</section>
	@yield('content')
	<footer>
		<div class="container">
			<div class="footer-all">
				<div class="footerall-3div">
					<div class="footer-1-div">
						<img src="{{ asset('site/img/logobot2.png') }}">

						<h6>© 2018. Mironkul Group</h6>
					</div>
					<div class="footer-2-div">

						<h6>Навигация</h6>
						<a href="{{ action('IndexController@index') }}">Главная</a>
						<a href="#">Преимущества</a>
						<a href="{{ action('IndexController@company') }}/?type=3">О нас</a>

					</div>
					<div class="footer-3-div">
						<h6>Услуги</h6>
						@foreach (\App\Model\Works::all()->take(5)  as $element)
						<a href="{{ action('IndexController@branches', ['id' => $element->id]) }}">{{$element->title}}</a>
						@endforeach
					</div>                
				</div>

				<div class="footerall-2div">
					<div class="footer-4-div">
						<button id="all-ininaa" href="#">Оставить заявку</button> 
						<a href="{{ action('IndexController@vacancy') }}">Вакансии</a>
						<a href="{{ action('IndexController@contacts') }}">Контакты</a>
					</div>
					<div class="footer-5-div">
						<h6>Мы в соц. сетях:</h6>
						<div class="footer-allsots">
							<div class="footer-sot1">
								<a href="#"><img src="{{ asset('site/img/ff.png') }}"></a>
								<div class="triang-div">
									<p>12323</p>
									<div class="triagle-footer-p"></div>
								</div>
							</div>
							<div class="footer-sot1">
								<a href="#"><img src="{{ asset('site/img/in.png') }}"></a>
								<div  class="triang-div">
									<p>12323</p>
									<div class="triagle-footer-p"></div>
								</div>
							</div>
							<div class="footer-sot1">
								<a href="#"><img src="{{ asset('site/img/te.png') }}"></a>
								<div  class="triang-div">
									<p>12323</p>
									<div class="triagle-footer-p"></div>
								</div>
							</div>
						</div>
						<div class="sos">
							<p>Сайт создан в компании - </p>
							<a href="//sos.uz">Smart Outsourcing Solutions</a>
						</div>
					</div>        
				</div>
			</div>
		</div>
	</footer>



	<!-- The Modal -->
	<div class="my-modal-content1">
		<div id="myModal" class="modal">

			<!-- Modal content -->
			<div class="modal-content">
				<span class="close">&times;</span>
				<div class="modal-first-all" id="modal-1ty">
					<h2>Связаться с нами</h2>
					<div class="modal-h2botred"></div>
					<form action="{{ action('IndexController@sent') }}" method="post" id="sendEmail">
						{!! csrf_field() !!}
						<p>Имя <span><i class="fa fa-star" aria-hidden="true"></i></span> </p>

						<input type="text" name="name" required>

						<p>Компания</p>
						<input type="text" name="comp" required>

						<p>Email <span><i class="fa fa-star" aria-hidden="true"></i></span></p>
						<input type="email" name="email" required>

						<p>Телефон <span><i class="fa fa-star" aria-hidden="true"></i></span></p>
						<input type="text" name="tel" required>

						<p>Ваше сообщения <span><i class="fa fa-star" aria-hidden="true"></i></span></p>
						<textarea name="mes" type="text" required></textarea>
						<input type="hidden" id="excelFile" name="excel" value="">
						<button type="submit"  >Отправить сообщение</button>
					</form>
					<div class="inportant-formbot">
						<p><span><i class="fa fa-star" aria-hidden="true"></i></span> Поля обязательные для заполнения</p>
					</div>
				</div>
				<!-- thank you -->

				<div class="thankyou" id="typanel">
					<h2>Спасибо!</h2>
					<div class="modal-h2botred"></div>
					<p>Мы обязательно свяжемся с вами в ближайшее время, чтобы менеджер мог ответить на всю интересующую Вас информацию.</p>
					<button>Закрыть</button>
				</div>
			</div>

		</div>
	</div>

	<!-- top botton -->
	<button class="topmyBtnclas" onclick="topFunction()" id="topmyBtn" title="Go to top">
		<i class="fa fa-angle-up" aria-hidden="true"></i>
		<p>вверх</p>
	</button>
	<script src="{{ asset('site/js/lightbox-plus-jquery.min.js') }}"></script>
	<script src="{{ asset('site/js/jquery.min.js') }}" ></script>
	<script src="{{ asset('site/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('site/js/slick.min.js') }}"></script>
	<script src="{{ asset('site/js/wow.min.js') }}"></script>
	<script> new WOW().init();</script>
	<script src="{{ asset('site/js/common.js') }}"></script>
	<script src="{{ asset('site/js/mediaelement-and-player.min.js') }}"></script>
	<script>
		$('.video_slider').slick({
			infinite: true,
			slidesToShow: 1,
			slidesToScroll: 1
		});
	</script> 
</body>
</html>
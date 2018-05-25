@extends('layouts.frontOther')
@section('title', 'Компания')
@section('content')
<section class="topccc-topmar2">
	<div class="topccc-col-pa">
		<div class="container">
			<div class="topccc-pa">
				<p><a href="{{ action('IndexController@index') }}">Главная</a> <span> / </span>   О компании</p>
			</div>
		</div>
	</div>
	<div class="topccc-backimg" style="background-image: url({{ $about->img }});"></div>
</section>





<!-- gelery acardion -->
<section class="galer_tabs2">
	<div class="container">
		<!-- bootstrap tabs -->
		<div class="galer_tabs2_all">
			<div class="my_col-xs-3"> <!-- required for floating -->
				<!-- Nav tabs -->
				<ul class="nav nav-tabs tabs-left go_to_ul">
					<li class="<?php if (isset($_GET['type'])) { if ($_GET['type'] == 3) echo 'active'; } ?>" href=".my_col-xs-9"><a href="#home" data-toggle="tab">О компании</a></li>
					<li class="<?php if (isset($_GET['type'])) { if ($_GET['type'] == 2) echo 'active'; } ?>" href=".my_col-xs-9"><a href="#messagesgale" data-toggle="tab">Наши услуги</a></li>
					<li class="<?php if (isset($_GET['type'])) { if ($_GET['type'] == 1) echo 'active'; } ?>" href=".my_col-xs-9"><a href="#galaryallid" data-toggle="tab">Галерея</a></li>          
				</ul>
			</div>

			<div class="my_col-xs-9 tabs_about">
				<!-- Tab panes -->
				<div class="tab-content">
					<!-- О компании -->
					<div class="tab-pane <?php if (isset($_GET['type'])) { if ($_GET['type'] == 3) echo 'active'; } ?>" id="home">
						<div class="mechanism">
							<h1>О компании</h1>
							<div class="career-reddiv1"></div>

							{!! $about->text !!}
							<section class="video-section-ty">


								<div class="video_slider">
									@foreach ($news as $element)
									<div class="lg-club-move-block">
										<div class="club-move-block">
											<video width="100%" height="545px" controls poster="../../site/images/poster.png">
												<source src="{{ $element->path }}" type="video/mp4"> 
												</video>
												<div class="club-abs-blck-txt"></div>
											</div>
										</div>
										@endforeach
									</div>
								</section>

							</div>
						</div>


						<!-- Наши услуги -->
						<div class="tab-pane <?php if (isset($_GET['type'])) { if ($_GET['type'] == 2) echo 'active'; } ?>" id="messagesgale">
							<div class="service">
								<div class="service_h1_p">
									<h1>Наши услуги</h1>
									<div class="career-reddiv1"></div>
									
								</div>  
								@foreach ($work as $element)
								<a href="{{ action('IndexController@branches', ['id' => $element->id]) }}">
									<div class="service_img_p">
										<div class="service1_img_h3">
											<img src="{{ $element->sym }}">
											<div class="service_imh3">
												<h3>{{ $element->title }}</h3>
											</div>
										</div>
										{!! str_limit($element->text, 300) !!}
									</div>
								</a>
								@endforeach
							</div>
						</div>
						<!-- Галерея content -->
						<div class="tab-pane <?php if (isset($_GET['type'])) { if ($_GET['type'] == 1) echo 'active'; } ?>" id="galaryallid">
							<div class="gal_tab_contents_all">
								<h1>Галерея</h1>
								<div class="career-reddiv1"></div>
								<p class="career-reddiv1-1_p"></p>
								<div class="galer_albom_tab">
									<h4>Альбомы</h4>

									<div class="albom-3div_in1"> 
										@foreach ($work as $key => $element)
										<a href="{{ action('IndexController@alboums', ['id' => $element->id]) }}">
											<div class="albom_tab_divbac" style="background-image: url({{$element->img_main}});">
												<div class="albom_tab_divbac-p">
													<h6>{{$element->title}}</h6>
													<p> фото</p>
												</div>
											</div>
										</a>
										@endforeach

									</div>

								</div>

								<!-- last images -->
								<div class="last_imgs_albom">
									<h4 class="last_imgs-h4a">Послдние добавленные фотографии</h4>
									<div class="last_imgs_9">
										@foreach ($pho as $element)
										
										<a href="{{ $element->img }}" data-lightbox="mygallery">
											<div style="background-image: url({{ $element->img }});" class="containerimg-last">
												<div class="overlayimg-last">
													<div  class="iconimg-last" title="User Profile">
														<span><i class="fa fa-search" aria-hidden="true"></i></span> 
													</div>
												</div>
											</div>
										</a>
										@endforeach


									</div>
								</div>
							</div>
						</div>         
					</div>
				</div>
			</div>
		</div>
	</section>


	<!-- section cooperation -->
	@include('site.parts.partners')


	@include('site.parts.callback')
	@endsection
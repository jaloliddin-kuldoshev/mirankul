@extends('layouts.frontOther')
@section('title', 'Компания')
@section('content')
<section class="top_life" style="background-image: url({{$work->img}});">
	<div class="top_life-back_col">
		<div class="life_p-h1">
			<img src="{{$work->icon}}">
			<h6>{{$work->title}}</h6>
			<h1>{{$work->motto}}</h1>
			<p>{{$work->des}}</p>
			<button class="go_to" href=".emn5">Перейти в каталог</button>
		</div>  
	</div>
</section>

<section  class="solutions solutions-background2">
	<!-- call fixed div -->
	<div class="affix-ln"  data-spy="affix" data-offset-top="900">
		<ul>
			<li>
				<button>
					<div class="ln-fixdiv_right"><img src="{{asset('site/img/call1.png')}}"><span>18</span></div>
				</button>
			</li>
			<li><a href="{{$work->ex}}"><img class="right-fix-imgte" src="{{asset('site/img/call2.png')}}"></a></li>
			<li>
					<a href="{{$work->file}}"><img src="{{asset('site/img/call3.png')}}"></a>
			</li>
		</ul>
	</div>
</section>
<!-- About company -->
<section class="about_company2">
	<div class="container">
<!--     <h6>MIRONKUL CABLE TRAYS</h6>
	<h1>О компании</h1> -->
	<div class="about_com_img12"><img src="{{$work->sym}}"></div>
	<p class="read_morep1">{!! strip_tags($work->text) !!}</p>
	<button class="read_morebtn1">Больше информации <div><i class="fa fa-angle-down" aria-hidden="true"></i></div></button>
</div>
</section>

<section class="video-section-ty">
	<div class="container">

		<div class="video_slider">
			@foreach ($vid as $element)
			<div class="lg-club-move-block">
				<div class="club-move-block">
					<video width="100%" height="545px" controls poster="">
						<source src="{{ $element->path }}" type="video/mp4"> </video>
							<div class="club-abs-blck-txt">
							</div>
						</div>
					</div>
					@endforeach
				</div>

			</div>
		</section> 




		<!-- section advantages -->
		<section class="advantages">
			<div class="container">

				<div class="advantages-h1-p emn">
					<h6>MIRONKUL GROUP</h6>
					<h1>Наши преимущества</h1>
				</div>

				<div class="advantages-4div">
					<div class="advantages-4div-2">
						@foreach ($ben as $element)
						<div class="advantages-1-div">
							<img src="{{ $element->img }}">
							<h5>{{ $element->title }}</h5>
							<p>{{ $element->text }}</p>
						</div>
						@endforeach	     

					</div>     

				</div>
			</div>
		</section>

		<!-- Product Catalog -->
		<section class="catalog-pro">
			<div class="container">
				<div class="catalog-pro-h1-h6">
					<h6 class=" emn5">{{ $work->tit }}</h6>
					<h1>Каталог продукции</h1>
				</div>
				<!-- tabs -->
				<div class="catalog-tabs">
					<div class="catab">
						<h2>Каталог</h2>
						@foreach ($cat as $element)
						<button class="catablinks" onclick="openCity(event, '{{ $element->id }}')" id="cadefaultOpen">{{ $element->title }}</button>
						@endforeach
					</div>
					<!-- London Соединители для лотков -->
					@foreach ($cat as $element)
					<div id="{{ $element->id }}" class="catabcontent">
						@foreach ($pro as $element)
						<div class="caLondon-3div">
							<div class="caLondon_1-div">
								<div class="cicontainer">
									@for ($i = 0; $i < 1; $i++)
									<img src="{{ json_decode($element->img)[$i] }}"  class="ciimage">
									@endfor
									<h6>{{ $element->title }}</h6>
									<p>{{$element->price}} сум</p>
									<div class="cioverlay">
										<div class="citext">
											<div class="citext-a">
												<input type="hidden" name="cart" value="1" id="cart">
												<input type="hidden" name="id" value="{{ $element->id }}">
												<a href="{{ action('IndexController@products', ['id' => $element->id]) }}">Подробнее</a>
												<a href="{{ action('IndexController@getCart', ['id' => $element->id]) }}" class="add-to-cart" data-id="{{$element->id}}">В корзину</a>
											</div>
										</div>
									</div>
									
								</div>
							</div>
						</div>   
						@endforeach
					</div>
					@endforeach

				</div>
				<!-- more button -->
				<div class="button_see_more">
					<button>
						Больше продукции
					</button>
				</div>
			</div>
		</section>

		<!-- last_pop_slick -->
		<section class="last_pop_slick">
			<div class="container">
				<div class="last_pop_slick_h61">
					<h6>MIRONKUL CABLE TRAYS</h6>
					<h1>Портфолио работ</h1>
				</div>
				<div class="last_pop_slixck">
					@foreach ($pho as $element)
					<a href="{{$element->img}}" data-lightbox="mygallery">
						<div style="background-image: url({{$element->img}});" class="containerimg-last">
							<div class="overlayimg-last">
								<div  class="iconimg-last">
									<span><i class="fa fa-search" aria-hidden="true"></i></span> 

								</div>
								<p></p>
							</div>
						</div>
					</a>
					@endforeach          
				</div>
			</div>
		</section>
		@include('site.parts.partners')
		@endsection
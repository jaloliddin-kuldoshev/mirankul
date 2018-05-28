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
					<h6>{{ $work->tit }}</h6>
					<h1>Наши преимущества</h1>
					<p>{{$works->des}}</p>
				</div>

				<div class="advantages-4div">
					<div class="advantages-4div-2">

						<div class="advantages-1-div">
							<img src="{{$works->img}}">
							<h5>{{$works->title}}</h5>
							<p>{{$works->text}}</p>
						</div>
						<div class="advantages-1-div">
							<img src="{{$works->img1}}">
							<h5>{{$works->title1}}</h5>
							<p>{{$works->text1}}</p>
						</div>      

					</div>

					<div class="advantages-4div-2">

						<div class="advantages-1-div">
							<img src="{{$works->img2}}">
							<h5>{{$works->title2}}</h5>
							<p>{{$works->text2}}</p>
						</div>
						<div class="advantages-1-div advantages-1-div-last ">
							<img src="{{$works->img3}}">
							<h5>{{$works->title3}}</h5>
							<p>{{$works->text3}}</p>
						</div>      

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
						@foreach ($cat as $key => $element)
						<button class="catablinks {{ ($key == 0 ? 'caactive' : '') }}" data-id="{{ $element->id }}" onclick="openCity(event, '{{ $element->id }}')" id="cadefaultOpen">{{ $element->title }}</button>
						@endforeach
					</div>
					<!-- London Соединители для лотков -->
					@foreach ($cat as $key => $asd)
					<div id="{{ $asd->id }}" class="catabcontent" style="{{ ($key == 0 ? 'display: block;' : 'display: none;') }}">
						<div id="{{ $asd->id }}1" class="caLondon-3div">
							@foreach ($pro as $element)
							@if ($asd->id == $element->catalogs_id)

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

							@endif
							@endforeach
						</div>
					</div>
					@endforeach

				</div>
				<!-- more button -->

				<div class="button_see_more" id="remove-row">
					<button class="products_lochin" id="btn-more" data-id="" data-products_id="{{ $element->id}}">
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
				{{-- <div class="last_pop_slixck">
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
				</div> --}}
				<div class="albom-3div_in1"> 
					@foreach ($pho as $key => $element)
					<a href="{{ action('IndexController@photos', ['id' => $element->id]) }}">
						<div class="albom_tab_divbac" style="background-image: url({{$element->img}});">
							<div class="albom_tab_divbac-p">
								<h6>{{$element->title}}</h6>
								<p>{{ count($element->photo)}} фото</p>
							</div>
						</div>
					</a>
					@endforeach

				</div>
			</div>
		</section>
		@include('site.parts.partners')
		@endsection
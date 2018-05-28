	@extends('layouts.front')
	@section('title', 'Главная')
	@section('content')
	<section class="solutions">


		<!-- call fixed div -->

		@include('site.parts.callback')
		<div class="container emn" >
			<div class="solutions-h1-p">
				<h6>MIRONKUL GROUP</h6>
				<h1>Наши решения</h1>
				<p></p>
			</div>

			<!-- main solutions imgs  -->
			@switch(count($work))
			@case(1)
			@for ($i = 0; $i < count($work); $i++)
			<div class="solutions-left-1divtop " style="background-image: url({{$work[$i]->img_main}});">
				<div class="solutions-img-pa">
					<div class="blur-sk-22"></div>
					<img src="{{$work[$i]->sym}}">
					<div class="solutions-h6-pa">
						<h6>{{$work[$i]->title}}</h6>
						<p>{{$work[$i]->des}}</p>
						<a href="{{ action('IndexController@branches', ['id' => $work[$i]->id]) }}">Подробнее</a>
					</div>
				</div>
			</div>
			@endfor
			@break
			@case(2)
			<div class="solutions-3div-bot">
				@for ($i = 0; $i < count($work); $i++)


				<div class="solutions3-bot-rig" style="background-image: url({{$work[$i]->img_main}});@if ($i == 0)
					margin-left: 0;
					margin-right: 7.5px;
				@endif">
					<div class="solutions-img-pa">
						<div class="blur-sk-22"></div>
						<img src="{{$work[$i]->sym}}">
						<div class="solutions-h6-pa">
							<h6>{{$work[$i]->title}}</h6>
							<p>{{$work[$i]->des}}</p>
							<a href="{{ action('IndexController@branches', ['id' => $work[$i]->id]) }}">Подробнее</a>
						</div>
					</div>
				</div>

				@endfor
			</div>
			@break
			@case(3)
			<div class="solutions-3div-bot" style="margin-bottom: 15px;">
				@for ($i = 0; $i < count($work); $i++)
				@if ($i <= 1)
				<div class="solutions3-bot-rig" style="background-image: url({{$work[$i]->img_main}}); @if ($i == 0)
					margin-left: 0;
					margin-right: 7.5px;
				@endif">
					<div class="solutions-img-pa">
						<div class="blur-sk-22"></div>
						<img src="{{$work[$i]->sym}}">
						<div class="solutions-h6-pa">
							<h6>{{$work[$i]->title}}</h6>
							<p>{{$work[$i]->des}}</p>
							<a href="{{ action('IndexController@branches', ['id' => $work[$i]->id]) }}">Подробнее</a>
						</div>
					</div>
				</div>
				@endif
				@endfor
			</div>
			@for ($i = 0; $i < count($work); $i++)
			@if ($i==2)		
			<div class="solutions-left-1divtop " style="background-image: url({{$work[$i]->img_main}});">
				<div class="solutions-img-pa">
					<div class="blur-sk-22"></div>
					<img src="{{$work[$i]->sym}}">
					<div class="solutions-h6-pa">
						<h6>{{$work[$i]->title}}</h6>
						<p>{{$work[$i]->des}}</p>
						<a href="{{ action('IndexController@branches', ['id' => $work[$i]->id]) }}">Подробнее</a>
					</div>
				</div>
			</div>
			@endif
			@endfor
			@break
			@case(4)
			<div class="solutions-3div-bot">
				@for ($i = 0; $i < count($work); $i++)
				<div class="solutions3-bot-rig" style="background-image: url({{$work[$i]->img_main}});">
					<div class="solutions-img-pa">
						<div class="blur-sk-22"></div>
						<img src="{{$work[$i]->sym}}">
						<div class="solutions-h6-pa">
							<h6>{{$work[$i]->title}}</h6>
							<p>{{$work[$i]->des}}</p>
							<a href="{{ action('IndexController@branches', ['id' => $work[$i]->id]) }}">Подробнее</a>
						</div>
					</div>
				</div>
				@endfor
			</div>
			@break
			@case(5)
			<div class="solutions-div1-all5">
				<div class="solutions-all5-left">
					@for ($i = 0; $i < count($work); $i++)
					@if ($i <= 1)
					<div class="solutions-left-1divtop" style="background-image: url({{$work[$i]->img_main}}); @if ($i == 0)
						margin-top: 0;
						margin-bottom: 15px;
					@endif @if ($i == 1)
						margin-bottom: 0;
					@endif">
						<div class="solutions-img-pa">
							<div class="blur-sk-22"></div>
							<img src="{{$work[$i]->sym}}">
							<div class="solutions-h6-pa">
								<h6>{{$work[$i]->title}}</h6>
								<p>{{$work[$i]->des}}</p>
								<a href="{{ action('IndexController@branches', ['id' => $work[$i]->id]) }}">Подробнее</a>
							</div>
						</div>
					</div>
					@endif
					@endfor
				</div>
				<div class="solutions-all5-right">
					@for ($i = 0; $i < count($work); $i++)
					@if (2 <= $i && $i <= 3)

					<div class="solutions-all5-1-div" style="background-image: url({{$work[$i]->img_main}}); @if ($i == 3)
						margin-right: 0;
					@endif">
						<div class="solutions-img-pa">
							<div class="blur-sk-22"></div>
							<img src="{{$work[$i]->sym}}">
							<div class="solutions-h6-pa">
								<h6>{{$work[$i]->title}}</h6>
								<p>{{$work[$i]->des}}</p>
								<a href="{{ action('IndexController@branches', ['id' => $work[$i]->id]) }}">Подробнее</a>
							</div>
						</div>
					</div>
					@endif
					@endfor
				</div>
			</div>
			<div class="solutions-3div-bot">
				@for ($i = 0; $i < count($work); $i++)
				@if ($i == 4)
				<div class="solutions-left-1divtop " style="background-image: url({{$work[$i]->img_main}}); margin-top: 0; margin-bottom: 0">
					<div class="solutions-img-pa">
						<div class="blur-sk-22"></div>
						<img src="{{$work[$i]->sym}}">
						<div class="solutions-h6-pa">
							<h6>{{$work[$i]->title}}</h6>
							<p>{{$work[$i]->des}}</p>
							<a href="{{ action('IndexController@branches', ['id' => $work[$i]->id]) }}">Подробнее</a>
						</div>
					</div>
				</div>
				@endif
				@endfor
			</div>
			
			@break
			@case(6)
			<div class="solutions-div1-all5">
				<div class="solutions-all5-left">
					<div class="solutions-left-2divtop">
						@for ($i = 0; $i < count($work); $i++)
						@if ($i <= 1)
						<div class="solutions-2divtop-1-div" style="background-image: url({{$work[$i]->img_main}}); @if ($i==1)
							margin-right: 0;
							margin-left: 7.5px;
						@endif">
							<div class="solutions-img-pa">
								<div class="blur-sk-22"></div>
								<img src="{{$work[$i]->sym}}">
								<div class="solutions-h6-pa">
									<h6>{{$work[$i]->title}}</h6>
									<p>{{$work[$i]->des}}</p>
									<a href="{{ action('IndexController@branches', ['id' => $work[$i]->id]) }}">Подробнее</a>
								</div>
							</div>
						</div>
						@endif
						@endfor
					</div>

					@for ($i = 0; $i < count($work); $i++)
					@if ($i == 2)
					<div class="solutions-left-1divtop " style="background-image: url({{$work[$i]->img_main}});">
						<div class="solutions-img-pa">
							<div class="blur-sk-22"></div>
							<img src="{{$work[$i]->sym}}">
							<div class="solutions-h6-pa">
								<h6>{{$work[$i]->title}}</h6>
								<p>{{$work[$i]->des}}</p>
								<a href="{{ action('IndexController@branches', ['id' => $work[$i]->id]) }}">Подробнее</a>
							</div>
						</div>
					</div>
					@endif
					@endfor
				</div>
				<div class="solutions-all5-right">
					@for ($i = 0; $i < count($work); $i++)
					@if (3 <= $i && $i <= 4)

					<div class="solutions-all5-1-div" style="background-image: url({{$work[$i]->img_main}}); @if ($i == 4)
						margin-right: 0;
					@endif">
						<div class="solutions-img-pa">
							<div class="blur-sk-22"></div>
							<img src="{{$work[$i]->sym}}">
							<div class="solutions-h6-pa">
								<h6>{{$work[$i]->title}}</h6>
								<p>{{$work[$i]->des}}</p>
								<a href="{{ action('IndexController@branches', ['id' => $work[$i]->id]) }}">Подробнее</a>
							</div>
						</div>
					</div>
					@endif
					@endfor
				</div>
			</div>
			<div class="solutions-3div-bot">
				@for ($i = 0; $i < count($work); $i++)
				@if ($i == 5)
				<div class="solutions-left-1divtop " style="background-image: url({{$work[$i]->img_main}}); margin-top: 0; margin-bottom: 0">
					<div class="solutions-img-pa">
						<div class="blur-sk-22"></div>
						<img src="{{$work[$i]->sym}}">
						<div class="solutions-h6-pa">
							<h6>{{$work[$i]->title}}</h6>
							<p>{{$work[$i]->des}}</p>
							<a href="{{ action('IndexController@branches', ['id' => $work[$i]->id]) }}">Подробнее</a>
						</div>
					</div>
				</div>
				@endif
				@endfor
			</div>
			@break
			@case(7)
			<div class="solutions-div1-all5">
				<div class="solutions-all5-left">
					<div class="solutions-left-2divtop">
						@for ($i = 0; $i < count($work); $i++)
						@if ($i <= 1)
						<div class="solutions-2divtop-1-div" style="background-image: url({{$work[$i]->img_main}}); @if ($i == 1)
							margin-left: 7.5px;
							margin-right: 0;
						@endif">
							<div class="solutions-img-pa">
								<div class="blur-sk-22"></div>
								<img src="{{$work[$i]->sym}}">
								<div class="solutions-h6-pa">
									<h6>{{$work[$i]->title}}</h6>
									<p>{{$work[$i]->des}}</p>
									<a href="{{ action('IndexController@branches', ['id' => $work[$i]->id]) }}">Подробнее</a>
								</div>
							</div>
						</div>
						@endif
						@endfor
					</div>

					@for ($i = 0; $i < count($work); $i++)
					@if ($i == 2)
					<div class="solutions-left-1divtop " style="background-image: url({{$work[$i]->img_main}});">
						<div class="solutions-img-pa">
							<div class="blur-sk-22"></div>
							<img src="{{$work[$i]->sym}}">
							<div class="solutions-h6-pa">
								<h6>{{$work[$i]->title}}</h6>
								<p>{{$work[$i]->des}}</p>
								<a href="{{ action('IndexController@branches', ['id' => $work[$i]->id]) }}">Подробнее</a>
							</div>
						</div>
					</div>
					@endif
					@endfor
				</div>
				<div class="solutions-all5-right">
					@for ($i = 0; $i < count($work); $i++)
					@if (3 <= $i && $i <= 4)

					<div class="solutions-all5-1-div" style="background-image: url({{$work[$i]->img_main}}); @if ($i == 4)
						margin-right: 0;
					@endif">
						<div class="solutions-img-pa">
							<div class="blur-sk-22"></div>
							<img src="{{$work[$i]->sym}}">
							<div class="solutions-h6-pa">
								<h6>{{$work[$i]->title}}</h6>
								<p>{{$work[$i]->des}}</p>
								<a href="{{ action('IndexController@branches', ['id' => $work[$i]->id]) }}">Подробнее</a>
							</div>
						</div>
					</div>
					@endif
					@endfor
				</div>
			</div>
			<div class="solutions-3div-bot">
				@for ($i = 0; $i < count($work); $i++)
				@if ($i >= 5 && $i <= 6)
				<div class="solutions3-bot-rig" style="background-image: url({{$work[$i]->img_main}}); @if ($i ==5)
					margin-right: 7.5px;
					margin-bottom: 0;
					margin-top: 0;
				@endif @if ($i == 6)
					margin-left: 7.5px;
					margin-bottom: 0;
					margin-top: 0;
				@endif">
					<div class="solutions-img-pa">
						<div class="blur-sk-22"></div>
						<img src="{{$work[$i]->sym}}">
						<div class="solutions-h6-pa">
							<h6>{{$work[$i]->title}}</h6>
							<p>{{$work[$i]->des}}</p>
							<a href="{{ action('IndexController@branches', ['id' => $work[$i]->id]) }}">Подробнее</a>
						</div>
					</div>
				</div>
				@endif
				@endfor
			</div>
			@break
			@case(8)
			<div class="solutions-div1-all5">
				<div class="solutions-all5-left">
					<div class="solutions-left-2divtop">
						@for ($i = 0; $i < count($work); $i++)
						@if ($i <= 1)
						<div class="solutions-2divtop-1-div" style="background-image: url({{$work[$i]->img_main}}); @if ($i == 1)
							margin-left: 7.5px;
							margin-right: 0;
						@endif">
							<div class="solutions-img-pa">
								<div class="blur-sk-22"></div>
								<img src="{{$work[$i]->sym}}">
								<div class="solutions-h6-pa">
									<h6>{{$work[$i]->title}}</h6>
									<p>{{$work[$i]->des}}</p>
									<a href="{{ action('IndexController@branches', ['id' => $work[$i]->id]) }}">Подробнее</a>
								</div>
							</div>
						</div>
						@endif
						@endfor
					</div>

					@for ($i = 0; $i < count($work); $i++)
					@if ($i == 2)
					<div class="solutions-left-1divtop " style="background-image: url({{$work[$i]->img_main}});">
						<div class="solutions-img-pa">
							<div class="blur-sk-22"></div>
							<img src="{{$work[$i]->sym}}">
							<div class="solutions-h6-pa">
								<h6>{{$work[$i]->title}}</h6>
								<p>{{$work[$i]->des}}</p>
								<a href="{{ action('IndexController@branches', ['id' => $work[$i]->id]) }}">Подробнее</a>
							</div>
						</div>
					</div>
					@endif
					@endfor
				</div>
				<div class="solutions-all5-right">
					@for ($i = 0; $i < count($work); $i++)
					@if (3 <= $i && $i <= 4)

					<div class="solutions-all5-1-div" style="background-image: url({{$work[$i]->img_main}}); @if ($i == 4)
						margin-right: 0;
					@endif">
						<div class="solutions-img-pa">
							<div class="blur-sk-22"></div>
							<img src="{{$work[$i]->sym}}">
							<div class="solutions-h6-pa">
								<h6>{{$work[$i]->title}}</h6>
								<p>{{$work[$i]->des}}</p>
								<a href="{{ action('IndexController@branches', ['id' => $work[$i]->id]) }}">Подробнее</a>
							</div>
						</div>
					</div>
					@endif
					@endfor
				</div>
			</div>
			<div class="solutions-3div-bot">
				<div class="solutions-bot-2divs">
					@for ($i = 0; $i < count($work); $i++)
					@if ($i >= 5 && $i <= 6)
					<div class="solutions-left-1divtop " style="background-image: url({{$work[$i]->img_main}}); @if ($i == 5)
						margin-bottom: 0;
						margin-top: 0;
						margin-right: 7.5px;
					@endif @if ($i == 6)
						margin-bottom: 0;
						margin-top: 0;
						margin-left: 7.5px;
					@endif">
						<div class="solutions-img-pa">
							<div class="blur-sk-22"></div>
							<img src="{{$work[$i]->sym}}">
							<div class="solutions-h6-pa">
								<h6>{{$work[$i]->title}}</h6>
								<p>{{$work[$i]->des}}</p>
								<a href="{{ action('IndexController@branches', ['id' => $work[$i]->id]) }}">Подробнее</a>
							</div>
						</div>
					</div>
					@endif
					@endfor
				</div>
				@for ($i = 0; $i < count($work); $i++)
				@if ($i == 7)
				<div class="solutions3-bot-rig" style="background-image: url({{$work[$i]->img_main}});">
					<div class="solutions-img-pa">
						<div class="blur-sk-22"></div>
						<img src="{{$work[$i]->sym}}">
						<div class="solutions-h6-pa">
							<h6>{{$work[$i]->title}}</h6>
							<p>{{$work[$i]->des}}</p>
							<a href="{{ action('IndexController@branches', ['id' => $work[$i]->id]) }}">Подробнее</a>
						</div>
					</div>
				</div>
				@endif
				@endfor
			</div>
			@break
			@default
			Default case...
			@endswitch


		</div>
	</section>




	<!-- section advantages -->
	<?php
	$adva = \App\Model\Advan::find(1);
	?>
	<section class="advantages">
		<div class="container">

			<div class="advantages-h1-p emn3">
				<h6>MIRONKUL GROUP</h6>
				<h1>Наши преимущества</h1>
				{!! $adva->text !!}
			</div>

			<div class="advantages-4div">
				<div class="advantages-4div-2">

					<div class="advantages-1-div">
						<img src="{{$adva->icon}}">
						<h5>{{$adva->title}}</h5>
						<p>{{$adva->des}}</p>
					</div>
					<div class="advantages-1-div">
						<img src="{{$adva->icon1}}">
						<h5>{{$adva->title1}}</h5>
						<p>{{$adva->des1}}</p>
					</div>      

				</div>

				<div class="advantages-4div-2">

					<div class="advantages-1-div">
						<img src="{{$adva->icon2}}">
						<h5>{{$adva->title2}}</h5>
						<p>{{$adva->des2}}</p>
					</div>
					<div class="advantages-1-div advantages-1-div-last ">
						<img src="{{$adva->icon3}}">
						<h5>{{$adva->title3}}</h5>
						<p>{{$adva->des3}}</p>
					</div>      

				</div>      

			</div>
		</div>
	</section>

	@include('site.parts.partners')
	@endsection
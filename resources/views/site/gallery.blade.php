@extends('layouts.frontOther')
@section('title', 'Галерея')
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
			<div class="my_col-xs-12 tabs_about">
				<!-- Tab panes -->
				<div class="tab-content">
					<!-- Галерея content -->
					<div class="tab-pane active" id="galaryallid">
						<div class="gal_tab_contents_all">
							<h1>Галерея</h1>
							<div class="career-reddiv1"></div>
							<p class="career-reddiv1-1_p"></p>
							<div class="galer_albom_tab">
								<h4>Альбомы</h4>

								<div class="albom-3div_in1"> 
									@foreach ($alb as $key => $element)
									<a href="{{ action('IndexController@photos', ['id' => $element->id]) }}">
										<div class="albom_tab_divbac" style="background-image: url({{$element->img}});">
											<div class="albom_tab_divbac-p">
												<h6>{{$element->title}}</h6>
												<p> фото</p>
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
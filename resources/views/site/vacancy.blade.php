@extends('layouts.frontOther')
@section('title', 'Вакансии')
@section('content')
<section  class="solutions solutions-background">

	@include('site.parts.callback')

</section>

<!-- main section begin -->
<section class="topccc">
	<div class="topccc-col-pa">
		<div class="container">
			<div class="topccc-pa">
				<p><a href="{{ action('IndexController@index') }}">Главная</a> <span> / </span>  Вакансии</p>
			</div>
		</div>
	</div>
	<div class="topccc-backimg" style="background-image: url({{ $text->img }});"></div>
</section>
<!-- acardion section  career-->
<section class="career">
	<div class="container">
		<div class="career-h5-p">
			<h1>Карьера в компании</h1>
			<div class="career-reddiv1"></div>
			<p>{!! $text->text !!}</p>
		</div>

		<div class="career-myacardi">
			<div class="myacardi-p-btn">
				<p>Открытые вакансии</p>
				<button class="open_all_acc"><span><img  src="{{ asset('site/img/lasticx.png') }}"> </span> Развернуть все</button>
			</div>
		</div>

		@foreach ($vac as $element)
		<button class="accordionv1">{{ $element->title }}</button>
		<div class="panelv1">
			<div class="panel-od">
				{!! $element->text !!}
				<p>Образец резюме для заполнения - <a href="#">Скачать</a></p>
			</div>
		</div>
		@endforeach
		<!-- botton texts -->
		<div class="botacar-text">
			{!! $text->text1 !!}
			<p class="botacar-text-p3">Образец резюме для заполнения - <a href="#">Скачать</a></p>
		</div>
	</div>
</section>
@endsection
@extends('layouts.frontOther')
@section('title', 'Контакты')
@section('content')
<section  class="solutions solutions-background">


	<!-- call fixed div -->

	@include('site.parts.callback')

</section>




<!-- main section begin -->
<section class="topccc">
	<div class="topccc-col-pa">
		<div class="container">
			<div class="topccc-pa">
				<p><a href="{{ action('IndexController@index') }}">Главная</a> <span> / </span>  Контакты</p>
			</div>
		</div>
	</div>
	<div class="topccc-backimg" style="background-image: url({{ $con->img }});"></div>
</section>

<!-- there is in all -->
<div class="container">
	<div class="career-h5-p">
		<h1>Наши контакты</h1>
		<div class="career-reddiv1"></div>
		{!! $con->text !!}
	</div>
</div>

<!-- contants right and lefht -->
<section class="contants-all2">
	<div class="container">
		<div class="con-left-right">
			<div class="contants-leftp">
				<h5>Свяжитесь с нами</h5>
				<form action="{{ action('IndexController@send') }}" method="post" enctype="multipart/form-data">
					{{ csrf_field() }}
					<div class="contants-leftp_p1">
						<p>Тема обращения  <span><i class="fa fa-star" aria-hidden="true"></i></span></p>
					</div>
					<div class="contants-leftp-select">
						<select name="topic">
							<option disabled selected val="">Выберите тему...</option>
							<option value="saab">tema 1</option>
							<option value="mercedes">tema 2</option>
							<option value="audi">tema 3</option>
						</select>
						<span><i class="fa fa-sort-desc" aria-hidden="true"></i></span>
					</div>
					<div class="contants-left-nameall">

						<div class="contants-left-name1">
							<div class="contants-left-name1im" >
								<p>Имя  <span><i class="fa fa-star" aria-hidden="true"></i></span></p>
								<input type="text" name="name">
							</div>
							<div class="contants-left-name1im" >
								<p>Фамилия  <span><i class="fa fa-star" aria-hidden="true"></i></span></p>
								<input type="text" name="sname">
							</div>          
						</div>
						<div class="contants-left-name1">
							<div class="contants-left-name1im" >
								<p>Компания <span><i class="fa fa-star" aria-hidden="true"></i></span></p>
								<input type="text" name="comp">
							</div>
							<div class="contants-left-name1im" >
								<p>Телефон  <span><i class="fa fa-star" aria-hidden="true"></i></span></p>
								<input type="text" name="tel">
							</div>          
						</div>         

					</div>
					<p>Email  <span><i class="fa fa-star" aria-hidden="true"></i></span></p>
					<input type="text" name="email">

					<p>Прикрепить файл <span><i class="fa fa-star" aria-hidden="true"></i></span></p>
					<div class="down-conform">
						<input type="text" name="" placeholder="Выберите файл...">
						<input type="file" id="fileforbot" name="file">
						<label for="fileforbot">Загрузить</label>
					</div>

					<p>Ваше сообщения  <span><i class="fa fa-star" aria-hidden="true"></i></span></p>
					<textarea name="mes"></textarea>

					<div class="textarea-butn">
						<button type="submit">Отправить сообщение</button>
						<p><span><i class="fa fa-star" aria-hidden="true"></i></span> Поля обязательные для заполнения</p>
					</div>
				</form>
			</div>
			<!-- right -->
			<div class="contants-rightp_all">
				@foreach ($off as $element)
				{{-- expr --}}
				
				<div class="contants-rightp">
					<div class="contants-rightp-1div">
						<h6>{{ $element->title }}</h6>
						<div class="contants-rightp-1div-1pq">
							<p>{{ $element->ad }}</p>
						</div>
						<div class="contants-rightp-1div-2pq">
							<p>{{ $element->pos }}
								<b>{{ $element->person }}</b></p>
							</div>
							<div class="rightp-1div-teln">
								<p>Моб: {{ $element->mob }}</p>
								<p>Тел: +{{ $element->tel }} </p>
								<p>E-mail: <span>{{ $element->email }}</span> </p>
							</div>
							<a href="{{ $element->map }}"><h5><span><img src="{{ asset('site/img/derect.png') }}"></span> Показать на Google Map</h5></a>
						</div>
					</div>
					@endforeach

					

				</div>
			</div>
		</section>
		@endsection
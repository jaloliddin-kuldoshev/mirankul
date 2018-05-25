@extends('layouts.frontOther')
@section('title', 'Корзина')
@section('content')
@include('site.parts.callback')	
<section class="topccc">
	<div class="topccc-col-pa">
		<div class="container">
			<div class="topccc-pa">
				<p><a href="{{ action('IndexController@index') }}">Главная</a><span> / </span>  Корзина</p>
			</div>
		</div>
	</div>
	<div class="topccc-backimg" style="background-image: url({{$text->img}});"></div>
</section>
<!-- main section for bascet-card -->
<section class="bascet-card">
	<div class="container">
		<h1>Ваша корзина</h1>
		<div class="career-reddiv1"></div>
		<div class="bascet-card_all">
			<div class="bascet-card_left">
				{!!$text->text!!}
				@if (Session::has('cart'))
				@foreach ($products as  $product)

				
				<div class="bas_card_pl">
					<div class="bas_card_pl-1">
						@for ($i = 0; $i < 1; $i++)
						<div class="bas_card-1_bacimg" style="background-image: url({{ json_decode($product['item']['img'])[$i] }});"></div>
						@endfor
						<div class="bas_card_trs">
							<div class="mounted">
								<!-- Wall-mounted crane -->
								<h3>{{$product['item']['title']}}</h3>
								<div class="mounted_le_ri">
									<table>
										@foreach ($product['item']['pro'] as $element)
										<tr>
											<td>{{$element->title}}:</td>
											<td>{{$element->value}}</td>                          
										</tr>
										@endforeach                           
									</table>     
								</div>
							</div>              
						</div>
					</div>
					<div class="amount">
						<div class="prod_rew_amt_calc cl-b">
							<p>Количество:</p>
							<div class="prod_rew_amt_ctrl">
								<button   class="prod_rew_amt_ctrl_btn minus " data-id="{{$product['item']['id']}}" type="button">-</button>
								<input type="text" class="prod_rew_amt_ctrl_inp " id="cart" value="{{$product['qty']}}">
								<button  class="prod_rew_amt_ctrl_btn plus plus-cart" data-id="{{$product['item']['id']}}" type="button">+</button>                         
							</div>
						</div>
						<div class="dalite_amount">
							<p>Цена:</p>
							<h6>{{$product['item']['price']}} сум</h6>
							<button class="del-item" data-id="{{$product['item']['id']}}">Удалить</button>
						</div>
					</div>
				</div>
				@endforeach
				@else
				<div class="bas_card_pl">
					<h2>Вы не добавили не один продукт в корзину.</h2>
					
				</div>
				@endif
				


			</div>
			@if (Session::has('cart'))
			<div class="bascet-card_right">
				<div class="bascet_right_form">
					@if (5 <= count($products) && 20 >= count($products))
					<p>Товаров ({{count($products)}})<span>..........</span><b>{{$totalPrice}} сум</b></p>
					@else
					<p>Товарa ({{count($products)}})<span>..........</span><b>{{$totalPrice}} сум</b></p>
					@endif
					
					<button id="all-ininaa2">Оформить заявку</button>
				</div>
				<div class="bascet-card_right_lastp">
					<p>Внешний вид товара и цена могутотличаться от того, что на сайте</p>
				</div>
			</div>
			@else
			<div class="bascet-card_right">
				<div class="bascet_right_form">
					<p>Товаров (0)<span>..........</span><b>0 сум</b></p>
					<button id="all-ininaa2">Оформить заявку</button>
				</div>
				<div class="bascet-card_right_lastp">
					<p>Внешний вид товара и цена могутотличаться от того, что на сайте</p>
				</div>
			</div>
			@endif
		</div>
		<a class="bascet_abot" href="{{ action('IndexController@index') }}"><span><i class="fa fa-angle-double-left" aria-hidden="true"></i></span> Назад в каталог</a>
	</div>
</section>
@endsection
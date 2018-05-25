@extends('layouts.frontOther')
@section('title', 'Компания')
@section('content')
<section class="topccc-topmar2">
	<div class="topccc-col-pa">
		<div class="container">
			<div class="topccc-pa">
				<p><a href="#">Главная</a> <span> / </span> <a href="#"> Кабельные лотки</a> <span> / </span>  Продукция</p>
			</div>
		</div>
	</div>
	<div class="topccc-backimg" style="background-image: url(../../site/img/vtopimg.png);"></div>
</section>
<!-- download outputs -->
<section class="download_outputs">
	<div class="container">
		<div class="down_out_leftright">
			<div class="download_leftdiv">
				<a><span><i class="fa fa-angle-left" aria-hidden="true"></i></span> Назад в каталог</a>
				<h6>КОНТАКТНОЕ ЛИЦО</h6>
				<h3>{{$work->product->pos}} <b>{{$work->product->contact}}</b></h3>
				<p>Моб: {{$work->product->mob}}</p>
				<p>Тел: {{$work->product->tel}}</p>
				<p>E-mail: {{$work->product->email}}</p>
			</div>

			<div class="download_rightdiv">
				<h1>Продукт</h1>
				<div class="career-reddiv1"></div>
				<div class="download_5img">
					<div class="last_imgs_9"> 
						<div>
							@for ($i = 0; $i < 1; $i++)
							<a href="{{ json_decode($work->img)[$i] }}" id="social_img_1" data-lightbox="mygallery">
								<div style="background-image: url({{ json_decode($work->img)[$i] }});" class="containerimg-last download_imgfirst">
									<div class="download_hover_i">
									</div>
								</div>
							</a>
							@endfor
						</div>

						<div class="download_4img-bot inner">
							@foreach (json_decode($work->img) as $key => $element)
							
							<a  href="{{$element}}">
								<div style="background-image: url({{$element}});" data-src="{{$element}}" class="containerimg-last {{ ($key == 0 ? 'activeimg_gal' : '') }} activeimg_gal">
								</div>
							</a>                     
							@endforeach

						</div>
					</div>

					<div class="mounted">
						<!-- Wall-mounted crane -->
						<h3>{{$work->title}}</h3>
						<div class="mounted_le_ri">
							<table>
								@foreach ($prop as $element)
								<tr>
									<td>{{$element->title}}:</td>
									<td>{{$element->value}}</td> 
								</tr>
								@endforeach								                          
							</table> 
							<div class="tab_a_les">
								<div class="tab_a_lesdi1">
									<p>Количество:</p>
									<div class="amount tab_a_lesdiv">
										<div class="prod_rew_amt_calc cl-b">
											<div class="prod_rew_amt_ctrl">
												<button class="prod_rew_amt_ctrl_btn minus" type="button">-</button>
												<input type="text" class="prod_rew_amt_ctrl_inp " id="cart" value="1">
												<button class="prod_rew_amt_ctrl_btn plus" type="button">+</button>
											</div>
										</div>
									</div>
								</div>
								<div class="tab_a_lesdi2">
									<p>Цена:</p>
									<h6>{{$work->price}} сум.</h6>
								</div>
							</div>    
						</div>
						<div class="tablink-bot-s">
							<a href="javascript:void(0)" id="hellooo" class="add-cart" data-id="{{$work->id}}">В корзину</a>
							<p>Внешний вид товара может отличаться от изображенного</p>
						</div>
					</div>
				</div>
				<!-- tabs for information -->
				<div class="right_tabs_down">

					<ul class="nav nav-tabs mynav-tabs2">
						<li class="active"><a data-toggle="tab" href="#my2home">ИНСТРУКЦИЯ</a></li>
						<li><a data-toggle="tab" href="#my2menu1">ДОПОЛНИТЕЛЬНАЯ ИНФОРМАЦИЯ</a></li>
					</ul>

					<div class="tab-content mytab-content2">
						<div id="my2home" class="tab-pane fade in active">
							{!!$work->text!!}
						</div>
						<div id="my2menu1" class="tab-pane fade">
							{!!$work->text1!!}
						</div>
					</div>
					<a href="{{ action('IndexController@index') }}"><span><i class="fa fa-angle-double-left" aria-hidden="true"></i> </span> Вернуться на главную</a>
				</div>

			</div>
		</div>
	</div>
</section>




<section class="solutions solutions-background2">

	<div class="affix-ln"  data-spy="affix" data-offset-top="100">
		<ul>
			<li>
				<button>
					<div class="ln-fixdiv_right"><img src="{{asset('site/img/call1.png')}}"><span>18</span></div>
				</button>
			</li>
			<li><a href="{{$work->product->ex}}"><img class="right-fix-imgte" src="{{asset('site/img/call2.png')}}"></a></li>
			<li>
				
				<a href="{{$work->product->file}}"><img src="{{asset('site/img/call3.png')}}"></a>

			</li>
		</ul>
	</div>
</section>
<!-- footer -->
@endsection
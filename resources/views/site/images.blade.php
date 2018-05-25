@extends('layouts.frontOther')
@section('title', 'Галерея')
@section('content')
<section class="topccc-topmar2">
	<div class="topccc-col-pa">
		<div class="container">
			<div class="topccc-pa">
				<p><a href="{{ action('IndexController@index') }}">Главная</a> <span> / </span> <a href="{{ action('IndexController@company') }}/?type=1">Галерея</a> <span> / </span>{{ $photos->title }}</p>
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
							<h1>Альбом</h1>
							<div class="career-reddiv1"></div>
							<p class="career-reddiv1-1_p"></p>
<!--                 <div class="galer_albom_tab">
                  <h4>Альбомы</h4>

                  <div class="albom-3div_in1"> 
                   <a href="#">
                    <div class="albom_tab_divbac" style="background-image: url(img/mirl1bac.png);">
                      <div class="albom_tab_divbac-p">
                        <h6>Mirankul Быстровозводимые конструкции 2018</h6>
                        <p>168 фото</p>
                      </div>
                    </div>
                   </a>
                   <a href="#">
                    <div class="albom_tab_divbac" style="background-image: url(img/mirl1bac.png);">
                      <div class="albom_tab_divbac-p">
                        <h6>Mirankul Быстровозводимые конструкции 2018</h6>
                        <p>168 фото</p>
                      </div>
                    </div>
                   </a>
                   <a href="#">
                    <div class="albom_tab_divbac" style="background-image: url(img/mirl1bac.png);">
                      <div class="albom_tab_divbac-p">
                        <h6>Mirankul Быстровозводимые конструкции 2018</h6>
                        <p>168 фото</p>
                      </div>
                    </div>
                   </a>                   
                  </div>

                </div>
              -->
              <!-- last images -->
              <div class="last_imgs_albom">
              	<h4 class="last_imgs-h4a">{{ $photos->title }}</h4>
              	<div class="last_imgs_9">

              		{{-- <div style="background-image: url(img/mirl2bac.png);" class="containerimg-last containerimg-last2">
              			<div class="galerin_back">
              				<a href="#"><span><i class="fa fa-angle-left" aria-hidden="true"></i></span>Назад в галерею</a>
              			</div>
              		</div> --}}
              		@foreach ($photo as $element)
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
            <button class="read_morebtn1_img">Больше фотографий <div><i class="fa fa-angle-down" aria-hidden="true"></i></div></button>
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
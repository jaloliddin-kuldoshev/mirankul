
<!-- section cooperation -->
<section class="cooperation" style="background-image: url(../../site/img/blue1.png);">
  <div class="cooperation-back-col"></div>
  <div class="container">
    <div class="cooperation-h1-btn">
      <h6>MIRONKUL GROUP</h6>
      <h1>Мы открыты к сотрудничеству </h1>
      <button id="allinone-buts">Связаться с нами</button> 
    </div>
  </div>
</section>


<!-- slick 8 firms -->
<section class="firms">
  <div class="container">
    <div class="all-prom-alldiv">
      @foreach (\App\Model\Partners::all() as $element)
      <div class="all-prom-imgdiv"><img src="{{ $element->img }}"></div>
      @endforeach
    </div>
  </div>
</section>
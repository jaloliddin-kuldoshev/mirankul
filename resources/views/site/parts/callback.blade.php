<?php
$call = \App\Model\Contacts::find(1);
 ?>
<div class="affix-ln"  data-spy="affix" data-offset-top="900">
	<ul>
		<li>
			<button id="allinone">
				<div class="ln-fixdiv_right"><img src="{{ asset('site/img/call1.png') }}"><span>18</span></div>
			</button>
		</li>
		<li><a href="{{ $call->telegram }}"><img class="right-fix-imgte" src="{{ asset('site/img/call2.png') }}"></a></li>
		<li>

			<a href="{{ $call->file }}"><img src="{{ asset('site/img/call3.png') }}"></a>
		</li>
	</ul>
</div>
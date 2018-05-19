 @extends('adminlte::page')
 @section('title', 'Mirankul')
 @section('content_header')
 <h1>
 	Корзина
 </h1>
 @stop
 @section('content')
 <div class="box">
 	<div class="box-header with-border">
 		<h3 class="box-title"></h3>
 		<div class="box-tools pull-right">
 			<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
 			title="Collapse">
 			<i class="fa fa-minus"></i></button>
 			<button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
 				<i class="fa fa-times"></i></button>
 			</div>
 		</div>
 		<div class="box-body">
 			<form role="form" method="post" action="{{ action('Admin\AdminController@cart') }}"  enctype="multipart/form-data">
 				{{ csrf_field() }}
 				<div class="box-body">
 					<div class="form-group">
 						<label for="exampleInputEmail1">Заголовок</label>
 						<textarea class="form-control ckeditor" name="text" rows="3" id="">{{ $news->text }}</textarea>
 					</div>
 					<div class="form-group">
 						<label for="exampleInputEmail1">Баннер</label>
 						<input type="file" class="dropify" name="img" data-default-file="{{ asset($news->img) }}">
 					</div>
 					<input type="hidden" name="id" value="{{ $news->id }}">
 				</div>
 				<!-- /.box-body -->

 				<div class="box-footer">
 					<button type="submit" class="btn btn-primary">Сохранить</button>
 				</div>
 			</form>
 		</div>
 		<!-- /.box-body -->
 		<div class="box-footer">
 			Footer
 		</div>
 		<!-- /.box-footer-->
 	</div>
 	@stop
 @extends('adminlte::page')
 @section('title', 'Mirankul')
 @section('content_header')
 <h1>
 	Преимущество
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
 			<form role="form" method="post" action="{{ action('Admin\AdminController@ad') }}"  enctype="multipart/form-data">
 				{{ csrf_field() }}
 				<div class="box-body">

 					<div class="form-group">
 						<label for="exampleInputEmail1">Заголовок</label>
 						<textarea class="form-control ckeditor" name="text" rows="3" id="">{{ $news->text }}</textarea>
 					</div>

 					<fieldset>
 						<legend>Первое преимущество</legend>
 						<div class="form-group">
 							<label for="exampleInputEmail1">Название</label>
 							<input type="text" class="form-control" name="title" value="{{ $news->title }}">
 						</div>
 						<div class="form-group">
 							<label for="exampleInputEmail1">Описание</label>
 							<input type="text" class="form-control" name="des" value="{{ $news->des }}">
 						</div>
 						<div class="form-group">
 							<label for="exampleInputEmail1">Иконка</label>
 							<input type="file" class="dropify" name="icon" data-default-file="{{ asset($news->icon) }}">
 						</div>
 					</fieldset>
 					<fieldset>
 						<legend>Второе преимущество</legend>
 						<div class="form-group">
 							<label for="exampleInputEmail1">Название</label>
 							<input type="text" class="form-control" name="title1" value="{{ $news->title1 }}">
 						</div>
 						<div class="form-group">
 							<label for="exampleInputEmail1">Описание</label>
 							<input type="text" class="form-control" name="des1" value="{{ $news->des1 }}">
 						</div>
 						<div class="form-group">
 							<label for="exampleInputEmail1">Иконка</label>
 							<input type="file" class="dropify" name="icon1" data-default-file="{{ asset($news->icon1) }}">
 						</div>
 					</fieldset>
 					<fieldset>
 						<legend>Третье преимущество</legend>
 						<div class="form-group">
 							<label for="exampleInputEmail1">Название</label>
 							<input type="text" class="form-control" name="title2" value="{{ $news->title2 }}">
 						</div>
 						<div class="form-group">
 							<label for="exampleInputEmail1">Описание</label>
 							<input type="text" class="form-control" name="des2" value="{{ $news->des2 }}">
 						</div>
 						<div class="form-group">
 							<label for="exampleInputEmail1">Иконка</label>
 							<input type="file" class="dropify" name="icon2" data-default-file="{{ asset($news->icon2) }}">
 						</div>
 					</fieldset>
 					<fieldset>
 						<legend>Четвертое преимущество</legend>
 						<div class="form-group">
 							<label for="exampleInputEmail1">Название</label>
 							<input type="text" class="form-control" name="title3" value="{{ $news->title3 }}">
 						</div>
 						<div class="form-group">
 							<label for="exampleInputEmail1">Описание</label>
 							<input type="text" class="form-control" name="des3" value="{{ $news->des3 }}">
 						</div>
 						<div class="form-group">
 							<label for="exampleInputEmail1">Иконка</label>
 							<input type="file" class="dropify" name="icon3" data-default-file="{{ asset($news->icon3) }}">
 						</div>
 						<input type="hidden" name="id" value="{{ $news->id }}">
 					</fieldset>
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
@extends('adminlte::page')
@section('title', 'Mirankul')
@section('content_header')
<h1>
	Добавить
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
			<form role="form" method="post" action="{{ route('works.store') }}"  enctype="multipart/form-data">
				{{ csrf_field() }}
				<div class="box-body">
					<fieldset class="form-group">
						<legend >Информация про направления</legend>
						<div class="form-group">
							<label for="exampleInputEmail1">Название</label>
							<input type="text" class="form-control" name="title" value="">
							@if($errors->has('title'))

							<small class="text-danger">{{ $errors->first('title') }}</small>

							@endif
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Мотто</label>
							<input type="text" class="form-control" name="motto" value="">
							@if($errors->has('motto'))

							<small class="text-danger">{{ $errors->first('motto') }}</small>

							@endif
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Краткое описание</label>
							<input type="text" class="form-control" name="des" value="">
							@if($errors->has('des'))

							<small class="text-danger">{{ $errors->first('des') }}</small>

							@endif
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Иконка</label>
							<input type="file" class="dropify" name="icon" value="">
							@if($errors->has('icon'))

							<small class="text-danger">{{ $errors->first('icon') }}</small>

							@endif
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Баннер</label>
							<input type="file" class="dropify" name="img" value="">
							@if($errors->has('img'))

							<small class="text-danger">{{ $errors->first('img') }}</small>

							@endif
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Картинка на главной странице</label>
							<input type="file" class="dropify" name="img_main" value="">
							@if($errors->has('img_main'))

							<small class="text-danger">{{ $errors->first('img_main') }}</small>

							@endif
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Иконка символ</label>
							<input type="file" class="dropify" name="sym" value="">
						</div>
						@if($errors->has('sym'))

							<small class="text-danger">{{ $errors->first('sym') }}</small>

							@endif
						<div class="form-group">
							<label for="exampleInputEmail1">Описание</label>
							<textarea class="form-control ckeditor" name="text" rows="3" id=""></textarea>
							@if($errors->has('text'))

							<small class="text-danger">{{ $errors->first('text') }}</small>

							@endif
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Символ текст</label>
							<input type="text" class="form-control" name="tit" value="">
							@if($errors->has('tit'))

							<small class="text-danger">{{ $errors->first('tit') }}</small>

							@endif
						</div>
					</fieldset>
					<fieldset>
						<legend >Ответственный человек</legend>
						<div class="form-group">
							<label for="exampleInputEmail1">Должность</label>
							<input type="text" class="form-control" name="pos" value="">
							@if($errors->has('pos'))

							<small class="text-danger">{{ $errors->first('pos') }}</small>

							@endif
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Ф.И.О</label>
							<input type="text" class="form-control" name="contact" value="">
							@if($errors->has('contact'))

							<small class="text-danger">{{ $errors->first('contact') }}</small>

							@endif
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Мобильный телефон</label>
							<input type="text" class="form-control" name="mob" value="">
							@if($errors->has('mob'))

							<small class="text-danger">{{ $errors->first('mob') }}</small>

							@endif
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Tелефон</label>
							<input type="tel" class="form-control" name="tel" value="">
							@if($errors->has('tel'))

							<small class="text-danger">{{ $errors->first('tel') }}</small>

							@endif
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Телеграм username</label>
							<input type="text" class="form-control" name="ex" value="">
							@if($errors->has('ex'))

							<small class="text-danger">{{ $errors->first('ex') }}</small>

							@endif
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Email</label>
							<input type="email" class="form-control" name="email" value="">
							@if($errors->has('email'))

							<small class="text-danger">{{ $errors->first('email') }}</small>

							@endif
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Файл</label>
							<input type="file" class="dropify" name="file" value="">
							@if($errors->has('file'))

							<small class="text-danger">{{ $errors->first('file') }}</small>

							@endif
						</div>
					</fieldset>
					<div class="form-group">
					    <label>Размер блока на главной странице</label>
					    <select class="form-control"  name="size">
					        <option value="1" selected="selected">Маленький блок</option>
					        <option value="2">2 в 1 горизонтальный блок</option>
					        <option value="3">2 в 1 вертикальный блок</option>
					    </select>
					</div>
					<div class="form-group">
					    <label>Показать на главной странице</label>
					    <select class="form-control"  name="status">
					        <option value="1" selected="selected">Отображается</option>
					        <option value="0">Скрыт</option>
					    </select>
					</div>

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
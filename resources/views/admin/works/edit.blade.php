@extends('adminlte::page')
@section('title', 'Mirankul')
@section('content_header')
<h1>
	Изменить
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
			<form role="form" method="post" action="{{ route('works.update', ['id' => $news->id]) }}"  enctype="multipart/form-data">

				{{ csrf_field() }}
				{{ method_field('put') }}

				<div class="box-body">
					<fieldset class="form-group">
						<legend >Информация о направления</legend>
						<div class="form-group">
							<label for="exampleInputEmail1">Название направления</label>
							<input type="text" class="form-control" name="title" value="{{ $news->title }}">
							@if($errors->has('title'))

							<small class="text-danger">{{ $errors->first('title') }}</small>

							@endif
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Заголовок баннера</label>
							<input type="text" class="form-control" name="motto" value="{{ $news->motto }}">
							@if($errors->has('motto'))

							<small class="text-danger">{{ $errors->first('motto') }}</small>

							@endif
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Краткое описание</label>
							<input type="text" class="form-control" name="des" value="{{ $news->des }}">
							@if($errors->has('des'))

							<small class="text-danger">{{ $errors->first('des') }}</small>

							@endif
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Иконка направления</label>
							<input type="file" class="dropify" name="icon" data-default-file="{{ asset($news->icon) }}">
							@if($errors->has('icon'))

							<small class="text-danger">{{ $errors->first('icon') }}</small>

							@endif
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Баннер</label>
							<input type="file" class="dropify" name="img" data-default-file="{{ asset($news->img) }}">
							@if($errors->has('img'))

							<small class="text-danger">{{ $errors->first('img') }}</small>

							@endif
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Картинка на главной странице</label>
							<input type="file" class="dropify" name="img_main" data-default-file="{{ asset($news->img_main) }}">
							@if($errors->has('img_main'))

							<small class="text-danger">{{ $errors->first('img_main') }}</small>

							@endif
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Логотип напрвления</label>
							<input type="file" class="dropify" name="sym" data-default-file="{{ asset($news->sym) }}">
						</div>
						@if($errors->has('sym'))

						<small class="text-danger">{{ $errors->first('sym') }}</small>

						@endif
						<div class="form-group">
							<label for="exampleInputEmail1">Описание направления</label>
							<textarea class="form-control ckeditor" name="text" rows="3" id="">{{ $news->text }}</textarea>
							@if($errors->has('text'))

							<small class="text-danger">{{ $errors->first('text') }}</small>

							@endif
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Название компании</label>
							<input type="text" class="form-control" name="tit" value="{{ $news->tit }}">
							@if($errors->has('tit'))

							<small class="text-danger">{{ $errors->first('tit') }}</small>

							@endif
						</div>
					</fieldset>
					<fieldset>
						<legend >Ответственный человек</legend>
						<div class="form-group">
							<label for="exampleInputEmail1">Должность</label>
							<input type="text" class="form-control" name="pos" value="{{ $news->pos }}">
							@if($errors->has('pos'))

							<small class="text-danger">{{ $errors->first('pos') }}</small>

							@endif
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Ф.И.О</label>
							<input type="text" class="form-control" name="contact" value="{{ $news->contact }}">
							@if($errors->has('contact'))

							<small class="text-danger">{{ $errors->first('contact') }}</small>

							@endif
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Мобильный телефон</label>
							<input type="text" class="form-control" name="mob" value="{{ $news->mob }}">
							@if($errors->has('mob'))

							<small class="text-danger">{{ $errors->first('mob') }}</small>

							@endif
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Tелефон</label>
							<input type="tel" class="form-control" name="tel" value="{{ $news->tel }}">
							@if($errors->has('tel'))

							<small class="text-danger">{{ $errors->first('tel') }}</small>

							@endif
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Телеграм username</label>
							<input type="text" class="form-control" name="ex" value="{{ $news->ex }}">
							@if($errors->has('ex'))

							<small class="text-danger">{{ $errors->first('ex') }}</small>

							@endif
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Email</label>
							<input type="email" class="form-control" name="email" value="{{ $news->email }}">
							@if($errors->has('email'))

							<small class="text-danger">{{ $errors->first('email') }}</small>

							@endif
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Файл</label>
							<input type="file" class="dropify" name="file"  data-default-file="{{ asset($news->file) }}">
							@if($errors->has('file'))

							<small class="text-danger">{{ $errors->first('file') }}</small>

							@endif
						</div>
					</fieldset>
					<div class="form-group">
						<label>Показать на главной странице</label>
						<select name="size" class="form-control">
							<option value="1" <?php if ($news['size'] == 1) echo ' selected="selected"'; ?>>Маленький блок</option>
							<option value="2" <?php if ($news['size'] == 2) echo ' selected="selected"'; ?>>2 в 1 горизонтальный блок</option>
							<option value="3" <?php if ($news['size'] == 3) echo ' selected="selected"'; ?>>2 в 1 вертикальный блок</option>
						</select>
					</div>
					<div class="form-group">
						<label>Показать на главной странице</label>
						<select name="status" class="form-control">
							<option value="1" <?php if ($news['status'] == 1) echo ' selected="selected"'; ?>>Отображается</option>
							<option value="0" <?php if ($news['status'] == 0) echo ' selected="selected"'; ?>>Скрыт</option>
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
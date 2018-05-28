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
			<form role="form" method="post" action="{{ route('benefits.update', ['id' => $new->id]) }}"  enctype="multipart/form-data">

				{{ csrf_field() }}
				{{ method_field('put') }}
				<div class="box-body">
					<div class="form-group">
						<label>Направление</label>
						<select class="form-control" name="works_id" required>
							<option value="" selected="selected" disabled>Выберите Направление</option>
							@foreach($news  as $cat)
							<option value="{{ $cat->id }}" @if($cat->id == $new->works_id) selected @endif>{{ $cat->title }}</option>
							@endforeach
						</select>
						@if($errors->has('works_id'))

						<small class="text-danger">{{ $errors->first('works_id') }}</small>

						@endif
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Описание</label>
						<input type="text" class="form-control" name="des" value="{{ $new->des }}">
						@if($errors->has('des'))

						<small class="text-danger">{{ $errors->first('des') }}</small>

						@endif
					</div>
					<fieldset>
						<legend>Первое преимущество</legend>
						<div class="form-group">
							<label for="exampleInputEmail1">Название</label>
							<input type="text" class="form-control" name="title" value="{{ $new->title }}">
							@if($errors->has('title'))

							<small class="text-danger">{{ $errors->first('title') }}</small>

							@endif
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Описание</label>
							<input type="text" class="form-control" name="text" value="{{ $new->text }}">
							@if($errors->has('text'))

							<small class="text-danger">{{ $errors->first('text') }}</small>

							@endif
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Иконка</label>
							<input type="file" class="dropify" name="img" data-default-file="{{ asset($new->img) }}">
							@if($errors->has('img'))

							<small class="text-danger">{{ $errors->first('img') }}</small>

							@endif
						</div>
					</fieldset>
					<fieldset>
						<legend>Второе преимущество</legend>
						<div class="form-group">
							<label for="exampleInputEmail1">Название</label>
							<input type="text" class="form-control" name="title1" value="{{ $new->title1 }}">
							@if($errors->has('title1'))

							<small class="text-danger">{{ $errors->first('title1') }}</small>

							@endif
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Описание</label>
							<input type="text" class="form-control" name="text1" value="{{ $new->text1 }}">
							@if($errors->has('text1'))

							<small class="text-danger">{{ $errors->first('text1') }}</small>

							@endif
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Иконка</label>
							<input type="file" class="dropify" name="img1" data-default-file="{{ asset($new->img1) }}">
							@if($errors->has('img1'))

							<small class="text-danger">{{ $errors->first('img1') }}</small>

							@endif
						</div>
					</fieldset>
					<fieldset>
						<legend>Третье преимущество</legend>
						<div class="form-group">
							<label for="exampleInputEmail1">Название</label>
							<input type="text" class="form-control" name="title2" value="{{ $new->title2 }}">
							@if($errors->has('title2'))

							<small class="text-danger">{{ $errors->first('title2') }}</small>

							@endif
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Описание</label>
							<input type="text" class="form-control" name="text2" value="{{ $new->text2 }}">
							@if($errors->has('text2'))

							<small class="text-danger">{{ $errors->first('text2') }}</small>

							@endif
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Иконка</label>
							<input type="file" class="dropify" name="img2" data-default-file="{{ asset($new->img2) }}">
							@if($errors->has('img2'))

							<small class="text-danger">{{ $errors->first('img2') }}</small>

							@endif
						</div>
					</fieldset>
					<fieldset>
						<legend>Четвертое преимущество</legend>
						<div class="form-group">
							<label for="exampleInputEmail1">Название</label>
							<input type="text" class="form-control" name="title3" value="{{ $new->title3 }}">
							@if($errors->has('title3'))

							<small class="text-danger">{{ $errors->first('title3') }}</small>

							@endif
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Описание</label>
							<input type="text" class="form-control" name="text3" value="{{ $new->text3 }}">
							@if($errors->has('text3'))

							<small class="text-danger">{{ $errors->first('text3') }}</small>

							@endif
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Иконка</label>
							<input type="file" class="dropify" name="img3" data-default-file="{{ asset($new->img3) }}">
							@if($errors->has('img3'))

							<small class="text-danger">{{ $errors->first('img3') }}</small>

							@endif
						</div>
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
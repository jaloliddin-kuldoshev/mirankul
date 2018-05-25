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
			<form role="form" method="post" action="{{ route('sliders.update', ['id' => $news->id]) }}"  enctype="multipart/form-data">

				{{ csrf_field() }}
				{{ method_field('put') }}

				<div class="box-body">
					<div class="form-group">
						<label for="exampleInputEmail1">Название</label>
						<input type="text" class="form-control" name="title" value="{{ $news->title }}">
						@if($errors->has('title'))

						<small class="text-danger">{{ $errors->first('title') }}</small>

						@endif
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Мотто</label>
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
						<label for="exampleInputEmail1">Иконка</label>
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
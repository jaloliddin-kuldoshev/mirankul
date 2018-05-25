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
			<form role="form" method="post" action="{{ route('photos.store') }}"  enctype="multipart/form-data">
				{{ csrf_field() }}
				<div class="box-body">
					<div class="form-group">
						<label>Направление</label>

						<select class="form-control alAjax" name="works_id" required>
							<option value="" selected="selected" disabled>Выберите Направление</option>
							@foreach($news  as $cat)
							<option data-id="{{ $cat->id }}" value="{{ $cat->id }}">{{ $cat->title }}</option>
							@endforeach
						</select>

						@if($errors->has('works_id'))

						<small class="text-danger">{{ $errors->first('works_id') }}</small>

						@endif
					</div>
					<div class="form-group">
						<label>Альбом</label>
						<select class="form-control catAjax" name="alboums_id" required>
							<option value="" selected="selected" disabled>Выберите Альбом</option>
						</select>
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Фотка</label>
						<input type="file" class="dropify" name="img[]" value="" multiple accept="image/*" required> 
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
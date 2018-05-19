@extends('adminlte::page')
@section('title', 'Mirankul')
@section('content_header')
<h1>
	Добавить
</h1>
<style type="text/css">
#loader-icon{
	position: fixed;
	top: 0;
	bottom: 0;
	right: 0;
	z-index: 1;
	left: 0;
	align-items: center;
	justify-content: center;
	background: #dcdcdc66;
}
</style>
@stop
@section('content')
<div class="box">
	<div class="box-header with-border">
		<h3 class="box-title"><a type="button" href="/admin-panel/videos" class="btn btn-block btn-success">Назад</a></h3>
		<div class="box-tools pull-right">
			<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
			title="Collapse">
			<i class="fa fa-minus"></i></button>
			<button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
				<i class="fa fa-times"></i></button>
			</div>
		</div>
		<div class="box-body">
			<form role="form" id="aboutVideo" method="post" action="{{ route('videos.store') }}"  enctype="multipart/form-data">
				{{ csrf_field() }}
				<div class="box-body">
					<div class="form-group">
						<label>Направление</label>
						<select class="form-control" name="works_id" required>
							<option value="" selected="selected" disabled>Выберите Направление</option>
							@foreach($news  as $cat)
							<option value="{{ $cat->id }}">{{ $cat->title }}</option>
							@endforeach
						</select>
						@if($errors->has('works_id'))

						<small class="text-danger">{{ $errors->first('works_id') }}</small>

						@endif
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Видео</label>
						<input type="file" class="dropify" name="path" value="" id="uploadFile" accept="video/*" required>
						@if($errors->has('path'))

						<small class="text-danger">{{ $errors->first('path') }}</small>

						@endif
					</div>
					<div class="progress">
						<div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" >
						</div>
					</div>
					<div id="targetLayer"></div>

				</div>
				<!-- /.box-body -->

				<div class="box-footer">
					<button type="submit" id="uploadSubmit" class="btn btn-primary">Сохранить</button>
				</div>
			</form>
			<div id="loader-icon" style="display: none;"><img src="{{ asset('site/loader.gif') }}"></div>
		</div>
		<!-- /.box-body -->
		<div class="box-footer">
			Footer
		</div>
		<!-- /.box-footer-->
	</div>
	@stop
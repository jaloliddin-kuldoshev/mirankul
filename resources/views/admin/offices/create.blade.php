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
			<form role="form" method="post" action="{{ route('offices.store') }}"  enctype="multipart/form-data">
				
				{{ csrf_field() }}
				<div class="box-body">

					<div class="form-group">
						<label for="exampleInputEmail1">Название</label>
						<input type="text" class="form-control" name="title" value="">
						@if($errors->has('title'))

						<small class="text-danger">{{ $errors->first('title') }}</small>

						@endif
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Адрес</label>
						<input type="text" class="form-control" name="ad" value="">
						@if($errors->has('ad'))

						<small class="text-danger">{{ $errors->first('ad') }}</small>

						@endif
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Должность</label>
						<input type="text" class="form-control" name="pos" value="">
						@if($errors->has('pos'))

						<small class="text-danger">{{ $errors->first('pos') }}</small>

						@endif
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Ф.И.О</label>
						<input type="text" class="form-control" name="person" value="">
						@if($errors->has('person'))

						<small class="text-danger">{{ $errors->first('person') }}</small>

						@endif
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Моб. телефон</label>
						<input type="text" class="form-control" name="mob" value="">
						@if($errors->has('mob'))

						<small class="text-danger">{{ $errors->first('mob') }}</small>

						@endif
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Телефон</label>
						<input type="text" class="form-control" name="tel" value="">
						@if($errors->has('tel'))

						<small class="text-danger">{{ $errors->first('tel') }}</small>

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
						<label for="exampleInputEmail1">Линк на карту</label>
						<input type="text" class="form-control" name="map" value="">
						@if($errors->has('map'))

						<small class="text-danger">{{ $errors->first('map') }}</small>

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
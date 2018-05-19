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
			<form role="form" method="post" action="{{ route('products.store') }}"  enctype="multipart/form-data">
				{{ csrf_field() }}
				<div class="box-body">
					<div class="select_objects">	
						<div class="form-group">
							<label>Направление</label>
							<select class="form-control cateAjax" name="works_id" required>
								<option value="" selected="selected" disabled>Выберите Направление</option>
								@foreach($news  as $cat)
								<option data-id="{{ $cat->id }}" data-url="/getCatalog" value="{{ $cat->id }}">{{ $cat->title }}</option>
								@endforeach
							</select>
							@if($errors->has('works_id'))

							<small class="text-danger">{{ $errors->first('works_id') }}</small>

							@endif
						</div>
						<div class="form-group">
							<label>Каталог</label>
							<select class="form-control catAjax" name="catalogs_id" required>
								<option value="" selected="selected" disabled>Выберите Каталог</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Название</label>
						<input type="text" class="form-control" name="title" value="">
						@if($errors->has('title'))

						<small class="text-danger">{{ $errors->first('title') }}</small>

						@endif
					</div>
					<div class="box box-success">
						<div class="box-header with-border">
							<h3 class="box-title">Характеристика товара</h3>
							<div class="pull-right">
								<button class="btn btn-success addImg1" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button>
							</div>
						</div>
						<div class="box-body increment">
							<div class="row">
								<div class="col-xs-6">
									<label for="exampleInputEmail1">Название</label>
									<input type="text" class="form-control" placeholder="" name="title1[]">
								</div>

								<div class="col-xs-6">
									<label for="exampleInputEmail1">Название1</label>
									<input type="text" class="form-control" placeholder="" name="value[]">
								</div>
							</div>

						</div>
						<div class="clone hide">
							<div class="box-body remove">
								<div class="row">
									<div class="col-xs-6">
										<label for="exampleInputEmail1">Название</label>
										<input type="text" class="form-control" placeholder="" name="title1[]">
									</div>

									<div class="col-xs-6">
										<label for="exampleInputEmail1">Название</label>
										<input type="text" class="form-control" placeholder="" name="value[]">
									</div>
								</div>
								<div class="pull-right">
									<button class="btn btn-danger removeImg1" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
								</div>
							</div>
						</div>
						<!-- /.box-body -->
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Цена</label>
						<input type="text" class="form-control" name="price" value="">
						@if($errors->has('price'))

						<small class="text-danger">{{ $errors->first('price') }}</small>

						@endif
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Описание</label>
						<textarea class="form-control ckeditor" name="text" rows="3" id=""></textarea>
						@if($errors->has('text'))

						<small class="text-danger">{{ $errors->first('text') }}</small>

						@endif
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Доп. Описание</label>
						<textarea class="form-control ckeditor" name="text1" rows="3" id=""></textarea>
						@if($errors->has('text1'))

						<small class="text-danger">{{ $errors->first('text1') }}</small>

						@endif
					</div>
					<div class="input-group control-group rasm" >
						<input type="file" name="img[]" class="form-control" multiple>
						<div class="input-group-btn"> 
							<button class="btn btn-success addImg" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button>
						</div>
					</div>
					<div class="clones hide">
						<div class="control-group input-group rasim" style="margin-top:10px">
							<input type="file" name="img[]" class="form-control">
							<div class="input-group-btn"> 
								<button class="btn btn-danger removeImg" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
							</div>
						</div>
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
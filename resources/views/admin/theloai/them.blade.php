@extends('admin')
@section('content')
<div id="page-wrapper">
	<h3 class="title1"><a href="admin/theloai/theloai" style="color: #629aa9">Danh sách</a> > Thêm danh mục:</h3>
	<div class="form-three widget-shadow">
		@if(count($errors) > 0)
		    <div class="alert alert-danger">
		    	@foreach($errors->all() as $er)
		    	    {{$er}}<br>
		    	    @endforeach
		    </div>
		@endif
		@if(session('thongbao'))
		    <div class="alert alert-success">
			    {{session('thongbao')}}
		    </div>
		@endif    
		<form class="form-horizontal" action="admin/theloai/them" method="POST">
			<input type="hidden" name="_token" value="{{csrf_token()}}" />
			<div class="form-group">
				<label class="col-sm-2 control-label">Tên:</label>
				<div class="col-sm-3">
					<input type="text" class="form-control1 input-sm" name="ten">
				</div>
			</div>
			<div class="form-group">
			    <label class="col-sm-2 control-label">Danh mục:</label>
				<div class="col-sm-3">
					<select name="danhmuc" id="selector1" class="form-control1">
						<option></option>
						@foreach($danhmuc as $dm)
					    <option>{{$dm->ten}}</option>
					    @endforeach
				    </select>
			    </div>
			</div>    
			<button type="submit" class="btn btn-default" style="margin-left: 412px" name="them">Thêm</button> 
		</form>
	</div>
</div>
@endsection
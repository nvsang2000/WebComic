@extends('admin')
@section('content')
<div id="page-wrapper">
	<h3 class="title1"><a href="admin/danhmuc/danhmuc" style="color: #629aa9">Danh sách</a> > Sửa danh mục:</h3>
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
		<form class="form-horizontal" action="admin/danhmuc/sua/{{$danhmuc->id}}" method="POST">
			<input type="hidden" name="_token" value="{{csrf_token()}}" />
			<div class="form-group">
				<label class="col-sm-1 control-label">Tên:</label>
				<div class="col-sm-3">
					<input type="text" class="form-control1 input-sm" name="ten" value="{{$danhmuc->ten}}">
				</div>
			</div>
			<button type="submit" class="btn btn-default" style="margin-left: 310px" name="them">Sửa</button> 
		</form>
	</div>
</div>
@endsection
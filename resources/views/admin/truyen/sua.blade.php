@extends('admin')
@section('content')
<div id="page-wrapper">
	<h3 class="title1"><a href="admin/truyen/truyen" style="color: #629aa9">Danh sách</a> > Sửa truyện:</h3>
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
		<form class="form-horizontal" action="admin/truyen/sua/{{$truyen->id}}" method="POST" enctype="multipart/form-data">
			<input type="hidden" name="_token" value="{{csrf_token()}}" />
			<div class="form-group">
				<label class="col-sm-2 control-label">Tên truyện:</label>
				<div class="col-sm-3">
					<input type="text" class="form-control1 input-sm" name="ten" value="{{$truyen->tentruyen}}">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Hình ảnh:</label>
				<div class="col-sm-3">
					<input type="file" class="form-control1 input-sm" name="hinhanh" id="hinhanh" value="file">
					<label for="file">{{$truyen->hinh}}</label>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Chi tiết:</label>
				<div class="col-sm-3">
					<input type="textarea" class="form-control1 input-sm" name="chitiet" value="{{$truyen->chitiet}}">
				</div>
			</div>
			<div class="form-group">
			    <label class="col-sm-2 control-label">Trạng thái:</label>
				<div class="col-sm-3">
					<select name="trangthai" id="selector1" class="form-control1">
						@if($truyen->trangthai == 1) {
						    <option>Đã hoàn thành</option>
						    <option>Đang hoàn thành</option>
						    <option>Chưa hoàn thành</option>
						} @elseif ($truyen->trangthai == 0) {
						    <option>Chưa hoàn thành</option>
						    <option>Đang hoàn thành</option>
						    <option>Đã hoàn thành</option>
						} @elseif ($truyen->trangthai == 3) {
						    <option>Đang hoàn thành</option>
						    <option>Chưa hoàn thành</option>
						    <option>Đã hoàn thành</option>
						}@endif
				    </select>
			    </div>
			</div>
			<button type="submit" class="btn btn-default" style="margin-left: 412px" name="them">Sửa</button> 
		</form>
	</div>
</div>
@endsection
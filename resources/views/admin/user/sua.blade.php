@extends('admin')
@section('content')
<div id="page-wrapper">
	<h3 class="title1"><a href="admin/user/danhsach" style="color: #629aa9">Danh sách</a> > Sửa người dùng:</h3>
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
		<form class="form-horizontal" action="admin/user/sua/{{$taikhoan->id}}" method="POST">
			<input type="hidden" name="_token" value="{{csrf_token()}}" />
			<div class="form-group">
				<label class="col-sm-2 control-label">Tên:</label>
				<div class="col-sm-6">
					<input type="text" class="form-control1 input-sm" name="ten" value="{{$taikhoan->name}}">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Giới tính:</label>
				<div class="col-sm-2">
					<select name="selector1" id="selector1" class="form-control1">
						@if($taikhoan->gioitinh == 'Nam') {
						    <option>Nam</option>
						    <option>Nữ</option>
						} @elseif ($taikhoan->gioitinh == 'Nữ') {
						    <option>Nữ</option>
						    <option>Nam</option>
						}@endif
					</select>
				</div>
				<label class="col-sm-1 control-label">SĐT:</label>
				<div class="col-sm-3">
					<input type="text" class="form-control1 input-sm" name="sdt" value="{{$taikhoan->sdt}}">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Ngày sinh:</label>
				<div class="col-sm-4">
					<input type="date" class="form-control1 input-sm" name="date" value="{{$taikhoan->date}}">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Password:</label>
				<div class="col-sm-6">
					<input type="text" class="form-control1 input-sm" name="pass" value="{{$taikhoan->password}}">
				</div>
			</div>
			<button type="submit" class="btn btn-default" style="margin-left: 688px" name="them">Cập nhật</button>
		</form>
	</div>
</div>
@endsection
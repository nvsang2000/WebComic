@extends('admin')
@section('content')
<div id="page-wrapper">
	<div class="main-page">
		<div class="tables">
			<h2 class="title1">Người dùng</h2>
			<div class="panel-body widget-shadow">
				<h4>Thông tin người dùng: <a href="admin/user/them"><i class="fa fa-plus" style="margin-left: 900px"></i></a></h4>
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
				<table class="table">
					<tr>
						<th>ID</th>
						<th>Tên</th>
						<th>Giới tính</th>
						<th>SĐT</th>
						<th>Date</th>
						<th>Email</th>
						<th>Mật khẩu</th>
						<th>Chức năng</th>
					</tr>
					@foreach($taikhoan as $tk)
					<tr>
						<th scope="row">{{$tk->id}}</th>
						<td>{{$tk->name}}</td>
						<td>{{$tk->gioitinh}}</td>
						<td>{{$tk->sdt}}</td>
						<td>{{$tk->date}}</td>
						<td>{{$tk->email}}</td>
						<td>{{$tk->password}}</td>
						<td>
							<a href="admin/user/sua/{{$tk->id}}"><i class="fa fa-edit"></i></a>
							<a href="admin/user/xoa/{{$tk->id}}"><i class="fa fa-trash-o"></i></a>
						</td>
					</tr>
					@endforeach
				</table>
			</div>
		</div>
	</div>
</div>
@endsection
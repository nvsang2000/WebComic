@extends('index')
@section('content')
<main class="truyencv-main">
	<div class="container" id="content">
		<div class="row">
			<div class="col-md-2">
				<div class="panel panel-success">
					<div class="panel-heading">
						<h3 class="panel-title"><span class="fa fa-book" aria-hidden="true">Tài khoản</span></h3>
					</div>
					<ul class="list-group">
						<li class="list-group-item"><a href="{{route('canhan',$user->id)}}">Hồ sơ</a></li>
						<li class="list-group-item"><a>Yêu thích</a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-10">
				<div class="row">
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
					<div class="col-md-6">
						<div class="page-header">
							<h3><span class="fa fa-user" aria-hidden="true"> Thông tin tài khoản</span></h3>
						</div>
						<div class="media">
							<div class="media-left" style=" position: relative">
							</div>
							<div class="media-body">
								<p class="text-muted">ID: {{$user->id}}</p>
								<p class="text-muted">Tên: {{$user->name}}</p>
								<p class="text-muted">Giới tính: {{$user->gioitinh}}</p>
								<p class="text-muted">SĐT: {{$user->sdt}}</p>
								<p class="text-muted">Ngày sinh: {{$user->date}}</p>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="page-header">
							<h3><span class="fa fa-user" aria-hidden="true"> Đổi thông tin tài khoản</span></h3>
						</div>
						<p class="strong text-muted"></p>
						<form action="{{route('canhan',$user->id)}}" method="POST">
							<input type="hidden" name="_token" value="{{csrf_token()}}" />
							<div class="form-group">
								<div class="col-sm-7 col-xs-10">
									<input type="text" class="form-control" name="ten" value="{{$user->name}}" style="width: 140%">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-7 col-xs-10">
									<select name="selector1" id="selector1" class="form-control" style="width: 140%">
										@if($user->gioitinh == 'Nam') {
										<option>Nam</option>
										<option>Nữ</option>
										} @elseif ($user->gioitinh == 'Nữ') {
										<option>Nữ</option>
										<option>Nam</option>
										}@endif
									</select>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-7 col-xs-10">
									<input type="text" class="form-control" name="sdt" value="{{$user->sdt}}" style="width: 140%">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-7 col-xs-10">
									<input type="date" class="form-control" name="date" value="{{$user->date}}" style="width: 140%">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-7 col-xs-10">
									<input type="password" class="form-control" name="new" placeholder="Mật khẩu mới" style="width: 140%">
								</div>
							</div>
							<button type="submit" class="btn btn-read" name="them" style="margin: 15px 0 0 200px;padding: 10px">Cập nhật</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>
@endsection
<style type="text/css">
	.form-group {
		padding: 20px;
	}
</style>
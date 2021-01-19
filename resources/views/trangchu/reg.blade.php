@extends('index')
@section('content')
<main class="truyencv-main" style="margin-top: 0">
	<div class="vertical-alignment-helper">
		<div class="vertical-align-center">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Đăng ký</h4>
					</div>
					<div class="modal-body">
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
						<form action="register" method="POST">
							<input type="hidden" name="_token" value="{{csrf_token()}}" />
							<div class="form-group">
								<label>Tên:</label>
								<input type="text" class="form-control" name="ten" placeholder="Tên">
							</div>
							<div class="form-group">
								<label>Email</label>
								<input type="email" class="form-control" name="email" placeholder="Email">
							</div>
							<div class="form-group">
								<label>Mật khẩu</label>
								<input type="password" class="form-control" name="password" placeholder="Mật khẩu">
							</div>
							<div class="form-group">
								<label>Nhập lại mật khẩu</label>
								<input type="password" class="form-control" name="password_confirm" placeholder="Nhập lại mật khẩu">
							</div>
							<div class="form-group">
								<label>Giới tính:</label>
								<select name="selector1" style="width:40%;height:34px;padding:6px 12px;font-size:14px;line-height:1.28571429;color:#555;background-color:#fff;border: 1px solid #ccc;">
									<option></option>
									<option>Nam</option>
									<option>Nữ</option>
								</select>
							</div>
							<div class="form-group text-center">
								<button type="submit" class="btn btn-truyencv btn-block" name="signup" value="Đăng ký">Đăng ký</button>
							</div>
							<div class="form-group text-center">
								<p>hoặc đăng ký bằng Facebook</p>
								<a href="/fb/" class="btn btn-facebook btn-block"> <i class="truyencv-icon icon-facebook"></i> </a>
							</div>
						</form>
					</div>
					<div class="modal-footer text-center">
						<p>Bạn đã có tài khoản? <a href="{{route('login')}}" data-toggle="modal" data-dismiss="modal">Đăng nhập ngay</a> </p>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>
@endsection
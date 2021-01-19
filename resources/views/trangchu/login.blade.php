@extends('index')
@section('content')
<main class="truyencv-main" style="margin-top: 0">
	<div class="vertical-alignment-helper">
		<div class="vertical-align-center">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Đăng nhập</h4>
					</div>
					<div class="modal-body">
						@if(count($errors) > 0)
						<div class="alert alert-danger">
							@foreach($errors->all() as $er)
							{{$er}}<br>
							@endforeach
						</div>
						@endif
						@if(session('danger')) 
						    <div class="alert alert-danger">
							    {{session('danger')}}
						    </div>
						@endif    
						<form action="{{route('login')}}" method="POST">
							<input type="hidden" name="_token" value="{{csrf_token()}}" />

							<div class="form-group">
								<div class="clearfix">
									<label>Email</label>
								</div>
								<input type="text" class="form-control" name="email" placeholder="Tài khoản">
							</div>
							<div class="form-group">
								<div class="clearfix">
									<label>Mật khẩu</label>
									{{-- <a href="#" data-toggle="modal" class="pull-right" data-dismiss="modal">Quên mật khẩu</a> --}}
								</div>
								<input type="password" class="form-control" name="password" placeholder="Mật khẩu">
							</div>
							<div class="checkbox">
								<label>
									<input type="checkbox" name="remember" /> Ghi nhớ đăng nhập
								</label>
							</div>
							<div class="form-group text-center">
								<button type="submit" class="btn btn-truyencv btn-block" value="Đăng nhập" name="btnLogin" id="btnLogin">Đăng nhập</button>
							</div>
							{{--  <div class="form-group text-center">
								<p>hoặc đăng nhập bằng Facebook</p>
								<a href="{{route('loginfb')}}" class="btn btn-facebook btn-block" id="facebook1">
									<i class="truyencv-icon icon-facebook"></i>
								</a>
							</div>  --}}
						</form>
					</div>
					<div class="modal-footer text-center">
						<p>Bạn chưa có tài khoản? <a href="{{route('reg')}}" data-toggle="modal" data-dismiss="modal">Đăng ký ngay</a> </p>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>
@endsection
@extends('admin')
@section('content')
<div id="page-wrapper">
	<div class="main-page">
		<div class="tables">
			<h2 class="title1">Thể loại</h2>
			<div class="panel-body widget-shadow">
				<h4>Thông tin thể lọai: <a href="admin/theloai/them"><i class="fa fa-plus" style="margin-left: 900px"></i></a></h4>
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
						<th>Chức năng</th>
					</tr>
					@foreach($theloai as $tl)
					<tr>
						<th scope="row">{{$tl->id}}</th>
						<td>{{$tl->tentheloai}}</td>
						<td>
							<a href="admin/theloai/sua/{{$tl->id}}"><i class="fa fa-edit"></i></a>
							<a href="admin/theloai/xoa/{{$tl->id}}"><i class="fa fa-trash-o"></i></a>
						</td>
					</tr>
					@endforeach
				</table>
			</div>
		</div>
	</div>
</div>
@endsection
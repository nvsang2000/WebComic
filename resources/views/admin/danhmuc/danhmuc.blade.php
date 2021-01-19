@extends('admin')
@section('content')
<div id="page-wrapper">
	<div class="main-page">
		<div class="tables">
			<h2 class="title1">Danh mục</h2>
			<div class="panel-body widget-shadow">
				<h4>Thông tin danh mục: <a href="admin/danhmuc/them"><i class="fa fa-plus" style="margin-left: 900px"></i></a></h4>
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
					@foreach($danhmuc as $dm)
					<tr>
						<th scope="row">{{$dm->id}}</th>
						<td>{{$dm->ten}}</td>
						<td>
							<a href="admin/danhmuc/sua/{{$dm->id}}"><i class="fa fa-edit"></i></a>
							<a href="admin/danhmuc/xoa/{{$dm->id}}"><i class="fa fa-trash-o"></i></a>
						</td>
					</tr>
					@endforeach
				</table>
			</div>
		</div>
	</div>
</div>
@endsection
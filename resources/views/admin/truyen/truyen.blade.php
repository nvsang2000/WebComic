@extends('admin')
@section('content')
<div id="page-wrapper">
	<div class="main-page">
		<div class="tables">
			<h2 class="title1">Truyện</h2>
			<div class="panel-body widget-shadow">
				<h4>Thông tin truyện: <a href="admin/truyen/them"><i class="fa fa-plus" style="margin-left: 900px"></i></a></h4>
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
						<th>Tên truyện</th>
						<th>Trạng thái</th>
						<th>Thể loại</th>
						<th>Danh mục</th>
						<th>Chức năng</th>
					</tr>
					@foreach($truyen as $tr)
					<tr>
						<th scope="row">{{$tr->id}}</th>
						<a href="{{route('chitiet',$tr->id)}}"><td>{{$tr->tentruyen}}</td></a>
						<td><?php echo \App\trangthai::find($tr['trangthai'])->ten?></td>
						<td><?php echo \App\theloai::find($tr['idtheloai'])->tentheloai?></td>
						<td><?php echo \App\danhmuc::find($tr['iddanhmuc'])->ten?></td>
						<td>
							<a href="admin/truyen/sua/{{$tr->id}}"><i class="fa fa-edit"></i></a>
							<a href="admin/truyen/xoa/{{$tr->id}}"><i class="fa fa-trash-o"></i></a>
						</td>
					</tr>
					@endforeach
				</table>
				<div class="row">{{$truyen->links()}}</div>
			</div>
		</div>
	</div>
</div>
@endsection
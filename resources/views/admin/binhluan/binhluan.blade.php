@extends('admin')
@section('content')
<div id="page-wrapper">
	<div class="main-page">
		<div class="tables">
			<h2 class="title1">Bình luận</h2>
			<div class="panel-body widget-shadow">
				<h4>Thông tin bình luận: <a href="admin/"><i class="fa fa-plus" style="margin-left: 900px"></i></a></h4>
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
						<th>Nội dung</th>
						<th>Truyện</th>
					</tr>
					@foreach($binhluan as $bl)
					<tr>
						<th scope="row">{{$bl->idbl}}</th>
						<td><?php echo \App\user::find($bl['iduser'])->name?> </td>
						<td>{{$bl->noidung}}</td>
						<td><?php echo \App\truyen::find($bl['idtruyen'])->tentruyen?></td>
					</tr>
					@endforeach
				</table>
			</div>
		</div>
	</div>
</div>
@endsection
@extends('admin')
@section('content')
<div id="page-wrapper">
	<div class="main-page">
		<div class="tables">
			<h2 class="title1">Chi tiết sản phẩm</h2>
			<div class="panel-body widget-shadow">
				<h4>Thông tin sản phẩm {{$truyen->tentruyen}}:</h4>
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
							<i class="fa fa-edit"></i>    
							<i class="fa fa-trash-o"></i>
						</td>
					</tr>
					@endforeach
				</table>
			</div>
		</div>
	</div>
</div>
@endsection
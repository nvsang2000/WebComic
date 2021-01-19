@extends('index')
@section('content')
<main class="truyencv-main">
	<div class="container bg-w">
		<div class="truyencv-detail-block" style="position:relative">
			<div class="truyencv-breadcrumb">
				<ol class="breadcrumb">
					<li>
						<a href="{{route('index')}}"> <span>Trang chủ</span></a>
						<meta itemprop="position" content="1" />
					</li>
					<li class="active">
						<a> <span>{{$truyen->tentruyen}}</span></a>
						<meta itemprop="position" content="3" />
					</li>
				</ol>
			</div>
			<section class="truyencv-section section-detail-info">
				<div class="truyencv-detail-info-block">
					<div class="row">
						<div class="col-info col-xs-12 col-sm-push-4 col-sm-8 col-md-push-3 col-md-5 col-lg-push-3 col-lg-6">
							<div class="info">
								<h1 class="title"> <a>{{$truyen->tentruyen}}</a> </h1>
								<div class="list">
									<div class="item">
										<div class="item-label"> Tác giả: </div>
										<div class="item-value"> <a class="author">Đang cập nhật</a> </div>
									</div>
									<div class="item">
										<div class="item-label"> Thể loại: </div>
										<div class="item-value">
											<ul class="list-unstyled categories">
												<li><a><?php echo \App\theloai::find($truyen['idtheloai'])->tentheloai?></a></li>
											</ul>
										</div>
									</div>
									<div class="item">
										<div class="item-label"> Tình trạng: </div>
										<div class="item-value"><?php echo \App\trangthai::find($truyen['trangthai'])->ten?></div>
									</div>
								</div>
								<div class="buttons"> <a class="btn-truyencv btn">Đọc từ đầu</a> <a class="btn btn-truyencv-white">Theo dõi</a> </div>
							</div>
						</div>
						<div class="col-thumb col-xs-12 col-sm-pull-8 col-sm-4 col-md-3 col-md-pull-5 col-lg-pull-6 col-lg-3">
							<div class="thumb hidden-xs"> <img class="img-responsive" src="resources/upload/{{$truyen->hinh}}"></div>
						</div>
						<div class="col-rating col-xs-12 col-sm-pull-8 col-sm-4 col-md-4 col-md-pull-0 col-lg-pull-0 col-lg-3">
							<div class="rating-container text-center">
								<div class="title"> Đánh giá </div>
								<div class="content" itemprop="aggregateRating">
									<div class="message"> Đã có <span itemprop="ratingCount" id="myrating">16</span> người đánh giá </div>
									<div class="star-total hidden-xs"> <span itemprop="ratingValue" id="myrate">9.4</span> </div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="truyencv-section">
				<div class="truyencv-detail-tab">
					<ul class="nav nav-tabs" style="overflow: visible;width: 900px;white-space: normal">
						<li class="active"> <a>Giới thiệu</a></li>
						<div class="brief">
							{{$truyen->chitiet}}
						</div>
					</ul>
				</div>
				<div class="truyencv-detail-tab">
					<ul class="nav nav-tabs" role="tablist">
						<li role="presentation"class="active"><a>Danh sách chương</a> </li>
					</ul>
				</div>
				<div class="truyencv-detail-tab">
					<ul class="nav nav-tabs" role="tablist">
						<li role="presentation"class="active"><a>Cùng thể loại</a> </li>
					</ul>
					<div class="block block-default">
						<div class="block-content">
							<div class="truyencv-detail-related">
								<div class="row row-eq-height">
									<div class="col-xs-6 col-sm-3">
										<div class="item">
											<a class="thumb"></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<div class="truyencv-detail-tab">
			<ul class="nav nav-tabs" role="tablist">
				<li role="presentation" class="active"><a>Bình luận</a> </li>
			</ul>
		</div>
		@if(isset(Auth::user()->name))
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
		<form action="{{route('comment',$truyen->id)}}" method="POST">
			<input type="hidden" name="_token" value="{{csrf_token()}}" />
			<div class="form-group">
				<div class="col-sm-7 col-xs-10">
					<textarea class="form-control" rows="3" name="comment"></textarea>
				</div>
			</div>
			<button type="submit" class="btn btn-read" name="them">Bình luận</button>
		</form>
		@endif
		@foreach($comment as $cm)
		<div class="form-group">
			<div class="col-sm-7 col-xs-10">
				<p class="text-muted"><strong><?php echo \App\user::find($cm['iduser'])->name?> </strong>  {{$cm->created_at}} 
					{{-- @if(isset(Auth::user()->id))
				        <a><i class="fa fa-trash-o"></i></a>
				    @endif --}}
				</p>
				<p class="text-muted">{{$cm->noidung}}</p>
				
			</div>
		</div>
		<div class="form-group">
		</div>
		@endforeach
	</div>
</main>
@endsection
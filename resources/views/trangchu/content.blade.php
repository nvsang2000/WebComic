@extends('index')
@section('content')
<main class="truyencv-main">
<section class="truyencv-section section-featured">
	<div class="container">
		<div class="featured-content">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-4">
					<div class="block block-editors-choice-slider">
						<div class="block-content">
							<div class="editors-choice-slider js-editors-choice-slider">
								<h2>BTV đề cử</h2>
								<div class="swiper-container">
									<div class="swiper-wrapper">
										<div class="swiper-slide">
											<div class="item">
												@foreach($max as $key=>$m)
												<div class="thumb">
													<a href="{{route('chitiet',$m->id)}}">
														<img class="img-responsive" src="resources/upload/{{$m->hinh}}" />
													</a> 
												</div>
												<div class="info">
													<h2 class="title"><a href="{{route('chitiet',$m->id)}}">{{$m->tentruyen}}</a> </h2>
													<p class="description">{{$m->chitiet}}</p>
												</div>
												@endforeach
											</div>
										</div>
									</div>
									<div class="swiper-pagination"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4">
					<div class="block">
						<div class="block-content">
							<div class="editors-choice-list">
								<div class="row">
									@foreach($truyen as $tr)
									<div class=" col-sm-6 btv-2">
										<div class="item">
											<h2 class="title"><a href="{{route('chitiet',$tr->id)}}">{{$tr->tentruyen}}</a> </h2>
											<div class="view text-secondary"> <strong>153220</strong> người truy cập </div>
											<p class="description">{{$tr->chitiet}}</p>
										</div>
									</div>
									@endforeach
									<div class="clearfix hidden-xs"></div>
									<div class="clearfix hidden-xs"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-4">
					<div class="block block-default block-readers-choice">
						<div class="block-header">
							<h2 class="title"> <a>Người đọc đề cử</a> </h2>
						</div>
						<div class="block-content">
							<ul class="list-group">
								<li class="list-group-item list-group-item-primary item-featured">
									<div class="content">
										<div class="index index-1 index-star"> 1 </div>
										<div class="info">
											<h2 class="title"> <a>Khi Bác Sĩ Mở Hack</a> </h2>
											<div class="view text-secondary"> <span class="text-red fz-16">146</span> đề cử </div>
											<div class="extra-info">
												<p>Thể loại: <a>Đô Thị</a></p>
												<p>Tác giả: Thủ Ác Thốn Quan Xích</p>
											</div>
										</div>
										<div class="thumb">
											<div class="book-cover"> <a class="book-cover-link"> <img src="https://truyencv.com/images/poster/khi-bac-si-mo-hack-poster-1573642176-200x300.jpg" alt="Khi Bác Sĩ Mở Hack"> </a> <span class="book-cover-shadow"></span> </div>
										</div>
									</div>
								</li>
								<li class="list-group-item list-group-item-primary">
									<div class="content">
										<div class="index index-2 index-star"> 2 </div>
										<div class="info">
											<h2 class="title"> <a>American Túng Hưởng Nhân Sinh</a> </h2>
											<div class="view text-secondary"> 139 </div>
										</div>
									</div>
								</li>
								<li class="list-group-item list-group-item-primary">
									<div class="content">
										<div class="index index-3 index-star"> 3 </div>
										<div class="info">
											<h2 class="title"> <a>Mỹ Mạn Thế Giới Âm Ảnh Quỹ Tích</a> </h2>
											<div class="view text-secondary"> 120 </div>
										</div>
									</div>
								</li>
								<li class="list-group-item list-group-item-primary">
									<div class="content">
										<div class="index index-4 index-star"> 4 </div>
										<div class="info">
											<h2 class="title"> <a>Linh Khí Thức Tỉnh: Thiên Phú Ngàn Tỉ Lần</a> </h2>
											<div class="view text-secondary"> 92 </div>
										</div>
									</div>
								</li>
							</ul>
							<p class="pull-right hidden-md hidden-lg"><a>Xem tiếp</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!--content 2-->
<div class="text-center hidden-xs"></div>
<section class="truyencv-section bg-w">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-4">
				<div class="block block-default block-reading-list">
					<div class="block-header">
						<h2 class="title">Bạn đang đọc <span class="pull-right"><a><small class="text-muted">Tủ truyện</small></a></span></h2>
					</div>
					<div class="block-content">
						<ul class="list-group">
							<li class="list-group-item list-group-item-with-thumb" id="reading_13576">
								<div class="content">
									<a class="thumb"> <img class="img-responsive" src="https://truyencv.com/images/poster/pham-nhan-tu-tien-chi-tien-gioi-thien-poster-1509503102-200x300.jpg" alt="Phàm Nhân Tu Tiên Chi Tiên Giới Thiên"> </a>
									<div class="info">
										<h2 class="title"> <a>Phàm Nhân Tu Tiên Chi Tiên Giới Thiên</a> </h2>
										<p class="chap"><small class="text-muted">Đã đọc: 1262/1276</small></p>
									</div>
									<div class="actions"> <a>Xem tiếp <i class="truyencv-icon icon-right"></i> </a> </div>
								</div>
							</li>
							<li class="list-group-item list-group-item-with-thumb">
								<div class="content">
									<a class="thumb"> <img class="img-responsive" src="https://truyencv.com/images/poster/cuc-vo-poster-1541267221-200x300.jpg" alt="Cực Võ"> </a>
									<div class="info">
										<h2 class="title"> <a>Cực Võ</a> </h2>
										<p class="chap">Chương 1</p>
									</div>
									<div class="actions"> <a>Xem tiếp <i class="truyencv-icon icon-right"></i> </a> </div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-8">
				<div class="block block-default">
					<div class="block-header">
						<h2 class="title">Mới cập nhật</h2>
					</div>
					<div class="block-content">
						<ul class="list-group">
							@foreach($update as $up)
							<li class="list-group-item list-group-item-table">
								<div class="content">
									<a class="thumb"> <img class="img-responsive" src="resources/upload/{{$up->hinh}}"> </a>
									<div class="info">
										<h2 class="title"> <a href="{{route('chitiet',$up->id)}}">{{$up->tentruyen}}</a>  </h2>
										<div class="chap">Đang cập nhật &nbsp;</div>
										<div class="author"><a>Đang cập nhật</a> &nbsp; </div>
									</div>
								</div>
							</li>
							@endforeach
						</ul>
						<a class="pull-right cnt-view">Xem tiếp</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!--content 3-->
<div class="text-center hidden-xs"></div>
<section class="truyencv-section section-ranking">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm=12 col-md-4">
				<div class="block block-inverse block-ranking">
					<div class="block-header">
						<h2 class="title"> <i class="truyencv-icon icon-fire"></i> truyện hot tuần </h2>
					</div>
					<div class="block-content">
						<ul class="list-group">
							@foreach($hot as $h)
							<li class="list-group-item list-group-item-primary item-featured">
								<div class="content">
									<div class="index index-1"></div>
									<div class="info">
										<h2 class="title"> <a></a> {{$h->tentruyen}}</h2>
										<div class="view text-secondary"> <span class="text-red fz-16">30.9k</span> lượt đọc </div>
										<div class="extra-info">
											<p>Thể loại: <a>Đô Thị</a></p>
											<p>Tác giả: Niên Niên Niên Niên Niên</p>
										</div>
									</div>
									<div class="thumb">
										<div class="book-cover"> <a class="book-cover-link"> <img src="https://truyencv.com/images/poster/giai-tri-minh-tinh-dao-vong-365-ngay-poster-1576230615-200x300.jpg"> </a> <span class="book-cover-shadow"></span> </div>
									</div>
								</div>
							</li>
							@endforeach
						</ul>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm=12 col-md-4">
				<div class="block block-inverse block-ranking">
					<div class="block-header">
						<h2 class="title"> <span class="truyencv-icon icon-fire"></span> truyện nữ hot </h2>
					</div>
					<div class="block-content">
						<ul class="list-group">
							<li class="list-group-item list-group-item-primary item-featured">
								<div class="content">
									<div class="index index-1"> 1 </div>
									<div class="info">
										<h2 class="title"> <a>Xuyên Nhanh: Nam Thần, Có Chút Cháy!</a> </h2>
										<div class="view text-secondary"> <span class="text-red fz-16">15.9k</span> lượt đọc </div>
										<div class="extra-info">
											<p>Thể loại: <a>Ngôn Tình</a></p>
											<p>Tác giả: Mặc Linh</p>
										</div>
									</div>
									<div class="thumb">
										<div class="book-cover"> <a class="book-cover-link"> <img src="https://truyencv.com/images/poster/xuyen-nhanh-nam-than-co-chu-t-chay-poster-1546519512-200x300.jpg" alt="Xuyên Nhanh: Nam Thần, Có Chút Cháy!"> </a> <span class="book-cover-shadow"></span> </div>
									</div>
								</div>
							</li>
							<li class="list-group-item list-group-item-primary">
								<div class="content">
									<div class="index index-2"> 2 </div>
									<div class="info">
										<h2 class="title"> <a>Thiên Y Phượng Cửu</a> </h2>
										<div class="view text-secondary"> 9.7k </div>
									</div>
								</div>
							</li>
							<li class="list-group-item list-group-item-primary">
								<div class="content">
									<div class="index index-3"> 3 </div>
									<div class="info">
										<h2 class="title"> <a>Thái Tử Điện Hạ</a> </h2>
										<div class="view text-secondary"> 9.6k </div>
									</div>
								</div>
							</li>
							<li class="list-group-item list-group-item-primary">
								<div class="content">
									<div class="index index-4"> 4 </div>
									<div class="info">
										<h2 class="title"> <a>Khoái Xuyên: Pháo Hôi Nữ Phụ Muốn Phản Công </a> </h2>
										<div class="view text-secondary"> 3.3k </div>
									</div>
								</div>
							</li>
							<li class="list-group-item list-group-item-primary">
								<div class="content">
									<div class="index index-5"> 5 </div>
									<div class="info">
										<h2 class="title"> <a>Thái Tử Điện Hạ</a> </h2>
										<div class="view text-secondary"> 3k </div>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm=12 col-md-4">
				<div class="block block-inverse block-ranking">
					<div class="block-header">
						<h2 class="title"> <i class="truyencv-icon icon-star"></i> Sáng tác hot tuần </h2>
					</div>
					<div class="block-content">
						<ul class="list-group">
							<li class="list-group-item list-group-item-primary item-featured">
								<div class="content">
									<div class="index index-1"> 1 </div>
									<div class="info">
										<h2 class="title"> <a>Ta Ở Hokage NTR</a> </h2>
										<div class="view text-secondary"> <span class="text-red fz-16">4.4k</span> lượt đọc </div>
										<div class="extra-info">
											<p>Thể loại: <a>Dị Năng</a></p>
											<p>Tác giả: </p>
										</div>
									</div>
									<div class="thumb">
										<div class="book-cover"> <a class="book-cover-link"> <img src="https://truyencv.com/images/poster/ta-o-hokage-ntr-poster-1574933135-200x300.jpg" alt="Ta Ở Hokage NTR"> </a> <span class="book-cover-shadow"></span> </div>
									</div>
								</div>
							</li>
							<li class="list-group-item list-group-item-primary">
								<div class="content">
									<div class="index index-2"> 2  </div>
									<div class="info">
										<h2 class="title"> <a >Phong Lưu Chân Tiên</a> </h2>
										<div class="view text-secondary"> 3.5k </div>
									</div>
								</div>
							</li>
							<li class="list-group-item list-group-item-primary">
								<div class="content">
									<div class="index index-3"> 3 </div>
									<div class="info">
										<h2 class="title"> <a>Đỉnh Luyện Thần Ma</a> </h2>
										<div class="view text-secondary"> 2.4k </div>
									</div>
								</div>
							</li>
							<li class="list-group-item list-group-item-primary">
								<div class="content">
									<div class="index index-4"> 4 </div>
									<div class="info">
										<h2 class="title"> <a>Quang Minh Thánh Thổ</a> </h2>
										<div class="view text-secondary"> 1.8k </div>
									</div>
								</div>
							</li>
							<li class="list-group-item list-group-item-primary">
								<div class="content">
									<div class="index index-5"> 5 </div>
									<div class="info">
										<h2 class="title"> <a>Cân cả thiên hạ</a> </h2>
										<div class="view text-secondary"> 1k </div>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
</main>
@endsection
@extends('index')
@section('content')
<main class="truyencv-main">
<section class="truyencv-section section-featured">
   <div class="container bg-w">
      <div class="featured-content">
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-8">
               <div class="block block-default block-list-new">
                  <div class="block-header">
                     <h2 class="title">Danh sách truyện<span class="pull-right"><a rel="nofollow"><small class="text-muted">Lọc truyện</small></a></span></h2>
                  </div>
                  <div class="block-content">
                     <ul class="list-group">
                        @foreach($truyen_danhmuc as $tr)
                        <li class="list-group-item list-group-item-table">
                           <div class="content">
                              <a class="thumb"> <img class="img-responsive" src="resources/upload/{{$tr->hinh}}"> </a>
                              <div class="info">
                                 <h2 class="title">
                                    <a href="{{route('chitiet',$tr->id)}}">{{$tr->tentruyen}}</a> </h2>
                                 {{-- <div class="chap">Thiên Đường Sơn Thượng &nbsp;</div> --}}
                                 {{-- <div class="author"> <a href="#" title="Chương 171">Chương 171</a> &nbsp; </div> --}}
                                 {{-- <div class="time"> 1 phút trước </div> --}}
                              </div>
                           </div>
                        </li>
                        @endforeach
                        <div class="row">{{$truyen_danhmuc->links()}}</div>
                     </ul>
                     {{-- <nav aria-label="Page navigation">
                        <ul class="pull-right pagination">
                           <li class="disabled"><a aria-label="Older" href="javascript:void(0)"><span aria-hidden="true">&laquo;</span></a></li>
                           <li class="active"><a href="javascript:void(0)">1</a></li>
                           <li><a href="https://truyencv.com/danh-sach/moi-cap-nhat/trang-2/">2</a></li>
                           <li><a href="https://truyencv.com/danh-sach/moi-cap-nhat/trang-3/">3</a></li>
                           <li><a href="https://truyencv.com/danh-sach/moi-cap-nhat/trang-4/">4</a></li>
                           <li><a href="https://truyencv.com/danh-sach/moi-cap-nhat/trang-5/">5</a></li>
                           <li><a aria-label="Newer" href="https://truyencv.com/danh-sach/moi-cap-nhat/trang-875/"><span aria-hidden="true">&raquo;</span></a></li>
                        </ul>
                     </nav> --}}
                  </div>
               </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
               <div class="block block-editors-choice-slider">
                  <div class="block-content">
                     <div class="editors-choice-slider js-editors-choice-slider">
                        <h2>Đọc nhiều</h2>
                        <div class="swiper-container">
                           <div class="swiper-wrapper">
                              <div class="swiper-slide">
                                 <div class="item">
                                    <div class="thumb"> <a href="https://truyencv.com/linh-khi-thuc-tinh-thien-phu-ngan-ti-lan/" title="Linh Khí Thức Tỉnh: Thiên Phú Ngàn Tỉ Lần"><img class="img-responsive" alt="" src="https://truyencv.com/images/poster/linh-khi-thuc-tinh-thien-phu-ngan-ti-lan-poster-1574694465-200x300.jpg" title="Linh Khí Thức Tỉnh: Thiên Phú Ngàn Tỉ Lần"></a> </div>
                                    <div class="info">
                                       <h2 class="title"> <a href="https://truyencv.com/linh-khi-thuc-tinh-thien-phu-ngan-ti-lan/" title="Linh Khí Thức Tỉnh: Thiên Phú Ngàn Tỉ Lần">Linh Khí Thức Tỉnh: Thiên Phú Ngàn Tỉ Lần</a> </h2>
                                       <p class="description"> FREEE ( nhắc nhẹ ) 【 B.faloo tiếng Trung mạng cấp A ký kết tác phẩm: Linh khí thức tỉnh: Ngàn tỉ lần thiên phú 】 Giang Nguyên xuyên việt linh khí thức tỉnh thế giới, </p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="swiper-pagination"></div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="text-center" style="margin-top: 20px;"></div>
            </div>
         </div>
      </div>
   </div>
</section>
</main>
@endsection
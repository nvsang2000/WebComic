<header class="truyencv-header">
	<nav class="navbar navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<a href="#" class="navbar-search-btn js-open-search-box-mobile visible-xs visible-sm">
					<i class="truyencv-icon icon-search"></i>
				</a>
				<div class="navbar-category">
					<button class="navbar-category-btn">
						<span class="lines"> 
					        <i class="fa fa-home"></i>
				        </span>
					<a href="{{route('index')}}" style="color: white"><span class="hidden-xs hidden-sm">Trang chủ</span></a>
					</button>
				</div>
				<div class="navbar-category">
					<button class="navbar-category-btn js-open-sidebar"> 
						<span class="lines"> 
						    <span class="line"></span> 
						    <span class="line"></span>
						    <span class="line"></span> 
					    </span> 
					    <span class="hidden-xs hidden-sm">Danh mục</span> 
					</button>
					<ul class="navbar-category-list">
						@foreach($danhmuc as $dm)
						<li class="col-xs-4"><a href="{{route('loaidanhmuc',$dm->id)}}">{{$dm->ten}}</a></li>
						@endforeach
					</ul>
				</div>
				<div class="navbar-category">
					<button class="navbar-category-btn js-open-sidebar">
					<span class="lines">
						<span class="line"></span>
						<span class="line"></span>
						<span class="line"></span>
					</span>
					<span class="hidden-xs hidden-sm">Thể loại</span>
					</button>
					<ul class="navbar-category-list">
						@foreach($theloai as $tl)
						<li class="col-xs-4"> <a href="{{route('loaitheloai',$tl->id)}}">{{$tl->tentheloai}}</a></li>
						@endforeach
					</ul>
				</div>
			</div>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-right">
					<li>
						<div class="search-block">
							<div class="actions">
								<button type="submit" title="Tìm kiếm" class="search-toggle-btn" id="js-search-toggle">
								<i class="truyencv-icon icon-search"></i>
								</button>
							</div>
							<form id="js-search-panel" class="search-panel">
								<input type="text" name="search" id="txtKeyword" value="" placeholder="Tên truyện hoặc tác giả" class="form-control" autocomplete="off">
								<button class="btn btn-search" type="submit">
								<i class="truyencv-icon icon-search-primary"></i>
								</button>
							</form>
						</div>
					</li>
					<li>
						<div class="user-block">
							@if(Auth::check())
							    <i class="truyencv-icon icon-user"></i>
							    <a href="{{route('canhan',Auth::user()->id)}}"> Chào {{Auth::user()->name}} </a>
							    <span class="diver">|</span>
							    <a href="{{route('logout')}}"> Đăng xuất </a>
							@else
							    <a href="{{route('login')}}"> Đăng nhập </a>
							    <span class="diver">|</span>
							    <a href="{{route('reg')}}"> Đăng ký </a>
							@endif
						</div>
					</li>
				</ul>
			</div>
		</div>
	</nav>
</header>

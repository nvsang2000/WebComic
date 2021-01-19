@extends('admin')
@section('content')
<div id="page-wrapper">
	<div class="main-page">
		<div class="row">
			<h2 class="title1"><i class="fa fa-signal"></i> Tổng quan</h2>
			<div class="col-md-3 widget widget1">
				<div class="r3_counter_box">
					<i class="pull-left fa fa-users icon-rounded"></i>
					<div class="stats">
						<h5><strong>{{count($sltk)}}</strong></h5>
						<span>Số tài khoản</span>
					</div>
				</div>
			</div>
			<div class="col-md-3 widget widget1">
				<div class="r3_counter_box">
					<i class="pull-left fa fa-tasks user1 icon-rounded"></i>
					<div class="stats">
						<h5><strong>{{count($sldm)}}</strong></h5>
						<span>Số danh mục</span>
					</div>
				</div>
			</div>
			<div class="col-md-3 widget widget1">
				<div class="r3_counter_box">
					<i class="pull-left fa fa-database user2 icon-rounded"></i>
					<div class="stats">
						<h5><strong>{{count($sltl)}}</strong></h5>
						<span>Số thể loại</span>
					</div>
				</div>
			</div>
			<div class="col-md-3 widget widget1">
				<div class="r3_counter_box">
					<i class="pull-left fa fa-book user4 icon-rounded"></i>
					<div class="stats">
						<h5><strong>{{count($sltr)}}</strong></h5>
						<span>Số truyện</span>
					</div>
				</div>
			</div>
			<div class="col-md-3 widget widget1">
				<div class="r3_counter_box">
					<i class="pull-left fa fa-envelope user3 icon-rounded"></i>
					<div class="stats">
						<h5><strong>{{count($slbl)}}</strong></h5>
						<span>Số bình luận</span>
					</div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
@endsection
<style type="text/css">
	i.user3 {
    background: #33CCCC;
}
i.user4 {
    background: #669966;
}
</style>
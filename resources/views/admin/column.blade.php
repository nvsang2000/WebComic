<div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
   <!--left-fixed -navigation-->
   <aside class="sidebar-left">
      <nav class="navbar navbar-inverse">
         <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".collapse" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <h1><a class="navbar-brand" href="index.html"><span class="fa fa-area-chart"></span> Quản lý<span class="dashboard_text">Website Truyện</span></a></h1>
         </div>
         <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="sidebar-menu">
               <li class="treeview">
                  <a href="{{route('admin')}}">
                     <i class="fa fa-dashboard"></i> <span>Trang Chủ</span>
                  </a>
               </li>
               <li class="treeview">
                  <a href="">
                     <i class="fa fa-user"></i> <span>Người dùng</span>
                     <i class="fa fa-angle-left pull-right"></i>
                  </a>
                  <ul class="treeview-menu">
                     <li><a href="{{route('user')}}"><i class="fa fa-angle-right"></i>Danh sách</a></li>
                     <li><a href="{{route('themuser')}}"><i class="fa fa-angle-right"></i>Thêm người dùng</a></li>
                  </ul>
               </li>
               <li class="treeview">
                  <a href="">
                     <i class="fa fa-tasks"></i> <span>Danh Mục</span>
                     <i class="fa fa-angle-left pull-right"></i>
                  </a>
                  <ul class="treeview-menu">
                     <li><a href="{{route('danhmuc')}}"><i class="fa fa-angle-right"></i>Danh sách</a></li>
                     <li><a href="{{route('themdanhmuc')}}"><i class="fa fa-angle-right"></i>Thêm danh mục</a></li>

                  </ul>
               </li>
               <li class="treeview">
                  <a href="">
                     <i class="fa fa-database"></i> <span>Thể Loại</span>
                     <i class="fa fa-angle-left pull-right"></i>
                  </a>
                  <ul class="treeview-menu">
                     <li><a href="{{route('theloai')}}"><i class="fa fa-angle-right"></i>Danh sách</a></li>
                     <li><a href="{{route('themtheloai')}}"><i class="fa fa-angle-right"></i>Thêm thể loại</a></li>

                  </ul>
               </li>
               <li class="treeview">
                  <a href="">
                     <i class="fa fa-book"></i> <span>Truyện</span>
                     <i class="fa fa-angle-left pull-right"></i>
                  </a>
                  <ul class="treeview-menu">
                     <li><a href="{{route('truyen')}}"><i class="fa fa-angle-right"></i>Danh sách</a></li>
                     <li><a href="{{route('them')}}"><i class="fa fa-angle-right"></i>Thêm truyện</a></li>
                  </ul>
               </li>
               <li class="treeview">
                  <a href="">
                     <i class="fa fa-tasks"></i> <span>Bình luận</span>
                     <i class="fa fa-angle-left pull-right"></i>
                  </a>
                  <ul class="treeview-menu">
                     <li><a href="{{route('binhluan')}}"><i class="fa fa-angle-right"></i>Danh sách</a></li>
                     {{-- <li><a href="{{route('thembinhluan')}}"><i class="fa fa-angle-right"></i>Thêm bình luận</a></li> --}}

                  </ul>
               </li>
            </ul>
         </div>
         <!-- /.navbar-collapse -->
      </nav>
   </aside>
</div>
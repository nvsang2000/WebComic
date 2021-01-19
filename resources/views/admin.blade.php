<!DOCTYPE HTML>
<html>
   <head>
      <title>Trang Chủ Admin</title>
      <base href="{{asset('')}}">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <meta name="keywords" content="Glance Design Dashboard Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
      SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
      <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
      <!-- Bootstrap Core CSS -->
      <link href="source/css/bootstrap.css" rel='stylesheet' type='text/css' />
      <!-- Custom CSS -->
      <link href="source/css/style.css" rel='stylesheet' type='text/css' />
      <!-- font-awesome icons CSS -->
      <link href="source/css/font-awesome.css" rel="stylesheet">
      <!-- //font-awesome icons CSS-->
      <!-- side nav css file -->
      <link href='source/css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css'/>
      <!-- //side nav css file -->
      <!-- js-->
      <script src="source/js/jquery-1.11.1.min.js"></script>
      <script src="source/js/modernizr.custom.js"></script>
      <!--webfonts-->
      <link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
      <!--//webfonts-->
      <!-- chart -->
      <script src="source/js/Chart.js"></script>
      <!-- //chart -->
      <!-- Metis Menu -->
      <script src="source/js/metisMenu.min.js"></script>
      <script src="source/js/custom.js"></script>
      <link href="source/css/custom.css" rel="stylesheet">
      <!--//Metis Menu -->
      <style>
      #chartdiv {
      width: 100%;
      height: 295px;
      }
      .widget1 {
      margin-right: 1%;
      }
      </style>
      <!--pie-chart --><!-- index page sales reviews visitors pie chart -->
      <script src="source/js/pie-chart.js" type="text/javascript"></script>
      <!-- //pie-chart --><!-- index page sales reviews visitors pie chart -->
      <!-- requried-jsfiles-for owl -->
      <link href="source/css/owl.carousel.css" rel="stylesheet">
      <script src="source/js/owl.carousel.js"></script>
   </head>
   <body class="cbp-spmenu-push">
      <div class="main-content">
         @include('admin.column')
         <!--left-fixed -navigation-->
         <!-- header-starts -->
         @include('admin.header')
         <!-- //header-ends -->
         <!-- main content start-->
         @yield('content')
      </div>
      <script src="{{asset('ckeditor/ckeditor.js') }}"></script>
      <script> CKEDITOR.replace('demo'); </script>
      <script src="source/js/Chart.bundle.js"></script>
      <script src="source/js/utils.js"></script>
      <script src="source/js/classie.js"></script>
      <!--scrolling js-->
      <script src="source/js/jquery.nicescroll.js"></script>
      <script src="source/js/scripts.js"></script>
      <!--//scrolling js-->
      <!-- side nav js -->
      <script src='source/js/SidebarNav.min.js' type='text/javascript'></script>
      <script>
      $('.sidebar-menu').SidebarNav()
      </script>
      <!-- //side nav js -->
      <!-- for index page weekly sales java script -->
      <script src="source/js/SimpleChart.js"></script>
      <!-- Bootstrap Core JavaScript -->
      <script src="source/js/bootstrap.js"> </script>
      <!-- //Bootstrap Core JavaScript -->
   </body>
</html>
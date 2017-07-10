<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    @yield('title')
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{asset('plugins/ionicons-2.0.1/css/ionicons.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('css/AdminLTE.css')}}">
    <link rel="stylesheet" href="{{asset('css/skins/skin-red.css')}}">
  </head>
  <body class="hold-transition skin-red sidebar-mini">
    <div class="wrapper">

      <header class="main-header">
        <!-- Logo -->
        <a href="/" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>B</b>TB</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Bhinneka</b> Tableau</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button" id="toogle">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu" id="navbar">
            <ul class="nav navbar-nav">
              <!-- User Account -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <span>Welcome, {{ Auth::user()->name }}</span>
                </a>
                <div class="dropdown-menu" id="dropdown">
                  {{-- <li class="dropdown-content"> --}}
                    {{-- <div class="dropdown-content"> --}}
                      <a href="{{ url('/logout') }}">Log Out</a>
                    {{-- </div> --}}
                  {{-- </li> --}}
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar -->
        <section class="sidebar">
          <!-- search form -->
          <!--<form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>-->
          <!-- /.search form -->
          <!-- sidebar menu -->
          <ul class="sidebar-menu">
            <li class="header">MAIN MENU</li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-folder"></i> <span>C Level</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-table"></i> Report 1</a></li>
                <li><a href="#"><i class="fa fa-table"></i> Report 2</a></li>
                <li><a href="#"><i class="fa fa-table"></i> Report 3</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-folder"></i> <span>Division 1</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-table"></i> Report 1</a></li>
                <li><a href="#"><i class="fa fa-table"></i> Report 2</a></li>
                <li><a href="#"><i class="fa fa-table"></i> Report 3</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-folder"></i> <span>Division 2</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-table"></i> Report 1</a></li>
                <li><a href="#"><i class="fa fa-table"></i> Report 2</a></li>
                <li><a href="#"><i class="fa fa-table"></i> Report 3</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-folder"></i> <span>Division 3</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-table"></i> Report 1</a></li>
                <li><a href="#"><i class="fa fa-table"></i> Report 2</a></li>
                <li><a href="#"><i class="fa fa-table"></i> Report 3</a></li>
              </ul>
            </li>
            <li class="header">ADMIN MENU</li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-laptop"></i>
                <span>User</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Add User</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> View User</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Add Division</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> View Division</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-laptop"></i>
                <span>Report</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Add Report</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> View Report</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-laptop"></i>
                <span>Menu</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Add Menu</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> View Menu</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Configuration</a></li>
              </ul>
            </li>            
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        @yield('content')
      </div>
      <!-- /.content-wrapper -->

      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 1.0
        </div>
        <strong>Copyright &copy; 2017 <a href="http://bhinneka.com">Bhinneka.com</a>.</strong> All rights reserved.
      </footer>
    </div>
    <!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="{{asset('plugins/jQuery/jQuery-2.1.4.min.js')}}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.5 -->
    <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('js/app.min.js')}}"></script>
    {{-- tableau script --}}
    <script type="text/javascript" src="https://10az.online.tableau.com/javascripts/api/tableau-2.min.js"></script>
    @yield('script')
  </body>
</html>
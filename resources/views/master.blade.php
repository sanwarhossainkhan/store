<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>@yield('title')</title>  
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="stylesheet" href="{{ asset('Dashboard-ext/bootstrap/css/bootstrap.min.css') }}">
	<link href="{{ asset('Dashboard-ext/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">  
	<link rel="stylesheet" href="{{ asset('Dashboard-ext/plugins/datatables/dataTables.bootstrap.css') }}">
	<link rel="stylesheet" href="{{ asset('Dashboard-ext/plugins/select2/select2.min.css') }}">
	<link rel="stylesheet" href="{{ asset('Dashboard-ext/plugins/iCheck/all.css') }}">
	<link rel="stylesheet" href="{{ asset('Dashboard-ext/dist/css/AdminLTE.min.css') }}">
	<link rel="stylesheet" href="{{ asset('Dashboard-ext/dist/css/skins/_all-skins.min.css') }}">
	<link rel="stylesheet" href="{{ asset('Dashboard-ext/bootstrap/css/style.css') }}">

	<script src="{{ asset('Dashboard-ext/plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
	<script src="{{ asset('Dashboard-ext/bootstrap/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('Dashboard-ext/plugins/select2/select2.full.min.js') }}"></script>
	<script src="{{ asset('Dashboard-ext/dist/js/app.min.js') }}"></script>
	<script src="{{ asset('Dashboard-ext/bootstrap/js/jQuery-menu.js') }}"></script>
	<script src="{{ asset('Dashboard-ext/bootstrap/js/jQuery-customize.js') }}"></script>
	<script src="{{ asset('Dashboard-ext/bootstrap/js/ajax-custom.js') }}"></script>

	<script src="{{ asset('Dashboard-ext/plugins/datatables/jquery.dataTables.min.js') }}"></script>
	<script src="{{ asset('Dashboard-ext/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
	<script src="{{ asset('Dashboard-ext/plugins/iCheck/icheck.min.js') }}"></script>
</head>

<body class="hold-transition skin-blue sidebar-mini">
<div id="feedbackStatus"></div>
<div class="wrapper">
<!-- Main Header -->
<header class="main-header">

  <!-- Logo -->
  <a href="index.php" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>A</b>LT</span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>Admin</b>LTE</span>
  </a>

  <!-- Header Navbar -->
  <nav class="navbar navbar-static-top" role="navigation">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>
    <!-- Navbar Right Menu -->
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <!-- Messages: style can be found in dropdown.less-->
        <li class="dropdown messages-menu">
          <!-- Menu toggle button -->
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-envelope-o"></i>
            <span class="label label-success">4</span>
          </a>
          <ul class="dropdown-menu">
            <li class="header">You have 4 messages</li>
            <li>
              <!-- inner menu: contains the messages -->
              <ul class="menu">
                <li><!-- start message -->
                  <a href="#">
                    <div class="pull-left">
                      <!-- User Image -->
                      <img src="{{ asset('Dashboard-ext/images/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
                    </div>
                    <!-- Message title and timestamp -->
                    <h4>
                      Support Team
                      <small><i class="fa fa-clock-o"></i> 5 mins</small>
                    </h4>
                    <!-- The message -->
                    <p>Why not buy a new awesome theme?</p>
                  </a>
                </li>
                <!-- end message -->
              </ul>
              <!-- /.menu -->
            </li>
            <li class="footer"><a href="#">See All Messages</a></li>
          </ul>
        </li>
        <!-- /.messages-menu -->

        <!-- Notifications Menu -->
        <li class="dropdown notifications-menu">
          <!-- Menu toggle button -->
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-bell-o"></i>
            <span class="label label-warning">10</span>
          </a>
          <ul class="dropdown-menu">
            <li class="header">You have 10 notifications</li>
            <li>
              <!-- Inner Menu: contains the notifications -->
              <ul class="menu">
                <li><!-- start notification -->
                  <a href="#">
                    <i class="fa fa-users text-aqua"></i> 5 new members joined today
                  </a>
                </li>
                <!-- end notification -->
              </ul>
            </li>
            <li class="footer"><a href="#">View all</a></li>
          </ul>
        </li>
        <!-- Tasks Menu -->
        <li class="dropdown tasks-menu">
          <!-- Menu Toggle Button -->
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-flag-o"></i>
            <span class="label label-danger">9</span>
          </a>
          <ul class="dropdown-menu">
            <li class="header">You have 9 tasks</li>
            <li>
              <!-- Inner menu: contains the tasks -->
              <ul class="menu">
                <li><!-- Task item -->
                  <a href="#">
                    <!-- Task title and progress text -->
                    <h3>
                      Design some buttons
                      <small class="pull-right">20%</small>
                    </h3>
                    <!-- The progress bar -->
                    <div class="progress xs">
                      <!-- Change the css width attribute to simulate progress -->
                      <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                        <span class="sr-only">20% Complete</span>
                      </div>
                    </div>
                  </a>
                </li>
                <!-- end task item -->
              </ul>
            </li>
            <li class="footer">
              <a href="#">View all tasks</a>
            </li>
          </ul>
        </li>
        <!-- User Account Menu -->
        <li class="dropdown user user-menu">
          <!-- Menu Toggle Button -->
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <!-- The user image in the navbar-->
            <img src="{{ asset('Dashboard-ext/images/user2-160x160.jpg') }}" class="user-image" alt="User Image">
            <!-- hidden-xs hides the username on small devices so only the image appears. -->
            <span class="hidden-xs">Alexander Pierce</span>
          </a>
          <ul class="dropdown-menu">
            <!-- The user image in the menu -->
            <li class="user-header">
              <img src="{{ asset('Dashboard-ext/images/user2-160x160.jpg') }}" class="img-circle" alt="User Image">

              <p>
                Alexander Pierce - Web Developer
                <small>Member since Nov. 2012</small>
              </p>
            </li>
            <!-- Menu Body -->
            <li class="user-body">
              <div class="row">
                <div class="col-xs-4 text-center">
                  <a href="#">Followers</a>
                </div>
                <div class="col-xs-4 text-center">
                  <a href="#">Sales</a>
                </div>
                <div class="col-xs-4 text-center">
                  <a href="#">Friends</a>
                </div>
              </div>
              <!-- /.row -->
            </li>
            <!-- Menu Footer-->
            <li class="user-footer">
              <div class="pull-left">
                <a href="#" class="btn btn-default btn-flat">Profile</a>
              </div>
              <div class="pull-right">
                <a href="#" class="btn btn-default btn-flat">Sign out</a>
              </div>
            </li>
          </ul>
        </li>
        <!-- Control Sidebar Toggle Button -->
        <li>
          <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
        </li>
      </ul>
    </div>
  </nav>
</header>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{ asset('Dashboard-ext/images/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>Alexander Pierce</p>
        <!-- Status -->
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>

    <!-- search form (Optional) -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
      </div>
    </form>
    <!-- /.search form -->

    <!-- Sidebar Menu -->
    <ul class="sidebar-menu">
      <li class="header">HEADER</li>
      <!-- Optionally, you can add icons to the links -->
      <li><a href="index.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
      <li class="treeview">
        <a href="#"><i class="fa fa-link"></i> <span>Profile</span>
          <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ url ('profile') }}">Personal Info</a></li>

        </ul>
      </li>
      <li class="treeview">
        <a href="#"><i class="fa fa-link"></i> <span>DLS Cash Wallet</span>
          <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
        </a>
        <ul class="treeview-menu">
          <li><a href="#">Transfer Internal</a></li>

        </ul>
      </li>
      <li class="treeview">
        <a href="#"><i class="fa fa-link"></i> <span>Cash Wallet</span>
          <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
        </a>
        <ul class="treeview-menu">
          <li><a href="#">Withdraw to Bank</a></li>

        </ul>
      </li>
      <li class="treeview">
        <a href="#"><i class="fa fa-link"></i> <span>PIN Wallet</span>
          <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
        </a>
        <ul class="treeview-menu">
          <li><a href="#">PIN Balance</a></li>

        </ul>
      </li>

      <li><a href="#"><i class="fa fa-plus-circle"></i> <span>Registration</span></a></li>
    </ul>
    <!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>
<div class="content-wrapper">

  <section class="content">
  @yield('content')
</section>


</div>
  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2016 <a href="#">Company</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane active" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript::;">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript::;">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="pull-right-container">
                  <span class="label label-danger pull-right">70%</span>
                </span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading"><i class="glyphicon glyphicon-wrench"></i> General Settings</h3>
          <p class="text-danger">Plese click on Text. checkbox clicked not working</p>        
          <hr>
          <div class="form-group">
            <label class="control-sidebar-subheading">              
              <input type="checkbox" id="vatsetting" class="minimal-red">
              <div class="pull-right cursor">Include Products VAT</div>
            </label>            
          </div>
        
          
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>



<script>
  function clossx()
  {
     document.getElementById('feedbackStatus').innerHTML = "";
  }


  $(function () {
    $("#example1").DataTable();
    $(".select2").select2();
  });

</script>
<script>
$(document).ready(function(){
  $("#Refresh").click(function(){
    location.reload();
  });

  $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
    checkboxClass: 'icheckbox_minimal-red',
    radioClass: 'iradio_minimal-red'
  });

});
</script>
</body>
</html>
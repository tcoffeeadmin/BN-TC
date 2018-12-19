<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Biryani Now</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  
   <link href="/css/style.css" rel="stylesheet">
  <link rel="icon" href="/images/favicon.png" type="image/gif" sizes="16x16">
   <!-- Bootstrap 3.3.7 -->
 <link rel="stylesheet" href="/css/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/css/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
   <link rel="stylesheet" href="/css/Ionicons/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="/css/_all-skins.css">

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

   <?php 
   // require("header.php");
   ?>
    @include('Admin/header')
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
     <?php 
   // require("menu.php");
   ?>
    @include('Admin/menu')
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
     Add Food
        
      </h1>

    </section>

    <!-- Main content -->
    <section class="content" id="edit-banner">
      <div class="row content-padding-top">
        <!-- left column -->
        <div class="col-md-8 col-md-offset-2">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">BIRIYANIS</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
          @if(count($errors) > 0)
              @foreach($errors -> all() as $error)
                <div class="alert alert-danger">{{ $error }}</div>
              @endforeach
            @endif




            @if (session('response'))
               <div class="alert alert-success">{{ session('response') }}</div>
            @endif
            <form role="form" method="post" action="{{ url('/add_biryani') }}" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="box-body">

                <div class="form-group{{ $errors->has('category') ? 'has-error': '' }}">
                  <label for="code">CODE</label><span style="color: red;">**</span>
                  <input type="text" name="code" class="form-control" value="{{ old('code') }}" id="exampleInputEmail1" placeholder="Code" >  <span style="color: red"><?php //echo form_error('code');?></span>
                </div>


                <div class="form-group{{ $errors->has('name') ? 'has-error': '' }}">
                  <label for="name">Name</label><span style="color: red;">**</span>
                  <input type="text" name="name" class="form-control" value="{{ old('name') }}" id="exampleInputEmail1" placeholder="Name">  <span style="color: red"><?php //echo form_error('name');?></span>
                </div>
        
                <div class="form-group{{ $errors->has('description') ? 'has-error': '' }}">
                  <label for="description">Description</label><span style="color: red;">**</span>
                  <textarea name="description" class="form-control" rows="3" placeholder="Description">{{ old('description') }}</textarea>  <span style="color: red"><?php //echo form_error('description');?></span>
                </div>
              

		 
			       <div class="form-group{{ $errors->has('price') ? 'has-error': ''}}">
              <label for="price">Price</label><span style="color: red;">**</span>
                  <input type="text" name="price" class="form-control" value="{{ old('price') }}" id="exampleInputEmail1" placeholder="Price" onkeypress="return isNumber(event)">  
                  <span style="color: red"><?php //echo form_error('price');?></span>
              </div>
				
				
				
      				<div class="col-xs-6 pa-left-rmve">
      				  <div class="form-group{{ $errors->has('gst') ? 'has-error':'' }}" >
      				  <label for="gst">Gst(%)</label><span style="color: red;">**</span>
      				  
                         <input type="text" name="gst" class="form-control" value="{{ old('gst') }}" placeholder="Gst(%)" onkeypress="return isNumber(event)">  
                         <span style="color: red"><?php //echo form_error('gst');?></span>
      				  </div>
      				</div>

              
              <div class="col-xs-6 pa-left-rmve">
                <div class="form-group{{ $errors->has('image') ? 'has-error':'' }}" >
                <label for="gst">Image</label><span style="color: red;">**</span>
                
                         <input type="file" name="image" class="form-control" accept=".jpg,.png" >  
                         <span style="color: red"><?php //echo form_error('gst');?></span>
                </div>
              </div>



	
            </div>
              <!-- /.box-body -->
            <div class="box-footer box-body">    
             <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">
                Submit
              </button>
            
                <button type="submit" class="btn btn-danger">Cancel</button>
              </div>
            </form>




      <div class="modal fade " id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content alert alert-success box-radius">
             
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                 <strong>Success!</strong> This alert box could indicate a successful or positive action.
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
      </div>
    </div> 
  </div>
      
</section>
    <!-- /.content -->
  </div>
 
  <!-- /.content-wrapper -->
 <?php  // require("footer.php"); ?>
  @include('Admin/footer')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
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
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
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
<script src="<?php// echo base_url(); ?>/assets/js/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php// echo base_url(); ?>assets/js/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php //echo base_url(); ?>assets/js/adminlte.min.js"></script>
<!-- DataTables -->
<script src="<?php //echo base_url(); ?>assets/js/jquery.dataTables.min.js"></script>
<script src="<?php //echo base_url(); ?>assets/js/dataTables.bootstrap.min.js"></script>

<script type="text/javascript">
  function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}
</script>

</body>
</html>

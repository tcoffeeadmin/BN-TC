

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <title>Biryani Now</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="icon" href="/images/favicon.png" type="image/gif" sizes="16x16">
  <link href="/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="/css/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/css/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
   <link rel="stylesheet" href="/css/Ionicons/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/css/AdminLTE.min.css">
  <link rel="stylesheet" href="/css/_all-skins.css">
  <link rel="stylesheet" href="/css/dataTables.bootstrap.min.css">


  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
@include('Admin/header')
  
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
      @include('Admin/menu')
 
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Food Items
        
      </h1>
    <a href="<?php //echo base_url()  ?>Food/add_food "><span style="font-size: 15px; color: green; float: right;">Click to add new food item >></span></a>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
         
          <!-- /.box -->

          <div class="box">
   
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>S. No</th>
                  <th>Name</th>
                  <th>Rate</th>
        				  <th>Delivery Day</th>
        				  <th>Activity</th>
                </tr>
                </thead>
                <tbody>


              <?php 

              // if(isset($food_info) && !empty($food_info)){
              // $i = 0; foreach ($food_info as $key) { $i++;

               ?>
                
                <tr>
                    <td><?php //echo $i; ?></td>
                    <td class="tooltip1"><?php //echo $key['item_name']; ?>
                      
                      <span class="tooltiptext"><?php
                       //echo $key['item_description'].'</br> Delivery Day : '.$key['day']; ?> 
                     </span>


                    </td>
                    <td><?php //echo 'Rs : '.$key['rate'].'(GST : '.$key['gst_percentage'].'%, Handling Charge : Rs '.$key['handling_rate'].')' ?></td>
                    <td><?php //echo $key['day']; ?> </td>
                    <td>
                      <ul class="action">
                          <li>
                            <form id="form_food" method="post" action="<?php //echo base_url(); ?>Food/edit ">
                              <input type="hidden" name="food_id" value="<?php //echo $key['id']; ?>">
                                <button type="submit" class="btn icon-btn">
                                    <img src="<?php //echo base_url(); ?>images/Pencil.png">
                                </button>
                            </form>

                          </li>
                           <li>
                          <!--button toggle-->
                            <?php 
                           // if($key['status'] == '1')
                           // {
                           //  $check = 'checked="checked"';
                           // }
                           // else if($key['status'] == '0')
                           // {
                           //    $check = "";
                           // }

                  ?>
                          <div class="onoffswitch">
                              <input type="checkbox" value="<?php //echo $key['id']; ?>" onchange="change_status(this.id)" name="<?php //echo $key['id']; ?>onoffswitch" class="onoffswitch-checkbox" id="<?php //echo $key['id']; ?>myonoffswitch"  <?php //if(isset($check)){ echo $check; } ?> >

                              
                              <label class="onoffswitch-label" for="<?php //echo $key['id']; ?>myonoffswitch">
                                  <span class="onoffswitch-inner"></span>
                                  <span class="onoffswitch-switch"></span>
                              </label>
                          </div>
                          <!--button toggle end-->
                            </li>
                              <li>

                            <form id="form_food" method="post" action="<?php //echo base_url(); ?>Food/delete ">
                              <input type="hidden" name="delete_id" value="<?php //echo $key['id']; ?>">
                               <button type="submit" class="btn icon-btn">
                                    <img src="<?php // base_url(); ?>images/trash.png">
                                  </button>
                            </form>

                            </li>

                      </ul>
                    </td>
                </tr>
   
              <?php //} }
              //else{ ?>
                      
                  <tr>
                    <td colspan="5">No food items</td>
                  </tr>         
              <?php //} ?>
           </tbody>

              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php   //require("footer.php"); ?>
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
<!-- ./wrapper -->
<script src="/js/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="/js/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="/js/adminlte.min.js"></script>
<!-- DataTables -->
<script src="/js/jquery.dataTables.min.js"></script>
<script src="/js/dataTables.bootstrap.min.js"></script>
<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>

<script type="text/javascript">
    function edit()
  {
    document.getElementById("form_food").submit();
  }




  function change_status(value)
  {
  
        var id = document.getElementById(value).value;
        var c=document.getElementById(value);
        if (c.checked) 
        {
          var status = '1';


               $.ajax({
               type: "POST",
               url: "<?php  //echo base_url(); ?>" + "/Food/active_inactive",
               data: {status: status,id:id},
             //  dataType: JSON,  
               cache:false,
               success: 
                    function(data)
                    {
                     if(data == '1')
                     {
                      alert("Food Activated");
                     }
                    }
                });

        }
        else
        {
          var status = '0';

               $.ajax({
               type: "POST",
               url: "<?php  //echo base_url(); ?>" + "/Food/active_inactive",
               data: {status: status,id:id},
             //  dataType: JSON,  
               cache:false,
               success: 
                    function(data)
                    {
                     if(data == '1')
                     {
                      alert("Food Inactivated");
                     
                     }
                    }
                });
        }

  }

</script>
</body>
</html>
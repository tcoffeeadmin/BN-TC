 <?php 
         // $dbhost = 'tcbs.co.in';
         // $dbuser = 'tcbscvvs_tiffin';
         // $dbpass = '3dTXvygT!Z%x';
         // $dbname = 'tcbscvvs_tiffinlife';
        
         // $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

         // if ($conn->connect_error) {
         //      die("Connection failed: ".$conn->connect_error);
         //  } 

         //  $sql = "SELECT * FROM  notification_status WHERE notification_status='0' ";
         //  $result = $conn->query($sql);
         //  $allnotification =  $result->num_rows; 

         //  $sql1 = "SELECT * FROM  notification_status WHERE notification_status='0' AND comment_type = '1' ";
         //  $result1 = $conn->query($sql1);
         //  $newuser =  $result1->num_rows; 

         //  $sql2 = "SELECT * FROM  notification_status WHERE notification_status='0' AND comment_type = '2' ";
         //  $result2 = $conn->query($sql2);
         //  $order =  $result2->num_rows; 

         //  $sql3 = "SELECT * FROM  notification_status WHERE notification_status='0' AND comment_type = '3' ";
         //  $result3 = $conn->query($sql3);
         //  $cancel =  $result3->num_rows; 

 ?>

<style type="text/css">

    .avatar{
      border-radius: 100%;
      max-width: 25%;
    }  
</style>


  <header class="main-header">
    <!-- Logo -->
    <a href="<?php ///echo base_url() ?>Home/index " class="logo logo-bkg-color">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini">
          <img src="<?php //echo base_url() ?>images/favicon.png">  
      </span>
      <span class="logo-lg">
                  <img width="50px" height="50px" src="/images/logo.png">
      </span>

    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                          <!-- <img class="avatar" src="http://127.0.0.1:8000/uploads/PICTC082018013.jpg"> -->
                      </div>
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <!-- end message -->
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="../../dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        AdminLTE Design Team
                        <small><i class="fa fa-clock-o"></i> 2 hours</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="../../dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Developers
                        <small><i class="fa fa-clock-o"></i> Today</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="../../dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Sales Department
                        <small><i class="fa fa-clock-o"></i> Yesterday</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="../../dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Reviewers
                        <small><i class="fa fa-clock-o"></i> 2 days</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->



          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning"><?php if(isset($allnotification)){ echo $allnotification; } ?></span>
            </a>

            <ul class="dropdown-menu">
              <li class="header">You have <?php if(isset($allnotification)){ echo $allnotification; } ?> notifications</li>


              <li>

                <!-- inner menu: contains the actual data -->
                <ul class="menu">

                  <li>
                    <a href="<?php //echo base_url(); ?>Home/remove_user_notification">
                      <i class="fa fa-users text-aqua"></i> <?php if(isset($newuser)){ echo $newuser; } ?> new members joined 
                    </a>
                  </li>

                   <li>
                    <a href="<?php //echo base_url(); ?>Home/remove_order_notification">
                      <i class="fa fa-shopping-cart text-green"></i> <?php if(isset($order)){ echo $order; } ?> Order today
                    </a>
                  </li>

                  <li>
                    <a href="<?php //echo base_url(); ?>Home/remove_cancel_notification">
                      <i class="fa fa-users text-red"></i> <?php if(isset($cancel)){ echo $cancel; } ?> Cancel request received 
                    </a>
                  </li>

                </ul>


              </li>
              <li class="footer"><a href="<?php //echo base_url(); ?>Home/notications">View all</a></li>
            </ul>

          </li>





          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="http://127.0.0.1:8000/uploads/PICTC082018013.jpg" class="user-image" alt="User Image">
               <!-- <img class="avatar" src="http://127.0.0.1:8000/uploads/PICTC082018013.jpg"> -->
              <span class="hidden-xs">Alexander Pierce</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="http://127.0.0.1:8000/uploads/PICTC082018013.jpg" class="img-circle" alt="User Image">

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
                  <a href="{{ route('logout') }}" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
         <!--  <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li> -->
        </ul>
      </div>
    </nav>
  </header>
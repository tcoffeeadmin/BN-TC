    <section class="sidebar menu-color" >
      <!-- Sidebar user panel -->
      <!-- <div class="user-panel"> -->
      <!--   <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div> -->
       <!--  <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div> -->
      <!-- </div> -->
      <!-- search form -->
   <!--    <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form> -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu border-color" data-widget="tree">
       <!--  <li class="header">MAIN NAVIGATION</li>
 -->

          <li class="active">
          <a href="{{route('dashboard')}}">
            <i class="fa fa-tachometer" aria-hidden="true"></i> <span>Dashboard</span>
            <span class="pull-right-container">
        <!--       <small class="label pull-right bg-green">new</small> -->
            </span>
          </a>
        </li>
        <li>
          <a href="{{route('orders')}}">
           <i class="fa fa-book" aria-hidden="true"></i><span>Orders</span>
            <span class="pull-right-container">
        <!--       <small class="label pull-right bg-green">new</small> -->
            </span>
          </a>
        </li>

        <li>
         <a href="{{route('user1')}}">
          <i class="fa fa-users" aria-hidden="true"></i> <span>Users</span>
            <span class="pull-right-container">
        <!--       <small class="label pull-right bg-green">new</small> -->
            </span>
          </a>
        </li>



        <li>
          <a href="{{route('fooditems')}}">
          <i class="fa fa-cutlery" aria-hidden="true"></i><span>Food Items</span>
            <span class="pull-right-container">
        <!--       <small class="label pull-right bg-green">new</small> -->
            </span>
          </a>
        </li>




      </ul>
    </section>
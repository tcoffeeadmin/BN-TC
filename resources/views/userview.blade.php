<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
<title>tifinlife</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta property="og:title" content="tifinlife"/>
<meta property="og:image" content="images/feel_hungry.png"/>
<meta property="og:site_name" content="tifinlife"/>
<meta property="og:description" content="Get hot, fresh, healthy homemade lunch served at your desk every day. "/>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="icon" href="/images/favicon.png" type="image/gif" sizes="16x16">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<link href="/user/css/style.css" rel="stylesheet" type="text/css"/>
<link href="/user/css/users-style.css" rel="stylesheet" type="text/css"/>

<link rel="stylesheet" href="/css/datepicker.css">

<link href="https://fonts.googleapis.com/css?family=Markazi+Text" rel="stylesheet">
<style>
.form-area .links li{
display:inline;
float:left;
padding-right:12px;
}
.form-area .links{
width:100%;
float:left;
padding: 10px 4px;
	}
.form-area .links li a{
font-family: 'ClanPro-News';
font-size: 13px;
color:#818181;
cursor:mousepoint;
	}
.form-area .links li a:hover{
text-decoration:none;
color:#67a23e;
cursor:pointer;
}
    .btn-round .modal-header,#signin .modal-header{
    border:none;}
    #resiter-form .btn-round,#signin .btn-round{
    width: 40px;
    height: 40px;
    float: right;
    border: 1px solid #000;
    border-radius: 60px;
	}
	#resiter-form .btn-round, #signin .btn-round{
	position:relative;
	}
	#resiter-form .t-close-btn,#signin .t-close-btn{
	padding: 0px;
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    margin: auto;
    width: 32px;
	color: #000 !important;
	font-size: 35px;
	opacity:.9;
	}
#resiter-form .t-close-btn :focus, #signin .t-close-btn :focus{
outline:none !important;
}	
	.form-area .active{
  background:#67a23e !important;
  color:#fff !important;
}
.form-area .tick-box{
text-align:left;
}
.form-area .tick-box span{
font-family: 'ClanPro-News';
font-size: 13px;
}
.form-area .already p{
text-align:center;
    font-family: 'ClanPro-News';
    font-size: 13px;}
.form-area .already a{
	font-family: 'ClanPro-News';
    font-size: 13px;
	color:#67a23e;
	}
	.form-area .txt-right{
	text-align:right;}
		.form-area .txt-left{
	text-align:left;}
	.form-area .txt-right a{
	font-family: 'ClanPro-News';
    font-size: 13px;
	color:#818181;
	}
	.form-area label{
	font-family: 'ClanPro-News';
    font-size: 13px;
	color:#818181;
	}
	.form-area .txt-right a{
	    text-align: center;
    font-family: 'ClanPro-News';
    font-size: 13px;
	color:#818181;
	}
	.form-area .txt-right a:hover{
	text-decoration:none;
	color: #67a23e;
	mousepoint:cursor;
	}
	.form-area input[type="checkbox"]{
    border: 1px solid #59A29B;
    background color: #FFFFFF;
    box-shadow: inset 0 1px 3px rgba(103,162,62,.9);
}
 .checkbox.checkbox-circle label::before {
    border-radius: 50%; }
  .checkbox.checkbox-inline {
    margin-top: 0; }
</style>
</head>
<body>

	
<!-- <input type="button" onclick="test()" name="" value="testing">
 --><div class="container-fluid rem-pad">
	<nav class="navbar navbar-default navigation-bar">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header logo logo-area">
			<a class="navbar-brand" href="#"><img src="<?php //echo base_url(); ?>images/tifinlife.png" class="img-responsive" alt="logo"></a>
			<!--<a href="#subscribe" class="visible-xs"><button type="button" class="btn btn-default xs-button">Subscribe Now</button></a>-->
		</div>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="button-area">
			<ul>
				<li><button type="button" class="btn t-btn white-btn" data-toggle="modal" data-target="#signin">Sign in</button></li>
				<li><button type="button" class="btn t-btn green-btn" data-toggle="modal" data-target="#resiter-form">Register</button></li>
			</ul>
		</div>
	</div>
	<!-- /.container-fluid -->
	</nav>
	<!--<div class="xs-phone visible-xs"><a href="tel:8138866866" >Call Now: +91 8138866866</a></div>-->

<form action="<?php //echo base_url(); ?>User/order" method="post">

<?php
	 if(isset($_POST['order_type'])){

		  if($_POST['order_type'] == "Instantly")
		  {
		    $check1 = 'checked="checked"';
		    $check2 = "";
		  }
		  else if($_POST['order_type'] == 'Monthly')
		  {
		    $check2 = 'checked="checked"';
		    $check1 = "";
		  }
	 }
?>

	<div class="col-md-12 col-sm-12 col-xs-12 rem-pad">
		<!--- pull item start---->
		<div class="col-md-6 col-md-push-6 col-sm-12 rem-pad silver">
			<div class="t-banner-form-area form-area">
				<!---test--->
				<div id="radio-btn-style-1">
					<ul class="radio-btn-style">
						<li>
						<label class="box">
						 <input type="radio" onclick="change_order_tyep(this.value)" <?php if(isset($check1)){ echo $check1; } else { echo 'checked="checked"'; } ?> value="Instantly" name="order_type">
						<span class="checkmark left-radius ">Instantly</span>
						</label>
						</li>
						<li>
						<label class="box">
						 <input type="radio" onclick="change_order_tyep(this.value)" <?php if(isset($check2)){ echo $check2; } ?>  value="Monthly" name="order_type"> 
						<span class="checkmark right-radius">Monthly</span>
						</label>
						</li>
					</ul>
				</div>
				<span style="color: red"><?php //echo form_error('order_type');?></span>
				<!---test end--->
				<!--<div class="btn-group t-btn-grup">
                          <button type="button" class="btn btn-primary btn-lg">Instantly</button>
                          <button type="button" class="btn btn-primary btn-lg">Monthly</button>
                            </div>-->
				<div class="form-group row t-form-group">
					<div class="col-sm-8" id="instantly_order_div">
						<div class="text-feild-height">
							<div class="select-arrow">
								    <?php 
								        date_default_timezone_set('Asia/Kolkata');
								        $today = date("l"); 
								    ?>

								    <select class="form-control input-lg select border-round" id="sel1" name="food_item">
								        <option value="">Select Food</option>

								        <?php 
								        if(!empty($food_info)){
								        foreach ($food_info as $key) { 

								        if($key['delivery_type'] == 'Daily')
								        	{

								          if($key['day'] == $today) { 

								            if(isset($_POST['food_item'])){
								              if(trim($_POST['food_item']) == trim($key['id']))
								              {
								                $select = 'selected="selected"';
								              }
								              else
								              {
								                $select = "";
								              }
								            }
								        ?>
								            
								            <option   <?php if(isset($select)){ echo $select; } ?> value="<?php echo $key['id']; ?> "  >
								             <?php echo  $key['item_name'] ?>
								              
								            </option>
								     
								            <?php 
								            } 
								          } 

								      }

								     } ?>

								      </select>


								 <span style="color: red"><?php //echo form_error('food_item');?></span>
							</div>
						</div>
					</div>



					<div class="col-sm-8" style="display: none;" id="monthly_order_div">
					  <div class="text-feild-height">
					    <?php 
					          date_default_timezone_set('Asia/Kolkata');
					          $today = date("l"); 
					      ?>
					      <select class="form-control input-lg select" id="sel1" name="food_package">
					      	<option value="">Select Package</option>
					      	 <?php 
						        if(!empty($food_info)){
						        foreach ($food_info as $key) { 

						        if($key['delivery_type'] == 'Monthly')
						        	{

						            if(isset($_POST['food_item'])){
						              if(trim($_POST['food_item']) == trim($key['id']))
						              {
						                $select = 'selected="selected"';
						              }
						              else
						              {
						                $select = "";
						              }
						            }
						        ?>
					        
					        <option   <?php if(isset($select)){ echo $select; } ?> value="<?php echo $key['id']; ?> "  >
								             <?php echo  $key['item_name'] ?>
								              
								            </option>
								     
								            <?php 
								             
								          } 

								      }

								     } ?>
					      </select>
					   
					      <span style="color: red"><?php //echo 


					      ('food_package');?></span>
					    </div>
					  </div>


					<div class="col-sm-4">
					  <div class="text-feild-height">
					      <select class="form-control input-lg select" id="sel1" name="item_qty">

					        <?php 
					            if(isset($_POST['item_qty'])) 
					            {

					              { $option = 'selected="selected"';
					                $option1 = "";
					                $option2 = "";
					                $option3 = "";
					                $option4 = "";
					                $option5 = "";
					                $option6 = "";
					                $option7 = "";
					                $option8 = "";
					                $option9 = "";
					                $option10 = "";
					              }
					              else if($_POST['item_qty'] == "1")
					              { 
					                $option = "";
					                $option1 = 'selected="selected"';
					                $option2 = "";
					                $option3 = "";
					                $option4 = "";
					                $option5 = "";
					                $option6 = "";
					                $option7 = "";
					                $option8 = "";
					                $option9 = "";
					                $option10 = "";
					              }

					              else if($_POST['item_qty'] == "2")
					              { 
					                $option = "";
					                $option1 = "";
					                $option2 = 'selected="selected"';
					                $option3 = "";
					                $option4 = "";
					                $option5 = "";
					                $option6 = "";
					                $option7 = "";
					                $option8 = "";
					                $option9 = "";
					                $option10 = "";
					              }

					              else if($_POST['item_qty'] == "3")
					              { 
					                $option = "";
					                $option1 = "";
					                $option2 = "";
					                $option3 = 'selected="selected"';
					                $option4 = "";
					                $option5 = "";
					                $option6 = "";
					                $option7 = "";
					                $option8 = "";
					                $option9 = "";
					                $option10 = "";
					              }

					              else if($_POST['item_qty'] == "4")
					              { 
					                $option = "";
					                $option1 = "";
					                $option2 = "";
					                $option3 = "";
					                $option4 = 'selected="selected"';
					                $option5 = "";
					                $option6 = "";
					                $option7 = "";
					                $option8 = "";
					                $option9 = "";
					                $option10 = "";
					              }

					              else if($_POST['item_qty'] == "5")
					              { 
					                $option = "";
					                $option1 = "";
					                $option2 = "";
					                $option3 = "";
					                $option4 = "";
					                $option5 = 'selected="selected"';
					                $option6 = "";
					                $option7 = "";
					                $option8 = "";
					                $option9 = "";
					                $option10 = "";
					              }

					              else if($_POST['item_qty'] == "6")
					              { 
					                $option = "";
					                $option1 = "";
					                $option2 = "";
					                $option3 = "";
					                $option4 = "";
					                $option5 = "";
					                $option6 = 'selected="selected"';
					                $option7 = "";
					                $option8 = "";
					                $option9 = "";
					                $option10 = "";
					              }

					              else if($_POST['item_qty'] == "7")
					              { 
					                $option = "";
					                $option1 = "";
					                $option2 = "";
					                $option3 = "";
					                $option4 = "";
					                $option5 = "";
					                $option6 = "";
					                $option7 = 'selected="selected"';
					                $option8 = "";
					                $option9 = "";
					                $option10 = "";
					              }

					              else if($_POST['item_qty'] == "8")
					              { 
					                $option = "";
					                $option1 = "";
					                $option2 = "";
					                $option3 = "";
					                $option4 = "";
					                $option5 = "";
					                $option6 = "";
					                $option7 = "";
					                $option8 = 'selected="selected"';
					                $option9 = "";
					                $option10 = "";
					              }

					              else if($_POST['item_qty'] == "9")
					              { 
					                $option = "";
					                $option1 = "";
					                $option2 = "";
					                $option3 = "";
					                $option4 = "";
					                $option5 = "";
					                $option6 = "";
					                $option7 = "";
					                $option8 = "";
					                $option9 = 'selected="selected"';
					                $option10 = "";
					              }

					              else if($_POST['item_qty'] == "10")
					              { 
					                $option = "";
					                $option1 = "";
					                $option2 = "";
					                $option3 = "";
					                $option4 = "";
					                $option5 = "";
					                $option6 = "";
					                $option7 = "";
					                $option8 = "";
					                $option9 = "";
					                $option10 = 'selected="selected"';
					              }

					            }
					        ?>
					        <option value="" <?php if(isset($option)){ echo $option; }  ?> >select Qty</option>
					        <option value="1" <?php if(isset($option1)){ echo $option1; }  ?> >1</option>
					        <option value="2" <?php if(isset($option2)){ echo $option2; }  ?> >2</option>
					        <option value="3" <?php if(isset($option3)){ echo $option3; }  ?> >3</option>
					        <option value="4" <?php if(isset($option4)){ echo $option4; }  ?> >4</option>
					        <option value="5" <?php if(isset($option5)){ echo $option5; }  ?> >5</option>
					        <option value="6" <?php if(isset($option6)){ echo $option6; }  ?> >6</option>
					        <option value="7" <?php if(isset($option7)){ echo $option7; }  ?> >7</option>
					        <option value="8" <?php if(isset($option8)){ echo $option8; }  ?> >8</option>
					        <option value="9" <?php if(isset($option9)){ echo $option9; }  ?> >9</option1>
					        <option value="10" <?php if(isset($option10)){ echo $option10; }  ?> >10</option>

					      </select>
					      <span style="color: red"><?php //echo form_error('item_qty');?></span>
					    </div>
					  </div>



					<div class="col-sm-6">
					 <div class="text-feild-height">
					     
					       <select class="form-control input-lg select" id="sel1" name="location">
					        <option value="">select Location</option>

					        <?php 
					        if(isset($location) && !empty($location)) {
					            foreach ($location as $key) { 
					              if(isset($_POST['location']))
					              {
					                if($_POST['location'] == $key['id'])
					                {
					                  $select = 'selected="selected"';
					                }
					                else
					                {
					                  $select = "";
					                }
					              }
					              ?>
					            <option  value="<?php echo $key['id'] ?>" <?php if(isset($select)){ echo $select; } ?> ><?php echo $key['location']; ?></option>
					        <?php } } ?>
					  
					      </select>
					        <span style="color: red"><?php// echo form_error('location');?></span>
					   </div>
					</div>



					<div class="col-sm-6">
					<div class="text-feild-height">
					      <input type="text" class="form-control input-lg" select" name="company" placeholder="company / Floor" value="<?php if(isset($_POST['company'])){ echo $_POST['company']; } ?>">
					      <span style="color: red"><?php //echo form_error('company');?></span>
					   </div>
					</div>



					<div class="col-sm-6 col-sm-offset-3">
					 <div class="input-group text-feild-height">
					     
					    <!-- <input id="id_delivery_date" type="date" class="form-control date-icon input-lg" name="delivery_date" placeholder="" value="<?php //if(isset($_POST['delivery_date'])){ echo $_POST['delivery_date']; } ?>" > -->

					    <input type="text" class="form-control input-lg" data-toggle="datepicker" placeholder="Delivery date" name="delivery_date" id="id_delivery_date" value="<?php if(isset($_POST['delivery_date'])){ echo $_POST['delivery_date']; } ?>">


					  <span class="input-group-addon calendar-icon-style"><i class="glyphicon glyphicon-calendar"></i></span>
					  
					  </div>
					  <span style="color: red"><?php// echo form_error('delivery_date');?></span>
					</div>




					<div class="col-sm-12">
						<button type="submit" class="btn order-btn btn-lg">ORDER NOW</button>
					</div>

				</div>
			</div>
			<!---form end--->
		</div>
		<!--- pull item end---->
		<!--- pushitem---->
		<div class="col-md-6 col-md-pull-6 col-sm-12 rem-pad hungry-img">
			<div class="hungry-img-content">
				<h3>Now your lunch is only a click away </h3>
			</div>
		</div>
		<!--- pushitem end---->
	</div>
</form>
</div>
</div>
<div class="container-fluid order-before">
<h5>ORDER BEFORE 9AM</h5>
</div>
<!--food items--->
<div class="container" id="food-items">
<div class="page-header t-header">
	<h1>FOOD MENU</h1>
</div>
<div class="row row-padd-botm">
	<div class="col-xs-12 col-sm-6 col-md-4">
		<div class="thumbnail food-item-style food-item-active">
			<div class="hover14">
				<div>
					<figure class="circle-img-bkg bkg-img-1">
				</div>
			</div>
			<div class="caption caption-style">
				<div class="caption-bkg-style">
					<h3>Veg Meals</h3>
				</div>
				<div class="caption-day-style">
					<p>
						 Monday
					</p>
				</div>
			</div>
		</div>
	</div>
	<div class="col-xs-12 col-sm-6 col-md-4">
		<div class="thumbnail food-item-style">
			<div class="hover14">
				<div>
					<figure class="circle-img-bkg bkg-img-2">
				</div>
			</div>
			<div class="caption caption-style">
				<div class="caption-bkg-style">
					<h3>Veg Meal with Fish Fry</h3>
				</div>
				<div class="caption-day-style">
					<p>
						 Tuesday
					</p>
				</div>
			</div>
		</div>
	</div>
	<div class="col-xs-12 col-sm-6 col-md-4">
		<div class="thumbnail food-item-style">
			<div class="hover14">
				<div>
					<figure class="circle-img-bkg bkg-img-3">
				</div>
			</div>
			<div class="caption caption-style">
				<div class="caption-bkg-style">
					<h3>Ghee Rice</h3>
				</div>
				<div class="caption-day-style">
					<p>
						 Wednesday
					</p>
				</div>
			</div>
		</div>
	</div>
	<!--second--->
	<div class="col-xs-12 col-sm-6 col-md-4">
		<div class="thumbnail food-item-style">
			<div class="hover14">
				<div>
					<figure class="circle-img-bkg bkg-img-4">
				</div>
			</div>
			<div class="caption caption-style">
				<div class="caption-bkg-style">
					<h3>Fish Curry Meals</h3>
				</div>
				<div class="caption-day-style">
					<p>
						 Thursday
					</p>
				</div>
			</div>
		</div>
	</div>
	<div class="col-xs-12 col-sm-6 col-md-4">
		<div class="thumbnail food-item-style">
			<div class="hover14">
				<div>
					<figure class="circle-img-bkg bkg-img-5">
				</div>
			</div>
			<div class="caption caption-style">
				<div class="caption-bkg-style">
					<h3>Biriyani</h3>
				</div>
				<div class="caption-day-style">
					<p>
						 Friday
					</p>
				</div>
			</div>
		</div>
	</div>
	<div class="col-xs-12 col-sm-6 col-md-4">
		<div class="thumbnail food-item-style">
			<div class="hover14">
				<div>
					<figure class="circle-img-bkg bkg-img-6">
				</div>
			</div>
			<div class="caption caption-style">
				<div class="caption-bkg-style">
					<h3>North Indian Meal</h3>
				</div>
				<div class="caption-day-style">
					<p>
						 Saturday
					</p>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<!----healthy homemade ---->
<div class="container-fluid" id="headlthy-homemade">
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="col-md-4">
				<div class="contet-img-style">
					<img src="<?php //echo base_url(); ?>images/feel_hungry.png" class="img-responsive">
				</div>
			</div>
			<div class="col-md-8">
				<div class="contet-style">
					<p>
						 Hungry? Get hot, fresh, healthy homemade lunch served at your desk every day. We, Tifinlife believe in eating healthy.We will make sure that you eat in time, every day without fail, be it the beginning of the month or the end. Now worried about washing the tiffin box? Eat and forget. We will clean and sterilise it every day.
					</p>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<div class="container" id="efficient">
<div class="row">
	<div class="col-xs-12 col-sm-6 col-md-4">
		<div class="thumbnail thumbnail-style">
			<div class="green-round">
				<img src="<?php //echo base_url(); ?>images/s-icon-1.png">
			</div>
			<h4>DESK DELIVERY</h4>
		</div>
	</div>
	<div class="col-xs-12 col-sm-6 col-md-4">
		<div class="thumbnail thumbnail-style">
			<div class="green-round">
				<img src="<?php //echo base_url(); ?>images/s-icon-2.png">
			</div>
			<h4>healthy</h4>
		</div>
	</div>
	<div class="col-xs-12 col-sm-6 col-md-4">
		<div class="thumbnail thumbnail-style">
			<div class="green-round">
				<img src="<?php //echo base_url(); ?>images/s-icon-3.png">
			</div>
			<h4>hygiene</h4>
		</div>
	</div>
	<!--second--->
	<div class="col-xs-12 col-sm-6 col-md-4">
		<div class="thumbnail thumbnail-style">
			<div class="green-round">
				<img src="<?php //echo base_url(); ?>images/s-icon-4.png">
			</div>
			<h4>royal</h4>
		</div>
	</div>
	<div class="col-xs-12 col-sm-6 col-md-4">
		<div class="thumbnail thumbnail-style">
			<div class="green-round">
				<img src="<?php //echo base_url(); ?>images/s-icon-5.png">
			</div>
			<h4>Cost efficient</h4>
		</div>
	</div>
	<div class="col-xs-12 col-sm-6 col-md-4">
		<div class="thumbnail thumbnail-style">
			<div class="green-round">
				<img src="<?php //echo base_url(); ?>images/s-icon-6.png">
			</div>
			<h4>No preservatives</h4>
		</div>
	</div>
</div>
</div>
<!---
-test--
-----
  <div class="col-xs-12" id="listResults">
    <div class="col-xs-2 text-center">
      <div class="checkbox checkbox-circle">
        <input id="checkbox1" type="checkbox" checked>
        <label></label>
      </div>
    </div>
  </div>-----
-------->
<!------
------
----test end-
-------
------>
<div class="container-fluid" id="footer">
<div class="container">
	<div class="row">
		<div class="col-sm-12 col-xs-12 footer-main-content-pad">
			<div class="col-md-6">
				<div class="footer-logo">
					<img src="<?php //echo base_url(); ?>images/footer-logo.png" class="img-responsive">
				</div>
			</div>
			<div class="col-md-6">
				<div class="footer-links">
					<ul>
						<li><a href="#">FAQ </a></li>
						<li><a href="#">Privacy policy</a></li>
						<li><a href="#">Term & Conditions</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-md-12">
			<div class="copy-right">
				<p>
					 &nbsp; 2018 Tifinlife
				</p>
			</div>
		</div>
	</div>
</div>
</div>
<!--signin--form---->
<!-- Modal -->
<div class="modal fade" id="signin" role="dialog">
<div class="modal-dialog">
	<!-- Modal content-->
	<div class="modal-content">
		<div class="modal-body">
			<!-------------------
 --------------------
 new form------------
 ------------------->
			<div class="btn-round">
				<button type="button" class="close t-close-btn" data-dismiss="modal">&times;</button>
			</div>
			<div class="t-banner-form-area form-area">
				<!---test--->




				<div id="radio-btn-style-1">
					<ul class="radio-btn-style">
						<li>
						<label class="box">
						<input type="radio" checked="checked" name="radio">
						<span class="checkmark left-radius active">Signin</span>
						</label>
						</li>
						<li>
						<label class="box">
						<input type="radio" checked="checked" name="radio">
						<span class="checkmark right-radius">Register</span>
						</label>
						</li>
					</ul>
				</div>


<!-- login popup -->

				<!---test end--->
			<form action="<?php //echo base_url() ?>User/user_login" method="post">

				<div class="form-group row t-form-group">
					<span style="color: red; "><?php if(isset($error)){ echo $error; }  ?></span>
					<span style="color: red; display: none;" id="no_user">User does not exist</span>
					<div class="col-sm-12">
						<div class="text-feild-height already">
							<p>
								 Don't have an account?<a href="<?php //echo base_url(); ?>User/register"> Register.</a>
							</p>
						</div>
					</div>

					<div class="col-sm-12">
						<div class="text-feild-height ">
							<input type="text" class=" pos-demo form-control input-lg" name="username" placeholder="Email ID or Mobile Number" id="id_username" >
							<span style="float: right; display: none;" id="id_change"><a href="#" onclick="change_value();">Change?</a></span>
							<span style="color: red"><?php //echo form_error('mobile');?></span>
       						<span style="color: red; display: none;" id="invalid_error">Enter valid Email ID / Mobile Number</span>

						</div>
					</div>

					<div class="col-sm-12" id="id_password_box">
						<div class="text-feild-height ">
							 <input type="password" class=" pass-demo form-control input-lg" id="id_pwd" placeholder="Password" name="pwd" >
							 <span style="color: red; display: none;" id="invalid_pass_error">Enter your password</span>
						</div>
					</div>


				    <div class=" col-sm-12" style="display: none;" id="otp_div">		
					    <div class="text-feild-height ">		     
					      <input type="text" class=" otp-demo form-control input-lg" id="id_otp" maxlength="6" placeholder="OTP" name="otp" onkeyup="check_otp(this.value)">
					       <span id="otp_error"  style=" display: none; color: red">Invalid OTP</span>
					    </div>
				    </div>


				    <div class=" col-sm-12" style="display: none;" id="new_password_div">
					    <div class="text-feild-height ">
					      <input type="password" class="form-control input-lg" id="id_newpassword" placeholder="new password" name="newpassword">
					       <span style="color: red"><?php //echo form_error('newpassword');?></span>
					    </div>
				    </div>


				    <div class=" col-sm-12 " style="display: none" id="confirmpwd_div">
					    <div class="text-feild-height ">
					    <input type="password" class="form-control input-lg" id="id_confmpwd" placeholder="confirm password" name="confmpwd" >
					       <span style="color: red"><?php //echo form_error('confmpwd');?></span>
					    </div>
				    </div>


					<div class="col-sm-6">
						<div class="text-feild-height already">
							<div class="checkbox txt-left">
								<label><input type="checkbox" value="">Remeber me?</label>
							</div>
						</div>
					</div>

					<div class="col-sm-6">
						<div class="text-feild-height already txt-right">
							<a href="#" onclick="send_otp()">Forgot your password?</a>
						</div>
					</div>

					<div class="col-sm-12">
						<input type="hidden" name="status" id="id_status" value="0">
						 <button type="button" class="btn order-btn btn-lg" onclick="login();">Signin</button>
					</div>

				</div>

			</form>


			</div>
			<!------------------
 -------------------------
 new form end------------
 ----------------------->
		</div>
	</div>
</div>
</div>
<!--sign in--form end---->
<!--Register form--->
<div class="modal fade" id="resiter-form" role="dialog">
<div class="modal-dialog">
	<!-- Modal content-->
	<div class="modal-content">
		<div class="modal-body">
			<div class="btn-round">
				<button type="button" class="close t-close-btn" data-dismiss="modal">&times;</button>
			</div>
			<div class="t-banner-form-area form-area">
				<!---test--->
				<div id="radio-btn-style-1">
					<ul class="radio-btn-style">
						<li>
						<label class="box">
						<input type="radio" checked="checked" name="radio">
						<span class="checkmark left-radius">Signin</span>
						</label>
						</li>
						<li>
						<label class="box">
						<input type="radio" checked="checked" name="radio">
						<span class="checkmark right-radius active">Register</span>
						</label>
						</li>
					</ul>
				</div>
				<!---test end--->
				<div class="form-group row t-form-group">
					<div class="col-sm-12">
						<div class="text-feild-height already">
							<p>
								 Already have an account ? <a href="#">Sign In</a>
							</p>
						</div>
					</div>

					<div class="col-sm-6">
						<div class="text-feild-height ">
							<input type="text" class=" first-name form-control input-lg" placeholder="First Name" id="id_first_name">
						</div>
					</div>
					<div class="col-sm-6">
						<div class="text-feild-height ">
							<input type="text" class=" last-name form-control input-lg" placeholder="Last Name" id="id_lastname">
						</div>
					</div>
					<!---mobile no--->
					<div class="col-sm-3">
						<div class="text-feild-height ">
							<input type="text" class=" country-code form-control input-lg" value="+91" readonly="readonly" id="id_country_code">
						</div>
					</div>
					<div class="col-sm-9">
						<div class="text-feild-height ">
							<input type="text" class=" mobile form-control input-lg" maxlength="10" placeholder="Mobile" id="id_mobile">
						</div>
					</div>
					<!--mobile no end-->
					<!-- otp start -->
					<div class="col-sm-12" style="display: none">
							<div class="text-feild-height ">
								<input type="text" class=" regotp form-control input-lg" placeholder="OTP" id="id_regotp">
							</div>
						</div>

					<!-- otp end -->
					<div class="col-sm-12">
						<div class="text-feild-height ">
							<input type="text" class=" email form-control input-lg" placeholder="Email" id="id_email">
						</div>
					</div>
					<!--password---confirm--->
					<div class="col-sm-6">
						<div class="text-feild-height ">
							<input type="text" class=" password form-control input-lg" placeholder="Password" id="id_password">
						</div>
					</div>
					<div class="col-sm-6">
						<div class="text-feild-height ">
							<input type="text" class="confirmpass form-control input-lg" placeholder="Confirm Password" id="id_confirmpassword">
						</div>
					</div>
					<!-----------------
  --------hidwen feild-----------
  ---------------------
  -------------------->
					<div>
						
						

					</div>
					<!--------------------
  ----------------hidwen feild--------
  ----------------------
  ---------------------->
					<div class="col-sm-12">
						<div class="text-feild-height tick-box">
							<label class="checkbox-inline">
							<input type="checkbox" value=""><span>i have read and accepted the Terms and conditions and Privacy policy</span>
							</label>
						</div>
					</div>
					<!--end --password ---confirmpassword--->
					<div class="col-sm-12">
						<button type="button" class="btn order-btn btn-lg" onclick="registeration()">Continue</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>

 

 <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script> -->



<!--register form end--->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="/js/my_js.js"></script>
<script src="/js/notify.js"></script>


  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script> -->
  <script src="/js/datepicker.js"></script>
  <script>


    var d = new Date();
 	var n = d.getHours();
 	if(n < 9)
 	{
	  	var dateToday = new Date();
	    $(function() {
	      $('[data-toggle="datepicker"]').datepicker({
	        autoHide: true,
	        zIndex: 2048,
	        startDate: dateToday,
	        // startDate: date
	      });
	    });
	}
	else 
	{
		var dateToday = new Date();
		var day = new Date();
		var nextDay = new Date(day);
		nextDay.setDate(day.getDate()+1);
	
	    $(function() {
	      $('[data-toggle="datepicker"]').datepicker({
	        autoHide: true,
	        zIndex: 2048,
	        startDate: nextDay,
	        // startDate: date
	      });
	    });
	}
  </script>


  
</body>
</html>



<script type="text/javascript">
function change_order_tyep(value)
  {
  
    if(value == 'Monthly')
    {
        document.getElementById("monthly_order_div").style.display = "block";
        document.getElementById("instantly_order_div").style.display = "none";
    }
    else
    {
       document.getElementById("monthly_order_div").style.display = "none";
       document.getElementById("instantly_order_div").style.display = "block";
    }

  }




  
function test()
{

	


}


  function send_otp()
  {

 
    var username = document.getElementById("id_username").value;
  	
    if(username != ' ' || username != '' || username != null)
    {

        if (/^\d{10}$/.test(username)) 
        {

             $.ajax({
                 type: "POST",
                 url: "<?php  //echo base_url(); ?>" + "User/send_otp",
                 data: {mobile_no: username},
                //dataType: JSON,  
                 cache:false,
                 success: 
                      function(data)
                      {

                        if(data == 1 )
                          {
                           
                            $.notify("OTP Send Successfully", "success");
                             $("#send_otp").css("display", "block");
                             $("#otp_div").css("display", "block");
                             $("#id_password_box").css("display", "none");
                             // $("#confirmpwd_div").css("display", "block");
                             $("#password_div").css("display", "none");
                             document.getElementById("id_status").value = "1";   
                             $("#id_change").css("display", "block");
                         
                              document.getElementById("id_username").readOnly = true;
                          }
                          else if(data == 0)
                          {
                            

                             $("#send_otp").css("display", "none");
                             $("#otp_div").css("display", "none");
                             // $("#new_password_div").css("display", "none");
                             $("#id_change").css("display", "block");
                             $("#password_div").css("display", "block");
                              document.getElementById("id_username").readOnly = true;
                             $.notify("Invalid Username or password", "error");
                             document.getElementById("id_status").value = "0"; 
                          }
                      }
                  });
   
        } 
        else 
        {
          var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
          var result = re.test(String(username).toLowerCase());

        

          if(result == true)
          {
      
               $.ajax({
                 type: "POST",
                 url: "<?php  //echo base_url(); ?>" + "User/send_otp_email",
                 data: {email: username},
                 //dataType: JSON,  
                 cache:false,
                 success: 
                      function(data)
                      { 
                          if(data == '1' )
                            {

                             $.notify("OTP Send Successfully", "success");
                      		  document.getElementById("id_status").value = "1"; 
                              $("#send_otp").css("display", "block");
                              $("#otp_div").css("display", "block");
                              // $("#new_password_div").css("display", "block");
                               $("#id_password_box").css("display", "none");
                               $("#id_change").css("display", "block");
                               document.getElementById("id_username").readOnly = true;
                              //$("#confirmpwd_div").css("display", "block");


                            }
                            else if(data == '0')
                            {
                              $.notify("Invalid Username or password", "error");
                              $("#send_otp").css("display", "none");
                              $("#otp_div").css("display", "none");
                               $("#id_change").css("display", "block");
                              // $("#new_password_div").css("display", "none");
                              document.getElementById("id_status").value = "0"; 
                              document.getElementById("id_username").readOnly = true;
                              $("#password_div").css("display", "block");
                            }
                      }
                });
          }
          else if(result == false)
          {

              	$(".pos-demo").notify(
				  "Please enter valid username", 
				  { position:"down" }
				);
              //document.getElementById("invalid_error").style.display = "block";
          }
        }    
    }
    else
    {
      			$(".pos-demo").notify(
				  "Please enter valid username", 
				  { position:"down" }
				);
      //document.getElementById("invalid_error").style.display = "block";
    }

}



function check_otp(value)
{
  
  var otp = value;
  var username = document.getElementById('id_username').value;
  var length = otp.length;

  

   if(otp != " ")
   {
    if(length == 6)
    {
      $.ajax({
           type: "POST",
           url: "<?php  //echo base_url(); ?>" + "User/verify_otp",
           data: {otp: otp,mobile_no: username},
          //dataType: JSON,  
           cache:false,
           success: 
                function(data)
                {
               
                  if(data == 1 )
                    {
                        $("#new_password_div").css("display", "block");
                        $("#confirmpwd_div").css("display", "block");
                        $("#otp_error").css("display", "none");
                        $.notify("Valid OTP", "success");
                    }
                    else if(data == 0)
                    {
                      
                        $("#new_password_div").css("display", "none");
                        $("#confirmpwd_div").css("display", "none");
                        $(".otp-demo").notify(
							  "Wrong OTP", 
							  { position:"down" }
							);

                        

                    
                    }
            }
        });
    }
   }
}




function login()
{


 var status = document.getElementById('id_status').value;
if(status == '0')
{
	  var username    = document.getElementById('id_username').value;
      var pwd         = document.getElementById('id_pwd').value;
}
else if(status == '1' )
{
	 var username    = document.getElementById('id_username').value;
	 var pwd = document.getElementById('id_newpassword').value;
     var confmpwd    = document.getElementById('id_confmpwd').value;
}


   if(username == "" || username == " " || username == null)
   {
   	
   		$(".pos-demo").notify(
				  "Please enter username", 
				  { position:"down" }
				);

   		var user = '0';
   }
   else
   {
   	   var user = '1';
   }

   if(pwd == "" || pwd == " " || pwd == null)
   {
   	
   		$(".pass-demo").notify(
				  "Please enter password", 
				  { position:"down" }
				);
   		var pass = '0';
   }
   else
   {
   		var pass = '1';
   }

   if(user == '1' && pass == '1')
   {

   	    $.ajax({
           type: "POST",
           url: "<?php // echo base_url(); ?>" + "User/user_login",
           data: {username: username,pwd: pwd,newpassword: pwd,confmpwd: confmpwd},
          //dataType: JSON,  
           cache:false,
           success: 
                function(data)
                {
                	
                	if(data == '1')
                	{
						window.location.href = "<?php  //echo base_url(); ?>"+"User/profile";
                	}
                	else if(data == '0')
                	{
                		$.notify("Invalid Username or Password!", "error");
                	}
                }
        });

       

   }

}




function change_value()
{
   document.getElementById("id_username").readOnly = false;
   document.getElementById("id_username").value = "";

    $("#id_password_box ").css("display", "block");
    $("#otp_div ").css("display", "none");
    $("#new_password_div ").css("display", "none");
    $("#confirmpwd_div ").css("display", "none");
    $("#id_change ").css("display", "none");
    document.getElementById("id_status").value = "0";

}



function registeration()
{
	var id_first_name   = document.getElementById('id_first_name').value;
	var id_lastname     = document.getElementById('id_lastname').value;
	var id_country_code = document.getElementById('id_country_code').value;
	var id_mobile       = document.getElementById('id_mobile').value;
	var id_email        = document.getElementById('id_email').value;
	var id_password     = document.getElementById('id_password').value;
	var id_confirmpassword  = document.getElementById('id_confirmpassword').value;
	var id_regotp           = document.getElementById('id_regotp').value;
	

   if(id_first_name == "" || id_first_name == " " || id_first_name == null)
   {
   	
   		$(".first-name").notify(
				  "Please enter first name", 
				  { position:"down" }
				);

   		var firstname = '0';
   }
   else
   {
   	   var firstname = '1';
   }



   if(id_lastname == "" || id_lastname == " " || id_lastname == null)
   {
   	
   		$(".last-name").notify(
				  "Please enter last name", 
				  { position:"down" }
				);

   		var lastname = '0';
   }
   else
   {
   	   var lastname = '1';
   }

   
   if(id_country_code == "" || id_country_code == " " || id_country_code == null)
   {
   	
   		$(".country-code").notify(
				  "Please enter country code", 
				  { position:"down" }
				);

   		var country_code = '0';
   }
   else
   {
   	   var country_code = '1';
   }


   if(id_mobile == "" || id_mobile == " " || id_mobile == null)
   {
   	
   		$(".mobile").notify(
				  "Please enter mobile number", 
				  { position:"down" }
				);

   		var mobile = '0';
   }
   else
   {
   	   if (/^\d{10}$/.test(id_mobile)) 
        {
        	var mobile = '1';
        }
       else
        {
        	$(".mobile").notify(
				"Please valid mobile number", 
				  { position:"down" }
			);

   			var mobile = '0';
        }
   	   
   }



   if(id_email == "" || id_email == " " || id_email == null)
   {
   	
   		$(".email").notify(
				  "Please enter email", 
				  { position:"down" }
				);

   		var email = '0';
   }
   else
   {

  	 	var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        var result = re.test(String(id_email).toLowerCase());

        if(result == true)
        {
        	 var email = '1';
        }
        else
        {
        	$(".email").notify(
				"Please enter valid email", 
				  { position:"down" }
			);

   			var email = '0';
        }

   	  
   }


   if(id_password == "" || id_password == " " || id_password == null)
   {
   	
   		$(".password").notify(
				  "Please enter password", 
				  { position:"down" }
				);

   		var password = '0';
   }
   else
   {
   	   var password = '1';
   }


   if(id_confirmpassword == "" || id_confirmpassword == " " || id_confirmpassword == null)
   {
   	
   		$(".confirmpass").notify(
				  "Please enter confirmpassword", 
				  { position:"down" }
				);

   		var confirmpass = '0';
   }
   else
   {
   		if(password == '1')
   		{
   			if(id_password == id_confirmpassword)
   			{
   				var confirmpass = '1';
   			}
   			else
   			{
   				$(".confirmpass").notify(
				  "Password does not match", 
				  { position:"down" }
				);

   				var confirmpass = '0';
   			}
   		}
   		else
   		{
   			var confirmpass = '0';
   		}
   }


   if(id_regotp == "" || id_regotp == " " || id_regotp == null)
   {
   	
   		$(".regotp").notify(
				  "Please enter OTP", 
				  { position:"down" }
				);

   		var regotp = '0';
   }
   else
   {
   	   var regotp = '1';
   }






if(firstname == '1' || lastname == '1' || country_code == '1' || mobile == '1' || email == '1' || password == '1' ||confirmpass == '1' || regotp == '1' || regnewpassword == '1' || regconfirmpassword == '1')
{

	 $.ajax({
           type: "POST",
           url: "<?php  //echo base_url(); ?>" + "User/new_registration",
           data: {id_first_name: id_first_name,id_lastname: id_lastname,id_country_code: id_country_code,id_mobile: id_mobile,id_email:id_email,id_password:id_password,id_confirmpassword:id_confirmpassword},
          //dataType: JSON,  
           cache:false,
           success: 
                function(data)
                {
                	
                	if(data == '00100')
                	{
                		$.notify("Successfully registered!", "success");
						window.location.href = "<?php  //echo base_url(); ?>"+"User/profile";
                	}
                	else if(data == '01')
                	{
                		$(".email").notify(
							  "Email ID already registered", 
							  { position:"down" }
							);
                	}
                	else if(data == '10')
                	{
                		$(".mobile").notify(
							  "Mobile number already registered", 
							  { position:"down" }
							);
                	}
                	else if(data == '11')
                	{
                		$(".email").notify(
							  "Email ID already registered", 
							  { position:"down" }
							);

                		$(".mobile").notify(
							  "Mobile number already registered", 
							  { position:"down" }
							);

                	}
                }
    });
}



}

</script>


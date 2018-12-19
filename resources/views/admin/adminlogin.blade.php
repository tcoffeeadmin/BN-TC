

@extends('layouts.app')

@section('content')



<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>tifinlife</title>
    
  <!-- Tell the browser to be responsive to screen width -->
  <link rel="icon" >
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet"  href="/css/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet"  href="/css/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet"  href="/css/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet"  href="/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet"  href="/css/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="Admin/index"><img src="images/tifinlife.png" width="50%" height="50%"></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>


    <form name="form1" id="id_form" method="post" action="">
      <div class="form-group has-feedback">
        <input type="text" name="username" id="id_username" class="form-control" placeholder="Username">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        <span style=" display: none; color: red" id="username_error" >Enter username</span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" id="id_password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        <span style=" display: none; color: red" id="password_error" >Enter password</span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <!-- <button type="submit" onclick="signin()" name="login" class="btn btn-primary btn-block btn-flat">Sign In</button> -->
          <button type="submit" class="btn btn-primary btn-block btn-flat">Login</button>
        </div>
        <!-- /.col -->
      </div>
    </form>


    <!-- /.social-auth-links -->
    <a href="Admin/view_forget_password">I forgot my password</a><br>
    <!-- <a href="register.html" class="text-center">Register a new membership</a> -->
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
<!-- jQuery 3 -->
<script src="/js/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="/js/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="/js/iCheck/icheck.min.js"></script>
<script src="/js/notify.js"></script>
<script type="text/javascript">
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });

function signin()
{

  var username = document.getElementById('id_username').value;
  var password = document.getElementById('id_password').value;


  if(username == ' ' || username == null || username == "" || username.length == 1)
  {
   document.getElementById("username_error").style.display = "block";
   var user = 0;
  }
  else
  {
    var user = 1;
    document.getElementById("username_error").style.display = "none";
  }



 if(password == ' ' || password == null || password == "" || password.length == 1)
  {
   document.getElementById("password_error").style.display = "block";
   var pass = 0;
  }
  else
  {
    var pass = 1;
  }

if(user == 1 && pass == 1)
{
  // document.getElementById("id_form").submit();
  document.getElementById("password_error").style.display = "none";


     $.ajax({
       type: "POST",
       url: "" + "Admin/login",
       data: {username: username,password: password},
     //  dataType: JSON,  
       cache:false,
       success: 
            function(data)
            {

                if(data == 1)
                {
                  window.location.href = "Home/index";
                }
                else if(data == 0)
                {
                  $.notify("Invalid Username or password", "error");
                }
            }
        });

}

  
}
</script>

</body>
</html>
@endsection
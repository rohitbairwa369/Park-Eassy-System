<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

if(isset($_POST['login']))
  {
    $adminuser=$_POST['username'];
    $password=md5($_POST['password']);
    $query=mysqli_query($con,"select ID from tbladmin where  UserName='$adminuser' && Password='$password' ");
    $ret=mysqli_fetch_array($query);
    if($ret>0){
      $_SESSION['vpmsaid']=$ret['ID'];
     header('location:dashboard.php');
    }
    else{
    $msg="Invalid Details.";
    }
  }
  ?>
<!doctype html>
 <html class="no-js" lang="">
<head>

    <title>VPMS-Login Page</title>
   
    <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
    <link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
</head>
<body style="background-image:url(peter.jpg); background-size: 1550px 900px;">

    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="index.php">
                        <h2 style="color: #fff;font-family:Copperplate; font-size:70px;  color: #D0F8FF;
    text-shadow: 0 0 5px #A5F1FF, 0 0 10px #A5F1FF,
             0 0 20px #A5F1FF, 0 0 30px #A5F1FF,
             0 0 40px #A5F1FF;" >Park Eazzy</h2>
                    </a>
                </div>
                <div class="login-form" style="background-image:url(gebh.jpg); background-size: 550px 370px;">
                    <form method="post">
                         <p style="font-size:16px; color:yellow" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>
                        <div class="form-group">
                            <label style=" color: #D0F8FF;
    text-shadow: 0 0 5px #A5F1FF, 0 0 10px #A5F1FF,
             0 0 20px #A5F1FF, 0 0 30px #A5F1FF,
             0 0 40px #A5F1FF;">User Name</label>
                           <input class="form-control" type="text" placeholder="" required="true" name="username">
                        </div>
                        <div class="form-group">
                            <label style=" color: #D0F8FF;
    text-shadow: 0 0 5px #A5F1FF, 0 0 10px #A5F1FF,
             0 0 20px #A5F1FF, 0 0 30px #A5F1FF,
             0 0 40px #A5F1FF;">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="" required="true">
                        </div>
                        <div class="checkbox">
                            
                            <label class="pull-right">
                                <a href="forgot-password.php" >Forgotten Password?</a>
                            </label>

                        </div>
                        <button type="submit" name="login" class="btn btn-success btn-flat m-b-30 m-t-30">Sign in</button>
                       
                       
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>
</html>

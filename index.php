<?php
    $result ="";
    if(isset($_GET['msg'])) 
    {
        $result=$_GET['msg'];
    }
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>HR Login</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Pooled Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Favicon -->
<link rel="shortcut icon" href="image/omoBank1.jpg" type="image/x-icon">
<link rel="apple-touch-icon" href="image/omoBank1.jpg">  
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="css/style.css">
   <link rel="stylesheet" href="../css/popup_style.css">
   <!-- styles -->
<link rel="stylesheet" href="assets/css/fancybox/jquery.fancybox.css">
<link href="assets/css/bootstrap-theme.css" rel="stylesheet" />
<link rel="stylesheet" href="assets/css/slippry.css">
<link href="assets/css/style.css" rel="stylesheet" />
<link rel="stylesheet" href="assets/color/default.css">
</head>
<body class="hold-transition login-page " id="body-img">
 <table width="100%"  border="0"cellspacing="00" cellpadding="00">
  <tr>
    <th width="74" scope="col">&nbsp;</th>
  <th width="164" scope="col"><img src="image/omoBank1.jpg" class="img-responsive img-circle blink_text" alt="OMFI logo" style="width:150px;height:64px;vertical-align: middle;
    -webkit-filter: drop-shadow(0px 0px 10px rgba(0,0,0,0.5));"></th>
    <th width="646" scope="col"><font size="8" color="White" class="blink_text">HR&nbsp;Management System</font></th>
    <th width="140" scope="col"></th>
    <th width="63" scope="col">&nbsp;</th>
  </tr>
</table>
    <div class="login-box">
        <div class="login-logo">
        <!-- /.login-logo -->
        <div class="card" style="border-top: 3px  solid #ffc107;box-shadow: 2px 2px 2px 2px #f0f0ad;opacity: 0.8;">
            <div class="card-body login-card-body"  style=" box-shadow: 8px 8px 5px rgb(7, 1, 1)7, 1, 1);background-image: linear-gradient(180deg, #fff, #ddd 40%, #ccc);">
                <form action="initialize/login_process.php" method="post">
                    <div class="input-group mb-3">
                        <input type="Email" class="form-control" name="hr_email" placeholder="HR Email" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                      <input type="password" name="hr_password" class="form-control"  placeholder="HR Password" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <select name="hr_type" id="hr_type" class="form-control" required>
                            <option value="" disabled="disabled" selected="selected">&larr; Select Type &rarr;</option>
                            <option value="HR Head">&rarr; HR Head</option>
                            <option value="HR Officer">&rarr; HR Officer</option>
                            <option value="Employee">&rarr; Employee</option>
                        </select>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-drop"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="remember">
                                <label for="remember" style="display: none;">
                                    Remember Me
                                </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" name="login_hr" class="btn btn-primary btn-block">Login In</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>


                <!-- /.social-auth-links -->
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
<footer>
<div class="verybottom">
				<div class="aligncenter">
                <ul class="social-network social-circle">
                    <li><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
                    <li><a href="" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                </ul>	
				</div>				
			</div>
		</div>
</footer>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
<script>	  
 var i = 0;
var images = [];
var slideTime = 3000; // 3 seconds

images[0] = 'image/bg4.jpg';//images[0] = 'image/bg3.jpg';
images[1] = 'image/bg4.jpg';//images[1] = 'image/bg2.png';
images[2] = 'image/bg4.jpg';//images[2] = 'image/bg3.jpg';
images[3] = 'image/bg4.jpg';
//images[4] = 'image/omo1.jpg';
//images[5] = 'image/omo2.jpg';
//images[6] = 'image/omo3.jpg';


function changePicture() {
    //document.body.style.backgroundImage = images[i];
	document.body.style.backgroundImage = "url(" + images[i] + ")";


    if (i < images.length - 1) {
        i++;
    } else {
        i = 0;
    }

    setTimeout("changePicture()", slideTime);
}
window.onload = changePicture();
</script>
</body>

</html>
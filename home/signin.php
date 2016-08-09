<?php require_once(__DIR__.'/../connection/Conn_PDO.php'); ?>
<?php require_once(__DIR__.'/../class/login_auth.php'); ?>
<!DOCTYPE html>
<!-- saved from url=(0041)https://getbootstrap.com/examples/signin/ -->
<html lang="en">
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
   <meta name="description" content="">
   <meta name="author" content="">
   <link rel="icon" href="https://getbootstrap.com/favicon.ico">

   <title>Signin Template for Bootstrap</title>

   <!-- Bootstrap core CSS -->
   <link href="./css/bootstrap.min.css" rel="stylesheet">

   <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
   <link href="./css/ie10-viewport-bug-workaround.css" rel="stylesheet">

   <!-- Custom styles for this template -->
   <link href="./css/signin.css" rel="stylesheet">

   <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
   <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
   <script src="./js/ie-emulation-modes-warning.js"></script>

   <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
   <!--[if lt IE 9]>
   <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
   <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
   <![endif]-->

   <style id="style-1-cropbar-clipper">
   /* Copyright 2014 Evernote Corporation. All rights reserved. */
   .en-markup-crop-options {
      top: 18px !important;
      left: 50% !important;
      margin-left: -100px !important;
      width: 200px !important;
      border: 2px rgba(255,255,255,.38) solid !important;
      border-radius: 4px !important;
   }

   .en-markup-crop-options div div:first-of-type {
      margin-left: 0px !important;
   }
   </style>
   <style id="stylerStyle">
   </style>
   <script id="stylerScript">
   </script>
</head>

   <body>

   <div class="container">

      <?php if ( isset($_GET['s']) ) { ?>
      <?php if ( $_GET['s'] == 'login_failed' ) { ?>
      <div class="alert alert-danger form-signin">
         <strong>登入失敗!</strong><br />請確認後重新輸入帳號及密碼.
      </div>
      <?php } else if ( $_GET['s'] == 'logout_success' ) { ?>
      <div class="alert alert-success form-signin">
         <strong>登出成功!</strong><br />你已成功登出本平台, 你可以再次重新登入.
      </div>
      <?php } ?>
      <?php } // End of isset($_GET['s']) ?>

      <form class="form-signin" action="<?php echo basename($_SERVER['PHP_SELF']); ?>" method="post">
         <h2 class="form-signin-heading">後台登入</h2>
         <h4>(請輸入帳號及密碼)</h4>
         <!-- <label for="inputEmail" class="sr-only">Email address</label>
         <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus=""> -->
         <label for="inputUsername" class="sr-only">Username</label>
         <input type="text" id="Username" name="Username" class="form-control" placeholder="帳號" required="" autofocus="">
         <label for="inputPassword" class="sr-only">Password</label>
         <input type="password" id="Password" name="Password" class="form-control" placeholder="密碼" required="">
         <p>
            預設帳號為 admin, 預設密碼為 admin.
         </p>
         <div class="checkbox">
            <label>
            <input type="checkbox" value="remember-me"> 記住我
            </label>
         </div>
         <button class="btn btn-lg btn-primary btn-block" type="submit">登入</button>
      </form>

   </div> <!-- /container -->

   <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
   <script src="./js/ie10-viewport-bug-workaround.js"></script>

   </body>
</html>

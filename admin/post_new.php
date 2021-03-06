<?php require_once(__DIR__.'/../connection/Conn_PDO.php'); ?>
<?php require_once(__DIR__.'/../class/user_auth.php'); ?>
<?php require(__DIR__ . '/../vendor/autoload.php'); ?>
<?php
   if ( isset($_POST['PostTitle']) && isset($_POST['PostContent']) )
   {
      $varTitle = $_POST['PostTitle'];
      $varUserIndex = $_SESSION['uIndex'];
      $varContent = $_POST['PostContent'];

      $sql_statement = "INSERT INTO post (Title, AuthorIndex, Content) VALUES (?, ?, ?) ";
      $insPost = $pdo->prepare($sql_statement);
      $insPost->bindParam(1, $varTitle, PDO::PARAM_STR);
      $insPost->bindParam(2, $varUserIndex, PDO::FETCH_NUM);
      $insPost->bindParam(3, $varContent, PDO::PARAM_STR);
      $insPost->execute();

      header("location:"."post.php?s=new_post_sucess");
   }
?>
<!DOCTYPE html>
<html lang="en">

<head>

   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="description" content="">
   <meta name="author" content="">

   <title>SB Admin - Bootstrap Admin Template</title>

   <!-- Bootstrap Core CSS -->
   <link href="css/bootstrap.min.css" rel="stylesheet">

   <!-- Custom CSS -->
   <link href="css/sb-admin.css" rel="stylesheet">

   <!-- Custom Fonts -->
   <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

   <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
   <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
   <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
   <![endif]-->

</head>

<body>

   <div id="wrapper">

      <!-- Navigation -->
      <?php include('_navigation.php'); ?>

      <div id="page-wrapper">

      <div class="container-fluid">

         <!-- Page Heading -->
         <div class="row">
            <div class="col-lg-12">
               <h1 class="page-header">
                  撰寫新文章
                  <small>寫下你的心得、感想及想說的東西吧...</small>
               </h1>
               <ol class="breadcrumb">
                  <li>
                     <i class="fa fa-dashboard"></i>  <a href="index.php">首頁</a>
                  </li>
                  <li class="active">
                     <i class="fa fa-file"></i> 撰寫新文章
                  </li>
               </ol>
            </div>
         </div>
         <!-- /.row -->
         <div class="row">
            <div class="col-lg-12">
               <form method="post" id="form1" action="<?php echo basename($_SERVER['PHP_SELF']); ?>">
                  <div class="form-group">
                     <label>標題</label>
                     <input class="form-control" id="PostTitle" name="PostTitle" />
                     <p class="help-block">請輸入文章標題</p>
                  </div>
                  <div class="form-group">
                     <label>文章內容</label>
                     <textarea class="form-control" id="PostContent" name="PostContent"></textarea>
                  </div>
                  <div class="form-group">
                     <button type="button" class="btn btn-primary" id="btnSubmit">送出</button>
                     <button type="button" class="btn btn-default" id="btnReset">清除</button>
                     <button type="button" class="btn btn-primary" id="btnPostList">取消</button>
                  </div>

               </form>
            </div>
         </div>
         <!-- /.row -->

         </div>
         <!-- /.container-fluid -->

      </div>
      <!-- /#page-wrapper -->

   </div>
   <!-- /#wrapper -->

   <!-- jQuery -->
   <script src="js/jquery.js"></script>

   <!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>

   <!-- TinyMCE -->
   <script src="../lib/tinymce/tinymce/tinymce.min.js"></script>
   <script>
      tinymce.init({
         selector: '#PostContent'
      });
   </script>

   <!-- User define script -->
   <script type="text/javascript">
      $(document).ready(function(){
         $("#btnSubmit").click(function(){
            $("#form1").submit();
         })
         $("#btnReset").click(function(){
            $("#form1")[0].reset();
         })
         $("#btnPostList").click(function(){
            window.location.href = "post.php";
         })
      })
   </script>


</body>

</html>

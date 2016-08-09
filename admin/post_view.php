<?php require_once(__DIR__.'/../connection/Conn_PDO.php'); ?>
<?php require_once(__DIR__.'/../class/user_auth.php'); ?>
<?php require(__DIR__ . '/../vendor/autoload.php'); ?>
<?php
   $varPostIndex = $_GET['i'];
   $varUserIndex = $_SESSION['uIndex'];

   $sql_statement = "SELECT `Index`, Title, AuthorIndex, PostDatetime, LastUpdate, Content FROM post WHERE `Index` = ? AND AuthorIndex = ? ";
   $rsPost = $pdo->prepare($sql_statement);
   $rsPost->bindParam(1, $varPostIndex, PDO::FETCH_NUM);
   $rsPost->bindParam(2, $varUserIndex, PDO::FETCH_NUM);
   $rsPost->execute();
   $row_rsPost = $rsPost->fetch(PDO::FETCH_ASSOC);
   $totalRows_rsPost = $rsPost->rowCount();
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
                  瀏覽文章
                  <small>查看文章內容及詳細資料</small>
               </h1>
               <ol class="breadcrumb">
                  <li>
                     <i class="fa fa-dashboard"></i>  <a href="index.php">首頁</a>
                  </li>
                  <li>
                     <i class="fa fa-file"></i> <a href="post.php">文章管理</a>
                  </li>
                  <li class="active">
                     <i class="fa fa-file"></i> 瀏覽文章
                  </li>
               </ol>
            </div>
         </div>
         <!-- /.row -->
         <div class="row">
            <div class="col-lg-12">
                  <div class="form-group">
                     <label>標題</label>
                     <input class="form-control" readonly="readonly" value="<?php echo $row_rsPost['Title']; ?>" />
                  </div>
                  <div class="form-group">
                     <label>建立時間</label>
                     <input class="form-control" readonly="readonly" value="<?php echo $row_rsPost['PostDatetime']; ?>" />
                  </div>
                  <div class="form-group">
                     <label>最後更新時間</label>
                     <input class="form-control" readonly="readonly" value="<?php echo $row_rsPost['LastUpdate']; ?>" />
                  </div>
                  <div class="form-group">
                     <label>文章內容</label>
                     <textarea class="form-control" id="PostContent" name="PostContent"><?php echo $row_rsPost['Content']; ?></textarea>
                  </div>
                  <div class="form-group">
                     <button type="button" class="btn btn-primary" id="btnBack">回到上一頁</button>
                     <button type="button" class="btn btn-primary" id="btnPostList">回到文章管理</button>
                  </div>
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
         selector: '#PostContent',
         toolbar: false,
         menubar:false,
         statusbar: false,
         readonly : 1
      });
   </script>

   <!-- User define script -->
   <script type="text/javascript">
      $(document).ready(function(){
         $("#btnBack").click(function(){
            window.location.href = "javascript:history.go(-1);";
         })
         $("#btnPostList").click(function(){
            window.location.href = "post.php";
         })
      })
   </script>


</body>

</html>

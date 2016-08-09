<?php require_once(__DIR__.'/../connection/Conn_PDO.php'); ?>
<?php require_once(__DIR__.'/../class/user_auth.php'); ?>
<?php require(__DIR__ . '/../vendor/autoload.php'); ?>
<?php
   $varUserIndex = $_SESSION['uIndex'];

   $sql_statement = "SELECT `Index`, Title, AuthorIndex, PostDatetime, LastUpdate, Content FROM post WHERE AuthorIndex = ? ORDER BY `Index` DESC ";
   $rsPost = $pdo->prepare($sql_statement);
   $rsPost->bindParam(1, $varUserIndex, PDO::FETCH_NUM);
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
                  文章管理
                  <small>所有文章清單</small>
               </h1>
               <ol class="breadcrumb">
                  <li>
                     <i class="fa fa-dashboard"></i>  <a href="index.php">首頁</a>
                  </li>
                  <li class="active">
                     <i class="fa fa-file"></i> 文章管理
                  </li>
               </ol>
            </div>
         </div>
         <!-- /.row -->

         <!-- ### 分隔線 ### -->

         <div class="row">
            <div class="col-lg-12">
            <h2>文章列表</h2>
            <div class="table-responsive">
               <table class="table table-bordered table-hover">
                  <thead>
                     <tr>
                        <th>文章編號</th>
                        <th>標題</th>
                        <th>建立時間</th>
                        <th>更新時間</th>
                        <th>功能</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php do { ?>
                     <tr>
                        <td><?php echo $row_rsPost['Index']; ?></td>
                        <td><?php echo $row_rsPost['Title']; ?></td>
                        <td><?php echo $row_rsPost['PostDatetime']; ?></td>
                        <td><?php echo $row_rsPost['LastUpdate']; ?></td>
                        <td>
                           <a href="post_view.php?i=<?php echo $row_rsPost['Index']; ?>"><button type="button" class="btn btn-xs btn-primary" id="btnView">查看</button></a>
                           <a href="post_modify.php?i=<?php echo $row_rsPost['Index']; ?>"><button type="button" class="btn btn-xs btn-primary" id="btnModify">修改</button></a>
                        </td>
                     </tr>
                     <?php } while ($row_rsPost = $rsPost->fetch(PDO::FETCH_ASSOC)); ?>
                  </tbody>
               </table>
            </div>
            <a href="post_new.php"><button type="button" class="btn btn-primary" id="btnPostList">新文章</button></a>
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

</body>

</html>

<?php require_once(__DIR__.'/../connection/Conn_PDO.php'); ?>
<?php require(__DIR__ . '/../vendor/autoload.php'); ?>
<?php date_default_timezone_set("Asia/Taipei"); use Carbon\Carbon; ?>
<?php
   $varPostIndex = $_GET['i'];

   $sql_statement = "SELECT post.`Index`, Title, AuthorIndex, PostDatetime, LastUpdate, Content, Realname, Nickname FROM post, `user` WHERE post.AuthorIndex = `user`.`Index` AND post.`Index` = ? ";
   $rsPost = $pdo->prepare($sql_statement);
   $rsPost->bindParam(1, $varPostIndex, PDO::FETCH_NUM);
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

    <title>Blog Post - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/blog-post.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Start Bootstrap</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                   <li>
                       <a href="javascript:alert('本頁面未建置,請「登入」後使用本網站.');">關於本站</a>
                   </li>
                   <li>
                       <a href="javascript:alert('本頁面未建置,請「登入」後使用本網站.');">聯絡我們</a>
                   </li>
                   <li>
                      <a href="../home/signin.php">登入</a>
                   </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Post Content Column -->
            <div class="col-lg-8">

                <!-- Blog Post -->

                <!-- Title -->
                <h1><?php echo $row_rsPost['Title'] ?></h1>

                <!-- Author -->
                <p class="lead">
                    作者 <a href="javascript:void();"><?php echo $row_rsPost['Realname']; ?></a>
                </p>

                <hr>

                <!-- Date/Time -->
                <p><span class="glyphicon glyphicon-time"></span>  發佈於 <?php echo Carbon::parse($row_rsPost['PostDatetime'])->format('Y-m-d h:i'); ?></p>

                <hr>

                <!-- Preview Image -->
                <img class="img-responsive" src="http://placehold.it/900x300" alt="">

                <hr>

                <!-- Post Content -->
                <div class="well well-lg">
                   <?php echo $row_rsPost['Content']; ?>
                </div>
                <hr>

                <!-- Blog Comments -->

                <!-- Comments Form -->
                <div class="well">
                    <h4>寫下你的回應或留言吧:</h4>
                    <form role="form">
                        <div class="form-group">
                            <textarea class="form-control" rows="3" readonly="readonly"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary" id="btnSubmit">送出</button>
                    </form>
                </div>

                <hr>

                <!-- Posted Comments -->

                <!-- Comment -->
                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">無
                            <small>無</small>
                        </h4>
                        暫無回應...
                    </div>
                </div>

                <!-- Comment -->
                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">無
                            <small>無</small>
                        </h4>
                        暫無回應...
                        <!-- Nested Comment -->
                        <div class="media">
                            <a class="pull-left" href="#">
                                <img class="media-object" src="http://placehold.it/64x64" alt="">
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">無
                                    <small>無</small>
                                </h4>
                                暫無回應...
                            </div>
                        </div>
                        <!-- End Nested Comment -->
                    </div>
                </div>

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- Blog Search Well -->
                <div class="well">
                    <h4>文章搜尋</h4>
                    <div class="input-group">
                        <input type="text" class="form-control" value="未提供搜尋">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <span class="glyphicon glyphicon-search"></span>
                            </button>
                        </span>
                    </div>
                    <!-- /.input-group -->
                </div>

                <!-- Blog Categories Well -->
                <div class="well">
                    <h4>文章主題分類</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="javascript:void();">分類1</a>
                                </li>
                                <li><a href="javascript:void();">分類2</a>
                                </li>
                                <li><a href="javascript:void();">分類3</a>
                                </li>
                                <li><a href="javascript:void();">分類4</a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.col-lg-6 -->
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="javascript:void();">分類5</a>
                                </li>
                                <li><a href="javascript:void();">分類6</a>
                                </li>
                                <li><a href="javascript:void();">分類7</a>
                                </li>
                                <li><a href="javascript:void();">分類8</a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.col-lg-6 -->
                    </div>
                    <!-- /.row -->
                </div>

                <div class="well">
                   <div class="row">
                      <div class="col-lg-12">
                        <a href="javascript:history.go(-1);"><button type="button" class="btn btn-primary">回到上一頁</button></a>
                      </div>
                      <!-- /.col-lg-6 -->
                  </div>
                  <!-- /.row -->
                </div>

        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                     <p>Copyright &copy; Chewei Hu. 2016</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- User define script -->
   <script type="text/javascript">
      $(document).ready(function(){
         $("#btnSubmit").click(function(){
            alert("目前不能讓你留言喔！");
            return false
         })
      })
   </script>

</body>

</html>

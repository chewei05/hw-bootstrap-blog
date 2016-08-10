<?php require_once(__DIR__.'/../connection/Conn_PDO.php'); ?>
<?php require(__DIR__ . '/../vendor/autoload.php'); ?>
<?php date_default_timezone_set("Asia/Taipei"); use Carbon\Carbon; ?>
<?php
   $sql_statement = "SELECT post.`Index`, Title, AuthorIndex, PostDatetime, LastUpdate, Content, Realname, Nickname FROM post, `user` WHERE post.AuthorIndex = `user`.`Index` ORDER BY post.`Index` DESC ";
   $rsPost = $pdo->prepare($sql_statement);
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

    <title>Blog Home - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/blog-home.css" rel="stylesheet">

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
                <a class="navbar-brand" href="javascript:void();">Start Bootstrap</a>
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
                       <a href="signin.php">登入</a>
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

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <h1 class="page-header">
                    簡易部落格
                    <small>道場的第1份作業</small>
                </h1>

                <?php do { ?>
                <!-- Blog Post -->
                <h2>
                    <a href="javascript:void();"><?php echo $row_rsPost['Title']; ?></a>
                </h2>
                <p class="lead">
                    作者 <a href="index.php"><?php echo $row_rsPost['Realname']; ?></a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> 發佈於 <?php echo Carbon::parse($row_rsPost['PostDatetime'])->format('Y-m-d h:i'); ?></p>
                <hr>
                <div class="well well-lg">
                   <?php echo $row_rsPost['Content']; ?>
                </div>
                <a class="btn btn-primary" href="javascript:alert('其實沒有更多內容');">更多內容 <span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr>
                <?php } while ($row_rsPost = $rsPost->fetch(PDO::FETCH_ASSOC)); ?>

                <!-- Pager -->
                <ul class="pager">
                    <li class="previous">
                        <a href="javascript:alert('沒有舊文章了');">&larr; 舊文章</a>
                    </li>
                    <li class="next">
                        <a href="javascript:alert('沒有新文章了');">新文章 &rarr;</a>
                    </li>
                </ul>

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

                <!-- Side Widget Well -->
                <div class="well">
                    <h4>作者的說明</h4>
                    <p>這是一個簡易的 Blog 實作練習，以「土法煉鋼」實作，花了不少時間，至於有些細節或內容就慢慢修正吧…</p>
                </div>

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
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>

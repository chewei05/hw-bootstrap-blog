<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">SB Admin 後台</a>
    </div>
    <!-- Top Menu Items -->
    <ul class="nav navbar-right top-nav">
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
            <ul class="dropdown-menu message-dropdown">
                <li class="message-preview">
                    <a href="#">
                        <div class="media">
                            <span class="pull-left">
                                <img class="media-object" src="http://placehold.it/50x50" alt="">
                            </span>
                            <div class="media-body">
                                <p>沒有任何訊息...</p>
                            </div>
                        </div>
                    </a>
                </li>
                <!-- <li class="message-preview">
                    <a href="#">
                        <div class="media">
                            <span class="pull-left">
                                <img class="media-object" src="http://placehold.it/50x50" alt="">
                            </span>
                            <div class="media-body">
                                <h5 class="media-heading"><strong>John Smith</strong>
                                </h5>
                                <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                <p>Lorem ipsum dolor sit amet, consectetur...</p>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="message-preview">
                    <a href="#">
                        <div class="media">
                            <span class="pull-left">
                                <img class="media-object" src="http://placehold.it/50x50" alt="">
                            </span>
                            <div class="media-body">
                                <h5 class="media-heading"><strong>John Smith</strong>
                                </h5>
                                <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                <p>Lorem ipsum dolor sit amet, consectetur...</p>
                            </div>
                        </div>
                    </a>
                </li> -->
                <li class="message-footer">
                    <a href="javascript:alert('本功能尚未提供');">讀取所有訊息</a>
                </li>
            </ul>
        </li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
            <ul class="dropdown-menu alert-dropdown">
                <li>
                    <a href="#">沒有任何通知 <span class="label label-default">0</span></a>
                </li>
                <!-- <li>
                    <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
                </li>
                <li>
                    <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
                </li>
                <li>
                    <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
                </li>
                <li>
                    <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
                </li>
                <li>
                    <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
                </li> -->
                <li class="divider"></li>
                <li>
                    <a href="javascript:alert('本功能尚未提供');">檢視所有通知</a>
                </li>
            </ul>
        </li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $_SESSION['uRealname']; ?> <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li>
                    <a href="javascript:alert('本功能尚未提供');"><i class="fa fa-fw fa-user"></i> 基本資料</a>
                </li>
                <li>
                    <a href="javascript:alert('本功能尚未提供');"><i class="fa fa-fw fa-envelope"></i> 收件匣</a>
                </li>
                <li>
                    <a href="javascript:alert('本功能尚未提供');"><i class="fa fa-fw fa-gear"></i> 設定</a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="../home/signout.php"><i class="fa fa-fw fa-power-off"></i> 登出</a>
                </li>
            </ul>
        </li>
    </ul>
    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <li class="active">
                <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> 首頁</a>
            </li>
            <li>
               <a href="post.php"><i class="fa fa-fw fa-file"></i> 文章管理</a>
            </li>
            <li>
               <a href="post_new.php"><i class="fa fa-fw fa-file"></i> 撰寫新文章</a>
            </li>
            <!-- <li>
                <a href="index.html"><i class="fa fa-fw fa-dashboard"></i> 儀表板</a>
            </li>
            <li>
                <a href="charts.html"><i class="fa fa-fw fa-bar-chart-o"></i> 圖表</a>
            </li>
            <li>
                <a href="tables.html"><i class="fa fa-fw fa-table"></i> 表格</a>
            </li>
            <li>
                <a href="forms.html"><i class="fa fa-fw fa-edit"></i> 表單</a>
            </li>
            <li>
                <a href="bootstrap-elements.html"><i class="fa fa-fw fa-desktop"></i> Bootstrap 元素</a>
            </li>
            <li>
                <a href="bootstrap-grid.html"><i class="fa fa-fw fa-wrench"></i> Bootstrap 網格</a>
            </li>
            <li>
                <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> 下拉選單 <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="demo" class="collapse">
                    <li>
                        <a href="#">下拉項目1</a>
                    </li>
                    <li>
                        <a href="#">下拉項目2</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="blank-page.html"><i class="fa fa-fw fa-file"></i> 空白頁面</a>
            </li>
            <li>
                <a href="index-rtl.html"><i class="fa fa-fw fa-dashboard"></i> RTL儀表板</a>
            </li> -->
        </ul>
    </div>
    <!-- /.navbar-collapse -->
</nav>

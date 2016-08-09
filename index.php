<?php require_once(__DIR__.'./connection/Conn_PDO.php'); ?>
<?php
   $sql_statement = "SELECT count(*) AS Counter FROM information_schema.tables WHERE table_schema = 'blog' AND table_name = 'user' ";
   $rsSetup = $pdo->prepare($sql_statement);
   $rsSetup->execute();
   $row_rsSetup = $rsSetup->fetch(PDO::FETCH_ASSOC);
   $totalRows_rsSetup = $rsSetup->rowCount();

   if ( $row_rsSetup['Counter'] == 0 ) {
      header('Content-Type: text/html; charset=utf-8');
      echo "<pre>本系統所需之資料庫及資料表未建立，請下載 SQL 資料夾下的 blog.sql 檔案，並匯入至你的資料庫內。資料庫連線資訊請見 connection 資料夾下的 Conn_PDO.php 檔案。</pre>";
   }
   else {
      header("location: ./home/index.php");
   }
?>

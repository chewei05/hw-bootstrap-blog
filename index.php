<?php require_once(__DIR__.'./connection/Conn_PDO.php'); ?>
<?php
   if ( empty($varErrorMsg) )
   {
      $sql_statement = "SELECT count(*) AS Counter FROM information_schema.tables WHERE table_schema = 'blog' AND table_name = 'user' ";
      $rsSetup = $pdo->prepare($sql_statement);
      $rsSetup->execute();
      $row_rsSetup = $rsSetup->fetch(PDO::FETCH_ASSOC);
      $totalRows_rsSetup = $rsSetup->rowCount();

      if ( $row_rsSetup['Counter'] == 0 ) {
         header('Content-Type: text/html; charset=utf-8');
         echo "<h2>
         本系統所需之資料庫及資料表未建立，請下載 SQL 資料夾下的 blog.sql 檔案，並匯入至你的資料庫內。<br />
         資料庫連線資訊採用 uwamp 預設值，如有不同請修改 connection 資料夾下的 Conn_PDO.php 檔案。
         </h2>";
      }
      else {
         header("location: ./home/index.php");
      }
   }
   else
   {
      header('Content-Type: text/html; charset=utf-8');
      echo "錯誤訊息: ".$varErrorMsg."<br />";
      echo "<h2>
      本系統所需之資料庫及資料表未建立，請下載 SQL 資料夾下的 blog.sql 檔案，並匯入至你的資料庫內。<br />
      資料庫連線資訊採用 uwamp 預設值，如有不同請修改 connection 資料夾下的 Conn_PDO.php 檔案。
      </h2>";
   }
?>

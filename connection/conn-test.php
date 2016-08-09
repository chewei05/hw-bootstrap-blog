<?php
require_once(__DIR__.'/../connection/Conn_PDO.php');

header("Content-Type:text/html; charset=utf-8");

// echo $initial_command . "<br />";

$varIndex = 1;
$sql_statement = "SELECT `Index`, Message FROM messages WHERE `Index` = ?";
$rsMsg = $pdo->prepare($sql_statement);
$rsMsg->bindParam(1, $varIndex, PDO::FETCH_NUM); //第1個?變數
$rsMsg->execute();
$row_rsMsg = $rsMsg->fetch(PDO::FETCH_ASSOC);
$totalRows_rsMsg = $rsMsg->rowCount(); //取得資料集總筆數

echo "Total Rows: ".$totalRows_rsMsg."<hr />";
echo $row_rsMsg['Message'];

?>

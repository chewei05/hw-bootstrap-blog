<?php require_once(__DIR__.'/../connection/Conn_PDO.php'); ?>
<?php
if (!isset($_SESSION)) {
   session_start();
}

// echo $_POST['Username']."/".$_POST['Password']; //deubg

if ( isset($_POST['Username'] ) )
{
   $varUsername = $_POST['Username'];
   $varPassword = $_POST['Password'];
   $varRedirect_Login_Success = "../admin/index.php";
   $varRedirect_Login_Failed = "../home/signin.php?s=login_failed";


   //讀取使用者帳號密碼
   $sql_rsMember = "SELECT `Index`, Username, `Password`, Realname, Nickname FROM `user` WHERE Username = ? AND `Password` = ? ";
   $rsMember = $pdo->prepare($sql_rsMember);
   $rsMember->bindParam(1, $varUsername, PDO::PARAM_STR);
   $rsMember->bindParam(2, $varPassword, PDO::PARAM_STR);
   $rsMember->execute();
   $row_rsMember = $rsMember->fetch(PDO::FETCH_ASSOC);
   $isFoundUser = $rsMember->rowCount();

   if ( $isFoundUser == 1 )
   {
      $varUserIndex = $row_rsMember['Index'];

      $_SESSION['Username'] = $row_rsMember['Username'];
      $_SESSION['uIndex'] = $row_rsMember['Index'];
      $_SESSION['uRealname'] = $row_rsMember['Realname'];
      $_SESSION['uNickname'] = $row_rsMember['Nickname'];

      header("Location: " . $varRedirect_Login_Success );
   }
   else
   {
      header("Location: ". $varRedirect_Login_Failed );
   }
}
?>

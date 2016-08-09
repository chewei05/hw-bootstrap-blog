<?php
if (!isset($_SESSION)) { session_start(); }

$varRedirect_Authentication_Failed = "../home/signin.php?s=access_deny";

function isAuthorized ($Username, $UserIndex)
{
   $isValid = 0;

   if ( !empty($UserName) && !empty($UserIndex) )
   {
      if ( is_int($UserIndex) ) {
         $isValid = 1;
      }
   }
   return $isValid;
}

if ( isset($_SESSION['Username']) && isset($_SESSION['uIndex']) )
{
   if ( isAuthorized($_SESSION['Username'], $_SESSION['uIndex']) == true )
   {
      header("Location: ". $varRedirect_Authentication_Failed);
      exit;
   }
}
else
   header("Location: ". $varRedirect_Authentication_Failed);

?>

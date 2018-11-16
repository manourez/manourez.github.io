<?php
function redirect($url, $statusCode = 303)
{
   header('Location: ' . $url .'?message=1', true, $statusCode);
   die();
}

redirect('espace.php');
$_SESSION = array();
session_destroy();
?>
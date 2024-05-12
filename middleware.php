<?php

if (isset($_SESSION['is_user_loggedin'])) {
   return true;
}else {
       header("LOCATION: loginfirst.php");
}

?>
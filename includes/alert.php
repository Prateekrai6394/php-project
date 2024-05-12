<?php

if (isset($_SESSION['success'])) {
    echo $_SESSION['success'];
    unset( $_SESSION['success']);      // the success message is only displayed once and is not displayed again on subsequent page loads.
} 
 if (isset($_SESSION['error'])) {
    echo $_SESSION['error'];
    unset( $_SESSION['error']);
}

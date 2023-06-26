<?php 

if (isset($_SESSION['auth']))
{
    if($_SESSION['role_as'] == 0){
        $_SESSION['message'] = "Your are not authorized to access this page";
        header('location: ../index.php');
    }
}
else {
    $_SESSION['message'] = "Login to continue";
    header('location: ../login.php');
}
?>
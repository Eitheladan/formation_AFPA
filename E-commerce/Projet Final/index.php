<?php
if (isset($_SESSION['login'])){
    if($_SESSION['role']=="Admin"){
        header('location:site_admin.php');
    }else{
        header('location:site_client.php');
    }
}else{
    header('location:login.php');
}
?>
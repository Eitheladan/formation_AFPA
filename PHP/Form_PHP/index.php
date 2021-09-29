<?php

// demarre la session

session_start();

?>



<html>
<body>
<?php


if (isset($_SESSION['login'])){

    header('Location:acceuil.php');
exit;
}else{

    header('Location:veriflog.php');
exit;
}

?>

</body>
</html>
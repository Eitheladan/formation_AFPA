<?php

// demarre la session

session_start();

?>



<html>


<body>


<?php


echo $_SESSION['login']."<br>";
echo $_SESSION['role'];


?>

</body>
</html>

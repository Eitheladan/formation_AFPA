<?php

// demarre session

session_start();

?>

<html>

<body>

<?php



        $_SESSION["login"] = "monlogin";
        $_SESSION["role"] = "admin";
        echo "Session variables are set.<br>";
        echo $_SESSION['login']."<br>";
        echo $_SESSION['role']."<br>";

?>

<a href="session2.php">session2</a>


</body>

</html>

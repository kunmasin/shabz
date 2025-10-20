<?php
setcookie('users', '', time() - 3600, "/");
header("Location: ../users/login.php");
exit();
?>

<?php

require 'configration.php';

session_destroy();
mysqli_close($connection);
header("Location:index.html");
exit();
?>



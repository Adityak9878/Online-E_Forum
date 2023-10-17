<?php

echo "Loggin you out please wait ........";
session_start();

session_destroy();
header("location:/Forum/index.php ");


?>
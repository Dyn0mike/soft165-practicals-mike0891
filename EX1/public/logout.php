<?php
echo "Hello world!";
session_start();
session_destroy();
header("Location: ../index.php");
echo "Hello world!";
exit;

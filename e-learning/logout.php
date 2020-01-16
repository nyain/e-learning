<?php

session_start();
session_unset("user");
session_destroy("user");
header("Location: index.php");
?>

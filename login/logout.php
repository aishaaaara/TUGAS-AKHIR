<?php
session_start();

session_destroy();

header("Location: http://localhost:8080/myweb/hal1.html");
?>
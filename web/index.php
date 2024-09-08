<?php

session_start();
if (empty($_SESSION["login"])) {
    include "./login.php";
} else {
    echo "<span style='font-size: 2rem'>" . "Hello, " . $_SESSION["login"] . "</span><br/>";
    echo "<a href='./exit.php'>Logout</a>";
}
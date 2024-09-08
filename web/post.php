<?php

session_start();
if (!empty($_REQUEST["login"])) {
    $_SESSION["login"] = $_REQUEST["login"];
}
header("Location: index.php");
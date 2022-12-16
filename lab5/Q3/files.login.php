<?php

    session_start();
    $name = "esman hanif";
    $_SESSION["login"] = $name;
    setcookie("login",$name,time()+100000);

    //echo $_COOKIE["login"];
    echo $_SESSION["login"];
?>
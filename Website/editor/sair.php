<?php

     session_start();

     session_destroy(); //acaba com a sessão

     header("location:login.php");
?>
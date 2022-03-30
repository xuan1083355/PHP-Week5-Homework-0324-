<?php
    session_start();
    session_destroy();
    setcookie("UID",$uid,time()-360);  //記得和前面setcookie(,,time()+)的時間一樣!!!
    header("Location: login.php");
?>
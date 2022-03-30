<html>
<style>
    html{
        text-align:center;
        background-color:#CCDDFF;
    }
</style>
<?php
session_start();
if(isset($_SESSION["user_login"])){
    if($_SESSION["user_login"]=='YES'){
        echo "<a href='logout.php' style='font-size:20px'>logout</a><hr/>";
        echo "<p style='font-size:20px'><b>登入成功!!!</b></p>";
    }else{
        echo "非法進入系統";
        exit();
    }
}else{
    header('Location: fail.php');
    exit();
}
?>
</style>
</html>

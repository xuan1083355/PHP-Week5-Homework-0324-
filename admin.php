<html>
<style>
    html{
        text-align:center;
        background-color:#CCDDFF;
    }
</style>
<?php 
session_start();
if(isset($_SESSION["admin_login"])){
    if($_SESSION["admin_login"]=="YES"){
        echo "<p><a href='logout.php' style='font-size:20px'>logout</a></p><hr/>";
        echo "<h2>Welcome to Admin ! </h2>";
    }else{
        echo "<p>非法進入系統</p><hr/>";
        echo "<a href='login.php'>回登入頁</a>";
        exit();
    }
}else{
    header('Location: fail.php');
    exit();
}

?>
</html>
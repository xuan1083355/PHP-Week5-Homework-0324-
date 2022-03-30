<html>
<style>
    html{
        text-align:center;
        background-color:#CCDDFF;
        font-size:25px;
        }
</style>

<?php
    session_start();
    session_destroy();
    echo "非法進入，請回去進行登入!!<br/><hr/>";
    echo "<a href='login.php' style='font-size:20px'>回登入頁</a>";
?>

</html>
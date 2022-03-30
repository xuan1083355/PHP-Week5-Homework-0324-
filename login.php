<?php
   // ob_start();
    session_start();
    
?>

<html>
    <head>
        <title>登入</title>
        <style>
            input{padding:10px 20px; border:2px black solid; cursor:pointer;border-radius:5px;}
            input[type="submit"]{padding:5px 15px; background:#ccc; border:0 none; cursor:pointer;border-radius:5px;}
            html{
                background-color:#FFDDAA;
                text-align:center;      
            }
            p{
                color:#FF7744;
                font-size:20px;
            }
            
         </style>
    </head>
    <body>
        <fieldset>
            <legend style="font-size:20px;font-style:italic";>
            <?php
            if(isset($_COOKIE["UID"])){
                $cookieID=$_COOKIE["UID"];
                echo "感謝"."<b>'$cookieID'</b>"."回到本系統";
            }else{
                echo "歡迎初次來到本系統";
            }   
            ?>
            </legend>

            <form action="" method="POST">  
                <p><b>請輸入帳號: </b><input type="text" name="id" required></p>
                <p><b>請輸入密碼: </b><input type="password" name="psw" required></p>
                <input type="submit" value="登入">
            </form>
        </field>

        <?php 
        
        
        $admin="admin";
        $admin_psw="520520";

        $user="user";
        $user_psw="13141314";

        if(isset($_POST["id"])){
            $uid=$_POST["id"];
            $upsw=$_POST["psw"];

            setcookie("UID",$uid,time()+17280);
            
            if($uid==$admin){
                if($upsw==$admin_psw){
                    $_SESSION["admin_login"]="YES";
                    header("Location: admin.php");
                }else{
                    header("Location: login.php");
                  //  echo "密碼輸入錯誤，請重新輸入";
                }
            }else if($uid==$user){
                if($upsw==$user_psw){
                    $_SESSION["user_login"]="YES";
                    header("Location: register.php");
                }else{
                    header("Location: login.php");
                    //echo "密碼輸入錯誤，請重新輸入";
                }   
            }else{
                 header("Location: login.php");
            }

        }else{
            //echo "請輸入帳號密碼";
        }

       // ob_flush();
        ?>
    </body>
</html>
<?php
    session_start();
    $userinfo = array('Piet'=>'doetje123','Klaas'=>'snoepje777','Truus'=>'arkiearkie201');
    $k = false;
    echo ' <link href = "login-pagina function Radio-index-style.css" rel="stylesheet" > ';
    if(isset($_POST ['username'])){
        if($userinfo[$_POST['username']] == $_POST['password'])
        {
            $k= true;
            $_SESSION['username'] = $_POST['username'];
            echo"<p id='welcome'>Welcome ".$_POST['username']."</p>";
        }else{
            function console_log($data)
            {
                echo '<script>';
                echo 'console.log(' . json_encode($data) . ')';
                echo '</script>';
            }

            }
            Usage:
            $myvar = "false";
            console_log( $myvar );

            echo"<br><p id='error'>Sorry, no acces</p>";

    }
?>
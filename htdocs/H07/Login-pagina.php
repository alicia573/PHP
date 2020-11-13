<?php
    session_start();
    $users = array(
        "Alicia" => array("Password" => "1234", "rol" => "Administrator"),
        "Klaus" => array("Password" => "1235", "rol" => "Gebruiker"),

    );

    if(isset($_GET['loguit'])) {
        $_SESSION = array();
        session_destroy();
    }




    if(isset($_POST["button"])
            && isset($users[$_POST['login']])
            && $users[$_POST["login"]]['Password'] == $_POST['Password']){

        $_SESSION["user"] = array("naam" => $_POST["login"],
                                 "Password" => $users[$_POST["login"]]['Password'],
                                  "rol" => $users[$_POST["login"]]['rol']);

        $message="Welkom ".$_SESSION["user"]['naam']." met de rol "
                          . $_SESSION["user"]['rol'];
        if(!$users){
            echo "wrong";
        }else echo "";

    }else{
        $message = "Inloggen";
        echo "Wrong";
    }





?>
<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <title>Login</title>
            <link rel="stylesheet" href="website-style.css">
        </head>
            <body>
            <div id="wrapper">
                <div id="navbar">
                    <button><a href="Website.php">Website</a></button>
                    <button><a href="admin.php">Admingedeelte</a></button>
                    <button><a href="Login-pagina.php?loguit" type="button">Uitloggen</a></button>
                </div>
                <div id="loginform">
                <h1><?php echo $message;  ?></h1>
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                    <label >Login:</label>
                   <input name="login" type="text" value="">
                    <label >Password:</label>
                    <input name="Password" type="password">
                    <input type="submit" name="button" value="Inloggen">
                </form>
                    <?php if(!empty($usernameEmpty)){ echo $usernameEmpty . '<br/>'; } ?>
            </div>
    </html>
<?php

if (isset($_POST['login-submit'])){

    require('connection.php');

    $name = $_POST['username'];
    $password = $_POST['password'];

    if (empty($name) || empty($password)){
        header("Location: login.php?error=emptyfields");
        exit();
    }
    else{
        $sql = "SELECT * FROM users WHERE name=?";
        $stmt = mysqli_stmt_init($conn);
        
        if(!mysqli_stmt_prepare($stmt,$sql)){
            header("Location: login.php?error=sqlerror");
            exit();
        }
        else{
            mysqli_stmt_bind_param($stmt,"s", $name);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            if ($row = mysqli_fetch_assoc($result) ){
                $pwdCheck = password_verify($password, $row['pwd']);

                if ($pwdCheck == false){
                    header("Location: login.php?error=wrongpassword");
                    exit();
                }
                else if ($pwdCheck == true){
                    session_start();
                    $_SESSION['userID']= $row['id'];
                    $_SESSION['userName']= $row['name'];

                    header("Location: index.php");
                    exit();

                }
                else{
                    header("Location: login.php?error=wrongpassword");
                    exit();
                }
            }
            else{
                header("Location: login.php?error=nouser");
                exit();
            }
        }

    }
}
else{
    header("Location: index.php");
    exit();
}

?>
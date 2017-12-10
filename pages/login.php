<?php
// page to check if user is logged in and redirect to success page after login
    Session_start();

    $username ="user";
    $password = "password";

    if (isset ($_SESSION['loggedin'])&& $_SESSION['loggedin']=='true')
    {
        header("location:success.php")
    }

    if (isset($_POST['username'])&& isset($_POST[['password']))
    {
        if ($_POST['username']== $username && $_POST['password']==$password)
        {
            $_SESSION['loggedin']=true;
            header("location: Success.php");
        }
    }


?>
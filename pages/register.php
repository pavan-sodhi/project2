<!doctype html>

<html lang="en">
<?php include 'home_header.php';?>
<head>
    <meta charset="utf-8">

    <title>Registration Page</title>
    <meta name="description" content="Registration Page">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="css/styles.css?v=1.0">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
</head>

<body>


<form action="index.php?page=accounts&action=register" method="post">
    First name: <input type="text" name="fname"><br>
    Last name: <input type="text" name="lname"><br>
    Email: <input type="text" name="email"><br>
    Phone: <input type="text" name="phone"><br>
    Birthday: <input type="text" name="birthday"><br>
    Gender: <input type="text" name="gender"><br>
    Password: <input type="password" name="password"><br>

    <input type="submit" value="Submit form">
</form>



<script src="js/scripts.js"></script>
</body>
</html>

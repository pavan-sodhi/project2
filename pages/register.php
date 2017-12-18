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
    First name: <input type="text" minlength="2" placeholder= "Min 2 Characters "minlength="2" required name="fname"><br>
    Last name: <input type="text" minlength="2" placeholder= "Min 2 Characters" minlength="2" maxlength="25" name="lname" required ><br>
    Email: <input type="text" name="email" placeholder= "example@abc.com"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" ><br>
    Phone: <input type="text" minlength="1" placeholder= "973-333-4564" ><br>
    Birthday: <input type="text" name= "birthday" placeholder= "YYYY-MM-DD "><br>
    Gender: <input type="text" name="gender" placeholder= "Male/Female" ><br>
    Password: <input type="password" name="password" placeholder= " Min 6 Characters" minlength="6" required><br>

    <input type="submit" value="Submit form">
</form>

<?php include 'footer.php';?>

<script src="js/scripts.js"></script>
</body>
</html>

<!doctype html>
<?php include 'header.php';?>
<html lang="en">
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


<form action="index.php?page=tasks&action=create" method="post">
    Owner Email: <input type="text" name="owneremail" placeholder= "test@test.com " value="<?php echo $data->owneremail; ?>"><br>
    Due Date: <input type="text" name="duedate" placeholder= "YYYY-MM-DD " value="<?php echo $data->duedate; ?>"><br>
    Message: <input type="text" name="message" placeholder= "Your Task " value="<?php echo $data->message; ?>" placeholder= "Min 2 Characters "minlength="2" required ><br>
    Is Done ?: <input type="text" name="isdone" placeholder= "1 = Done, 0 = Not Done" value="<?php echo $data->isdone; ?>"><br>

    <input type="submit" value="Submit form">
</form>

<?php include 'footer.php';?>
<script src="js/scripts.js"></script>
</body>
</html>

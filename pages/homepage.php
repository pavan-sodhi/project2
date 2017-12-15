<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Final Project</title>
    <meta name="description" content="Final Project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->

</head>

<body>

    <h1>
        <?php //this how to print some data;
        echo $data['site_name'];
        ?>
    </h1>

<h1><a href="index.php?page=accounts&action=all">Show All Accounts</a></h1>
<h1><a href="index.php?page=tasks&action=all">Show All Tasks</a></h1>

<form action="index.php?page=accounts&action=login" method="POST">

    <div class="container">
        <form>
            <fieldset class="form-group">
            <label><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="email" required>
            </fieldset>

            <fieldset class="form-group">
            <label><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required>
            </fieldset>

            <fieldset class="form-group">
        <button type="submit">Login</button>
            </fieldset>
        </form>
    </div>


</form>
<h1><a href="index.php?page=accounts&action=register">Register</a></h1>

<script src="js/scripts.js"></script>
</body>
</html>
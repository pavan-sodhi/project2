<!doctype html>
<?php include 'header.php';?>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>The HTML5 Herald</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="css/styles.css?v=1.0">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
</head>

<body>
<!--<h1>IS 601 Final Project website </h1>
<a href="index.php">Home</a>
<a href="index.php?page=tasks&action=create">Create Task</a>
<a href="index.php?page=tasks&action=all">View Tasks </a>

<h1> Account Profile Display  </h1>
-->

<?php
//this is how you print something


print utility\htmlTable::genarateTableFromMultiArray($data);


?>


<script src="js/scripts.js"></script>
</body>
</html>
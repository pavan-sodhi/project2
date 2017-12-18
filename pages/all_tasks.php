<!doctype html>
<?php include 'header.php';?>
<html lang="en">
<head>
    <meta charset="utf-8">

    <title>All Tasks</title>
    <meta name="description" content="All Tasks">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="css/styles.css?v=1.0">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
</head>



<?php include 'footer.php';?>

<body>
<!--<a href="index.php">Home</a>
<a href="index.php?page=tasks&action=create"> Create Task </a>
<a href="index.php?page=accounts&action=all"> Profile </a>

-->








<?php
//this is how you print something
if ($data == false)
{
    echo '<p> You do not have any tasks. Please click on create task to create a task.</p>';

}
elseif  (is_array($data)){
    print utility\htmlTable::genarateTableFromMultiArray($data);
}
//else { print utility\htmlTable::genarateTableFromMultiArray($data); }
else { print utility\htmlTable::generateTableFromOneRecord($data); }

?>


<script src="js/scripts.js"></script>
</body>
</html>
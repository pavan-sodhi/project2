<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Show Task</title>
    <meta name="description" content="Show Task">
    <meta name="author" content="SitePoint">

    <link href="starter-template.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css?v=1.0">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
</head>

<body>

<?php
//this is how you print something  $data contains the record that was selected on the table.
print_r($data);
?>
<form action="index.php?page=tasks&action=delete&id=<?php echo $data->id; ?> " method="post" id="form1">
    <button type="submit" form="form1" value="delete">Delete</button>
</form>



<?php include 'footer.php';?>
<script src="js/scripts.js"></script>
</body>
</html>
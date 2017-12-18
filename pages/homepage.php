
<?php include 'home_header.php';?>

    <h1>
        <?php //this how to print some data;
       // echo $data['site_name'];
        ?>
    </h1>




    <?php
    session_start();
    if(key_exists('userID',$_SESSION))
    {
    include 'authenticated_user_menu.php';
    echo '<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-3">IS 601 Final Project</h1>
        <p class="lead">This is a starter program to create a task for user, modify or delete those tasks. It also helps user update his profile.</p>
    </div>
</div>';

    }
    else
        {
            include 'login_form.php';
        }

    ?>

<?php include 'footer.php';?>

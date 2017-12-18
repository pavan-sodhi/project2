<!--
<form action="index.php?page=accounts&action=login" method="POST">

    <div class="container">
        <label><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="email" required>

        <label><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required>

        <button type="submit">Login</button>
    </div>


</form>
-->
<h1><a href="index.php?page=accounts&action=register">Register</a></h1>

<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-3">IS 601 Final Project</h1>
        <p class="lead">This is a starter program to create a task for user, modify or delete those tasks. It also helps user update his profile.</p>
    </div>
</div>

<form action="index.php?page=accounts&action=login" method="POST">
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">Your email will be your username.</small>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
    </div>
    <div class="form-check">
        <label class="form-check-label">
            <input type="checkbox" class="form-check-input">
            Check me out
        </label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
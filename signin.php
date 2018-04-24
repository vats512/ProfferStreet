<?php 
    include 'header.php';
    require 'settings.php';
    if(isset($_SESSION['user_id']))
        header('Location: profile.php');
?>
<div id="signin">
    <div class="row">
        <div id="head" class="col-sm-offset-1 col-sm-3">
            <h2><span class="glyphicon glyphicon-user"></span> Signin <?php if($login_to_cont) echo "to continue!";?></h2><br/>
        </div>
    </div>
    <form class="form-horizontal" role="form" action="checker.php" method="POST">

        <div class="form-group">
            <div class="input-group col-sm-offset-1 col-sm-4">
                <span class = "input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                <input type="email" class="form-control input-lg" id="email" name="email" placeholder="Email Id" autofocus required oninvalid="setCustomValidity('Please enter valid Email ID')" oninput="setCustomValidity('')">
            </div>
        </div>

        <div class="form-group">
            <div class="input-group col-sm-offset-1 col-sm-4">
                <span class = "input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                <input type="password" class="form-control input-lg" id="pword" name="pword" placeholder="Password" required oninvalid="setCustomValidity('Please choose a Password')" oninput="setCustomValidity('')">
            </div>
        </div>

        <div class="form-group">
            <div class="checkbox col-sm-offset-1">
                <label><input type="checkbox" name="keep_logged_in">Keep me logged in</label>
            </div>
        </div>

        <div class="form-group">        
            <div class="col-sm-offset-1">
                <button type="submit" id="submit" class="btn btn-success">
                    <span class="glyphicon glyphicon-log-in"></span> Login
                </button>
            </div>
        </div>

        <div class="form-group">        
            <div class="col-sm-offset-1">
                <p class="h4">Don't have an account yet?<a href="signup.php"><strong> Join us!</strong></a></p>
            </div>
        </div>
    </form>
</div>
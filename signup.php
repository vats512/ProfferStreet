<?php
	include 'header.php';
	require 'settings.php';
?>
<script type="text/javascript" src="js/login.js"></script>
<script type="text/javascript" src="js/product.js"></script>
<div id="signup">
    <div class="col-sm-1"></div>
    <div id="head">
        <h2 class="text-primary"><span class="glyphicon glyphicon-list-alt"></span> Signup</h2><br/>
    </div>
    <form class="form-horizontal" role="form" id="signup_form" action="register.php" enctype="multipart/form-data" method="POST">

        <div class="form-group">
            <div class="input-group col-sm-offset-1 col-sm-4">
                <span class = "input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input type="text" class="form-control input-lg tip_danger_lg" id="name" name="name" placeholder="Name" autofocus required oninvalid="setCustomValidity('Please enter Full name')" oninput="setCustomValidity('')" data-toggle="tooltip" data-placement="right" title="">
            </div>
        </div>

        <div class="form-group">
            <div class="input-group col-sm-offset-1 col-sm-4">
                <span class = "input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                <input type="email" class="form-control input-lg tip_danger_lg" id="email" name="email" placeholder="Email Id" required oninvalid="setCustomValidity('Please enter valid Email ID')" oninput="setCustomValidity('')" data-toggle="tooltip" data-placement="right" title="">
            </div>
        </div>

        <div class="form-group">
           <div class="input-group col-sm-offset-1 col-sm-4">
                <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
                <input type="text" class="form-control input-lg tip_danger_lg" id="contact" name="contact" pattern="[0-9]{10}" placeholder="Contact no" maxlength="10" required oninvalid="setCustomValidity('Please enter a valid Contact number')" oninput="setCustomValidity('')" data-toggle="tooltip" data-placement="right" title="">
            </div>
        </div>

        <div class="form-group">
            <div class="input-group col-sm-offset-1 col-sm-4">
                <span class = "input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                <input type="password" class="form-control input-lg tip_danger_lg" id="pword" name="pword" placeholder="Password" required oninvalid="setCustomValidity('Please choose a Password')" oninput="setCustomValidity('')" data-toggle="tooltip" data-placement="right" title="">
            </div>
        </div>

        <div class="form-group">
            <div class="input-group col-sm-offset-1 col-sm-4">
                <span class = "input-group-addon"><i class="glyphicon glyphicon-repeat"></i></span>
                <input type="password" class="form-control input-lg tip_danger_lg" id="cpword" placeholder="Confirm password" required oninvalid="setCustomValidity('Please confirm your password')" oninput="setCustomValidity('')" data-toggle="tooltip" data-placement="right" title="">
            </div>
        </div>
		
		<div class="form-group has-feedback">
            <div class="input-group col-sm-offset-1 col-sm-2">
                <input type="button" id="image_trigger" class="form-control btn btn-primary" value="Set Image" style="border-radius: 0px"/>
                <span class="glyphicon glyphicon-picture form-control-feedback"></span>
                <input type="file" id="image"  name="image" style="display: none" accept="image/*" required/>
            </div>
        </div><br/>

        <div class="form-group">        
            <div class="col-sm-offset-1">
                <button type="submit" id="submit" class="btn btn-success">
                    <span class="glyphicon glyphicon-edit"></span> Signup
                </button>
            </div>
        </div>

        <div class="form-group">        
            <div class="col-sm-offset-1">
                <p class="h4">Already registered? <a href="signin.php"><strong>Signin</strong></a> now!</p>
            </div>
        </div>
    </form>
</div>
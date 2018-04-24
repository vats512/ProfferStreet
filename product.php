<?php
    include 'header.php';
    require 'settings.php';
?>
<script type="text/javascript" src="js/product.js"></script>
<div class="container-fluid">
    <h2 class="h2 text-center">Insert Item</h2><br/>
    <form class="form-horizontal" action="product1.php" method="POST" role="form" enctype="multipart/form-data">
        <div class="form-group">
            <label class="control-label col-sm-1" for="name">Item Name:</label>
            <div class="col-sm-4">
                <input type="text" id="name" class="form-control" name="name" placeholder="Name" autofocus required/>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-1" for="price">Base Price:</label>
            <div class="col-sm-4">          
                <input type="text" id="price" class="form-control" name="price" placeholder="Price" required/>
            </div>
        </div>

        <div class="form-group" id="categ_select">
            <label class="control-label col-sm-1" for="category">Category:</label>
            <div class="col-sm-4">          
                <select id="category" id="category" class="form-control" name="category" required>
                    <option value="Auto" id="info_option">Automobile</option>
                    <option value="Antique" id="info_option">Antique</option>
                    <option value="Furniture" id="info_option">Furniture</option>
                    <option value="Electronics" id="info_option">Electronics</option>
                    <option value="Others" id="info_option">Others</option>
                </select>
            </div>
        </div>

        <div class="form-group has-feedback">
            <label class="control-label col-sm-1" for="category">Image:</label>  
            <div class="col-sm-2">
                <input type="button" id="image_trigger" class="form-control btn btn-primary" value="Set Image"/>
                <span class="glyphicon glyphicon-picture form-control-feedback"></span>
                <input type="file" id="image" name="image" style="display: none" accept="image/*" required/>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-1" for="starting_time">Start Time:</label>
            <div class="col-sm-4">          
                <input type="date" id="starting_time" class="form-control" name="start_date" required>
            </div>
            <div class="col-sm-1">          
                <select name="start_time" class="form-control" required>
                    <option value="1">1:00</option>
                    <option value="2">2:00</option>
                    <option value="3">3:00</option>
                    <option value="4">4:00</option>
                    <option value="5">5:00</option>
                    <option value="6">6:00</option>
                    <option value="7">7:00</option>
                    <option value="8">8:00</option>
                    <option value="9">9:00</option>
                    <option value="10">10:00</option>
                    <option value="11">11:00</option>
                    <option value="12">12:00</option>
                </select>
            </div>
            <div class="col-sm-1">          
                <select name="start_ampm" class="form-control" required/>
                    <option value="am">AM</option>
                    <option value="pm">PM</option>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-1" for="ending_time">End Time:</label>
            <div class="col-sm-4">          
                <input type="date" id="ending_time" class="form-control" name="end_date"required/ >
            </div>
            <div class="col-sm-1">          
                <select name="end_time" class="form-control" required/>
                    <option value="1">1:00</option>
                    <option value="2">2:00</option>
                    <option value="3">3:00</option>
                    <option value="4">4:00</option>
                    <option value="5">5:00</option>
                    <option value="6">6:00</option>
                    <option value="7">7:00</option>
                    <option value="8">8:00</option>
                    <option value="9">9:00</option>
                    <option value="10">10:00</option>
                    <option value="11">11:00</option>
                    <option value="12">12:00</option>
                </select>
            </div>
            <div class="col-sm-1">          
                <select name="end_ampm" class="form-control" required>
                    <option value="am">AM</option>
                    <option value="pm">PM</option>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-1" for="description">Description:</label>
            <div class="col-sm-4">
                <textarea id="description" class="form-control" required name="description" rows="4" placeholder="Description"></textarea>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-1"></div>
            <div class="col-sm-3">
                <button class="btn btn-info">
                    <span class="glyphicon glyphicon-plus"></span> Insert
                </button>
            </div>
        </div>
    </form>
</div>
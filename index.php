<?php 
    include 'header.php';
    require 'settings.php';
?>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="img/slider/img-1.png" alt="New York" width="800" height="200">
             
      </div>

      <div class="item">
        <img src="img/slider/img-2.png"  width="1200" height="700">
             
      </div>
    
      <div class="item">
        <img src="img/slider/img-3.png"  width="1200" height="700">    
      </div>

      <div class="item">
        <img src="img/slider/img-4.png"  width="1200" height="700">
              
      </div>
    </div>

    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>

<div id="band" class="container text-center">
  <h1>PROFFER STREET</h1>
  <p class="h3"><em>It’s A Win Win!</em></p><p>
  <p> Our team name is “Proffer street”. Basically Proffer means ‘Auction’ in Dutch. We made project on auction and auction related websites .  So Proffer Street is appropriate name as it gives idea and meaning to the project. In this era, everyone wants to buy and sell product sitting at home, due to this there is increasing demand of place and websites where they can buy or sell product easily.  </p>
  <br><br/>
  <p class="h3"><strong>See what users have to say about us..</strong></p><br/><br/>
  <div class="row">
    <div class="col-sm-4">
      <p class="text-center"><strong>Manush</strong></p><br>
      <a href="#demo" data-toggle="collapse">
        <img src="img/user/user-1.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo" class="collapse">
        <p>An extremely convenient site to buy products. Trustworthy, secure and speedy</p>
      </div>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>Harshit</strong></p><br>
      <a href="#demo2" data-toggle="collapse">
        <img src="img/user/user-2.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo2" class="collapse">
        <p>An extremely convenient site to buy products. Trustworthy, secure and speedy</p>
      </div>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>Vismay</strong></p><br>
      <a href="#demo3" data-toggle="collapse">
        <img src="img/user/user-3.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo3" class="collapse">
        <p>An extremely convenient site to buy products. Trustworthy, secure and speedy</p>
      </div>
    </div>
  </div>
</div>
</div>
<div class="container" id="flipperr" style="padding: 0px; margin-left: 150px; margin-right: 0px;">
  <p class="h1">Trending Products</p><br/>
  <?php
    $sql = "SELECT * FROM product LIMIT 4";
    $result = $con->query($sql);
    while($row = $result->fetch_assoc())
    {
  ?>
<div class="flip-container" ontouchstart="this.classList.toggle('hover');">
      <div class="flipper">
        <div class="front">
          <img src="images/<?= $row['name'];?>.jpg" class="img-thumbnail thumbnail main_thumbnail"/>
          <p class="h3 text-center"><?= $row['name'];?></p>
        </div>
        <div class="back">
          <p class="h3 text-left"><img src="images/<?= $row['name'];?>.jpg" class="img-thumbnail small_thumbnail"/><?= $row['name'];?></p>
          <p class="h3 text-center">Price: &#8377 <?= $row['base_price'];?> /-</p>
          <p class="h3 text-center"><?php echo mb_strimwidth($row['description'],0,50,"..");?></p><br/>
          <a href="viewproduct.php?i=<?= $row['id'];?>">
            <button type="button" class="btn btn-primary btn-sm view_details">
              View Product <span class="glyphicon glyphicon-share-alt"></span>
            </button>
          </a>
          <button type="button" class="btn btn-success btn-sm shortlist" rel="<?= $row['id'];?>">
              <span class="add_text">Add to Shortlist </span><span class="glyphicon glyphicon-plus"></span>
            </button>
        </div>
      </div>
    </div>
<?php
    }
  ?>
</div>

<footer class="container-fluid text-center" style="background-color: #cfe3e8;">
<form class="form-inline">
<br><br>
<font style="color:black;">Get More Information From: </font>
    <button type="button" class="btn btn-info"><a href="http://www.facebook.com" style="color:white">Facebook</a></button>&nbsp; &nbsp; &nbsp;
    <button type="button" class="btn btn-info"><a href="http://www.instagram.com" style="color:white">Instagram</a></button>&nbsp; &nbsp; &nbsp;
    <button type="button" class="btn btn-info"><a href="http://www.twitter.com" style="color:white">Twitter</a></button>&nbsp; &nbsp; &nbsp;
	    <button type="button" class="btn btn-info"><a href="contact_us.php" style="color:white">Contact us</a></button><br><br>

    <a href="#myPage" style="color:black;"><span class="glyphicon glyphicon-menu-up"></span></a>
  </form>
</footer>

<script>
$(document).ready(function()
{
    $('[data-toggle="tooltip"]').tooltip(); 

    $(".navbar a, footer a[href='#myPage']").on('click', function(event)
    {
        event.preventDefault();
        var hash = this.hash;

        $('html, body').animate(
        { scrollTop: $(hash).offset().top }, 900, 
        function()
        {
             window.location.hash = hash;
        });

    });
});
</script>

</body>
</html>

<?php
include "includes/common.php";

if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
?>
<!DOCTYPE html>
<!--

-->
<html>
    <head>
               
        <meta charset="UTF-8">
        <title>MARKET Store | Products</title>
         <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script type="text/javascript" src="bootstrap/js/jquery-3.5.0.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link rel="stylesheet" href="css/style.css"/> 
   
        </head>

    <style>
        body{
            background-color: #9999;        }
        
        </style>
    <body>
        <?php
        include 'includes/header.php';
        include 'includes/check-if-added.php';
        ?>
        
         <br><br><br>
        <!-- <div class="container">
            
            <div class="jumbotron">
                <h1>Welcome to our Lifestyle Store!</h1>
                <p>We have the best cameras,watches and shirts for you. No need to hunt around, we have all in one place.</p>
                
            </div>
             
        </div> -->
        <!-- mmmmmmmmmmmmmmmmmmmmmmmmmmb   ////////menu bar mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm -->
        <nav class="navbar navbar-default">
  <div class="container-fluid nav ">
      <div class="justify-content-center"
">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><strong>Computers Accessories</strong></a>
    </div>
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><strong>Watches</strong></a>
    </div>
<!-- nav form-------------------------------------------------------------------------------->
<form class="navbar-form navbar-left" action="/action_page.php">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search">
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
    </form>
    <!-- nav form-------------------------------------------------------------------------------->

<!-- 
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><strong>Electronics</strong> </a>
    </div> -->
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><strong> Mobile Phones</strong></a>
    </div>

    <div class="navbar-header">
      <a class="navbar-brand" href="#"><strong> Books</strong></a>
    </div>
    </div>
<!--     
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul> -->


    <!-- <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      
      <li><a href="#">Page 1</a></li>
      <li><a href="#">Page 2</a></li>
      <li><a href="#">Page 3</a></li>
    </ul> -->
  </div>
</nav>
      
        <!-- mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm -->

        
                
                 <div class="container">
              <div class="row text-center">
                  <div class="col-md-3 col-sm-6">
                      <div class="thumbnail">
                          <img src="img/63.jpg" alt="Responsive image">
                          <div class="caption">
                              <h3>Cannon EOS</h3>
                              <p>Price:Rs.36000.00</p>
                              <?php 
					
					if (check_if_added_to_cart(1)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
					<?php
					}
                                ?>
                             <!-- <button type="submit" class="btn btn-primary btn-block">Add to cart</button>-->
                          </div>
                      </div>
                  </div>
                  
                  
                  <div class="col-md-3 col-sm-6">
                      <div class="thumbnail">
                          <img src="img/64.jpg" alt="Responsive image">
                          <div class="caption">
                              <h3>Sony DSLR</h3>
                              <p>Price:Rs.40000.00</p>
                              <?php 
					
					if (check_if_added_to_cart(2)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
					<?php
					}
                                ?>
                              <!--<button type="submit" class="btn btn-primary btn-block">Add to cart</button>-->
                          </div>
                      </div>
                  </div>
                  
                  
                   <div class="col-md-3 col-sm-6">
                      <div class="thumbnail">
                          <img src="img/65.jpg" alt="Responsive image">
                          <div class="caption">
                              <h3>Sony DSLR</h3>
                              <p>Price:Rs.50000.00</p>
                              <?php 
					
					if (check_if_added_to_cart(3)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
					<?php
					}
                                ?>
                              <!--<button type="submit" class="btn btn-primary btn-block">Add to cart</button>-->
                          </div>
                      </div>
                  </div>
                  
                   <div class="col-md-3 col-sm-6">
                      <div class="thumbnail">
                          <img src="img/66.jpg" alt="Responsive image">
                          <div class="caption">
                              <h3>Olympus DSLR</h3>
                              <p>Price:Rs.80000.00</p>
                              <?php 
					
					if (check_if_added_to_cart(4)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
					<?php
					}
                                ?>
                              <!--<button type="submit" class="btn btn-primary btn-block">Add to cart</button>-->
                          </div>
                      </div>
                  </div>
                  
                  
                   <div class="col-md-3 col-sm-6">
                      <div class="thumbnail">
                          <img src="img/67.jpg" alt="Responsive image">
                          <div class="caption">
                              <h3>Titan Model#301</h3>
                              <p>Price:Rs.13000.00</p>
                              <?php 
					
					if (check_if_added_to_cart(5)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
					<?php
					}
                                ?>
                              <!--<button type="submit" class="btn btn-primary btn-block">Add to cart</button>-->
                          </div>
                      </div>
                  </div>
                  
                  <div class="col-md-3 col-sm-6">
                      <div class="thumbnail">
                          <img src="img/68.jpg" alt="Responsive image">
                          <div class="caption">
                              <h3>Titan Model#201</h3>
                              <p>Price:Rs.3000.00</p>
                              <?php 
					
					if (check_if_added_to_cart(6)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
					<?php
					}
                                ?>
                              <!--<button type="submit" class="btn btn-primary btn-block">Add to cart</button>-->
                          </div>
                      </div>
                  </div>
                  
                  <div class="col-md-3 col-sm-6">
                      <div class="thumbnail">
                          <img src="img/69.jpg" alt="Responsive image">
                          <div class="caption">
                              <h3>HMT Milan</h3>
                              <p>Price:Rs.8000.00</p>
                              <?php 
					
					if (check_if_added_to_cart(7)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
					<?php
					}
                                ?>
                             <!-- <button type="submit" class="btn btn-primary btn-block">Add to cart</button>-->
                          </div>
                      </div>
                  </div>
                  
                   <div class="col-md-3 col-sm-6">
                      <div class="thumbnail">
                          <img src="img/70.jpg" alt="Responsive image">
                          <div class="caption">
                              <h3>Faber Luba#111</h3>
                              <p>Price:Rs.18000.00</p>
                              <?php 
					
					if (check_if_added_to_cart(8)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
					<?php
					}
                                ?>
                              <!--<button type="submit" class="btn btn-primary btn-block">Add to cart</button>-->
                          </div>
                      </div>
                  </div>
                  
                  <div class="col-md-3 col-sm-6">
                      <div class="thumbnail">
                          <img src="img/8.jpg" alt="Responsive image" id="imgs">
                          <div class="caption">
                              <h3>H&W</h3>
                              <p>Price:Rs.800.00</p>
                              <?php 
					
					if (check_if_added_to_cart(9)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
					<?php
					}
                                ?>
                             <!-- <button type="submit" class="btn btn-primary btn-block">Add to cart</button>-->
                          </div>
                      </div>
                  </div>
                  
                  <div class="col-md-3 col-sm-6">
                      <div class="thumbnail">
                          <img src="img/6.jpg" alt="Responsive image">
                          <div class="caption">
                              <h3>luis Phil</h3>
                              <p>Price:Rs.1000.00</p>
                              <?php 
					
					if (check_if_added_to_cart(10)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
					<?php
					}
                                ?>
                              <!--<button type="submit" class="btn btn-primary btn-block">Add to cart</button>-->
                          </div>
                      </div>
                  </div>
                  
                  
                  <div class="col-md-3 col-sm-6">
                      <div class="thumbnail">
                          <img src="img/13.jpg" alt="Responsive image">
                          <div class="caption">
                              <h3>John Zok</h3>
                              <p>Price:Rs.1500.00</p>
                              <?php 
					
					if (check_if_added_to_cart(11)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
					<?php
					}
                                ?>
                              <!--<button type="submit" class="btn btn-primary btn-block">Add to cart</button>-->
                          </div>
                      </div>
                  </div>
                  
                  <div class="col-md-3 col-sm-6">
                      <div class="thumbnail">
                          <img src="img/14.jpg" alt="Responsive image">
                          <div class="caption">
                              <h3>Jhalsani</h3>
                              <p>Price:Rs.1300.00</p>
                              <?php 
					
					if (check_if_added_to_cart(12)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
					<?php
					}
                                ?>
                              <!--<button type="submit" class="btn btn-primary btn-block">Add to cart</button>-->
                          </div>
                      </div>
                      
                      
                      
                  </div>
                  
              </div>
             
          </div><br>
          
          <div  style="text-align: center;">
          <ul class="pagination ">
  <li><a href="products.php">1</a></li>
  <li><a href="product2.php">2</a></li>
  <li><a href="product3.php">3</a></li>
  <li><a href="#">4</a></li>
  <li><a href="#">5</a></li>
</ul>
</div>



       <footer class="fo">
           <div class="container">
               <center>
                   <p>Copyright <small>&copy;</small> Lifestyle Store | All Rights Reserved</p>
               </center>
           </div>
           
           
       </footer> 
        
        
    </body>
</html>

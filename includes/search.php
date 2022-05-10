<!DOCTYPE html>
<html>
<head>
	<title>Search Bar using PHP</title>
</head>
<body>

<form  method="post"  style="margin-top: 10px;">
<label>Search</label>
<input type="text" name="search">
<input type="submit" name="submit" >
   
</form>   



<?php

$con = new PDO("mysql:host=localhost;dbname=storesss",'root','');

if (isset($_POST["submit"])) {
	$str = $_POST["search"];
	$sth = $con->prepare("SELECT * FROM `items` WHERE name = '$str' ");

	$sth->setFetchMode(PDO:: FETCH_OBJ);
	$sth -> execute();

	if($row = $sth->fetch() )
	
	{
		?>
 
 <!-- UNION  SELECT `nameu`  FROM `tbl_images` -->
  
			<hr><br>				  
 
	  <div class="container">
              <div class="row text-center">
                  <div class="col-md-3 col-sm-6">
                      <div class="thumbnail">
                      <img src="<?php  

					  
                      $var=$row->pic;  
					 
					 ;  echo $var; 
					 
					 ?>" alt="Responsive image">
                          <div class="caption">
                              <h3><?php echo $row->name; ?></h3>
                              <p><?php echo $row->price; ?></p>
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
                  

	 
<?php 
	}
		
		
		else{
			echo "Name Does not exist";
		}


}


                  
<?php
include_once("connection.php");
?>

    

 <div class="section trending">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="section-heading">
            <h6>Trending</h6>
            <h2>Trending Toy</h2>
          </div>
        </div>
        <div class="col-lg-6">
        </div>

        <?php
						  // 	include_once("database.php");
		  				   	$result = mysqli_query($conn, "SELECT * FROM product" );
			
			                if (!$result) { //add this check.
                                die('Invalid query: ' . mysqli_error($conn));
                            }
		
			            
			                while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
				            ?>
                            
        <div class="col-lg-3 col-md-6">
          <div class="item">
            <div class="thumb">
              <a href="product-details.html"><img src="product-imgs/<?php echo $row['Pro_image']?>" width="306" height="306"></a>
              <span class="price"><?php echo  $row['Price']?>$</span>
            </div>
            <div class="down-content">
              <span class="category">Name</span>
              <h4><?php echo  $row['Product_Name']?></h4>
              <a href="product-details.html"><i class="fa fa-shopping-bag"></i></a>
            </div>
          </div>
        </div>

        <?php
                
            }
            ?>
 


      </div>
    </div>
  </div>
   
  
                        
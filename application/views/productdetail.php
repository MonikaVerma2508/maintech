

 <?php 
	  $dbHost = 'localhost'; 
    $dbUsername = 'root'; 
    $dbPassword = ''; 
    $dbName = 'db_products'; 
     
    // Create connection and select database 
    $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName); 
     
    if ($db->connect_error) { 
        die("Unable to connect database: " . $db->connect_error); 
    } 
      $id=$_POST['id'];
    // Get content from the database 
    $query = $db->query("SELECT * FROM products where product_id='".$id."'" ); 
     
    if($query->num_rows > 0){ 
        $cmsData = $query->fetch_assoc(); 
        $name=$cmsData['name']; 
        $price=$cmsData['price'] ;
		 $category=$cmsData['category'] ;
		  $model=$cmsData['model'] ;
	}
		
?>
<br><br><br><br><br><br>
<div class="modal-dialog"  >
    <div class="modal-content">
     
	    
			<div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">Product Datails</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">×</span>
			</button>
		  </div>
			
      <div class="modal-body">
        <table class="table table-striped">
        <tbody>
            <?php
			
              
 
                ?>
            <tr>
              <td>Product Name</td>
              <td><?php echo $name  ?></td>
            </tr>
            <tr>
              <td>Category</td>
              <td><?php echo $category;  ?></td>
            </tr>
            <tr>
              <td>Price</td>
              <td><?php echo $price;  ?></td>
            </tr>
            <tr>
              <td>Model</td>
              <td><?php echo $model;  ?></td>
            </tr> 
           
      </tbody>
    </table>
      </div>
	  
    </div>
  </div>
</div>

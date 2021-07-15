 


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Share Product</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <style>
.form-group   label.error {    display: inline-block;    width: 100%;    color: red;}
</style>
  </head>

  
  
  
  <body> 
    <div class="container">

      

 <nav class="navbar navbar-expand-md navbar-dark bg-dark card-header">
       <a class="navbar-brand" href="http://localhost:8080/CodeIgniter_pro/index.php/products/savedata"><i class="fas fa-home mr-2"></i> Share Product</a>
 
         

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
          <ul class="navbar-nav ml-auto">
 
          
              <!-- 
              <li class="nav-item">

                  <a class="nav-link" href="http://localhost:8080/CodeIgniter_pro/index.php/products/dispdata"><i class="fas fa-users mr-2"></i>Products lists </span></a>
              </li>
			  
			   -->
              
             
			

          </ul>

        </div>
      </nav>

	<div class="main-panel">
        <div class="content-wrapper">
            
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"> </h4>
				  
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
      $id=$_GET['id'];
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
               
                   <form class="forms-sample"  name="mails"   method="post"  enctype="multipart/form-data" >
				   
				   <div class="form-group  ">
                      <label for="first_name" class="col-sm-3 col-form-label">   To</label>
                      <div class="col-sm-9">
                        <input type="email" class="form-control" id="to" name="to"    placeholder=" Please Receiver Email">
                      </div>
                    </div>
					<div class="form-group  ">
                      <label for="last_name" class="col-sm-3 col-form-label">subject</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="subject" name="subject"    placeholder="Please Enter subject">
                      </div>
                    </div>
					<div class="form-group  ">
                      <label for="email" class="col-sm-3 col-form-label">Message</label>
                      <div class="col-sm-9">
                       <textarea rows="6" id="message" name="message" placeholder="Type your message here"></textarea>
                      </div>
                    </div>
					
				 
                        <input type="hidden" class="form-control" id="name" name="name"  readonly value="<?php echo $name; ?>"  >
						 <input type="hidden" class="form-control" id="category" name="category"  readonly value="<?php echo $category; ?>"  >
						  <input type="hidden" class="form-control" id="price" name="price"  readonly value="<?php echo $price; ?>"  >
						   <input type="hidden" class="form-control" id="model" name="model"  readonly value="<?php echo $model; ?>"  >
                     
					
				 
					
                    
                   
                   <input type="submit" name="save_email" class="btn btn-light"  value="Send Email" />
                    <button class="btn btn-light" onclick="cancel()" >Cancel</button>
                  </form>
                
 
		 </div>	 
		 </div>	 
		 </div>	 
	</div> 


<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.0/additional-methods.min.js"></script>
<script src="https://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>	 
   
 
  <script >
  
  function cancel(){
	   location.href="http://localhost:8080/CodeIgniter_pro/index.php/products/dispdata";
	  
  }
jQuery(document).ready(function(){
	 
	$("form[name='mails']").validate({  
	
	rules: {
				to: "required",
				subject: "required",
                message: "required",
                 model: "required"
            },
            messages: {
				to: " Enter To",
                subject: " Enter Subject",
				 message: " Enter message" 
               
				 
            }
		   
		
});
});
 
 
 
  </script>
  </body> 
</html>
 
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Update Product</title>
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
       <a class="navbar-brand" href="http://localhost:8080/CodeIgniter_pro/index.php/products/savedata"><i class="fas fa-home mr-2"></i> Add Products</a>
 
         

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
          <ul class="navbar-nav ml-auto">
 
          
            
             <li class="nav-item">

                  <a class="nav-link" href="http://localhost:8080/CodeIgniter_pro/index.php/products/dispdata"><i class="fas fa-users mr-2"></i>Products lists </span></a>
              </li>  
			  
			   
              
             
			

          </ul>

        </div>
      </nav>

	<div class="main-panel">
        <div class="content-wrapper">
            
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"> </h4>
				  
		<?php
  $i=1;
  foreach($data as $row)
  {
  ?>
                   <form class="forms-sample"  name="edit_pro"   method="post">
				   <div class="form-group  ">
                      <label for="first_name" class="col-sm-3 col-form-label">   Name</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="name" name="name"    value="<?php echo $row->name; ?>" placeholder=" Please Enter Name">
                      </div>
                    </div>
					<div class="form-group  ">
                      <label for="last_name" class="col-sm-3 col-form-label">Category</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="category" name="category" value="<?php echo $row->category; ?>"    placeholder="Please Enter Category">
                      </div>
                    </div>
					<div class="form-group  ">
                      <label for="email" class="col-sm-3 col-form-label">Price</label>
                      <div class="col-sm-9">
                        <input type="number" class="form-control" id="price" name="price"   value="<?php echo $row->price; ?>" placeholder="Please Enter Price">
                      </div>
                    </div>
					
					<div class="form-group  ">
                      <label for="mobile_no" class="col-sm-3 col-form-label">Model</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="model" name="model"    value="<?php echo $row->model; ?>"  placeholder="Please Enter Model">
                      </div>
                    </div>
					 
					
				 
					
                    
                   <input type="submit" name="update" class="btn btn-light" value="Update"/>
                    
                    <!-- <button class="btn btn-light" onclick="cancel()" >Cancel</button> -->
                  </form>
  <?php } ?> 
 
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
	 
	$("form[name='edit_pro']").validate({  
	
	rules: {
				name: "required",
				category: "required",
                price: "required",
                 model: "required"
            },
            messages: {
				name: " Enter Product Name",
                category: " Enter Category",
				 price: " Enter Price",
                model: " Enter Model",
				 
            }
		   
		
});
});
 
 
 
  </script>
  </body> 
</html>
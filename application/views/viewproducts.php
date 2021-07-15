 


<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
<title>Products List </title>	
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet" id="bootstrap-css">
<link href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css" rel="stylesheet" id="bootstrap-css">
<link href="https://cdn.datatables.net/buttons/1.7.0/css/buttons.bootstrap4.min.css" rel="stylesheet" id="bootstrap-css">
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>


  </head>
  
  
  
  
  
  <body> 
    <div class="container">

      <nav class="navbar navbar-expand-md navbar-dark bg-dark card-header">
        <a class="navbar-brand" href="index.php"><i class="fas fa-home mr-2"></i>Products List</a>
  

       
      </nav>

	  
	  
     <div class="main-panel">
        <div class="content-wrapper">
          <div class="card">
            <div class="card-body">
             
			    <div class=" " style="margin-top:20px;">
  <div class="row">
 <div class="col-lg-10"><h2 class="card-title" style="font-size:25px" > &nbsp;</h2></div>
 <div class="col-lg-2"><button type="button" class="btn btn-info btn-sm"  onclick="gotoadd()" >Add Product</button></div>
   </div> 
   </div> 
  
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table table-striped table-bordered" style="width:100%" >
					 
                    
					
                      <thead>
                        <tr>
						<th>S.No.</th>
                          <th>
                             Name
                          </th>
						    
                          <th>
                           Category
                          </th>
                          <th>
                           Price
                          </th>
                           <th>
                           Model
                          </th> 
						  <th>                           
                          </th>
						   
                          <th>
                           Action
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                
					  <?php 
					 
						 $ij=0;
						 
									  
						 foreach($data as $row){ 	 
							   $ij++;	
							
				?>
                        <tr      >
					   
                          <td class="py-1">
                           <?php echo $ij; ?>.
                          </td>
                           <td><?php echo $row->name; ?></td>  
							<td><?php echo $row->category; ?></td>
                            <td><?php echo $row->price; ?></td>
                            <td><?php echo $row->model; ?></td>
						  
			    <td><a  
                  href="senddata?id=<?php echo $row->product_id ;?>" class="btn btn-outline-primary " >Share</a>
                </td>
		 
				<td><a data-toggle="modal" data-target="#myModal" 
                  onclick="javascript:view_product('<?php echo $row->product_id; ?>')" class="btn btn-outline-primary ">View</a>
                  <a href="updatedata?id=<?php echo $row->product_id ;?>" class="btn btn-outline-primary" >Edit</a>
                                <a href="deletedata?id=<?php echo $row->product_id ;?>" class="btn btn-outline-primary" onclick="return confirm('Are you sure to delete?')">Delete</a>
                            </td>
				
                        </tr>
                         <?php  }   ?> 
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
 
		 </div>	 

  

  <script>
  function gotoadd(){
	  
	  location.href="http://localhost:8080/CodeIgniter_pro/index.php/products/savedata";
  }
  function view_product(pid){
	 
	 $.ajax({
                type: "POST",
                url: "http://localhost:8080/CodeIgniter_pro/index.php/products/getproduct",
                data: "id="+pid,
                success: function (response) {
                $(".displaycontent").html(response);
                  
                }
            });
	 
} 
$(document).ready(function() {
	$(".modal-dialog").hide();
    var table = $('#order-listing').DataTable( {
        "lengthMenu": [ [8, 10, 25, 50, -1], [8, 10, 25, 50, "All"] ]
    } ); 
    
} );

 

 
  </script>
  
  <div class="modal fade displaycontent" id="myModal">

<?php include('productdetail.php'); ?>
  </body> 
</html>


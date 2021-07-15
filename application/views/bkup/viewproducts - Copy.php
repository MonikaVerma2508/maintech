<!DOCTYPE html>
<html>
<head>
    <title>Basic Crud operation in Codeigniter 3</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Bootstrap library -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
 
</head>
<body>
<style>
body {
    color: #566787;
    background: #f5f5f5;
    font-family: 'Varela Round', sans-serif;
    font-size: 13px;
    max-width:1540px
}
.table-responsive {
    margin: 30px 0;
}
.table-wrapper {
    background: #fff;
    padding: 20px 25px;
    border-radius: 3px;
    min-width: 1000px;
    box-shadow: 0 1px 1px rgba(0,0,0,.05);
}
.table-title {        
    padding-bottom: 15px;
    background: #0397d6;
    color: #fff;
    padding: 16px 30px;
    min-width: 100%;
    margin: -20px -25px 10px;
    border-radius: 3px 3px 0 0;
}
.table-title h2 {
    margin: 5px 0 0;
    font-size: 24px;
}
.table-title .btn-group {
    float: right;
}
.table-title .btn {
    color: #fff;
    float: right;
    font-size: 13px;
    border: none;
    min-width: 50px;
    border-radius: 2px;
    border: none;
    outline: none !important;
    margin-left: 10px;
}
.table-title .btn i {
    float: left;
    font-size: 21px;
    margin-right: 5px;
}
.table-title .btn span {
    float: left;
    margin-top: 2px;
}
table.table tr th, table.table tr td {
    border-color: #e9e9e9;
    padding: 12px 15px;
    vertical-align: middle;
}
table.table tr th:first-child {
    width: 60px;
}
table.table tr th:last-child {
    width: 100px;
}
table.table-striped tbody tr:nth-of-type(odd) {
    background-color: #fcfcfc;
}
table.table-striped.table-hover tbody tr:hover {
    background: #f5f5f5;
}
table.table th i {
    font-size: 13px;
    margin: 0 5px;
    cursor: pointer;
}    
table.table td:last-child i {
    opacity: 0.9;
    font-size: 22px;
    margin: 0 5px;
}
table.table td a {
    font-weight: bold;
    color: #566787;
    display: inline-block;
    text-decoration: none;
    outline: none !important;
}
table.table td a:hover {
    color: #2196F3;
}
table.table td a.edit {
    color: #FFC107;
}
table.table td a.delete {
    color: #F44336;
}
table.table td i {
    font-size: 19px;
}
table.table .avatar {
    border-radius: 50%;
    vertical-align: middle;
    margin-right: 10px;
}

</style>
<div class="container">
    <?php /* if(!empty($success_msg)){ ?>
    <div class="col-xs-12">
        <div class="alert alert-success"><?php echo $success_msg; ?></div>
    </div>
    <?php }elseif(!empty($error_msg)){ ?>
    <div class="col-xs-12">
        <div class="alert alert-danger"><?php echo $error_msg; ?></div>
    </div>
    <?php }  */?>
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default ">
                <div class="panel-heading">Posts <a href="http://localhost:8080/CodeIgniter_pro/index.php/products/savedata" class="glyphicon glyphicon-plus pull-right" ></a></div>
                <table class="table table-striped"  id="products">
                    <thead>
                        <tr>
                            <th width="5%">Name</th>
                            <th width="30%">Category</th>
                            <th width="50%">Price</th>
							<th width="50%">Model</th>
                            <th width="15%">Action</th>
                        </tr>
                    </thead>
                    <tbody id="userData">
                        <?php   foreach($data as $row){ ?>
                        <tr>
                            <td><?php echo $row->name; ?></td>  
							<td><?php echo $row->category; ?></td>
                            <td><?php echo $row->price; ?></td>
                            <td><?php echo $row->model; ?></td>
                          
								<td><a data-toggle="modal" data-target="#myModal" 
                  onclick="javascript:view_product('<?php echo $row->product_id; ?>')">View</a>
                </td>
				
				<td><a  
                  href="senddata?id=<?php echo $row->product_id ;?>">Share</a>
                </td>
				
                              
                        </tr>
                        <?php } ?>
                         
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


  
 
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
 
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" type="text/javascript"></script>
 
<script>

function view_product(pid){
	//$("#myModal").modal(“show”);
	 $.ajax({
                type: "POST",
                url: "http://localhost:8080/CodeIgniter_pro/index.php/products/getproduct",
                data: "id="+pid,
                success: function (response) {
                $(".displaycontent").html(response);
                  
                }
            });
	/* $.ajax({
			type : "POST",
			url  : "http://localhost:8080/CodeIgniter_pro/index.php/products/productdetail.php",
			dataType : "POST",
			data : {id:pid },
			success: function(msg){
				document.getElementById("dicpro").innerHTML=msg;
			}
		}); */
}
    $(document).ready( function () {
		$(".modal-dialog").hide();
      $('#products').DataTable();
  } );
</script>
<div class="modal fade displaycontent" id="myModal">

<?php include('productdetail.php'); ?>


</body>
</html>
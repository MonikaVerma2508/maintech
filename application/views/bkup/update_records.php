 <?php /* <!DOCTYPE html>
<html>
<head>
<title>update form</title>
</head>

<body>
 <?php
  $i=1;
  foreach($data as $row)
  {
  ?>
	<form method="post">
		<table width="600" border="1" cellspacing="5" cellpadding="5">
  <tr>
    <td width="230"> Name </td>
    <td width="329"><input type="text" name="name" value="<?php echo $row->name; ?>"/></td>
  </tr>
  <tr>
    <td>Price</td>
    <td><input type="text" name="price" value="<?php echo $row->price; ?>"/></td>
  </tr>
  <tr>
    <td>Image </td>
    <td><input type="text" name="image" value="<?php echo $row->image; ?>"/></td>
  </tr>
  <tr>
    <td colspan="2" align="center">
	<input type="submit" name="update" value="Update Records"/></td>
  </tr>
</table>
	</form>
	<?php } ?>
</body>
</html>
*/ ?>
<!DOCTYPE html>
<html>
<head>
<title>Update Product</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>
</head>

<body>
 
	<div class="container">
<br>
<?php   //= \Config\Services::validation()->listErrors(); ?>
<span class="d-none alert alert-success mb-3" id="res_message"></span>
<div class="row">
<div class="col-md-9">
<?php
  $i=1;
  foreach($data as $row)
  {
  ?>
<form   name="edit_pro" id="edit_pro" method="post" accept-charset="utf-8">
<div class="form-group">
<label for="formGroupExampleInput">Name</label>
<input type="text" name="name" id="name" class="form-control"  value="<?php echo $row->name; ?>" placeholder="Please enter name">
</div> 

<div class="form-group">
<label for="formGroupExampleInput">Category</label>
<input type="text" name="category"  id="category"  class="form-control"  value="<?php echo $row->category; ?>" placeholder="Please enter Image">
</div> 
<div class="form-group">
<label for="formGroupExampleInput">Price</label>
<input type="text" name="price" id="price" class="form-control" value="<?php echo $row->price; ?>"  placeholder="Please enter Price">
</div> 

  <div class="form-group">
<label for="formGroupExampleInput">Model</label>
<input type="text" name="model"  id="model"  class="form-control"  value="<?php echo $row->model; ?>" placeholder="Please enter Image">
</div> 
<div class="form-group">
<input type="submit" name="update" value="Update Records"/></td>
</div>
</form><?php } ?>
</div>
</div>
</div>
	<script>
 
if ($("#edit_pro").length > 0) {
$("#edit_pro").validate({
rules: {
name: {
required: true,
},
category: {
required: true,
},
price: {
required: true,
},
 model: {
required: true,
},  
},
messages: {
name: {
required: "Please enter name",
},
category: {
required: "Please enter category",
},
price: {
required: "Please enter price",
},
model: {
required: "Please enter model",
},
  
},
})
}
</script>
</body>
</html>
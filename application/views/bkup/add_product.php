<!DOCTYPE html>
<html>
<head>
<title>Add Product</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>
</head>

<body>
<?php /*	<form method="post"   name="pro_create" id="pro_create" method="post" accept-charset="utf-8">
		<table width="600" border="1" cellspacing="5" cellpadding="5">
  <tr>
    <td width="230">  Name </td>
    <td width="329"><input type="text" name="name"/></td>
  </tr>
  <tr>
    <td>Price </td>
    <td><input type="text" name="price"/></td>
  </tr>
  <tr>
    <td>Image </td>
    <td><input type="text" name="image"/></td>
  </tr>
  <tr>
    <td colspan="2" align="center"><input type="submit" name="save" value="Save Data"/></td>
  </tr>
</table>

	</form>  */ ?>
	<div class="container">
<br>
<?php   //= \Config\Services::validation()->listErrors(); ?>
<span class="d-none alert alert-success mb-3" id="res_message"></span>
<div class="row">
<div class="col-md-9">
<form   name="pro_create" id="pro_create" method="post" accept-charset="utf-8">
<div class="form-group">
<label for="formGroupExampleInput">Name</label>
<input type="text" name="name" class="form-control"   placeholder="Please enter name">
</div>
 <div class="form-group">
<label for="formGroupExampleInput">Category</label>
<input type="text" name="category" class="form-control"   placeholder="Please enter Category">
</div> 
<div class="form-group">
<label for="formGroupExampleInput">Price</label>
<input type="text" name="price" class="form-control"   placeholder="Please enter Price">
</div> 
  <div class="form-group">
<label for="formGroupExampleInput">Model</label>
<input type="text" name="model" class="form-control"   placeholder="Please enter Model">
</div> 

  
<div class="form-group">
<input type="submit" name="save" value="Save Data"/>
</div>
</form>
</div>
</div>
</div>
	<script>
if ($("#pro_create").length > 0) {
$("#pro_create").validate({
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
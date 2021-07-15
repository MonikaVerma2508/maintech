 

<?php 
 
 
  
class Products_model extends CI_Model 
{
	  function saverecords($name,$price,$category,$model)
	{
	$query="insert into products values('','$name','$price','$category','$model')";
	$this->db->query($query);
	}  
	 
	function displayrecords()
	{
	$query=$this->db->query("select * from products order by product_id desc");
	return $query->result();
	}
	
	function deleterecords($id)
	{
	$this->db->query("delete  from products where product_id='".$id."'");
	}
	
	function displayrecordsById($id)
	{
	$query=$this->db->query("select * from products where product_id='".$id."'");
	return $query->result();
	}
	
	function updaterecords($name,$price,$category,$model,$id)
	{
	$query=$this->db->query("update products SET name='$name',price='$price',category='$category' ,model='$model' where product_id='".$id."'");
	}
	
	 
}


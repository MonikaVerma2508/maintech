 

 
 
<?php
class Products extends CI_Controller 
{
	public function __construct()
	{
	parent::__construct();
	$this->load->database();
	$this->load->helper('url');
	$this->load->model('Products_model');
	
	 
	}

	  public function savedata()
	{
		$this->load->view('add_product');
		if($this->input->post('save'))
		{
		$n=$this->input->post('name');
		$e=$this->input->post('price');
		$m=$this->input->post('category');
		$model=$this->input->post('model');
		$this->Products_model->saverecords($n,$e,$m,$model);		
		redirect("http://localhost:8080/CodeIgniter_pro/index.php/products/dispdata");  
		}
	}  
	 
	   
	 public function getproduct()
    {
			$id   = $_POST['id'];
			$result['data1']=$this->Products_model->displayrecordsById($id);
			$this->load->view('productdetail',$result);
	
         
    }
	public function dispdata()
	{
	$result['data']=$this->Products_model->displayrecords();
	$this->load->view('viewproducts',$result);
	}
	  public function senddata()
	{
	 $id=$this->input->get('id');
	$result['data']=$this->Products_model->displayrecordsById($id);
	$this->load->view('sendmail',$result);	
	
	
	if($this->input->post('save_email'))
		{
			$this->load->library('phpmailer_lib');
        
			// PHPMailer object
			$mail = $this->phpmailer_lib->load();		
			$to=$this->input->post('to');
			$subject=$this->input->post('subject'); 
			$msg=$this->input->post('message'); 
			$name=$this->input->post('name');
			$category=$this->input->post('category');
			$price=$this->input->post('price');
			$model=$this->input->post('model');
             /* SMTP configuration */
		
				$mail->isSMTP();
				$mail->SMTPDebug  = 1;  
				$mail->SMTPAuth   = TRUE;
				$mail->SMTPSecure = "tls";
				$mail->Port       = 587;
				$mail->Host       = "smtp.gmail.com";
				$mail->Username   = "dev2.livasys@gmail.com";
				$mail->Password   = "dev2monika"; 
			   
				$mail->setFrom('monikaverma0803@gmail.com', 'test');
				$mail->addReplyTo('monikaverma0803@gmail.com', 'test'); 
				/* Add a recipient */
				$mail->addAddress($to); //('dev2.livasys@gmail.com');
				
				/* Email subject */
				$mail->Subject = $subject;//'Send Email via SMTP using PHPMailer in CodeIgniter';
			   
				/* Set email format to HTML */
				$mail->isHTML(true);
			   
				/* Email body content */
				$mailContent = "<h1>Product Details </h1>
				<p> ".$msg."</p>
				<table width='100%'  cellpadding='0' cellspacing='0'>
					<tr><td><p><strong>Product Name: </strong>".$name."</p> </td></tr>
					<tr><td><p><strong>Category: </strong>".$category."</p> </td></tr>
					<tr><td><p><strong>Price: </strong>".$price."</p> </td></tr>
					<tr><td><p><strong>Model: </strong>".$model."</p> </td></tr>
				 </table> "; 


				 $mail->Body = $mailContent;
			   
				/* Send email */
				if(!$mail->send()){
					echo 'Mail could not be sent.';
					//echo 'Mailer Error: ' . $mail->ErrorInfo;
				}else{
					echo 'Mail has been sent';
				}
		 
		   redirect("http://localhost:8080/CodeIgniter_pro/index.php/products/dispdata");
		}
		
		
		
	}  
	public function deletedata()
	{
	$id=$this->input->get('id');
	$this->Products_model->deleterecords($id);
	redirect("http://localhost:8080/CodeIgniter_pro/index.php/products/dispdata");
	}
	
	public function updatedata()
	{
	$id=$this->input->get('id');
	$result['data']=$this->Products_model->displayrecordsById($id);
	$this->load->view('update_records',$result);	
	
		if($this->input->post('update'))
		{
		$n=$this->input->post('name');
		$e=$this->input->post('price');
		$m=$this->input->post('category');
			$model=$this->input->post('model');
		$this->Products_model->updaterecords($n,$e,$m,$model,$id);
		redirect("http://localhost:8080/CodeIgniter_pro/index.php/products/dispdata");
		}
	}
	
	
}
?>

<?php
	if(!empty($this->session->userdata('email'))){
		$this->load->view('template/header');
	}
?>

<div class = "container">
	<?php
		echo "<br/><br/><br/><br/><br/><br/>"."Welcome ".$this->session->userdata('email');
		//echo $record['name'];  
	?>
</div>

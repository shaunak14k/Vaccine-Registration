<style type="text/css">
	.alert-success {
    color: #3c763d;
    background-color: #dff0d8;
    border-color: #d6e9c6;
    padding: 10px;
}
.alert-danger {
    color: #a94442;
    background-color: #f2dede;
    border-color: #ebccd1;
    padding: 10px;
}

.alert-warning {
    color: #856404;
    background-color: #fff3cd;
    border-color: #ffeeba;
    padding: 10px;
}
</style>
<?php

	$status_class = "";
	if(isset($_SESSION['form']['status']) && !empty($_SESSION['form']['status']))
	{
			$form_status = $_SESSION['form']['status'];
			$form_message = $_SESSION['form']['message'];
			if($form_status == "SUCCESS")
			{
				$status_class = "success";
			}
			else if($form_status == "WARNING")
			{
				$status_class="warning";

			}
			else
			{
				$status_class = "danger";	
			}

?>
		<div class="alert alert-<?php echo $status_class; ?>">
 		 	 <?php echo $form_message; ?>
		</div>
<?php
			unset($_SESSION['form']);
	}

?>
<?php 


	include 'config.php';
    $id=$_POST['id'];
    $name=$_POST['name'];
    $types=$_POST['types'];
	$rating=$_POST['rating'];
  	$timming=$_POST['timming'];
  	$rupess=$_POST['rupess'];	

 //  	if(!empty($image) && !empty($name) && !empty($types) && !empty($rating) && !empty($timming) && !empty($rupess))
	// {

		$query= "UPDATE product set name='$name', types='$types', rating='$rating', timming='$timming', rupess='$rupess' where id='$id'";

		$ab=mysqli_query($con,$query);
		if($ab)
		{

			$data = array("status" => 1, "msg" => "upadate");
		}

		else
		{
			$data = array("status" => 0, "msg" => "Not upadate");
		}

	// }
		header('content-type:application/json');
    echo json_encode($data);
?>
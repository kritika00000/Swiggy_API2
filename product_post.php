<?php include'config.php';
   
	$name=$_POST['name'];
    $types=$_POST['types'];
	$rating=$_POST['rating'];
  	$timming=$_POST['timming'];
  	$rupess=$_POST['rupess'];	


$sql="INSERT INTO product(name,types,rating,timming,rupess) values('$name','$types','$rating','$timming','$rupess')";
    $query=$con->query($sql);
	if ($query)  
	{
		$data=array("status" => 1, "" =>"record saved successfuly");

	}
	else{
         
         $data=array("status" => 0, "" =>"failed to saved record!");

	}


@mysqli_close();
  header('content-type:application/json');
echo json_encode($data);


?>
<?php include'config.php';
  
  $image = $_FILES['imgurl']['name'];
     echo $image;
     $image_tmpname = $_FILES['imgurl']['tmp_name'];
    echo $image_tmpname;
     $path="image/".$image;
     
  move_uploaded_file($image_tmpname,"$image");

	$name=$_POST['name'];
    $types=$_POST['types'];
	$rating=$_POST['rating'];
  	$timming=$_POST['timming'];
  	$rupess=$_POST['rupess'];	


$sql="INSERT INTO product(image,name,types,rating,timming,rupess) values('$path','$name','$types','$rating','$timming','$rupess')";
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
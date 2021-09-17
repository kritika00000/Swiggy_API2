<?php
 
 include 'config.php';

 $id = $_POST['id'];
 if(!empty($id)){

 	$query = "DELETE from product where id ='$id'";
 	$fire = mysqli_query($con,$query);
 	if($fire){
      
      $data = array("status" => 1,"msg" =>"deleted");

  }else{
  	$data = array("status" => 0,"msg" =>"not deleted");
  }
 }

 header('content-type:application/json');
 echo json_encode($data);

?>
<?php 

	include 'config.php';

		$query = "SELECT * FROM product";

			$ab=mysqli_query($con,$query);

				if (mysqli_num_rows($ab) >0)
				 {
					
					while($row[] = mysqli_fetch_assoc($ab)) 
					{


						$tem = $row;
 
 						$json = json_encode($tem);
 
 
					 }
 
				 }	
				 else 
				 {
 					echo "No Results Found.";
					}
 					echo $json;
				$con->close();
?>
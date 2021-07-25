<?php 

	$hostname="localhost";
	$username="root";
	$password="";
	$dbname="ecom";


	$conn=mysqli_connect($hostname,$username,$password,$dbname);
	if($conn){
		echo "yes";
	}




$select1="SELECT * from cart";
    $result1=mysqli_query($conn,$select1);
    //echo $select;

$chk=0;
    while ($row=mysqli_fetch_assoc($result1)) {
            $productname=$row['name'];
            $productprice=$row['price'];
            $productprice=$row['image'];
            echo  $productprice=$row['quantity'];
            
           
        }

 echo $select1;






//"select img,name,service from products where name like '%$ser%' or service like '%$ser%' 

 //-----------non tax to tax items ..invoice show NaN
 //-----------edit delete row total blank -------invoice edit
?>





<?php
//session_start();
	include'dbCon.php';
	//receive posted values
	//if(isset($_POST['Register'])){
 //escape the post values
    $name=$_POST['name'];
    $surname=$_POST['surname'];
    $address=$_POST['address'];
	$idNum=$_POST['idNum'];
    $dob=$_POST['dob'];
    $prevStand=$_POST['prevStand'];
    $income=$_POST['income'];
	$address2=$_POST['add2'];
    $mStatus=$_POST['mStatus'];
    $occupationApplicants=$_POST['occupationApplicant'];
    $occupationSpouse=$_POST['occupationSpouse'];
    $busAddress=$_POST['busAddress'];
    $cellphone=$_POST['cellphone'];
    $dependents=$_POST['dependents'];
    $yearsOfRes=$_POST['yearsOfRes'];
	 $natureOfDev=mysqli_real_escape_string($conn,$_POST['natureOfDev']);
	 $otherProperties=mysqli_real_escape_string($conn,$_POST['otherProperties']);
	 $amtOfCapital=mysqli_real_escape_string($conn,$_POST['amtOfCapital']);
	 $nameOfReferee=mysqli_real_escape_string($conn,$_POST['nameOfReferee']);
	 $addressOfReferee=mysqli_real_escape_string($conn,$_POST['addressOfReferee']);
	 $conntactReferee=mysqli_real_escape_string($conn,$_POST['contactReferee']);
	 $rlnshipwithReferee=mysqli_real_escape_string($conn,$_POST['rlnshipwithReferee']);

	
 
 //query the injections
 $query = "INSERT INTO detailres (name,surname,address,idNum,dob,prevStand,income,address2,mStatus,occupationApplicants,occupationSpouse,busAddress,cellphone,dependents,yearsOfRes,natureOfDev,otherProperties,amtOfCapital,nameOfReferee,addressOfReferee,contactReferee,rlnshipwithReferee)
 VALUES('$name','$surname','$address','$idNum','$dob','$prevStand','$income','$address2','$mStatus','$occupationApplicants','$occupationSpouse','$busAddress','$cellphone','$dependents','$yearsOfRes','$natureOfDev','$otherProperties','$amtOfCapital','$nameOfReferee','$addressOfReferee','$conntactReferee','$rlnshipwithReferee')";

	//execute the query and yield results
				if (!mysqli_query($conn,$query)) {
					die('Error: ' . mysqli_error($conn));
				}else{
				echo "1 record added";
				}
			//$result=$mysqli->query($query) or die($mysqli->error._LINE_);
	
	//}
	mysqli_close($conn);
 ?>
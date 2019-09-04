<?php
		 session_start();
		 include "dbCon.php";
		 
    if((isset($_SESSION['name'])&&!empty($_SESSION['name']))||(isset($_SESSION['surname'])&&!empty($_SESSION['surname']))||(isset($_SESSION['address'])&&!empty($_SESSION['address']))||(isset($_SESSION['idNum'])&&!empty($_SESSION['idNum']))||(isset($_SESSION['dob'])&&!empty($_SESSION['dob']))||(isset($_SESSION['prevStand'])&&!empty($_SESSION['prevStand']))||(isset($_SESSION['income'])&&!empty($_SESSION['income']))||(isset($_SESSION['address2'])&&!empty($_SESSION['address2']))||(isset($_SESSION['mStatus'])&&!empty($_SESSION['mStatus']))||(isset($_SESSION['occupationApplicant'])&&!empty($_SESSION['occupationApplicant']))||(isset($_SESSION['occupationSpouse'])&&!empty($_SESSION['occupationSpouse']))||(isset($_SESSION['busAddress'])&&!empty($_SESSION['busAddress']))||(isset($_SESSION['cellphone'])&&!empty($_SESSION['cellphone']))||(isset($_SESSION['dependents'])&&!empty($_SESSION['dependents']))||(isset($_SESSION['yearsOfRes'])&&!empty($_SESSION['yearsOfRes'])))
	{
		
		$name=$_SESSION['name'];
		$surname=$_SESSION['surname'];
		$address=$_SESSION['address'];
		$idNum=$_SESSION['idNum'];
		$dob=$_SESSION['dob'];
		$prevStand=$_SESSION['prevStand'];
		$income=$_SESSION['income'];
		$address2=$_SESSION['address2'];
		$mStatus=$_SESSION['mStatus'];
		$occupationApplicants=$_SESSION['occupationApplicant'];
		$occupationSpouse=$_SESSION['occupationSpouse'];
		$busAddress=$_SESSION['busAddress'];
		$cellphone=$_SESSION['cellphone'];
		$dependents=$_SESSION['dependents'];
		$yearsOfRes=$_SESSION['yearsOfRes'];

		 $natureOfDev=mysqli_real_escape_string($conn,$_POST['natureofDev']);
		 $otherProperties=mysqli_real_escape_string($conn,$_POST['otherProperties']);
		 $amtOfCapital=mysqli_real_escape_string($conn,$_POST['amtOfCapital']);
		 $nameOfReferee=mysqli_real_escape_string($conn,$_POST['nameOfReferee']);
		 $addressOfReferee=mysqli_real_escape_string($conn,$_POST['addressOfReferee']);
		 $contactReferee=mysqli_real_escape_string($conn,$_POST['contactReferee']);
		 $rlnshipwithReferee=mysqli_real_escape_string($conn,$_POST['rlnshipwithReferee']);

		 //query the injections
		 $query = "insert into detailres (name,surname,address,idNum,dob,prevStand,address2,mStatus,occupationApplicants,occupationSpouse,busAddress,cellphone,dependents,yearsOfRes,natureOfDev,otherProperties,amtOfCapital,nameOfReferee,addressOfReferee,contactReferee,rlnshipwithReferee)
		 values('$name','$surname','$address','$idNum','$dob','$prevStand','$address2','$mStatus','$occupationApplicants','$occupationSpouse','$busAddress','$cellphone','$dependents','$yearsOfRes','$natureOfDev','$otherProperties','$amtOfCapital','$nameOfReferee','$addressOfReferee','$contactReferee','$rlnshipwithReferee')";
		 
		//execute the query and yield results
				if (!mysqli_query($conn,$query)) {
					die('Error: ' . mysqli_error($conn));
				}else{
				echo "1 record added";
		header("location:index.html");
				}
			//$result=$mysqli->query($query) or die($mysqli->error._LINE_);
	
	//}
	mysqli_close($conn);
	session_unset();
	session_destroy();
		}
		else{
			if(empty($_SESSION['error_page2'])) {
			header("location: Residential.php");//redirecting to first page
			
		}
		}
		
 
?>
 
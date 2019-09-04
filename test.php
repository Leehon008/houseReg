<?php
session_start();
	
	//register the session
	session_register('natureOfDev');
	session_register('otherProperties');
	session_register('amtOfCapital');
	session_register('nameOfReferee');
	session_register('addressOfReferee');
	session_register('contactReferee');
	session_register('rlnshipwithReferee');
 
 //escape the post values
 $natureOfDev=mysqli_real_escape_string($con,$_POST['natureOfDev']);
 $otherProperties=mysqli_real_escape_string($con,$_POST['otherProperties']);
 $amtOfCapital=mysqli_real_escape_string($con,$_POST['amtOfCapital']);
 $nameOfReferee=mysqli_real_escape_string($con,$_POST['nameOfReferee']);
 $addressOfReferee=mysqli_real_escape_string($con,$_POST['addressOfReferee']);
 $contactReferee=mysqli_real_escape_string($con,$_POST['contactReferee']);
 $rlnshipwithReferee=mysqli_real_escape_string($con,$_POST['rlnshipwithReferee']);

 
 //query the injections
 $query = 'INSERT INTO detailres 
 (name,surname,address,idNum,dob,prevStand,income,address2,mStatus,occupationApplicants,occupationSpouse,busAddress,cellphone,dependents,yearsOfRes,natureOfDev,otherProperties,amtOfCapital,nameOfReferee,addressOfReferee,contactReferee,rlnshipwithReferee)
  values(".$_SESSION['name'].",
  	".$_SESSION['surname'].",
  	".$_SESSION['address'].",
  	".$_SESSION['idNum'].",
  	".$_SESSION['dob'].",
  	".$_SESSION['prevStand'].",
  	".$_SESSION['income'].",
  	".$_SESSION['address2'].",
  	".$_SESSION['mStatus'].",
  	".$_SESSION['occupationApplicants'].",
  	".$_SESSION['occupationSpouse'].",
  	".$_SESSION['busAddress'].",
  	".$_SESSION['cellphone'].",
  	".$_SESSION['dependents'].",
  	".$_SESSION['yearsOfRes'].",
  	".$natureOfDev.",
  	".$otherProperties.",
  	".$amtOfCapital.",
  	".$nameOfReferee.",
  	".$addressOfReferee.",
  	".$contactReferee.",
  	".$rlnshipwithReferee.")';

	//run the query
	mysql_query($query);

		if (!mysql_query($query)) {
			echo("<script>alert 'Lew Zvaramba xaa'</script>");
		}
 ?>
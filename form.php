<?php
require 'config.php';
require 'validation.php';

$error="";
$success="";
    if(isset($_POST['submit']))
    {   
        $name=valid($_POST['name']);
        $regno=valid($_POST['regno']);
        $branch=valid($_POST['branch']);
        @$semester=valid($_POST['semester']);
        $phone=valid($_POST['phone']);
        $email=valid($_POST['email']); 
        	try
        	{
            	$sqlqr="INSERT INTO user (name,regno,branch,semester,phone,email) VALUES ('$name','$regno','$branch','$semester','$phone','$email')";
            	$sql=$conn->prepare($sqlqr);
           		$sql->bindParam(':nam',$name);
           		$sql->bindParam(':rno',$regno);
            	$sql->bindParam(':br',$branch);
            	$sql->bindParam(':sem',$semester);
            	$sql->bindParam(':ph',$phone);
            	$sql->bindParam(':mail',$email);
            	if($sql->execute());
            		$success="Successfully Registered";
        	}
        	catch(PDOException $e){
        		$error = "Registration number already entered";
            }
    }
        
?>  
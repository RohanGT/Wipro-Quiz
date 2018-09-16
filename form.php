<?php
require 'config.php';
require 'validation.php';
global $error;
global $success;
$error="";
$success="";
    if(isset($_POST['submit']))
    {   
        $name=valid($_POST['name']);
        $regno=valid($_POST['regno']);
        $branch=valid($_POST['branch']);
        $semester=valid($_POST['semester']);
        $phone=valid($_POST['phone']);
        $email=valid($_POST['email']);
        if (empty($name) || empty($regno) || empty($branch) || empty($semester) || empty($phone) ||empty($email))
        {
            $error= "All the fields are required to be filled!";
        }
        else
        {    
            if (!preg_match("/^[a-zA-Z ]*$/",$name)) 
            {
                $error = "Name must contain letters and spaces only";
            }
            else if($regno<130000000||$regno>190000000)
            {
                $error = "Invalid registration number";
            }
            else if(ctype_alpha($branch)==false)
            {
                $error="Invalid Branch";
            }
            else if(!filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                $error="Invalid email format";
            }
            else if($phone<1000000000||$phone>9999999999)
            {
                $error="Invalid phone number";
            }
            else
            {
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
        	catch(PDOException $e)
        	{
        		$error="Registration number already entered";
        	}
            }
        }
    }
?>  
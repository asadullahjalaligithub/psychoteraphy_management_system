<?php 
require('connection.php');
if(isset($_POST['actionString']) && $_POST['actionString']=="insertPatients")
{
   $firstname=$_POST['firstname'];
   $surname=$_POST['surname'];
   $phone=$_POST['phone'];
   $email=$_POST['email'];
   $education=$_POST['education'];
   $status=$_POST['status'];
   $dob=$_POST['date'];
   $filename=$_FILES['patientImage']['name'];
   $temp_name=$_FILES['patientImage']['tmp_name'];
   $realname=time().".jpg";
   move_uploaded_file($temp_name,"../img/".$realname);
   $query="insert into tblpatient (patientfirstname,patientsurname,patientphone,patientemail,education,maritalstatus,dob,patientimage) values('$firstname','$surname','$phone','$email','$education','$status','$dob','$realname')";
   if(mysqli_query($connection,$query))
   echo "true";
   else 
   echo "false";
    
}
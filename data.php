<?php
    include("conn.php");
    $userid =$_POST ['userid'];
    $name = $_POST ['name'];
    $email =$_POST ['email'];
    $gender =$_POST ['gender'];
    $selectstate =$_POST ['selectstate'];
    $language =$_POST ['language'];
    $dob =$_POST ['dob'];
    $language= implode (",",$language);

    // echo $userid;
    
    // here photo upload code 
    $filename = $_FILES ["file"]["name"];
    $tmp_name = $_FILES ["file"]["tmp_name"];
    // print_r ($_FILES ["file"]);
    $folder = "img/.$filename";
    move_uploaded_file($tmp_name,$folder);
    $file_loca = $folder;


    $result= "INSERT INTO login_form VALUES('$userid','$name','$email','$gender','$selectstate','$language','$dob','$file_loca')";
    query ($conn,$result);
if ($data)
    $data = mysqli_
{
    // echo "data inserted";
    echo "<script> alert('Data Seccessfully Submitted')</script>";
}
else
{
    echo "<script> alert('Submittion Failed')</script>";
    //echo "not inserted";
}

?>
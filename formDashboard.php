<?php
  error_reporting(0);
  include("conn.php");

$query = "select * from login_form";
$data = mysqli_query ($conn,$query);
$total = mysqli_num_rows($data);
// $result = mysqli_fetch_assoc($data);
// echo $total ;
// echo $result["userid"];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- here boostrap css links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Dashboard</title>
  </head>
  <body>
    <h1>Dashboard Of Login Member</h1>
    <table class="table">
      <thead class="table-light">
        <th>Photo</th>
        <th>User Id</th>
        <th>Name</th>
        <th>Email ID</th>
        <th>Gnder</th>
        <th>State</th>
        <th>Language Kwnon</th>
        <th>Date Of Birth</th>
        <th>Deletion</th>
        <th>Updation</th>
      </thead>
      <tbody>
      <?php 
if($total != 0)
{
  // echo "data base have record";
  while ($result = mysqli_fetch_assoc($data))
  {
    echo "<tr>
              <td> <img src='". $result ['file_loca']."' height='100px' width='100px'> </td>
              <td> ". $result ['userid']." </td>
              <td> ". $result ['name']." </td>
              <td> ". $result ['email']." </td>
              <td> ". $result ['gender']." </td>
              <td> ". $result ['selectstate']." </td>
              <td> ". $result ['language']." </td>
              <td> ". $result ['dbo']." </td>

              <td> <a href='delete.php?userid=$result[userid]'>Delete</a></td>
              
              // here update query and link file of update
              <td> <a href='update.php?userid=$result[userid] & name=$result[name] & email=$result[email]'>update</a></td>
              </tr>";
              
            }
            
          }
          else "Data not found";
          // <td><a href='delete.php ?=$result[userid]></a></td>
          ?>

      </tbody>
    </table>
    
   
</body>
<!-- here boostrap js links  -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>
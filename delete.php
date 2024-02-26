<?php
    error_reporting(0);
    include ("conn.php");

    $userid = $_GET['userid'];
    $query = "DELETE FROM login_form WHERE userid='$userid'";
    $delete = mysqli_query($conn,$query);

    if($delete)
    {
        echo "<script>alert('Recode Deleted')</script>";
        ?>
<meta http-equiv="refresh" content="0; url=http://localhost/practice_Of_php/login_form/formDashboard.php">
    <?php
        // echo "dleet";
    }
    else
    {
        echo "Recode Deleted Failed";
    }
    

?>

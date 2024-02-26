<?php
error_reporting(0);
include ("conn.php");

$userid = $_GET['userid'];
$name = $_GET['name'];
$email = $_GET['email'];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>login form</title>
</head>

<body>
    <section>
        <fieldset>
            <legend>
                Update Form
            </legend>
            <form action="#" class="form-section" method="POST" enctype="multipart/form-data">
                    <div class="input-box">
                        
                        <span class="col-1">Enter User Id</span>
                        <input value="<?php echo "$userid" ?>" name="userid">
                        
                        <span class="col-1">Enter Name</span>
                        <input type="text" value="<?php echo "$name" ?>" name="name">
                        
                        <span class="col-1">Enter Your Email-Id</span>
                        <input type="text" value="<?php echo "$email" ?>"name="email">
                       

                        <!-- <select class="col-1" required name="selectstate">
                            <option value="" selected>Select State</option>
                            <option value="Bihar" >Bihar</option>
                            <option value="Maharastra">Maharastra</option>
                            <option value="Utter Pradesh">Utter Pradesh</option>
                            <option value="Other">Other</option>
                        </select> -->
                        

                        <button class="btn" type="submit" value="submit">Update Now !</button>
                    </div>
                </form>
        </fieldset>
    </section>
</body>

</html>

<?php
include("conn.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userid = $_POST['userid'];
    $name = $_POST['name'];
    $email = $_POST['email'];

    $query = "UPDATE login_form SET name='$name', email='$email' WHERE userid='$userid'";

    $data = mysqli_query($conn, $query);

    if ($data) {
        echo "<script> alert ('Data Ubdated Sessesfully')</script>";
        ?>
        <meta http-equiv="refresh" content="0; url=http://localhost/practice_Of_php/login_form/formDashboard.php">
            <?php
    } else {
        echo "Data Ubdated Unsessesfully";
    }
}
?>
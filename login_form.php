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
                Login Form
            </legend>
            <form action="login_form.php" class="form-section" method="POST" enctype="multipart/form-data">
                    <div class="input-box">
                        
                        <span class="col-1">Enter User Id</span>
                        <input type="number" placeholder=" UserId" name="userid">
                        
                        <span class="col-1">Enter Name</span>
                        <input type="text" placeholder="Enter Name" name="name">
                        
                        <span class="col-1">Enter Your Email-Id</span>
                        <input type="text" placeholder="Emai-Id" name="email">
                        
                        <div class="check-box">
                        <span class="col-1">Select Gender</span>
                        <input class="checkbox" type="radio" name="gender" value="Male">Male
                        <input class="checkbox" type="radio" name="gender" value="Female">Female
                        </div>

                        <select class="col-1" required name="selectstate">
                            <option value="" selected>Select State</option>
                            <option value="Bihar">Bihar</option>
                            <option value="Maharastra">Maharastra</option>
                            <option value="Utter Pradesh">Utter Pradesh</option>
                            <option value="Other">Other</option>
                        </select>
                        

                        <div class="check-box">
                            <span class="col-1">Select Language</span>
                        <input class="checkbox" type="checkbox" value="Hindi" name="language[]" >Hindi
                        <input class="checkbox" type="checkbox" value="English" name="language[]" values="English">English
                            </div>
                        
                        
                        <span class="col-1">Enter Date Of Birth</span>
                        <input type="date" name="dob">
                        
                        <span class="col-1">Upload Photo</span>
                        <input type="file" accept=".jpg" name="file">

                        <details>
                            <summary>
                                Photo shuold be?
                            </summary>
                            <p> Here photo wille accept only .jpg .png </p>
                        </details>

                        <button class="btn" type="submit">Submit Now !</button>
                    </div>
                </form>
        </fieldset>
    </section>
    <?php
        include ("data.php");
    ?>
</body>

</html>
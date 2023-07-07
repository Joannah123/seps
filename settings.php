<?php
session_start();
include "connect.php";

$errors = array();
if (isset($_POST['oldpass']) && isset($_POST['newpass']) && isset($_POST['confpass'])) {

    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $oldpass = $_POST['oldpass'];
    $newpass = $_POST['newpass'];
    $confpass = $_POST['confpass'];

    //check if empty
    if (empty($oldpass)) {
        $errors['oldpass'] = 'Enter your old password';
    }
    if (empty($newpass)) {
        $errors['newpass'] = 'Enter your new password';
    }
    if(strlen($newpass) < 8){
        $errors['newpass'] = 'Password length should be atleast 8 characters';
    }
    if (!preg_match('/[A-Z]/', $newpass)){
        $errors['newpass'] = 'Password must contain at least one uppercase letter';
    }
    if (!preg_match('/[a-z]/', $newpass)){
        $errors['newpass'] = 'Password must contain at least one lowercase letter';
    }
    if (!preg_match('/\d/', $newpass)){
        $errors['newpass'] = 'Password must contain at least one digit';
    }
    if (empty($confpass)) {
        $errors['confpass'] = 'Confirm your password';
    }
    if ($newpass !== $confpass) {
        $errors['match'] = 'Entered passwords do not match';
    }
   
    else {
        $oldpass = password_hash($_POST['oldpass'], PASSWORD_DEFAULT);
        $newpass = password_hash($_POST['newpass'], PASSWORD_DEFAULT);
        $email1 = $_SESSION['email'];
        

        $sql = "SELECT * FROM users WHERE  email='$email1'";
        $result = mysqli_query($conn, $sql);
        $run= mysqli_fetch_array($result);
        if ($run){
        $query1= "UPDATE users SET pass = '$newpass' WHERE email= '$email1'";
         $run= mysqli_query($conn, $query1);
         exit("Updated successfully");
        } 
        else {
            echo "Oooops couldn't update your password!";
        }
    }
}

?>




<?php

if (isset($_SESSION['email'])) {

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/sb-admin-2.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <title>Change Password</title>

        <style>
            @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;600;700&family=Open+Sans:wght@300;400;700&family=Pacifico&family=Quicksand:wght@300;600&family=Roboto&display=swap');

            body {
               
                color: black;
                justify-content: center;
                align-items: center;
                font-family: 'Open Sans', sans-serif;

            }

            .form {
                width: 500px;
                height: 600px;
                border: 1px solid white;
                background-color: white;
                margin: 0 auto; 
                display: flex;
                justify-content: center;
                align-items: center;
                box-shadow: 2px 0px 10px 7px #d1d3e2;
            }

            .wrap {
                padding: 20px;
                display: flex;
                flex-direction: column;
                padding-top: 10px;
            }

            .input {
                height: 30px;
                border-radius: 5px;
                margin-top: 10px;
                text-align: center;
                padding: 20px;
            }

            .input-submit {
                background-color: #23395d;
                color: white;
                text-align: center;
                padding: 10px;
            }
            
    .error {
        color: red;
        font-size: 14px;
    }
</style>
       
    </head>

    <body>
    <div id="wrapper " class="d-flex" >

<!-- Sidebar -->
<ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #0C0634">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center pb-3" href="dashboard.php">
        <div class="sidebar-brand-icon rotate-n-15">
            <img class="img-profile rounded-circle" src="img/undraw_profile.svg" style="width:50px;">
        </div>
        <div class="sidebar-brand-text mx-3">CUSTOMER</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="dashboard.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->

    <hr class="sidebar-divider">
    <!-- Nav Item - Settings -->
    <li class="nav-item active">
        <a class="nav-link" href="settings.php">
            <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
            <span>Settings</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Contact -->
    <li class="nav-item active">
        <a class="nav-link" href="contact.php">
            <i class="fa fa-address-card"></i>
            <span>Contact Us</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Share -->
    <li class="nav-item active">
        <a class="nav-link" href="#.html">
            <i class="fa fa-share-alt"></i>
            <span>Share</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">
    <!-- Nav Item - Log Out -->
    <li class="nav-item">
        <a class="nav-link" href="logout.php">
            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
            <span>Log out</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <!-- <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div> -->

</ul>
<!-- End of Sidebar -->

<div class="form mt-3">
            <form action="settings.php" method="post">
                <h2>CHANGE PASSWORD</h2>

                <div class="wrap">
                    <label for="oldpass">Old Password</label>
                    <input class="input" type="password" name="oldpass" placeholder="Enter Old Password">
                    <span class="error"><?php echo (isset($errors['oldpass'])) ? $errors['oldpass'] : ''; ?></span>
                </div>

                <div class="wrap">
                    <label for="newpass">New Password</label>
                    <input class="input" type="password" name="newpass" placeholder="Enter New Password">
                    <span class="error"><?php echo (isset($errors['newpass'])) ? $errors['newpass'] : ''; ?></span>
                </div>

                <div class="wrap">
                    <label for="confpass">Confirm Password</label>
                    <input class="input" type="password" name="confpass" placeholder="Enter Confirm Password">
                    <span class="error"><?php echo (isset($errors['confpass'])) ? $errors['confpass'] : ''; ?></span>
                </div>

                <div class="wrap">
                    <label for="oldpass">Submit</label>
                    <input class="input-submit" type="submit" name="submit" value="submit">
                </div>

            </form>
        </div>
                
                 


            


    </div>




       
    </body>

    </html>
<?php } else {
    header("Location:index.php");
    exit();
}
?>
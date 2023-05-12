<?php
include 'connect.php';

if (isset($_POST['submit'])) {
	$fn=$_POST['fname'];
	$ln=$_POST['lname'];
    $em=$_POST['email'];
	$pw=password_hash($_POST['pass'], PASSWORD_DEFAULT);
    $pn=$_POST['phone'];

$sql = "INSERT INTO `users` (`fname`, `lname`, `email`, `pass`,`phone`) VALUES ('$fn', '$ln', '$em','$pw',$pn)";
$run=mysqli_query($conn,$sql);

if ($run) {
header('location: index.php');
$_SESSION['msg']= "Registered succefully";
    $_SESSION['alert']= "alert alert-warning";
}else {
    $_SESSION['msg']= "Email is alredy registered";
    $_SESSION['alert']= "alert alert-warning";
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Register</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-white">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block d-flex mt-3">
                    <img src="img/ASEPS.jpg" alt="logo" class="img-fluid w-100" style="border-radius: 400px;">
                    </div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <form class="user" action="register.php" method="post">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input name="fname" type="text" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="First Name">
                                    </div>
                                    <div class="col-sm-6">
                                        <input name="lname" type="text" class="form-control form-control-user" id="exampleLastName"
                                            placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input name="email" type="email" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Email Address">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input name="pass" type="password" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Password">
                                    </div>
                                    <div class="col-sm-6">
                                        <input name="phone" type="number" class="form-control form-control-user"
                                            id="phone" placeholder="Mobile number">
                                    </div>
                                </div>
                                <button name="submit" class="btn btn-primary btn-user btn-block">
                                    Register Account
                                </button>
                                <hr>
                                <div class="container-fluid">
                                        <?php if (isset($_SESSION['msg'])): ?>
                                            <div class="<?= $_SESSION['alert']; ?>">
                                            <?= $_SESSION['msg']; ?>
                                            </div>
                                            <?php endif; ?>
                                    </div>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="#">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="index.php">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            setTimeout(() => {
                $(".alert").remove();
            }, 4000);
        })
    </script>
</body>

</html>
<?php
include 'connect.php';
session_start();
if (isset($_POST['submit'])) {
    if (!empty($_POST['email']) && !empty($_POST['pass'])) {
        $em=$_POST['email'];
        $pw=$_POST['pass'];
    
        $sql="SELECT * FROM users WHERE email='$em'";
        $run=mysqli_query($conn,$sql);
        $fetch=mysqli_fetch_array($run);
        $fn=$fetch['fname'];
        $ln=$fetch['lname'];
        $email=$fetch['email'];
        $pass=$fetch['pass'];
        $mn=$fetch['meter_no'];
        $sts=$fetch['sts'];
        
        
        if (password_verify($pw, $pass) && $sts=='Customer' && $mn!=NULL) {
            header('location:dashboard.php');
             $_SESSION['fname']=$fn;
             $_SESSION['lname']=$ln;
             $_SESSION['meter_no']=$mn;
            $_SESSION['email']=$email;
            $_SESSION['email']=$email;
            // $_SESSION['msg']= "logged in succesfully";
            // $_SESSION['alert']= "alert alert-success";
        }
        elseif (password_verify($pw, $pass) && $sts=='Admin' && $mn==NULL) {
            header('location:admin/index.php');
            $_SESSION['fname']=$fn;
            $_SESSION['lname']=$ln;
            $_SESSION['meter_no']=$mn;
           $_SESSION['email']=$email;
           $_SESSION['sts']=$sts;
            // $_SESSION['msg']= "logged in succesfully";
            // $_SESSION['alert']= "alert alert-success";
        }
        elseif (password_verify($pw, $pass) && $sts=='Agent' && $mn==NULL) {
            header('location:agent/index.php');
            $_SESSION['fname']=$fn;
            $_SESSION['lname']=$ln;
            $_SESSION['msg']= "logged in succesfully";
            $_SESSION['alert']= "alert alert-warning";
            $_SESSION['email']=$email;
        }elseif ($sts==NULL && $mn==NULL) { 
            $_SESSION['msg']= "You are not yet registered! Please contact your service provider";
            $_SESSION['alert']= "alert alert-warning";
        }
    }else{
        $_SESSION['msg']= "Wrong log in credentials";
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

    <title>index</title>

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

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block d-flex mt-3">
                                <img src="img/ASEPS.jpg" alt="logo" class="img-fluid w-100" style="border-radius: 400px;">
                            </div>
                            <div class="col-lg-6 bg-gradient-white">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Log in here!</h1>
                                    </div>
                                    <form class="user" action="index.php" method="post">
                                        <div class="form-group">
                                            <input name="email" type="email" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Enter Email Address...">
                                        </div>
                                        <div class="form-group">
                                            <input name="pass" type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                        <button name="submit" class="btn btn-primary btn-user btn-block">
                                        login
                                        </button>
                                    </form>
                                    <hr>
                                    <div class="container-fluid">
                                        <?php if (isset($_SESSION['msg'])): ?>
                                            <div class="<?= $_SESSION['alert']; ?>">
                                            <?= $_SESSION['msg']; ?>
                                            </div>
                                            <?php endif; ?>
                                    </div>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="#">Forgot Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="register.php">Create an Account!</a>
                                    </div>
                                </div>
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
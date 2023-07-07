<?php
session_start();
require_once 'connect.php';


if (isset($_POST['submit'])) {

        $em=$_POST['email'];
        $pw=$_POST['pass'];
      
    
        $sql="SELECT * FROM users WHERE email='$em'";
        $run=mysqli_query($conn,$sql);

        
        if(mysqli_num_rows($run) > 0){
              while($row = mysqli_fetch_assoc($run)){
               $role = $row["sts"];
               echo $role;
         }

        }
       
}
        // $fn=$fetch['fname'];
        // $ln=$fetch['lname'];
        // $email=$fetch['email'];
        // $pass=$fetch['pass'];
        // $mn=$fetch['meter_no'];
        // $sts=$fetch['sts'];
        
        
        // if (password_verify($pw, $pass) && $sts=='Customer' && $mn!=NULL) {
        //     header('location:dashboard.php');
        //      $_SESSION['fname']=$fn;
        //      $_SESSION['lname']=$ln;
        //      $_SESSION['meter_no']=$mn;
        //     $_SESSION['email']=$email;
            
            // $_SESSION['msg']= "logged in succesfully";
            // $_SESSION['alert']= "alert alert-success";
    //     }
    //     elseif (password_verify($pw, $pass) && $sts=='Admin' && $mn==NULL) {
    //         header('location:admin/index.php');
    //         $_SESSION['fname']=$fn;
    //         $_SESSION['lname']=$ln;
    //         $_SESSION['meter_no']=$mn;
    //        $_SESSION['email']=$email;
    //        $_SESSION['sts']=$sts;
    //         // $_SESSION['msg']= "logged in succesfully";
    //         // $_SESSION['alert']= "alert alert-success";
    //     }
    //     elseif (password_verify($pw, $pass) && $sts=='Agent' && $mn==NULL) {
    //         header('location:agent/index.php');
    //         $_SESSION['fname']=$fn;
    //         $_SESSION['lname']=$ln;
    //         $_SESSION['msg']= "logged in succesfully";
    //         $_SESSION['alert']= "alert alert-warning";
    //         $_SESSION['email']=$email;
    //     }elseif ($sts==NULL && $mn==NULL) { 
    //         $_SESSION['msg']= "You are not yet registered! Please contact your service provider";
    //         $_SESSION['alert']= "alert alert-warning";
    //     }
    // }else{
    //     $_SESSION['msg']= "Wrong log in credentials";
    //     $_SESSION['alert']= "alert alert-warning";
    // }
// }

?>
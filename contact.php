<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
      <!-- Custom styles for this template-->
      <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;700&family=Poppins:wght@300;400;700&display=swap');
    body{
        margin: 0;
        
    }
    #wrapper{
        height: 100vh;
        
    }
    .navbar-nav{
        width: 12%;
        height: 100%;
        margin:0;
        padding: 10px;
    }
   
    .navbar-nav li a{
        text-decoration: none;
        color: #fff;
        font-weight: 700;
        font-family: 'Open Sans', sans-serif;
        font-size: 14px;
    }
    .sidebar-brand-text{
         text-decoration: none;
         color: #fff;
    }
    .sidebar-dark hr.sidebar-divider {
    border-top: 1px solid #adb5bd;
}
    .form{
        background-color: #E5E4E2;
        text-align: center;
       padding: 30px;
      
       
       }
    .contact{
       margin: 0 auto;
       margin-top: 30px;
      
    }
    .input{
        width: 350px;
        height: 45px;
        

    }
    .email, .phone, .textarea{
        width: 100%;
        margin-top: 20px;
        padding-bottom: 20px;
    }
    .send{
        background-color: #0C0634;
        color: #fff;
        width: 100%;
        height: 70px;
        margin-top: 30px;
    }
    .inline i{
          position: absolute;
          left: 40px;
        }
    
</style>
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
        <a class="nav-link" href="#">
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


<!-- start contact form -->
<div class="contact">
    <div class="form">

        <h1>GET IN TOUCH</h1>
        <P>24/7 we will answer your questions and problems</P>

        <div class="name inline">
        
        <input type="text" placeholder="Enter first name" class="fname input">
        <i class="bi bi-person"></i>

        <input type="text" placeholder="Enter last name" class="lname input">
    </div>

    
    <div class="email">
        <input type="text" placeholder="Enter your email" class="email input">

    </div>

    <div class="phone-no">
        <input type="text" placeholder="Enter your phone number" class="phone input">

       
    </div>
    <div >
       <textarea name="message" id="" cols="30" rows="10" placeholder="Describe your issue" class="textarea"></textarea>

       
    </div>
    <div class="phone-no">
    
      <button class="send">Just Send</button>
       
    </div>
    </div>

    
</div>

        
      
  

</div>
</body>
</html>
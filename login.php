<?php
ob_start();
session_start();

include("connection.php");

?>


<php class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
         <title>Job Finder</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

		<!-- CSS here -->
            <link rel="stylesheet" href="assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
            <link rel="stylesheet" href="assets/css/flaticon.css">
            <link rel="stylesheet" href="assets/css/price_rangs.css">
            <link rel="stylesheet" href="assets/css/slicknav.css">
            <link rel="stylesheet" href="assets/css/animate.min.css">
            <link rel="stylesheet" href="assets/css/magnific-popup.css">
            <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
            <link rel="stylesheet" href="assets/css/themify-icons.css">
            <link rel="stylesheet" href="assets/css/slick.css">
            <link rel="stylesheet" href="assets/css/nice-select.css">
            <link rel="stylesheet" href="assets/css/style.css">
   </head>

   <body>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/new-logo.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
       <div class="header-area header-transparrent">
           <div class="headder-top header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-2">
                            <!-- Logo -->
                            <div class="logo">
                                <a href="index.php"><img src="assets/img/logo/new-logo.png" alt="" width="150px"></a>
                            </div>  
                        </div>
                        <div class="col-lg-9 col-md-9">
                            <div class="menu-wrapper">
                                <!-- Main-menu -->
                                <div class="main-menu">
                                    <nav class="d-none d-lg-block">
                                        <ul id="navigation">
                                            <li><a href="index.php">Home</a></li>
                                            <li><a href="job_listing.php">Find a Jobs </a></li>
                                            <li><a href="about.php">About</a></li>
                                            <li><a href="#">Page</a>
                                                <ul class="submenu">
                                                    <li><a href="blog.php">Blog</a></li>
                                                    <li><a href="single-blog.php">Blog Details</a></li>
                                                    <li><a href="elements.php">Elements</a></li>
                                                    <li><a href="job_details.php">job Details</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="contact.php">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>          
                                <!-- Header-btn -->
                                <div class="header-btn d-none f-right d-lg-block">
                                    <a href="register.php" class="btn head-btn1">Register</a>
                                    <a href="login.php" class="btn head-btn2">Login</a>
                                </div>
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
           </div>
       </div>
        <!-- Header End -->
    </header>
    <div class="container" >
        <h1 style="text-align: center;">Login Form</h1>
        <form name="login" method="post" style="text-align: center;">
        <!-- <div class="mb-3 d-flex flex-md-column  align-items-center">
              <label for="exampleInputEmail1" class="form-label">UserId</label>
              <input type="text" class="form-control  col-lg-4" placeholder="" name="userid" value="" id="exampleInputEmail1" aria-describedby="emailHelp" Required>
              
            </div> -->
            <div class="mb-3 d-flex flex-md-column  align-items-center">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" class="form-control  col-lg-4" placeholder="Email address" name="useremail" id="exampleInputEmail1" aria-describedby="emailHelp" Required>
              
            </div>
            <div class="mb-3  d-flex flex-md-column  align-items-center">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control  col-lg-4" name="userpass" placeholder="Password" id="exampleInputPassword1" Required>
            </div>
            <button  href="employerjob_listing.php?id=<?php echo $row['id']?>" type="submit" class="btn btn-primary"  name="login">Submit</button>
          </form>

    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->

    <?php
    include("footer.php");
    ?>
  </body>
</html>
<?php
if(isset($_POST['login'])){
    
$Useremail = $_POST["useremail"];
$password = md5($_POST["userpass"]);

 $sql ="SELECT * FROM `jobprofile` where  email = '$Useremail' and password = '$password'";
$result = mysqli_query($conn, $sql);

print_r($_SESSION);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)){

        $_SESSION["id"] = $row['id'];
       
        $_SESSION["email"] = $row['email'];
        if ($row['roleid'] == 1)
{   
  

    echo "<script>
       window.location.href='admin.php';
        </script>"; 
}




        else{
        echo "id: " . $row["id"]. " - email: " . $row["email"]. " " . $row["password"]. "<br>";
        echo "<script>
       window.location.href='userwelcome.php';
        </script>"; 
}
}
}
else {
 header('Location:login.php');

}

mysqli_close($conn);
}

?>
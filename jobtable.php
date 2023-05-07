<?php
include("connection.php");
$sql= "SELECT * FROM `design_creative`";
$result = mysqli_query($conn, $sql);
?>



<!doctype php>
<php class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
         <title>Job Finder </title>
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
                    <img src="assets/img/logo/logo.png" alt="">
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
                                <a href="index.php"><img src="assets/img/logo/logo.png" alt=""></a>
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
                                    <!-- <a href="register.php" class="btn head-btn1">Register</a> -->
                                    <!-- <a href="login.php" class="btn head-btn2">Login</a> -->
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

    <h1 style="text-align:center"> Job Vacancies </h1>

    <?php
            if (mysqli_num_rows($result) > 0) {
        ?>
 <div class="container">
	<table id="example" class="display"  style="width:100%">
        <thead>
            <tr>
                <th scope="col">job_title</th>
                <th scope="col">experience</th>
                <th scope="col">salary_range</th>
                <th scope="col">knowledge_about</th>
                <th scope="col">qualification</th>
                <th scope="col">languages</th>
              </tr>
            <?php
			$i=0;
			while($row = mysqli_fetch_array($result)) {
			?>
        </thead>
        <tbody>
           
            
            <tr>
            <?php
      if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    
            ?>
                <th scope="row"><?php echo $row['job_title']?></th>
                <td><?php echo $row['experience']?></td>
                <td><?php echo $row['salary_range']?></td>
                <td><?php echo $row['knowledge_about']?></td>
                <td><?php echo $row['qualification']?></td>
                <td><?php echo $row['languages']?></td>
               
            </tr>
            <?php
			$i++;
			}}
			?>
            
            
            <?php
            }
        } else {
        echo "0 results";
        }
  
            mysqli_close($conn);
        ?>
        </tbody>
       
       
    </table>
</div>
 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.12/js/jquery.dataTables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.12/js/dataTables.bootstrap.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.0/moment.min.js'></script>
<!-- <script>

</script> -->
<?php
include("footer.php");
?>

 
</body>
</html>
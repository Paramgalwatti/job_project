<?php
     include("connection.php");
    $sql = "SELECT * FROM `design_creative` ORDER BY id DESC;";
    $result = mysqli_query($conn, $sql);
   
    ?>
<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
         <title>Job Finder </title>
        
   </head>
   <body>
    <?php
    include("employerheader.php");
    ?>
    <main>

        <!-- Hero Area Start-->
        <div class="slider-area ">
            <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="assets/img/hero/about.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap text-center">
                                <h2>Post your job</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero Area End -->
        <!-- Job_List Area Start -->
        <div class="job-listing-area pt-120 pb-120">
            <div class="container">
                <div class="row">
                    <!-- Left content -->
                    <div class="col-xl-3 col-lg-3 col-md-4">
                        <div class="row">
                            <div class="col-12">
                                    <div class="small-section-tittle2 mb-45">
                                    <div class="ion"> <svg 
                                        xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="20px" height="12px">
                                    <path fill-rule="evenodd"  fill="rgb(27, 207, 107)"
                                        d="M7.778,12.000 L12.222,12.000 L12.222,10.000 L7.778,10.000 L7.778,12.000 ZM-0.000,-0.000 L-0.000,2.000 L20.000,2.000 L20.000,-0.000 L-0.000,-0.000 ZM3.333,7.000 L16.667,7.000 L16.667,5.000 L3.333,5.000 L3.333,7.000 Z"/>
                                    </svg>
                                    </div>
                                    <h4>Filter Jobs</h4>
                                </div>
                            </div>
                        </div>
                        <!-- Job_Category Listing start -->
                        <div class="job-category-listing mb-50">
                            <!-- single one -->
                            <div class="single-listing">
                               <div class="small-section-tittle2">
                                     <h4>Job_Category</h4>
                               </div>
                                <!-- Select job items start -->
                                <div class="select-job-items2">
                                    <select name="select">
                                        <option value="">All Category</option>
                                        <option value="">Category 1</option>
                                        <option value="">Category 2</option>
                                        <option value="">Category 3</option>
                                        <option value="">Category 4</option>
                                    </select>
                                </div>
                                <!--  Select job items End-->
                                <!-- select-Categories start -->
                                <div class="select-Categories pt-80 pb-50">
                                    <div class="small-section-tittle2">
                                        <h4>Job_Type</h4>
                                    </div>
                                    <label class="container">Full Time
                                        <input type="checkbox" >
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="container">Part Time
                                        <input type="checkbox" checked="checked active">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="container">Remote
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="container">Freelance
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <!-- select-Categories End -->
                            </div>
                            <!-- single two -->
                            <div class="single-listing">
                               <div class="small-section-tittle2">
                                     <h4>Job_Location</h4>
                               </div>
                                <!-- Select job items start -->
                                <div class="select-job-items2">
                                    <select name="select">
                                        <option value="">Anywhere</option>
                                        <option value="">Category 1</option>
                                        <option value="">Category 2</option>
                                        <option value="">Category 3</option>
                                        <option value="">Category 4</option>
                                    </select>
                                </div>
                                <!--  Select job items End-->
                                <!-- select-Categories start -->
                                <div class="select-Categories pt-80 pb-50">
                                    <div class="small-section-tittle2">
                                        <h4>Experience</h4>
                                    </div>
                                    <label class="container">1-2 Years
                                        <input type="checkbox" >
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="container">2-3 Years
                                        <input type="checkbox" checked="checked active">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="container">3-6 Years
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="container">6-more..
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <!-- select-Categories End -->
                            </div>
                            <!-- single three -->
                            <div class="single-listing">
                                <!-- select-Categories start -->
                                <div class="select-Categories pb-50">
                                    <div class="small-section-tittle2">
                                        <h4>Posted Within</h4>
                                    </div>
                                    <label class="container">Any
                                        <input type="checkbox" >
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="container">Today
                                        <input type="checkbox" checked="checked active">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="container">Last 2 days
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="container">Last 3 days
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="container">Last 5 days
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="container">Last 10 days
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <!-- select-Categories End -->
                            </div>
                            <div class="single-listing">
                                <!-- Range Slider Start -->
                                <aside class="left_widgets p_filter_widgets price_rangs_aside sidebar_box_shadow">
                                    <div class="small-section-tittle2">
                                        <h4>Filter Jobs</h4>
                                    </div>
                                    <div class="widgets_inner">
                                        <div class="range_item">
                                            <!-- <div id="slider-range"></div> -->
                                            <input type="text" class="js-range-slider" value="" />
                                            <div class="d-flex align-items-center">
                                                <div class="price_text">
                                                    <p>Price :</p>
                                                </div>
                                                <div class="price_value d-flex justify-content-center">
                                                    <input type="text" class="js-input-from" id="amount" readonly />
                                                    <span>to</span>
                                                    <input type="text" class="js-input-to" id="amount" readonly />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </aside>
                              <!-- Range Slider End -->
                            </div>
                        </div>
                        <!-- Job_Category Listing End -->
                    </div>
                    <!-- Right content -->
                    <div class="col-xl-9 col-lg-9 col-md-8">
                        <!-- Featured_job_start -->
                        <section class="featured-job-area">
                            <div class="container">
                                <!-- Count of Job_list Start -->
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="count-job mb-35">
                                        
                                        <div class="apply-btn2 ">   
                                        <button id="mbtn" class="btn" data-bs-toggle="modal" data-bs-target="#applyForm">Post a New Job</button>
                                        </div>
                                        

                                            <!-- Select job items start -->
                                            <div class="select-job-items">
                                                <span>Sort by</span>
                                                <select name="select">
                                                    <option value="">None</option>
                                                    <option value="">job list</option>
                                                    <option value="">job list</option>
                                                    <option value="">job list</option>
                                                </select>
                                            </div>
                                            <!--  Select job items End-->
                                        </div>
                                    </div>
                                </div>
                                <!-- Count of Job_list End -->
                                <!-- single-job-content -->
                                
                                <?php
                                
                                function timeAgo($time_ago) {
                                    $time_ago =  strtotime($time_ago) ? strtotime($time_ago) : $time_ago;
                                    $time  = time() - $time_ago;
                                
                                switch($time):
                                // seconds
                                case $time <= 60;
                                return 'just now';
                                // minutes
                                case $time >= 60 && $time < 3600;
                                return (round($time/60) == 1) ? 'a minute' : round($time/60).' minutes ago';
                                // hours
                                case $time >= 3600 && $time < 86400;
                                return (round($time/3600) == 1) ? 'a hour ago' : round($time/3600).' hours ago';
                                // days
                                case $time >= 86400 && $time < 604800;
                                return (round($time/86400) == 1) ? 'a day ago' : round($time/86400).' days ago';
                                // weeks
                                case $time >= 604800 && $time < 2600640;
                                return (round($time/604800) == 1) ? 'a week ago' : round($time/604800).' weeks ago';
                                // months
                                case $time >= 2600640 && $time < 31207680;
                                return (round($time/2600640) == 1) ? 'a month ago' : round($time/2600640).' months ago';
                                // years
                                case $time >= 31207680;
                                return (round($time/31207680) == 1) ? 'a year ago' : round($time/31207680).' years ago' ;
                                
                                endswitch;
                                }
        
                                
                                if (mysqli_num_rows($result) > 0) {
                                    
                                    
                                // output data of each row
                        
                                 while($row = mysqli_fetch_assoc($result)) { 
                               
                                    ?>

                                <div class="single-job-items mb-30"> 
                                    <div class="job-items">
                                        <div class="  company-img ">
                                            <a href="#"><img style="width:110px" src="<?php echo $row['icon']?>" alt=""></a>
                                        </div>
                                        <div class="job-tittle job-tittle2">
                                            <a href="#">
                                                <h4><?php echo $row['job_title']; ?></h4>
                                            </a>
                                            <ul>
                                                
                                                <li><?php echo $row['cate']?> </li>
                                                <li><?php echo $row['location']?></li>
                                                <li><?php echo $row['salary_range']?></li>

                                        <!-- <li>Applied users :</li> -->
                                                
                                                
                                            </ul>
                                    
                                        </div>
                                    </div>
                                    
                                    <div class="items-link items-link2 f-right">
                                    <?php                               
                                    $e = $_SESSION['id'];
                                    $employee = " SELECT * FROM `design_creative` WHERE  empid =$e";
                                    $id=$row['id'];
                                    $cnt = "SELECT  COUNT('userid') as total FROM `popup_table` WHERE `jobid` = $id";
                                    $results = mysqli_query($conn, $cnt);
                                     
                                    if (mysqli_num_rows($results) > 0) {
                                    
                                    // output data of each row
                                        while($rows = mysqli_fetch_assoc($results)) { 
                                   
                                    if ($row['empid'] == $e){
                                       
                                    ?>
                                    
                                        <a href="appliedlist.php?id=<?php echo $row['id']?>"> <?php echo "Applied Candidates";?><?php echo "(".$rows['total'].")";?> </a>
                                    <?php
                                    }
                                    else{
                                    ?>
                                    <a onclick="alert('you should open only yours job candidate')" href=""><?php echo "Applied Candidates";?></a>

                                    <?php
                                    
                                    }
                                    ?>
                                    <?php
                                    ?>

                                        <span><?php echo  timeAgo($row['time']) ;?></span>
                                        
                                    </div>
                                </div>
                                    <?php
                                     }
                                    }
                                 }
                                 }
                            
                                     else {
                                    echo "0 results";
                                        }
                                   
      
                                     
                                    ?>
                                
                                <!-- single-job-content -->
                                
                            </div>
                        </section>
                        <!-- Featured_job_end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Job_List Area End -->
        <!--Pagination Start  -->
        <div class="pagination-area pb-115 text-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="single-wrap d-flex justify-content-center">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-start">
                                    <li class="page-item active"><a class="page-link" href="#">01</a></li>
                                    <li class="page-item"><a class="page-link" href="#">02</a></li>
                                    <li class="page-item"><a class="page-link" href="#">03</a></li>
                                <li class="page-item"><a class="page-link" href="#"><span class="ti-angle-right"></span></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Pagination End  -->

<!-- Modal -->
<div class="modal fade" id="applyForm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> Job Posting Form</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      <form method="post"  id="contactFrm"   enctype="multipart/form-data">
            <div class="modal-body">
                <!-- Form submission status -->
                <div class="response"></div>
                
                <!-- Contact form -->
                <div class="form-group">
                    <!-- <label>Name:</label> -->
                     <input type="hidden" name="empid" id="empid" value="<?php echo $_SESSION['id'];?>" class="form-control" > 
                </div>
                <div class="form-group">
                     <label>Icon</label>
                     <input type="file" name="icon" id="icon" value="icon" class="form-control" placeholder="icon"> 
                </div> 
                
                <div class="form-group"> 
                     <!-- <label> User Email:</label>  -->
                    <input type="text" name="job_title" id="job_title" value="" class="form-control" placeholder="job_title" required="">
                </div>
               
                <div class="form-group">
                    <!-- <label>jobid:</label> -->
                    <input type="text" name="salary_range" id="salary_range" value="" class="form-control" placeholder="salary_range" required>
                </div>
                <div class="form-group"> 
                     
                     <input type="text" name="category" id="category" value="" class="form-control" placeholder="Vacancy" required="">
                 </div>
                <div class="form-group">
                    <!-- <label>Date:</label> -->
                    <input type="text" name="location" id="location" class="form-control" placeholder="location" required="">
                </div>

                <div class="form-group">
                    <!-- <label>jobid:</label> -->
                    <select name="Job_nature" id="Job_nature" value="" class="form-control" placeholder="Job_nature" required>
                        <option>Full time</option>
                        <option>Part time</option>
                    </select>
                </div>
                <div class="form-group">
                     <!-- <label>Category</label> -->
                     <?php 
    $sel ="SELECT * FROM `job_category`";
    $result = $conn->query($sel);
   
?>

<select name="cate">
   <option>category</option>
  <?php 
   if($result->num_rows>0){
    $options= mysqli_fetch_all($result, MYSQLI_ASSOC);
  }
  foreach ($options as $row) {
  ?>
    <option name="Job_nature"><?php echo $row['jobtitle']; ?> </option>
    <?php 
    }
   ?>
</select>
                    
                </div>
                
            </div>
            <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button   type="submit"  name="submit" class="btn btn-primary">Submit  </button>
      </div>
            </form>
           

      </div>
     
    </div>
  </div>
</div>

 <script>
 function myfun(){
    location.reload();
 }
 </script>

    </div>
    <?php include("footer.php"); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <?php 
if(isset($_POST['submit'])){
    // echo "<script> alert('Your job has been posted')</script>";
    // $icon = $_FILES['icon'];
    $target_dir = "uploads/";
$icon = $target_dir . basename($_FILES["icon"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($icon,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["icon"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

if ($_FILES["icon"]["size"] > 10000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["icon"]["tmp_name"], $icon)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["icon"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}

    echo $empid = $_POST['empid'];
    $job_title = $_POST['job_title'];
    $location = $_POST['location'];
    $salary_range = $_POST['salary_range'];
    $cate = $_POST['cate'];
    $Job_nature = $_POST['Job_nature'];
    $category = $_POST['category'];



  echo $emp = " INSERT INTO `design_creative`(`empid`, `icon`,`job_title`, `location`,`salary_range`,`cate`, `Job_nature`,`category`) VALUES ('$empid','$icon','$job_title','$location',' $salary_range',' $cate' ,'$Job_nature','$category')";

 
 if(mysqli_query($conn,$emp))
{
    // header("Location:login.php");
    echo "Recorded successfully! ";
  
}
else
{
    echo "Error".$pop."<br>". mysqli_error($conn);
}

}
if(isset($_POST['submit'])){
    header('Location:employerjob_listing.php');

 }




mysqli_close($conn);

     ?>   
 

    </body>
</html>
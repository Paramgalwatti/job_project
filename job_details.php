<?php
     include("connection.php");

    ?>
 <?php
                            $id = $_GET['id'];
                             $sql =  "SELECT * FROM `design_creative` WHERE id='$id'";
                             $result = mysqli_query($conn,$sql) or die("Query Unsuccessfull");
                            
                            if(mysqli_num_rows($result)>0){
                                while($row = mysqli_fetch_assoc($result))
                                 {   
                                         ?>

<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
         <title>Job Finder </title>
        
   </head>

   <body>
   <?php include("header.php"); ?>
    <main>

        <!-- Hero Area Start-->
        <div class="slider-area ">
        
        <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="assets/img/hero/about.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2><?php echo $row['cate']?></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
        </div>
        <!-- Hero Area End -->
        <!-- job post company Start -->
        <div class="job-post-company pt-120 pb-120">
            <div class="container">
                <div class="row justify-content-between">
                    <!-- Left Content -->
                    <div class="col-xl-7 col-lg-8">
                        <!-- job single -->
                        <div class="single-job-items mb-50">
                      
                        <div class="job-items">
                          

                                    
                                <div class="company-img company-img-details">
                                    <a href="#"><img src="<?php echo $row['icon'];?>" alt=""></a>
                                </div>
                                <div class="job-tittle">
                                    <a href="#">
                                        <h4><?php echo $row['job_title']; ?></h4>
                                    </a>
                                    <ul>
                                        <li><?php echo $row['cate']?></li>
                                        <li><?php echo $row['location'];?></li>
                                        <li><?php echo $row['salary_range'];?></li>

                                        <?php
                                        $cnt = "SELECT  COUNT('userid') FROM `popup_table` WHERE `jobid` = $id";
                                        $result = mysqli_query($conn, $cnt);
                                        $rows = mysqli_fetch_array($result);
                                        $total = $rows[0];
                                        ?>
                                    <li>Applied users :<?php echo " ". $total;?></li>
                                </ul>
                                </div>
                               
                            </div>
                                
                                                  </div>
                          <!-- job single End -->
                         
                            
                        <div class="job-post-details">
                        
                            <div class="post-details1 mb-50">
                                <!-- Small Section Tittle -->
                                <div class="small-section-tittle">
                                    <h4>Job Description</h4>
                                </div>
                                <p><?php echo $row['Job_Description']?></p>
                            </div>
                            <div class="post-details2  mb-50">
                                 <!-- Small Section Tittle -->
                                <div class="small-section-tittle">
                                    <h4>Required Knowledge, Skills, and Abilities</h4>
                                </div>
                               <ul>
                                   <li><?php echo $row['Required Knowledge, Skills, and Abilities']?></li>
                                   
                               </ul>
                            </div>
                            <div class="post-details2  mb-50">
                                 <!-- Small Section Tittle -->
                                <div class="small-section-tittle">
                                    <h4>Education + Experience</h4>
                                </div>
                               <ul>
                                   <li><?php echo $row['Education_Experience'];?></li>
                                   
                               </ul>
                            </div>
                            </div>
                           

                    </div>
                    <!-- Right Content -->
                    <div class="col-xl-4 col-lg-4">
                        <div class="post-details3  mb-50">
                            <!-- Small Section Tittle -->
                           <div class="small-section-tittle">
                               <h4>Job Overview</h4>
                           </div>
                          <ul>
                              <li>Posted date : <span><?php echo $row['posted date'];?>
                            </span></li>
                              <li>Location : <span><?php echo $row['location'];?></span></li>
                              <li>Vacancy : <span><?php echo $row['category'];?></span></li>
                              <!-- <li>Job nature : <span>Full time</span></li> -->
                              <li>Salary :  <span><?php echo $row['salary_range'];?></span></li>
                              <!-- <li>Application date : <span>12 Sep 2020</span></li> -->
                          </ul>
                        
                          <?php
if(isset($_POST['submit1'])){
     $userid = $_POST['userId']; 
     $useremail = $_POST["useremail"];
     $about_yourself = $_POST["about_yourself"];
     $jobid = $_POST['jobid'];


     $target_dir = "resume/";
     $file = $target_dir . basename($_FILES["file"]["name"]);
     $uploadOk = 1;
     $FileType = strtolower(pathinfo($file,PATHINFO_EXTENSION));

     $check = (($_FILES["file"]["type"] == "application/pdf" ));
     if($check !== false) {
       "File is a pdf - " .  implode(["mime"]) . ".";
       $uploadOk = 1;
     } else {
       echo "File is not a pdf";
       $uploadOk = 0;
     }
   
   // Check file size
   if ($_FILES["file"]["size"] > 2097152) {
     echo "Sorry, your file is too large.";
     $uploadOk = 0;
   }
   
   // Allow certain file formats
   if($FileType != "pdf" ) 
   {
     echo "Sorry, only pdf files are allowed.";
     $uploadOk = 0;
   }
   
   // Check if $uploadOk is set to 0 by an error
   if ($uploadOk == 0) {
     echo "Sorry, your file was not uploaded.";
   // if everything is ok, try to upload file
   } else {
     if (move_uploaded_file($_FILES["file"]["tmp_name"], $file)) {
        "The file ". htmlspecialchars( basename( $_FILES["file"]["name"])). " has been uploaded.";
     } else {
       echo "Sorry, there was an error uploading your file.";
     }
   }

    $check = "SELECT * FROM `popup_table` WHERE userid= $userid AND jobid =  $jobid";
     $results = mysqli_query($conn,$check );

    if (mysqli_num_rows($results) > 0) {

    while($rows= mysqli_fetch_assoc($results)) {
       
       
     if($_SESSION['id']==$userid && $rows['jobid']==$id){
    ?>

    <script>alert("Username is already exist!")</script>;  
    <?php
        }

    }
       }
        else{
              
            if($FileType != "pdf" ){
                ?>
                <script>alert("form cannot be submitted try again!")</script>; 
                <?php
            }
         else{ 
            

             $pop=  "INSERT INTO `popup_table`( `userid`, `useremail`, `jobid`, `about_yourself`,`file`) VALUES ('$userid','$useremail', '$id','$about_yourself','$file')";
            if(mysqli_query($conn,$pop))
        {
        // header("Location:login.php");
        echo "Recorded successfully! ";
        }
        else
        {
        echo "Error".$pop."<br>". mysqli_error($conn);
        }
        }
    }
         }
        
          
       ?>

                           <?php
                          
                          
                            if(!empty($_SESSION["id"]) ){
                                $uID = $_SESSION["id"];
                                $jID = $_GET['id'];
                               $check = "SELECT * FROM `popup_table` WHERE userid= $uID AND jobid =  $jID";
                               $res = mysqli_query($conn,$check );
                          
                              if (mysqli_num_rows($res) > 0)          
                       
                                    {
                                    ?>
                                   
                                    <span class="text-warning">Applied !</span>
                           
                                    <?php
                                     }
                                    else{
                                    ?>
                               
                                    <div class="apply-btn2 ">
                                    <button  name="applied" id="mbtn"  class="btn" data-bs-toggle="modal" data-bs-target="#applyForm">Apply Now</button>
                                     </div>
                                    <?php
                                    
                                    }
                                }
                            
                        
                            else
                            {
                                ?>
                                <div class="apply-btn2">
                                    <a href="login.php" class="btn head-btn2">Login to Apply</a>
                                    
                                </div>
                         <?php
                            }
                            ?>
                            
                       </div>
                        <div class="post-details4  mb-50">
                            <!-- Small Section Tittle -->
                           <div class="small-section-tittle">
                               <h4>Company Information</h4>
                           </div>
                              <span>Colorlib</span>
                              <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                            <ul>
                                <li>Name: <span>Colorlib </span></li>
                                <li>Web : <span> colorlib.com</span></li>
                                <li>Email: <span>carrier.colorlib@gmail.com</span></li>
                            </ul>
                       </div>
                    </div>
                    <?php
                                            
                       
                        ?>

                </div>
            </div>
        </div>

<!-- Modal -->
<div class="modal fade" id="applyForm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Apply Form</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    
      </div>
      <div class="modal-body">

      <form method="post"  id="contactFrm"  enctype="multipart/form-data">
            <div class="modal-body">
                <!-- Form submission status -->
                <div class="response"></div>
                
                <!-- Contact form -->
                <div class="form-group">
                    <!-- <label>Name:</label> -->
                     <input type="text" name="userId" id="userId" value="<?php echo  $_SESSION["id"];?>" class="form-control"  required> 
                </div> 
                <div class="form-group">
                     <!-- <label> User Email:</label>  -->
                    <input type="text" name="useremail" id="username" value="<?php echo  $_SESSION["email"];?>" class="form-control" placeholder="Enter your email" required="">
                </div>
                <div class="form-group">
                    <!-- <label>jobid:</label> -->
                    <input type="text" name="jobid" id="job_type" value="<?php echo $row['id']?>" class="form-control" placeholder="Enter here" required>
                </div>
              
                <div class="form-group">
                    <label>About Yourself:</label>
                    <textarea name="about_yourself" id="about_yourself" class="form-control" placeholder="Your message here" rows="6" required></textarea>
                </div>
                  <div class="form-group">
                    <label>Resume</label>
                    <input type="file" name="file" id="file" class="form-control" accept="application/pdf"   onchange="validateFileType()" placeholder="Enter your email" value="" required accept="pdf">
                    <script>
 
 /* javascript function to validate file type */
 function validateFileType() {
     var inputElement = document.getElementById('file');
     var files = inputElement.files;
     if(files.length==0){
         alert("Please choose a file first...");
         return false;
     }else{
         var filename = files[0].name;

         /* getting file extenstion eg- .jpg,.png, etc */
         var extension = filename.substr(filename.lastIndexOf("."));

         /* define allowed file types */
         var allowedExtensionsRegx = /(\.pdf)$/i;

         /* testing extension with regular expression */
         var isAllowed = allowedExtensionsRegx.test(extension);

         if(!isAllowed){
          
             alert("Invalid File Type...only pdf file allowed.");
             return false;
         }
     }
 }
 </script> 
               </div>
            </div>
            <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="submit1" class="btn btn-primary">Submit</button>
      </div>
            </form>
             </div>
    
    </div>
  </div>
</div>
   </div>

     <?php
                        }
                    }


    ?>
        <!-- job post company End -->
   
       
    </main>
    <?php include("footer.php"); ?>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>
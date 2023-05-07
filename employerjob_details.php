<?php
     include("connection.php");
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
   <?php include("employerheader.php"); ?>
    <main>

        <!-- Hero Area Start-->
        <div class="slider-area ">
        
        <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="assets/img/hero/about.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>UI/UX Designer</h2>
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
                            <?php
                            $id = $_GET['id'];
                        
                            
                            $sql =  "SELECT * FROM `design_creative` WHERE id='$id'";
                             $result = mysqli_query($conn,$sql) or die("Query Unsuccessfull");
                            
                            if(mysqli_num_rows($result)>0){
                                while($row = mysqli_fetch_assoc($result))
                                 {   
                             ?>
      
                                <div class="company-img company-img-details">
                                    <a href="#"><img src="<?php echo $row['icon'];?>" alt=""></a>
                                </div>
                                <div class="job-tittle">
                                    <a href="#">
                                        <h4><?php echo $row['job_title']; ?></h4>
                                    </a>
                                    <ul>
                                        <li>Creative Agency</li>
                                        <li><i class="fas fa-map-marker-alt"></i><?php $row['location'];?></li>
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
                              <li>Job nature : <span>Full time</span></li>
                              <li>Salary :  <span><?php echo $row['salary_range'];?></span></li>
                              <li>Application date : <span><?php echo $row['posted date'];?></span></li>
                          </ul>
                          <?php
                          
                            if(!empty($_SESSION)){
                                ?>
                             <div class="apply-btn2 ">
                             <a href="appliedlist.php?id=<?php echo $row['id']?>">
                            <button id="mbtn" class="btn" data-bs-toggle="modal" >Applied candidates</button>
                            </a>
                            </div>
                            <?php
                            }
                            else
                            {
                                ?>
                                <div class="apply-btn2">
                                    <a href="login.php" class="btn head-btn2">Login to view Applied candidates</a>
                                    
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
                                            }
                                     
                             } else {
                            echo "0 results";
                                }
                        
                        ?>

                </div>
            </div>
        </div>

<!-- Modal -->
<div class="modal fade" id="applyForm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New Job posting Form</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      <h2 style="color:solid brown"><marquee > Data Table </marquee> </h2>

    <?php
            if (mysqli_num_rows($result) > 0) {
            
        ?>
 
	<table id="example" class="display"  style="width:100%">
        <thead>
            <tr>
                <th>id </th>
                <th>userid</th>
                <th>useremail</th>
                <th>date</th>
                <th>jobid</th>
                <th>about_yourself</th>
                
            </tr>
            <?php
			$i=0;
			while($row = mysqli_fetch_array($result)) {
			?>
        </thead>
        <tbody>
           
            
            <tr>
            <?php
  
$jobid = $_GET['id'];
    echo $tbl = "SELECT * FROM `popup_table` WHERE jobid = $jobid";
  
  echo $result = mysqli_query($conn,$tbl) or die("Query Unsuccessfull");

      if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    
            ?>
                <td><?php echo $row["id"];?></td>
                <td><?php echo $row["userid"]?></td>
                <td><?php echo $row["useremail"]?></td>
                <td><?php echo $row["date"]?></td>
                <td><?php echo $row["jobid"]?></td>
                <td><?php echo $row["about_yourself"]?></td>
             
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
 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.12/js/jquery.dataTables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.12/js/dataTables.bootstrap.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.0/moment.min.js'></script>
<script>
$(document).ready(function () {
  // Setup - add a text input to each footer cell
  $('#example thead tr')
      .clone(true)
      .addClass('filters')
      .appendTo('#example thead');

  var table = $('#example').DataTable({
      orderCellsTop: true,
      fixedHeader: true,
      initComplete: function () {
          var api = this.api();

          // For each column
          api
              .columns()
              .eq(0)
              .each(function (colIdx) {
                  // Set the header cell to contain the input element
                  var cell = $('.filters th').eq(
                      $(api.column(colIdx).header()).index()
                  );
                  var title = $(cell).text();
                  $(cell).html('<input type="text" placeholder="' + title + '" />');

                  // On every keypress in this input
                  $(
                      'input',
                      $('.filters th').eq($(api.column(colIdx).header()).index())
                  )
                      .off('keyup change')
                      .on('change', function (e) {
                          // Get the search value
                          $(this).attr('title', $(this).val());
                          var regexr = '({search})'; //$(this).parents('th').find('select').val();

                          var cursorPosition = this.selectionStart;
                          // Search the column for that value
                          api
                              .column(colIdx)
                              .search(
                                  this.value != ''
                                      ? regexr.replace('{search}', '(((' + this.value + ')))')
                                      : '',
                                  this.value != '',
                                  this.value == ''
                              )
                              .draw();
                      })
                      .on('keyup', function (e) {
                          e.stopPropagation();

                          $(this).trigger('change');
                         $(this)
                             .focus()[0]
                        .setSelectionRange(cursorPosition, cursorPosition);
                      });
              });
      },
  });
});
</script>
           

      </div>
     
    </div>
  </div>
</div>
    </div>

        <!-- job post company End -->
        <?php
        if(isset($_POST['submit1'])){
        $userid = $_POST['userId']; 
        $useremail = $_POST["useremail"];
        $about_yourself = $_POST["about_yourself"];

          $pop=  "INSERT INTO `popup_table`( `userid`, `useremail`, `jobid`, `about_yourself`) VALUES ('$userid','$useremail', '$id','$about_yourself')";
       
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

            ?>
    </main>
    <?php include("footer.php"); ?>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>
<?php include("connection.php"); ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->

    <title>Job Finder</title>
  </head>
  <body>
  <?php include("employerheader.php"); ?>
  <h2 class="text-center"> Applied Candidates </h2>
<div class="container vh-100 d-flex justify-content-center align-items-center " >
<?php
$jobid = $_GET['id'];
$tbl = "SELECT * FROM `popup_table` WHERE jobid = $jobid";
$result = mysqli_query($conn,$tbl) or die("Query Unsuccessfull");
if (mysqli_num_rows($result) > 0) {
if(!empty($result))
{
?>

<table id="example" class="table table-striped"  style="width:100%">
    <thead>

        <tr>
            <!-- <th>id </th> -->
            <!-- <th>userid</th> -->
           
            <th scope="col"> Applied Date </th>
            <th scope="col">Email</th>
            <!-- <th scope="col">jobid</th> -->
            <th scope="col">Message</th>
            
        </tr>
        
    </thead>
    <tbody>
     <tr>
 <?php
// output data of each row
while($row = mysqli_fetch_assoc($result)) {

        ?>
            <td scope="row"><?php echo   date('m-d-20y', strtotime($row["date"])) ?></td>
            <td scope="row"><?php echo $row["useremail"];?></td>
            <td scope="row"><?php echo $row["about_yourself"];?></td>
         
        </tr>
   
    </tbody>
   
    <?php

}
}

}
else{
echo "0 Result";
}
mysqli_close($conn);
?>
</table>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.12/js/jquery.dataTables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.12/js/dataTables.bootstrap.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.0/moment.min.js'></script>
<script>
</script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->

    <?php include("footer.php"); ?>
  </body>
  
</html>
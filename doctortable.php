<?php
    include("dbcon.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
   <!--- sweetalert cdn link --->  
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


</head>
<body>
                 <br><br>                 
<table class="table"  id="doctortable">
  <thead class="table-dark">
    <tr>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Gender</th>
      <th scope="col">Mobile</th>
      <th scope="col">Specialist</th>
      <th scope="col">Email</th>
      <th scope="col">Login ID</th>
      <th scope="col">View</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
      <?php

if(isset($_GET['search'])){
  $search = $_GET['search'];

  $sql ="SELECT * FROM doctor WHERE (`emailid` LIKE '%$search%') OR (`loginid` LIKE '%$search%')";
          $result = mysqli_query($con,$sql);
          if (mysqli_num_rows($result) == 1) {
            $sql ="SELECT * FROM doctor WHERE (`emailid` LIKE '%$search%') OR (`loginid` LIKE '%$search%')";
          $result = mysqli_query($con,$sql);
        }else { ?>
          <script>
              swal({
              title: "Alert!",
              text: "No Records Found!",
              icon: "info",
          }).then(function() {
          window.location = "doctors.php";
          });
          </script>
          <?php }
}
 else{
    
          $sql="select * from `doctor`";
 }
    $result=mysqli_query($con,$sql);
    if($result){
        while($row=mysqli_fetch_assoc($result)){
          $firstname = $row['firstname'];
          $lastname = $row['lastname'];
          $gender = $row['gender'];
          $mobile = $row['mobile'];
          $specialist=$row['specialist'];
          $emailid = $row['emailid'];
          $loginid = $row['loginid']; ?>
      <tr>
      <th scope="row"><?php echo $firstname ?></th>
      <td><?php echo$lastname ?></td>
      <td><?php echo $gender ?></td>
      <td><?php echo $mobile ?></td>
      <td><?php echo $specialist ?></td>
      <td><?php echo $emailid ?></td>
      <td><?php echo $loginid ?></td>
      <td>
     <a href="viewdoctor.php?viewid=<?php echo $loginid ?>" class="edit-btn" title="View Doctor"><i class="fas fa-eye text-dark"></i></a>
      </td>   
      <td>
     
     <a href="editdoctor.php?updateid=<?php echo $loginid ?>" class="me-5 editdoctor" title="Edit Doctor"><i class="fas fa-edit text-dark"></i></a>
     </td>
     <td>
     <a href="deldoctor.php?deleteid=<?php echo $loginid ?>" class="del-btn" title="Delete Doctor"><i class="fas fa-trash text-dark"></i></a>
      </td>
    							
    </tr> <?Php 
        }
        
    } 
    
    ?>
     
  </tbody>
</table>
<?php
    if(isset($_GET['m'])){
?>

      <div class="flash-data" data-flashdata="<?php echo $_GET['m'] ?>">
      </div>
<?php
    }
?>

<script>
    $('.del-btn').on('click', function (e) {
         e.preventDefault();  
         
         const href = $(this).attr('href')

        Swal.fire({
                title: 'Are You sure to delete?',
                text: "Yow Won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmbuttonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
        }).then((result)=>{
            if(result.value){
                 document.location.href = href;
            }
        })
      });

      const flashdata = $('.flash-data').data('flashdata')
          if(flashdata){
              swal.fire({
                  type : 'success',
                  title : 'Record Deleted',
                  text : 'Record has been deleted'
              })
          }
     </script>


<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
   
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

<!--- bootstrap popper and js link --->
    
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>
<br><br>
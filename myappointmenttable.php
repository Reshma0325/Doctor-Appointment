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
<body style="background:#d8b7bb;">
                 <br>                
                 <table class="table"  id="appointmenttable">
      <thead class="table-dark">
      <tr>
        <th scope="col">Appointment Number</th>
        <th scope="col">Doctor ID</th>
        <th scope="col">Appointment Date</th>
        <th scope="col">Appointment Time</th>
        <th scope="col">Consultation </th>
        <th scope="col">View Appointment</th>
        <th scope="col">Cancel Appointment</th>
      </tr>
      </thead>
      <tbody>    
        <?Php 
                

if(isset($_GET['search'])){
    $search = $_GET['search'];


        

    $sql ="SELECT * FROM bookapp WHERE bookapp.appodate='$search' and  bookapp.pid='$user'";
    $result = mysqli_query($con,$sql);
    if (mysqli_num_rows($result)) {
        $sql ="SELECT * FROM bookapp WHERE bookapp.appodate='$search' and  bookapp.pid='$user'";
    $result = mysqli_query($con,$sql);
}else { ?>
    <script>
        swal({
        title: "Alert!",
        text: "No Records Found!",
        icon: "info",
    }).then(function() {
    window.location = "myappointment.php";
    });
    </script>
    <?php }
}
else{
    
         $sql="select * from `bookapp` where bookapp.pid='$user'";
}      
$result = mysqli_query($con,$sql);
if($result){
        while($row=mysqli_fetch_array($result)){
            $appoid = $row['appoid'];
            $loginid = $row['pid'];
            $apponum = $row['apponum'];
            $docid = $row['docid'];
            $appodate=$row['appodate'];
            $appotime=$row['appotime']; 
            $consultation=$row['consultation'];
            ?>
            <tr>
            
            <td><?php echo $apponum ?></td>
            <td><?php echo $docid ?></td>
            <td><?php echo $appodate ?></td>
            <td><?php echo $appotime ?></td>
            <td><?php echo $consultation ?></td>
            <td>
     <a href="viewappo.php?viewid=<?php echo $appoid ?>" class="edit-btn" title="View appointment"><i class="fas fa-eye text-dark"></i></a>
      </td>  
            <td>
     <a href="delappo.php?deleteid=<?php echo $appoid ?>" class="del-btn" title="Delete appointment"><i class="fas fa-trash text-dark"></i></a>
      </td>                       
          </tr>
          
         <?Php 
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
<!--- jquery cdn link --->
    
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<!--- bootstrap popper and js link --->
    
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>
<br><br>
   
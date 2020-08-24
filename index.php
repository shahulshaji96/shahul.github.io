<?php
define('TITLE','User List');
define('PAGE','Home');
include('header.php');
include('dbConnection.php');

?>

  <body>  
<div class="col-12   col-sm-12  col-md-10 col-lg-10  mt-4">
   
  <div class=" mt-5 text-center  ">
    <p class="bg-secondary head text-white p-2 ">DATA </p>

           <?php
   // To print data from database if data added

           $sql ="SELECT * FROM userdata";
           $result = $conn->query($sql);
           if($result->num_rows> 0){
            echo ' 
            <div class="table-responsive">
            <table class="table table-hover table-striped table-success">
               <thead>
               <tr>
                 <th scope="col">ID</th>
                 <th scope="col">Name</th>
                 <th scope="col">Company</th>
                 <th scope="col">Email</th>
                 <th scope="col">Degree</th>
                 <th scope="col">Address</th>
                 <th scope="col">State</th>
                 <th scope="col">Zip</th>
               </tr>
               </thead>
               <tbody>';
               while($row =$result-> fetch_assoc()){
              
              echo '<tr>';
               echo '<td>' .$row["id"]. '</td>';
               echo '<td>'.$row["first_name"].'</td>';
               echo '<td>'.$row["company_name"].'</td>';  
               echo '<td>' .$row["email"]. '</td>';
               echo '<td>'.$row["degree"].'</td>';
               echo '<td>'.$row["address"].'</td>'; 
               echo '<td>' .$row["state"]. '</td>';
               echo '<td>'.$row["zip"].'</td>';
               
               echo '</tr>';
               }
               echo '</tbody>
               </table></div> ';   
           }

           // To print some sample data if database do not have any 
           else{
            echo ' <div class="table-responsive">
            <table class="table table-hover table-striped table-success">
            <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Name</th>
              <th scope="col">Company</th>
              <th scope="col">Email</th>
              <th scope="col">Degree</th>
              <th scope="col">Address</th>
              <th scope="col">State</th>
              <th scope="col">Zip</th>
            </tr>
            </thead>
            <tbody>
            <tr>
            <td> 1 </td>
            <td> Baby</td>
            <td> Globals ltd </td>
            <td> baby@gmail.com </td>
            <td> Deploma in science </td>
            <td> Kidangoor(H) </td>
            <td> Kerala </td>
            <td> 6578 </td>
            </tr>
            <tr>
            <td> 2 </td>
            <td> Manoj</td>
            <td> Berocle ltd </td>
            <td> jhkjd@gmail.com </td>
            <td> Deploma in Maths </td>
            <td> Mattanchery(H) </td>
            <td> Kerala </td>
            <td> 6875 </td>
            </tr>
            <tr>
            <td> 1 </td>
            <td> Jaseer</td>
            <td> Globals ltd </td>
            <td> jas@gmail.com </td>
            <td> Deploma in science </td>
            <td> Kidangoor(H) </td>
            <td> Kerala </td>
            <td> 6578 </td>
            </tr>
            <tr>
            <td> 2 </td>
            <td> Manoj</td>
            <td> Berocle ltd </td>
            <td> jhkjd@gmail.com </td>
            <td> Deploma in Maths </td>
            <td> Mattanchery(H) </td>
            <td> Kerala </td>
            <td> 6875 </td>
            </tr>
            <tbody>
            </table></div> '; 
           }
           ?>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" 
integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

    <?php
// include footer.php file
include ('footer.php');
?>

</html>
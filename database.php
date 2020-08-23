<?php
// validating function
function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
 include('dbConnection.php');   

   // Validating, sanitizing data       
if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $first_name= filter_var(($_POST["first_name"]),FILTER_SANITIZE_SPECIAL_CHARS);
     $last_name  = test_input($_POST["last_name"]);
     $company_name = test_input($_POST["company_name"]);
     $state_name = test_input($_POST['state_name']);
     $current_salary = test_input($_POST['current_salary']);
     if(filter_has_var(INPUT_POST,'email')){
         $email =test_input ($_POST['email']);
         $email =filter_var($email,FILTER_SANITIZE_EMAIL);
        filter_var($email,FILTER_VALIDATE_EMAIL);
        }   
     $degree = test_input($_POST['degree']);
     $address = test_input($_POST['address']);
     $city = test_input($_POST['city']);
     $state = test_input($_POST['state']);
     $zip = test_input($_POST['zip']);
     $file = test_input($_POST['file']);
    
     if (isset($_POST['submit']) && empty($_POST["first_name"])) { 
         TextNode("error", "* Fields should not be empty");    
         }
     else
     {    
         
         $sql = "CREATE DATABASE IF NOT EXISTS $dbname";

         // execute query
       if(mysqli_query($conn, $sql)){

         // sql to create new table if not exists
         $sql = " CREATE TABLE IF NOT EXISTS $tablename
            (id INT(5) NOT NULL AUTO_INCREMENT PRIMARY KEY,
              first_name VARCHAR (10) NOT NULL,
              last_name VARCHAR (10) NOT NULL,
              company_name VARCHAR (10) ,
              state_name VARCHAR (10) ,
              current_salary FLOAT(10),
              email VARCHAR (30) ,
              degree VARCHAR (30) ,
              address VARCHAR (40) ,
              city VARCHAR (20),
              state VARCHAR (10) ,
              zip INT(7),
              file VARCHAR (30)
              );";
      
         if (!mysqli_query($conn, $sql)){
         echo "Error creating table : " . mysqli_error($conn);
         }
       }  

       // for connection error
       if(mysqli_connect_error()){
          die('Connect Error ('.mysqli_connect_errno() .') '. mysqli_connect_error());
         echo "errror";
         } 

        // Insert data if required fields are filled
        
       else{
         $sql ="INSERT INTO userdata (first_name, last_name,company_name, state_name,current_salary, 
          email,degree, address,city,state, zip, file)
         values ('$first_name ','$last_name ','$company_name ',' $state_name',' $current_salary','$email',
          '$degree',' $address',' $city',' $state ','$zip' ,'$file')";
                
         if($conn->query($sql)){
          $id = $conn->insert_id;
         TextNode("success", "ID : $id , New record is inserted "); 
          }
         else {
            echo "Error: ".$sql."<br>".$conn->error;
             }
            $conn->close();
          }
     }          
}
//  To create error messages
 function TextNode($classname, $msg){
            $element = "<h6 class='$classname'>$msg</h6>";
            echo $element;
  }  
?>  

<?php

define('TITLE','Add data');
define('PAGE','Add data');
include('header.php');
$msg="";
  ?> 
 <!--for message style--> 
<style>
.error {color: #FF0000;}
.success { color: green;}
</style>

 <div class="col-12 col-sm-12 col-md-10 mt-4">
          <div class=" mt-5 text-center">
           <p class="bg-secondary  head text-white p-2 ">ADD DATA </p>
          </div>


<div class="d-flex justify-content-center   mb-5">   
      <!-- Default form register -->

     <form class="text-center border border-light bg-light   py-3" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">

      <p class="h4 mb-4">Fill the user data</p>
    
      <?php include "database.php"; ?>
         <div class="form-row ">
         <div class="col">
            <!-- First name -->
            <?php inputElement("First name", "first_name",""); ?>
         </div>
         <div class="col">
            <!-- Last name -->
            <?php inputElement("Last name", "last_name",""); ?>  
         </div>
         </div> 
           <!-- company name -->        
          <div class="pt-4 form-group ">
            <?php inputElement("Company Name", "company_name",""); ?>
         </div>
         <!-- state name -->
        <div class="row pt-2">
         <div class="col">
         <input type="text" name="state_name" value="" placeholder="State" class="form-control" id="inlineFormInputGroup"
         placeholder="Username">
         </div>
         <!-- Salary -->
         <div class="col">           
         <input type="text" name="current_salary" value=""  placeholder="Current Salary" class="form-control" id="inlineFormInputGroup"
         placeholder="Username">
         </div>           
         </div>
          <!-- Email -->      
         <div class="form-group pt-3">
         <label for="exampleInputEmail1">Email address</label>
         <?php inputElement("Enter Email", "email",""); ?> 
         <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
         </div>
         <!-- Degree name  --> 
         <div class="form-group">
         <label for="exampleFormControlSelect1">Select Degree</label>
         <select name="degree" class="form-control" id="exampleFormControlSelect1">
         <option >Select any option</option>   
         <option>Agriculture and farming</option>
         <option>Architectural and Construction</option> 
         <option>Bachelor of Technology</option>
         <option>Bachelor of science</option>
         <option>Business Management</option>
         <option>Medicine(MBBS,MDS)</option>
         </select>
         </div>
         <!-- User address --> 
         <div class="form-row pt-3">
         <div class="col-auto">
         <label for="area1 ">User Address  :- </label>
         </div>
         <div class="col-xl">
         <textarea name="address" class="form-control" id="area1" rows="3" required></textarea>
         </div>
         </div>
         <!-- City name --> 
         <div class="form-row pt-3">
         <div class="form-group col-md-6">
         <label for="inputCity">City</label>
         <?php inputElement("City", "city",""); ?>
         </div>
         <!-- State name --> 
         <div class="form-group col-md-4">
         <label for="state1">State</label>
         <select id="state1" name="state" class="form-control" required>
         <option >Kerala</option>
         <option>Delhi</option>
         <option>Karnataka</option>
         <option>Kerala</option> 
         <option>Panjab</option>
         <option>Tamilnadu</option>
         </select>
         </div>
         <!-- Zip  --> 
         <div class="form-group col-md-2">
         <label for="inputZip">Zip</label>
         <?php inputElement("Zip", "zip",""); ?>
         </div>
         </div>
         <!-- File upload --> 
         <div class="form-row py-3 mb-3">
         <div class="col-auto">
         <label for="file1">Upload User ID :-</label>
         </div>
         <div class="col">
         <input type="file" name="file" class="form-control-file" id="file1">
         </div>
         </div>
               
         <!-- confirm data -->
         <div class="custom-control custom-checkbox pt-4 pb-4">
         <input type="checkbox" class="custom-control-input" id="defaultRegister">
         <label class="custom-control-label" for="defaultRegister">Confirm Data is correct</label>
         </div>
         <!-- Submit button --> 
         <div class="py-3">
         <input type="submit" value="Submit" name="submit" class="btn btn-block btn-info" />
         </div>
    </form>
</div>
</div>

 <?php
     // function for creating input fields
        function inputElement($placeholder, $name, $value){
     $ele = "  <div class=\"input-group \">
       <input type=\"text\" name='$name' value='$value' required autocomplete=\"off\" placeholder='$placeholder' 
        class=\"form-control\" id=\"inlineFormInputGroup\" placeholder=\"Username\"><span class=\"error\">&nbsp *
        <br><br> </div> ";
     echo $ele;
      } 
 ?>
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

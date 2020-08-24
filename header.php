
<!DOCTYPE html>
<html>
	<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">    
	<meta http-equiv="X-UA-Compatible" content="ie=edge"> 	
        <title><?php echo TITLE ?></title>
        <link  href="style.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">     
        <link  href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >	

<!-- For main header navbar -->

<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-danger fixed-md-rowrap  shadow " >
<a class="navbar-brand ml-3 " href="index.php">SHAHUL</a>

<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    <span class="icon-bar"></span>
        <span class="icon-bar"></span>  
  </button>
  
  <div class=" collapse navbar-collapse " id="navbarsExampleDefault" >
    <ul class=" navbar-nav ml-auto mr-3 " >
      <li class="nav-item ">
        <a class="nav-link <?php if(PAGE=='Home'){echo 'active';}?>"
 href="index.php"><i class="fa fa-address-book-o" aria-hidden="true"></i>User List</a> </li>
      <li class="nav-item">
        <a class="nav-link  <?php if(PAGE=='Add data'){echo 'active';}?>"
 href="form.php"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Add Data</a> </li>
      <li class="nav-item">
        <a class="nav-link  <?php if(PAGE=='About us'){echo 'active';}?>"
 href="about.php"><i class="fa fa-info-circle" aria-hidden="true"></i>About Us</a></li>
     
    </ul>
  </div>   
  <!-- For side navbar -->

</nav>

<div class="container-fluid  " > 
<div class="row ">
<nav  class=" col-md-2 col-lg-2   sidebar " >
<div  class="sidenav "   >
<ul class="nav flex-cloumn mt-4  " >
<li ><a class="nav-link <?php if(PAGE=='Home'){echo 'active';}?>"
 href="index.php"><i class="fa fa-address-book-o" aria-hidden="true"></i>User List </a><li>
 <li ><a  class="nav-link  <?php if(PAGE=='Add data'){echo 'active';}?>"
 href="form.php"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Add Data</a><li>
 <li ><a class="nav-link <?php if(PAGE=='About us'){echo 'active';}?>"
 href="about.php"><i class="fa fa-info-circle" aria-hidden="true"></i>About Us</a><li>   
</ul>
</div>
</nav>
</head>
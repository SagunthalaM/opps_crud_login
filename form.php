<?php
include "configure.php";
$user = new Users ();
if (isset($_POST['submit'])){
   $user->addRecord($_POST);
   header("Location:table.php");
}
?>
<html>
    <head>
        <title>
            index page
        </title>
            <!-- Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    </head>
    <body>   
        <nav class="navbar navbar-light fs-3 mb-3 justify-content-center" style="background-color:#8CFFB2">
Employee's Details
        </nav>
<div class="container ">
    <div class="text-center mb-2">
        <h1>Add New User</h1>
        <p class="text-muted">
            Complete the form below to add a new user
        </p>
    </div>
    <div class="container d-flex justify-content-center">
        <form action="" method="post" style="width:50vw;min-width:300px;">
            <div class="row mb-3">
        <div class="col">
        <label for="" class="form-label">First Name</label>
            <input type="text" name="first_name" class="form-control">
        </div>   
        <div class="col">
        <label for="" class="form-label">Last Name</label>
            <input type="text" name="last_name" class="form-control">
        </div> 
        </div>
        <div class="  mb-3">
        <label for="" class="form-label">Email</label>
            <input type="email" name="email" class="form-control">
        </div> 
    
        <div class=" mb-3">
        <label for="" class="form-label">Phone</label>
            <input type="number" name="phone" class="form-control">
        </div> 
        
        <div class="  mb-3">
        <label for="" class="form-label">Position</label>
            <input type="text" name="position" class="form-control">
        </div> 
        <div class="form-group mb-3">
    <label for="">Gender</label>&nbsp;
    <input type="radio" class="form-check-input" name="gender" id="male" value="male">
    <label for="male" class="form-input-label" >Male</label>&nbsp;
  
    <input type="radio" class="form-check-input" name="gender" id="Female" value="Female">
    <label for="Female" class="form-input-label" >Female</label>
    
  </div>
  <div>
    <input type="submit" class="btn btn-success" name="submit" id="" value="save" style="margin-right:10px;"> 
    <a href="table.php" class="btn btn-danger">Cancel</a>
  </div>
        </form>
    </div>
</div>

<div style="position:fixed;text-decoration:none;;bottom:0;right:0;margin:25px;" >
    <button class="btn btn-dark"><a href="open_page.php"  
    style="text-decoration:none;"
     class="text-white">log out</a></button>
</div>

        <!-- Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
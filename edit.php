<?php
include "configure.php";
$user = new Users ();
if($_GET['id']){
    $editData = $user->getFormData($_GET['id']);
}
if(isset($_POST['update'])){
    $updates = $user->updateData($_POST,$_GET['id']);
    if($updates){
        header('Location:table.php');
    }else{
        echo "error";
    }
}

$users = new Users();
$record =$users->tableList();

?>
<html>
    <head>
        <title> Update page</title>
            <!-- Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    </head>
<body>
    <nav>
    <div class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color:#00ff5573;">
        Employee's Details
    </div>
    </nav>
<div class="container">

    <div class=" text-center mb-3"><h1>Edit User Information</h1>
    <p>Click update after changing any Information</p>   
  </div>
<div class="container d-flex justify-content-center">
    <form action="" method="post" style="min-width:300px;width:50vw;">
    <div class="row mb-3">
    <div class="col">
    <label for="" class="form-label">
        First Name
    </label>
    <input type="text"  class="form-control" name="first_name" value="<?php echo $editData['first_name'] ?>">
    </div>
    <div class="col">
    <label for="" class="form-label">
        Last Name
    </label>
    <input type="text" class="form-control" name="last_name" value="<?php echo $editData['last_name'] ?>">
    </div>
    </div>
    <div class="mb-3">
    <label for="" class="form-label">
        Email
    </label>
        <input type="email" class="form-control" name="email" value="<?php echo $editData['email'] ?>">
    </div>
    
    <div class="mb-3">
    <label for="" class="form-label">
        Phone
    </label>
        <input type="number" class="form-control" name="phone" value="<?php echo $editData['phone'] ?>">
    </div>
    <div class="mb-3"><label for="" class="form-label">
        Position
    </label>
        <input type="text"  class="form-control" name="position" value="<?php echo $editData['position'] ?>">
    </div>
    <div class=" form-group mb-3">
    <label for="" class="form-label">
       Gender
    </label>&nbsp;
        <input type="radio" name="gender" id="male" class="form-check-input"  
        value="male"
        <?php echo ($editData['gender']=="male")?"checked":"";?> >
        <label for="male" class="form-input-label">male</label>
        <input type="radio" name="gender" id="female" class="form-check-input"  
        value="female"
        <?php echo ($editData['gender']=="female")?"checked":"";?> >
        <label for="female" class="form-input-label">female</label>
        
    </div>
    <div style="margin-bottom:10px;">
    <button style="margin-right:5px;" type="submit" name="update" class="btn btn-success">
        Update
    </button><a href="table.php" class="btn btn-danger">Cancel</a>
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
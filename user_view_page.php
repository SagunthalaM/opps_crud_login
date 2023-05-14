<?php
include "configure.php";
$user = new Users ();
$record = $user->tableList();
if(isset($_GET['id'])){
    $del = $user->deleteData($_GET['id']);
    if($del){
        header("Location:table.php");
    }else{
        echo $del;
    }
}
?>
<html>
    <head>
        <title></title>
            <!-- Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    </head>
    <body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color:#00ff5573">
  Employee's Details
</nav>
<div class="container">
<table class="table table-hover text-center ">
      <thead class="table-dark ">
      <tr>
        
            <th scope="col">Id</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Email</th>
            <th scope="col">Gender</th>
            <th scope="col">Phone</th>
            <th scope="col">Position</th>
        </tr>
      </thead>
        <?php foreach($record as $val){ ?>
        <tr>
            <td><?php echo $val['id']?></td>
            <td><?php echo $val['first_name']?></td>
            <td><?php echo $val['last_name']?></td>
            <td><?php echo $val['email']?></td>
            <td><?php echo $val['gender']?></td>
            <td><?php echo $val['phone']?></td>
            <td><?php echo  $val['position']?></td>

        </tr>
        <?php }?>
    </table>   
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
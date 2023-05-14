<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Management</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="favicon.ico">
    <!-- Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
 
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body >
  
<section style="background-image:url('banner.png');background-repeat:no-repeat;background-size:100% 100%;
top:0;bottom:0;position:absolute;left:0;right:0;">
<div class="text-center" style="background:rgb(0,0,0,0.4);">
        <h1 class="container-fluid py-3 bg-dark text-white">
         School Management Home Page
        </h1>
    <div class=" container row justify-content-evenly  " style="width:125vh;min-width:150px;margin-left:20%;margin-top:8%">

        <div class="col-4" style="display:flex;flex-direction:column;">
            <img src="user_logo.jpg"  alt="admin-image"  class="rounded-circle" > 
         
           <a href="login.php" class="text-white fs-5 " style="text-decoration:none;">
           <button class="btn btn-primary mt-4 fs-5">
           Admin Click here
           </button>
           </a>
        </div>
        <div class="col-4" style="display:flex;flex-direction:column;">    
            <img src="user3.png"  class="rounded-circle" alt="user-image" style="background-color:black;">
            <a href="user_view_page.php" class="text-white fs-5 " style="text-decoration:none;">
                <button class="btn btn-danger mt-4 fs-5">
                User  Click here
                </button>
            </a>
        </div>
                    
    </div>
    
<br><br><br><br><br><br>        
</div>
</section>

</body>
</html>
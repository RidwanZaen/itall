<!doctype html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  </head>

  
<body style="height: 3000px;">
  <!--- Header --->
  <nav class="navbar navbar-expand sticky-top" style="background-color:lightcoral">
  <div class="container-lg">
    <a class="navbar-brand" href="#"><i class="bi bi-cookie"> </i>Hello Cookies </a>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
      <ul class="navbar-nav">
             <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" 
          aria-expanded="false">
            Username
          </a>
          <ul class="dropdown-menu dropdown-menu-end mt-4">
            <li><a class="dropdown-item" href="#"><i class="bi bi-person-fill"></i> profil</a></li>
            <li><a class="dropdown-item" href="#"><i class="bi bi-gear"></i> Setting</a></li>
            <li><a class="dropdown-item" href="#"><i class="bi bi-box-arrow-in-left"></i> Logout</a></li>
          </ul>

        </li>
      </ul>
    </div>
  </div>
</nav>
<!--- End Header --->
<div class="container-lg">
   <div class="row">
    <!---SideBar--->
    <?php include"sidebar.php"?>
    <!---End SideBar--->
    <?php
    if(isset($_GET['x']) && $_GET['x']=='home'){
      include "home.php";
    }if(isset($_GET['x']) && $_GET['x']=='product'){
      include "product.php";
    }if(isset($_GET['x']) && $_GET['x']=='about'){
      include "about.php";
    }if(isset($_GET['x']) && $_GET['x']=='report'){
        include "report.php";
    }if(isset($_GET['x']) && $_GET['x']=='checkout'){
      include "checkout.php";
    }
    ?>
  </div>
   </div>
   <!--end content-->
   </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>


</html>
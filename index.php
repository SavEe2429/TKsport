<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/stu_make.css">

</head>

<body>
  <!-- -------------------------------------------- header start -------------------------------------------- -->

  <header class="p-3 text-bg-dark">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="index.html" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <img src="http://www.thaischool.in.th/_files_school/23100163/data/23100163_0_20210413-133844.png" alt=""
            width="100" height="80">
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="index.html" class="nav-link px-2 text-white">Home</a></li>
          <li><a href="#" class="nav-link px-2 text-white" onclick="show()">ข้อมูลการแข่งขัน</a>
            <div class="dropdown-hidden" id="dropdown">
              <ul class="dropdown-menu dropdown-menu-dark d-grid gap-1 p-2 rounded-3 mx-0 border-0 shadow w-220px">
                <li><a class="dropdown-item rounded-2" href="#">Action</a></li>
                <li><a class="dropdown-item rounded-2" href="#">Another action</a></li>
                <li><a class="dropdown-item rounded-2" href="#">Something else here</a></li>
              </ul>
            </div>
          </li>
          <li><a href="#" class="nav-link px-2 text-white">ผลการแข่งขัน</a></li>

          <!-- <li><a href="#" class="nav-link px-2 text-white">FAQs</a></li>
              <li><a href="#" class="nav-link px-2 text-white">About</a></li> -->
        </ul>

        <form class="col-7 col-lg-auto mb-3 mb-lg-0 me-lg-3 search" role="search">
          <input type="search" class="form-control form-control-dark text-bg-dark" placeholder="Search..."
            aria-label="Search">
        </form>



        <div class="text-end relative icon pointer ">
          <button type="button" class="btn btn-outline-light me-2 " data-bs-toggle="modal"
            data-bs-target="#exampleModalToggle"><img class="icon-change"
              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAAAsTAAALEwEAmpwYAAAA6klEQVR4nO2SvQ7BYBiFq4vJQmJRG4bubsFmcyusXERvQppOSETchMUiNiOJn43hkS85RKIt4hNLn+RdTs57Ttu3jpNhA8ADQuCoiYC6zfAdzxitYqMgVODIBGrG0oY2Co4Kuz8tUJW2t1FwUJj3q4JIYWPdw8xEWmijoAFsE45c+7rAoMMO9bkOOryd8IxEABdoAgNgDiyBk2YprS+P+0lwHugBm5g/Jwnj7ZrdV+FlYPGwuAYCoA34QEHjSwvkuWF2y2kFMxnNJ2i9+cY5oAOstDtNM19kKr4T/ghQ0u45zWQF528FGU4MV3Z+ORoPzBgyAAAAAElFTkSuQmCC"
            width="21" height="22" viewBox="0 0 21 22" fill="none" class="block"
            data-v-13416097="">
            </button>
        </div>
      </div>
    </div>
  </header>

  <!-- -------------------------------------------- header end -------------------------------------------- -->
  <!-- <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
    tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalToggleLabel">Login</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="login_result.php" method="post">
            <label for="username">
              <i class="fas fa-user "></i>
            </label>
            <input class="FillUser" type="text" name="username" placeholder="Username" id="username" required>
            <br>
            <label for="password">
              <i class="fas fa-lock"></i>
            </label>
            <input class="FillUser" type="password" name="password" placeholder="Password" id="password" required>
            <div class="modal-footer border-top-0">
          <button class="SignUp" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal"
            data-bs-dismiss="modal">Sign Up</button>
        </div>

      
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <input type="submit" class="btn btn-warning" value="Login">
        </div>
        </form>

      </div>
    </div>
  </div> -->

    <!-- -------------------------------------------- modal1 end -------------------------------------------- -->

  <!-- <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2"
    tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalToggleLabel2">Sign Up</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="login_result.php" method="post">
            <label for="username">
              <i class="fas fa-user "></i>
            </label>
            <input class="FillUser" type="text" name="username" placeholder="Username" id="username" required>
            <br>
            <label for="password">
              <i class="fas fa-lock"></i>
            </label>
            <input class="FillUser" type="password" name="password" placeholder="Password" id="password" required><br>
            <input class="FillUser space" type="password" name="password" placeholder="Confirm-Password" id="password" required>
            
            
    
        <div class="modal-footer">
          <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal"
            data-bs-dismiss="modal">Sign Up</button>
        </div>
      </div>
    </div>
  </div> -->
  <!-- -------------------------------------------- modal2 end -------------------------------------------- -->
  <?php 
  include_once('modal/modal_login.php');
  ?>


  <script src="js/stu_make.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>

</html>
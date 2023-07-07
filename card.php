<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Handlee&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="home.css">
</head>
<body>
   <div class="container">
    <header>
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand text-white">ASH98 Sports Corner</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
              <!-- <span class="navbar-toggler-icon"></span> -->
              <span><i class="fa-solid fa-bars-progress navbar-icon"></i></span> 
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link text-center  text-md-left" href="home2.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-center  text-md-left" href="#">About me</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-center  text-md-left" href="cricket.php">CRICKET</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-center  text-md-left" href="football.php">FOOTBALL</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-center  text-md-left" href="login.php">Login</a>
                </li>  
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle text-center  text-md-left" href="#" role="button" data-bs-toggle="dropdown">ASH98</a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item text-center  text-md-left" href="#">ASH About</a></li>
                    <li><a class="dropdown-item text-center  text-md-left" href="#">ASH</a></li>
                    <li><a class="dropdown-item text-center  text-md-left" href="#">ASH</a></li>
                  </ul>
                </li>
                
              </ul>
              
            </div>
          </nav>

      </header>
      <main>
      <form action="cardinsert.php" method="post" data-aos="zoom-in-down">
          <div class="w-75 m-auto">
      <div class="mb-3">    
      <h3 style="display: flex;align-items: center;justify-content: center; color:white;">fill the details</h3>  
  </div>
  <div class="mb-3">
      <span class="text-primary">Product Name:</span>
    <input type="text" class="form-control" id="username"  name="pname">
    
  </div>


  <div class="mb-3">
  <span class="text-primary">Email:</span>
    <input type="email" class="form-control" id="email" name="email">
    
  </div>

  <div class="mb-3">
  <span class="text-primary">Product Id:</span>
    <input type="phone" class="form-control" name="pid">
  </div>

  <div class="mb-3">
  <span class="text-primary">Address:</span>
    <input type="text" class="form-control" name="address">
  </div>
  
  
  <button type="submit" class=" btn btn-primary col-12" name="btn2">Submit</button>
  

  </div>
</form>
      </main>
   </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
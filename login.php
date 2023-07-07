<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="/css/btn.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <title>Log In</title>
    <style>
      .xyz{
        border-radius: 5%;
        box-shadow:2px 1px 2px black;
         background-image: url("image/wp.jpg");
         background-repeat: no-repeat;
         background-size: 100%;
         background-color:black;
      }
     
        body{
       
        background-image: url("image/hm.jpg");
             background-repeat: no-repeat;
         background-size: 100%;
         height: auto;
         background-color: rgb(18, 18, 86);

      }
    </style>
  </head>
  <body>
    
   <div class="container-fluid">
    <div class="row justify-content-center mt-5 ">
   <div class="col-lg-4 col-md-6 p-4 xyz">
    
      <form action="loginaction.php" method="post" data-aos="zoom-in-down">
      <div class="mb-4 mt-2">
      <h3 style="display: flex; align-items: center; justify-content: center; color:white; ">Log In</h3> 
      </div>
  

  <div class="mb-3">
   <span style="color:white">Email:</span> 
    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="l_email">  
  </div>
  <div class="mb-3">
  <span style="color:white">Password:</span> 
    <input type="password" class="form-control" name="l_passworld">
  </div>

  
  <div class="pb-3 pt-3">
  <button type="submit" class=" btn btn-primary col-12" name="btn2">Log In</button>
  </div>
  <p class="text-center pb-3 text-light">Have not an  accont <a href="regi.php"> Sign Up</a></p>

</form>
   
   <div class="text-center pb-4">
  <a href="home.php"><button class="btn btn-outline-info " style="width:60%;"> Leave </button></a>
  </div>

      </div>
    </div>
   </div>

   
    

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
     <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
      <script>
        AOS.init( {
          offset: 400,
          duration: 1000,
        }
         );
      </script>
  </body>
</html>
<?php
    if(isset($_POST[""]))
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
    crossorigin="anonymous">
    <title>Login</title>
    <style>
        .question, .btn{
            font-family: Arial, Helvetica, sans-serif;
        }
        .checkbox{
            color:#000;
        }
        .myform{
          background-color: #ccc;
          border-radius: 10px;
        }
    </style>
</head>
<body>
        
        <!--Form  -->
    <div class="container">
        <div class="row justify-content-center align-items-center" style="height: 100vh;">
            <div class="col-sm-10 col-md-12 col-lg-8 p-4">
            <div class="myform p-5">
                <div class="text-center text-uppercase lead">login form</div>
            <form action="#" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" placeholder="example@gmail.com" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>

  <!-- <div class="mb-3">
    <label for="tel" class="form-label">Phone</label>
    <input type="tel" class="form-control" placeholder="+255..." name="tel" id="tel">
  </div> -->

  <div class="mb-3">
    <label for="exampleInputPassword" class="form-label">Password</label>
    <input type="password" class="form-control" placeholder="******" name="Pass1" id="exampleInputPassword">
  </div>

  <!-- <div class="mb-3">
    <label for="exampleInputPassword2" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" placeholder="******" name="Pass2" id="exampleInputPassword2">
    <span class="text-danger">Password not match</span>
  </div> -->

  <div class="my-3 mx-5">
    <input type="checkbox" class="form-check-input ms-5" id="checkbox"> <label for="checkbox" class="checkbox ms-1 text-capitalize">view</label>
  </div>

  <div my-3>
    <p class="question">You dont have an account? <a href="reg.php" class="text-decoration-none link">click here to register</a></p>
  </div>

  <div class="my-3">
    <a href="#" class="text-decoration-none link"> Forget your password? </a>
  </div>
  
  <button type="submit" name="submit" class="btn btn-outline-primary text-capitalize w-100">sign in</button>
</form>
            </div>
            </div>
        </div>
    </div>
    <!-- Form End -->
  <script src="login.js"></script>  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
crossorigin="anonymous"></script>
</body>
</html>
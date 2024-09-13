<?php
include_once("mydata.php");
    if(isset($_POST["submit"]))
    {

      $name = htmlspecialchars(strip_tags($_POST['name']));

      $email = htmlspecialchars(strip_tags($_POST['email']));
      
      $tel = htmlspecialchars(strip_tags($_POST['tel']));

      $pass1 = htmlspecialchars(strip_tags($_POST['Pass1']));

      $pass2 = htmlspecialchars(strip_tags($_POST['Pass2']));

      if(strlen($pass1) && strlen($pass2) < 6){
        $shortPassAlert = "Password is too short please include atlist (6) characters!";
      }else{

      if (strcmp($pass1, $pass2 ) == 0){
          
      $toInsert = $my_obj->InsertData($name,$email, $tel, $pass1);

      if($toInsert){
        $welcome = "Congratulation dear " . "<strong>" . ucfirst($name) . "</strong>" . " your registration has been completed successful.Please make sure you are
         providing your real credentials while sign in.";
      }else{
        echo "Failed to insert new data";
      }
      }else{
        $wrongPass = "Passwords not match!";
      }
    }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
    crossorigin="anonymous">
    <title>Registration</title>
    <style>
        .checkbox{
            color:#000;
        }
        .myform{
          background-color: #ccc;
          border-radius: 10px;
        }
        .showInfo{
          display: block;
        }
    </style>
</head>
<body>
        
        <!--Form  -->
    <div class="container">
        <div class="row justify-content-center align-items-center" style="height: 100vh;">
            <div class="col-sm-10 col-md-12 col-lg-8 p-4">
            <div class="myform p-5">
                <div class="text-center text-uppercase lead">registration form</div>
            <form action="#" method="post">

            <div class="mb-3">
    <label for="name" class="form-label">User name</label>
    <input type="text" class="form-control" placeholder="Eg: Joe" name="name" id="name" required>
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" name="email" placeholder="example@gmail.com" id="exampleInputEmail1" aria-describedby="emailHelp" required>
    <div id="emailHelp" style="display: none;" class="form-text">We'll never share your email with anyone else.</div>
  </div>

  <div class="mb-3">
    <label for="tel" class="form-label">Phone</label>
    <input type="tel" class="form-control" placeholder="0712..." name="tel" id="tel" required>
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" placeholder="******" name="Pass1" id="exampleInputPassword1" required>
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword2" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" placeholder="******" name="Pass2" id="exampleInputPassword2" required>
    <span class="text-danger">
      <?php
        if(!empty($wrongPass))
        {
          echo $wrongPass . "**";
        }
        if (!empty($shortPassAlert))
        {
          echo $shortPassAlert . "**";
        }
      ?>
    </span>
  </div>

  <div class="my-3 mx-5">
    <input type="checkbox" class="form-check-input ms-5" id="checkbox"> <label for="checkbox" class="checkbox ms-1 text-capitalize">view</label>
  </div>

  <div my-3>
    <p class="question">Do you have an account? <a href="index.php" class="text-decoration-none link">Log in</a></p>
  </div>
  
  <button type="submit" name="submit" class="btn btn-outline-primary text-capitalize w-100">register</button>
</form>
          <div class="text-center my-2 bg-light text-success p-1">
            <small>
              <?php
                if (!empty($welcome))
                {
                  echo $welcome;
                }
              ?>
            </small>
          </div>
            </div>

            </div>
        </div>
    </div>
    <!-- Form End -->
  <script src="reg_index.js"></script>  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
crossorigin="anonymous"></script>
</body>
</html>
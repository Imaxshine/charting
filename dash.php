<?php
    session_start();
    if (isset($_SESSION['user_id'])){
    include_once("config.php");
    global $conn;
    global $absentUser;
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
    crossorigin="anonymous">
    <title>Users body</title>
     <style>
        .Tohide{
            display: none;
        }
        .hideLogeduser{
            display: none;
        }
     </style>
</head>
<body>
    <div class="container my-4 myprofile">
                <div class="row myrow1 p-3">
                    <div class="col-sm-12 col-md-6 mb-4 detailesContainer">
                        <!-- profile Picture -->
                         <div>
                            <p class="mx-2 text-info profileTitle">profile detailes</p>
                         </div>
                        <div>
                            <img class="profile" src="profiles/profile.jpg" alt="profile">
                        </div>
                        <!-- Name -->
                        <div>
                            <p>
                                <strong class="title text-success">Name: </strong>  <span class="lead"> <?php echo  ucfirst($_SESSION['user_name']) ?></span>
                            </p> 
                        </div>

                        <!-- Email -->
                        <div>
                            <p>
                            <strong class="title text-success">Email: </strong>  <span class="lead"> <?php echo   $_SESSION['user_email'] ?></span>
                            </p>
                        </div>

                         <!-- Mobile-Phone -->
                         <div>
                            <p>
                            <strong class="title text-success">Tel: </strong>  <span class="lead"> <?php echo "+255" .  $_SESSION['user_phone'] ?></span>
                            </p>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-6">

                        <!-- Lists -->
                         <div class="card">
                            <div class="card-header">
                                <p class="text-uppercase lead">Users list</p>
                                        
                                <!-- Searching user Kind -->
                                        <nav class="navbar bg-body-tertiary">
                                            <div class="container-fluid">
                                                <!-- <a class="navbar-brand">Navbar</a> -->
                                                <form class="d-flex" role="search" action="#" method="post">
                                                <input class="form-control me-2" type="search" name="search" placeholder="Search" aria-label="Search">
                                                <button class="btn btn-outline-success" name="submit" type="submit">Search</button>
                                                </form>
                                            </div>
                                            </nav>

                            </div>
                            <div class="card-body usersBody">
                            <div class="list-group">
                                <?php

if(isset($_POST['submit'])){
    $userKind = htmlspecialchars(strip_tags($_POST['search']));
    if($userKind == null){
        $emptInput = "Enter any name to find";
        ?>

                    <!-- emptInput -->
                    <p class="text-danger ms-4">
                                    <?php
                                      if(!empty($emptInput)){
                                            echo $emptInput;
                                            // exit();
                                        }
                                    ?>
                    </p>
    <?php
    }else{

        $find = "SELECT * FROM `users` WHERE `name` LIKE '%$userKind%' ORDER BY `name` ASC";
                $output = $conn->query($find);
                if(mysqli_num_rows($output) > 0)
                {
                while( $data = mysqli_fetch_array($output))
                {
                    $presentUser = $data['name'];
                    $presentId = $data['id'];                    
                    ?>

                    <?php
                    include_once 'encrypt.php';
                    $id = Encrypting($presentId);
                    $id2 = base64_encode($id);
                    // echo $id2;
                    ?>
                        <a href="inbox.php?chart=<?php echo $id2; ?>" class="<?php if($_SESSION['user_id'] == $presentId){echo "hideLogeduser";} ?> list-group-item list-group-item-action text-info"><?php 
                        if($_SESSION['user_name'] ==$presentUser){
                            echo "";
                        }else{
                        if(!empty($presentUser)){echo $presentUser;}
                        }
                        ?>
                    </a>
                    <!-- Tohide -->
                    <?php
                }
                echo "<small class='text-center text-success'>End of results</small>";
                    
                    // $presentUser = $data['name'];
                    
                }else{
                    $absentUser = "Sorry, the user goes by the name of {$userKind} is not available";

                }

    }

            
}

                                ?>
                                        
                                  <p class="text-danger">
                                  <?php
                                  if(!empty($absentUser))
                                  {
                                    echo $absentUser;
                                     } 
                                  ?>
                                  </p>
                                  
                                <?php
                                   $stmt = "SELECT * FROM `users` ORDER BY RAND()";
                                   $result = $conn->query($stmt);
                                   while ($row = $result->fetch_assoc()){
                                    ?>

                                    <?php
                                        include_once 'encrypt.php';
                                        $id3 = Encrypting($row['id']);
                                        $id4 = base64_encode($id3);
                                        // echo $id4;
                                    ?>
                                    <a href="inbox.php?chart=<?php echo $id4; ?>" class="<?php if($_SESSION['user_id'] == $row['id']){echo "Tohide";} ?> list-group-item list-group-item-action"> <?php  $name1 = strtolower($row['name']); echo ucfirst($name1);  ?> </a>
                                    
                                    <?php
                                   }
                                   ?>
                                </div>
                            </div>
                         </div>
                    </div>
                </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
crossorigin="anonymous"></script>
</body>
</html>
<?php
    }else{
        header('Location: index.php');
        exit();
    }
    ?>
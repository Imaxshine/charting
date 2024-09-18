<?php
error_reporting(0);
session_start();
if (!isset($_SESSION['user_id'])){
    header('Location: index.php');
    die();
}else{
include_once("config.php");

global $terminate;
// Sender ID
$sender_id = $_SESSION['user_id'];
$sender_name = $_SESSION['user_name'];
// echo $sender_id . "<br/>";

 if(isset($_GET['chart']) && !empty($_GET['chart']))
 {
    include_once('decrypt.php');
    $id = $_GET['chart'];
    // echo $id . "<br>";
    echo $_COOKIE['link-id'];
$id2 = base64_decode($id);
// Receiver ID
$receiver_id = Decrypt($id2);
// echo $receiver_id;
// Select name
$select_name = mysqli_query($conn, "SELECT `name` FROM `users` WHERE `id` = '$receiver_id'");
$result = mysqli_fetch_array($select_name);
$receiver_name = $result["name"];

 }else{
    header('Location: dash.php');
 }

// Form proccessing
if (isset($_POST["send"]))
{
    $message = htmlspecialchars(strip_tags($_POST["message"]));
    if(!empty($message)){
        // SENDING A MESSAGES
        date_default_timezone_set("Africa/Nairobi");
        $time = date('H:i:s d-m-Y l');
        $sendMessage = "INSERT INTO `messages` (`senderId`,	`receiverId`, `message`, `time`) VALUES (?, ?, ?, ?)";
        $sendMessage = $conn->prepare($sendMessage);
        $sendMessage->bind_param("iiss", $sender_id, $receiver_id, $message, $time);
        if($sendMessage->execute()){
            $popUp = "Message delivered";
        }else{
            echo "Message failed " . $sendMessage->error;
        }
    }else{
        $empty_message = "Create conversation";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Inbox</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
    crossorigin="anonymous">
</head>
<body class="bg-success" style="height: 100vh;">
    <div class="container">
        <div class="row justify-content-center align-items-center" style="height: 100vh;">
            <div class="col-sm-12 col-md-8">
                <div class="card">
                    <div class="card-header">
                        <small class="fw-bold"> Conversation with <?php $rcv_name = strtolower($receiver_name); echo ucfirst($rcv_name);  ?></small>
                    </div>
                            <div id="background-img" class="card-body message-body" style="height: 50vh;">
                                  <!-- Reading Messages -->
                                  <?php
                                    $readMessage = "SELECT * FROM `messages` WHERE (`senderId`='$sender_id' AND `receiverId`='$receiver_id') OR (`senderId`='$receiver_id' AND `receiverId`='$sender_id')";
                                    $result = $conn->query($readMessage);
                                    if($result->num_rows > 0){
                                        while($msg = $result->fetch_assoc()){
                                            $savedSenderId = $msg["senderId"];
                                             $sender_id;
                                            ?>
                                                <!-- View Messages body -->
                                           <p class="<?php if($savedSenderId == $sender_id){echo "Toright";}else{echo "Toleft";} ?> text-dark p-3  message">
                                            <?php echo $msg['message']; ?>
                                            </p>

                                      <?php 
                                        } 
                                    }
                                  ?>
                            </div>
                            <!-- form -->
                        <div class="">
                            <form action="#" method="POST">

                            <div class="text-center my-2">
                            <div class="lineOverTextarea mb-2"></div>
                            <textarea class="form-control text" placeholder="Type..." name="message" id="message"></textarea>
                                <span class="text-danger">
                                    <?php
                                    if(!empty($empty_message)){
                                        echo $empty_message . "*";
                                    }
                                    ?>
                                </span><br/>
                            <span><button class="my-4 btn btn-outline-primary" type="submit" name="send">send</button></span>
                            <button class="ms-5 btn btn-outline-primary mybtn">
                                <a class="" href="dash.php">Back</a>
                            </button>
                            </div>
                        </form>
                            </div>
                        </div>
                      </div>  
                    </div>
                </div>
            </div>
        </div>
    </div>

<script type="text/javascript">
    const userTextbody = document.querySelector('.text');
    function textBody(){
        userTextbody.style.background = "#aaa";
        userTextbody.style.height = "200px";
    }
    userTextbody.addEventListener('focus', textBody);
    // userTextbody.addEventListener('blur',()=>{
    //     userTextbody.style.background = "ghostwhite";
    //     userTextbody.style.height = "100px";
    // });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
crossorigin="anonymous"></script>
</body>
</html>
<?php } ?>
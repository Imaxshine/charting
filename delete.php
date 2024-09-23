<?php
session_start();
include_once("config.php");
global $conn;
if(!isset($_SESSION['user_id'])){
    header('Location: index.php');
    exit;
}else{
$msgId = $_GET['omit'] ? $_GET['omit'] : null;
 if (empty($msgId))
 {
  header('Location: inbox.php');
  exit;  
 }elseif(strlen($msgId) != 32){
    header('Location: index.php');
  exit;  
 }else{
    $msgidDecode = base64_decode($msgId);
    include_once('decrypt.php');
    $msgidDecrypt = Decrypt($msgidDecode);

//    CODES BLOCKS
    // Delete Message
    $stmt = "DELETE FROM `messages` WHERE `id`=?";
    $stmt = $conn->prepare($stmt);
    $stmt->bind_param("i", $msgidDecrypt);
    if($stmt->execute())
    {
        // echo $_SESSION['RECEIVER'];
        header('Location: dash.php');
        exit;
    }else{
        echo "Message not deleted " . $stmt->error;
    }
 }
}
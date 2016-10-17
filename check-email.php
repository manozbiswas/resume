<?php
require_once 'bl/include.php';

  $db = new db();
  $conn = $db->getConnection();
  
if (isset($_POST['email'])) {
  
  if($conn){
	$stmt = $conn->prepare("SELECT email From resume WHERE email=:email");
    $stmt->execute([':email' => $_POST['email']]);
    //$stmt->execute([':email' => 'mkbiitdu@gmail.c']);
    $row = $stmt->fetch();
    if ($row) {
        echo "false";
    } else {
        echo "true";
    }
  } else {
	    echo "true";
  }
  //$db->closeConnection();
  
} else {
  header("Location: index.php");
}

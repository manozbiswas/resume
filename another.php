<?php

//echo date('Y_m_d_His', time());
require_once 'bl/include.php';

 $db = new db();
    $conn = $db->getConnection();
   if($conn){
	$stmt = $conn->prepare("SELECT email From resume WHERE email=:email");
    //$stmt->execute([':email' => $_POST['email']]);
    $stmt->execute([':email' => 'mkbiitdu@gmail.com']);
    $row = $stmt->fetch();
    if ($row) {
        echo "Data found";
    } else {
        echo "Data not found";
    }
  } else {
	    echo "connection down";
  }
// $db->closeConnection();
	
	///mail ok
	/*
if(sendMail('mkbiitdu@gmail.com '))
{
	echo 'success';
} else{
		echo "sorry";
}*/
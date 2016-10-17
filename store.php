<?php
require_once 'bl/include.php';
//echo dirname(__FILE__).DIRECTORY_SEPARATOR.'bl/include.php';

if (isset($_POST) && !empty($_POST)) {

//print_r($_POST); die();
    $error = [];
    $name = sanitizeData($_POST['name']);
    $address = sanitizeData($_POST['address']);
    $email = sanitizeData($_POST['email']);
    $mobile = sanitizeData($_POST['mobile']);
    $last_certification = sanitizeData($_POST['certification']);
    $institution = sanitizeData($_POST['institution']);
    $passing_year = sanitizeData($_POST['passingYear']);
    $subject = sanitizeData($_POST['subject']);
    $result = sanitizeData($_POST['result']);
    $interest = implode(',', $_POST['interest']);
    $nature = implode(',', $_POST['nature']);
    $newFileName = '';

    if (empty($name)) {
        $error['name_error'] = "Name field can not be empty";
    }
    if (empty($email)) {
        $error['email_error'] = 'Email field can not be empty';
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error['email_error'] = "Invalid email format";
    }
    if (empty($mobile)) {
        $error['mobile_error'] = 'Mobile field can not be empty';
    }
    if (empty($last_certification)) {
        $error['last_certification_error'] = 'Last certification field can not be empty';
    }
    if (empty($institution)) {
        $error['institution_error'] = 'Institution field can not be empty';
    }
    if (empty($passing_year)) {
        $error['passing_error'] = 'Passing year field can not be empty';
    }
    if (empty($subject)) {
        $error['subject_error'] = 'Subject field can not be empty';
    }
    if (empty($subject)) {
        $error['subject_error'] = 'Subject field can not be empty';
    }
    if (empty($result)) {
        $error['result_error'] = 'Result field can not be empty';
    }
    if (empty($interest)) {
        $error['interest_error'] = 'Please select at least 1 area of interest';
    }
    if (empty($nature)) {
        $error['nature_error'] = 'Please select at least 1 type of job nature';
    }

    if ($_FILES['cvFile']['name']) {
        //if no errors...
        if (!$_FILES['cvFile']['error']) {
            $allowedExts = ["pdf", "doc", "docx"];
            //now is the time to modify the future file name and validate the file
            $ext = pathinfo($_FILES['cvFile']['name'], PATHINFO_EXTENSION);
            $newFileName = preg_replace('/\s+/', '', $name) . '_cv_' . time() . '.' . $ext; //rename file
            if (
                ($_FILES["cvFile"]["type"] != "application/pdf")
                && ($_FILES["cvFile"]["type"] != "application/msword")
                && ($_FILES["cvFile"]["type"] != "application/vnd.openxmlformats-officedocument.wordprocessingml.document")
                && !in_array($ext, $allowedExts)
            ) {
                $error['file_type'] = 'Oops! the uploaded file type is not valid.';
            }
            if ($_FILES['cvFile']['size'] > (10240000)) //can't be larger than 1 MB
            {
                $error['file_size'] = 'Oops! the uploaded file size is to large.';
            }
            $hasFile = true;
        } //if there is an error...
        else {
            //set that to be the returned message
            $error['file_error'] = 'Oops!  The file upload triggered the following error:  ' . $_FILES['cvFile']['error'];
        }
    }
	
	 $db = new db();
     $conn = $db->getConnection();
	 if(!$conn){
		 $error['connection_error'] = "Sorry our server is not responding at this moment try again later";
	 }
	
//if no error then save the value
    if (empty($error)) {
        $uploads_dir = realpath(dirname(__FILE__)) . '/resume';
        move_uploaded_file($_FILES['cvFile']['tmp_name'], "$uploads_dir/$newFileName");
       
        $stmt = $conn->prepare("INSERT INTO resume(name, address, email, mobile, last_certification, institution, passing_year,
subject, result, interest, nature, cv_url) VALUES (:name, :address, :email, :mobile, :last_certification, :institution, :passing_year,
:subject, :result, :interest, :nature, :cv_url)");
        try {
            $isAdded = $stmt->execute([
                ':name' => $name,
                ':address' => $address,
                ':email' => $email,
                ':mobile' => $mobile,
                ':last_certification' => $last_certification,
                ':institution' => $institution,
                ':passing_year' => $passing_year,
                ':subject' => $subject,
                ':result' => $result,
                ':interest' => $interest,
                ':nature' => $nature,
                ':cv_url' => $newFileName,
            ]);
            $db->closeConnection();
            if ($isAdded) {
                //$isSend = sendMailSmtp($email);
                $isSend = sendMail($email);
//                $msg = "Your information has been saved";
//                if ($isSend) {
//                    $msg .= "</br>Please check your email for further information";
//                } else {
////                    $msg .= "</br>Sorry something went wrong we can not send email now";
//                }
                header("Location:index.php?msg=success");
                exit;
            }
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    } else {
        session_start();
        $_SESSION['errror'] = $error;
        foreach ($error as $er) {
         echo $er;
        }
        header("Location:index.php?msg=error");
        exit;
    }
} else {
    //if it is not a post request then go to the index page
    header("Location: index.php");
    /* Make sure that code below does not get executed when we redirect. */
    exit;
}

<?php
if(isset($_POST['submit'])){
  date_default_timezone_set('Asia/Kolkata');
  $date = date('d/m/y h:i A');
  $filename = "../last_modified.txt";
  $file_contents = $date ." SIGNUP " . $_POST['email'] . "\n";
    $exam_number = $_POST['exam_number'];
    $new_user = array(
        "name" => $_POST['name'],
        "roll" => strtoupper($_POST['roll']),
        "dept" => $_POST['dept'],
        "age" => $_POST['age'],
        "phone" => $_POST['phone'],
        "gender" => $_POST['gender'],
        "email" => $_POST['email'],
        "password" => $_POST['password'],
        "joined_at" => $date
    );
    if(filesize("./storage/user.json") == 0){
        $first_record = array($exam_number => array($new_user));
        $data_to_save = $first_record;
    }else{
        $old_records = json_decode(file_get_contents("./storage/user.json"), true);
        if(isset($old_records[$exam_number])){
            $error = "User with Exam Number $exam_number already exists!";
        }else{
            $old_records[$exam_number] = array($new_user);
            $data_to_save = $old_records;
        }
    }
    if(!isset($error)){
        if(!file_put_contents("./storage/user.json", json_encode($data_to_save, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE), LOCK_EX)){
            $error = "Error, Contact admin";
        }else{
            $success =  "Signup Successful";
        }
    }
}
?>

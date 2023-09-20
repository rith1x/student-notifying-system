<?php 
if(isset($_POST['submit'])){
    date_default_timezone_set('Asia/Kolkata');
    $date = date('d/m/y h:i A');
    $filename = "../last_modified.txt";
    $file_contents = $date ." NOTIFY " . $_POST['email'] . "\n";
    $new_message = array(
        "email" => $_POST['email'],
        "staff" => $_POST['staff'],
        "subject" => $_POST['subject'],
        "message" => $_POST['message'],
        "time" => $date
    );
    if(filesize("../storage/messages.json") == 0){
        $first_record = array($new_message);
        $data_to_save = $first_record; 
    }else{
        $old_records = json_decode(file_get_contents("../storage/messages.json"));
        array_push($old_records, $new_message);
        $data_to_save = $old_records;
    }
    if(!file_put_contents("../storage/messages.json", json_encode($data_to_save, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE), LOCK_EX)){
        $error = "Error broadcasting message, please try again";
    }else{
		
      $success =  "Sent Successfully";
$name = $_POST['name'];
    // Send notification to all subscribers
    $content = array(
        "en" => $name . " posted a new notification."
    );
    $fields = array(
        'app_id' => '1398208d-baf9-4404-a198-1c89b9dcd14c',
        'included_segments' => array('All'),
        'contents' => $content,
    );
    $fields = json_encode($fields);

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://onesignal.com/api/v1/notifications');
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json; charset=utf-8',
        'Authorization: Basic MWM5NTliZjYtOTJiZS00M2RkLTkzYTItNWRhMzc5ZGQ1NWMx'
    ));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

    $result = curl_exec($ch);
    curl_close($ch);
		}
	}
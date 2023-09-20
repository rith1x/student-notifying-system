<?php
// Get the current date and time in the required format
date_default_timezone_set('Asia/Kolkata');
$date = date('d-m-Y h i A');
$array_name = $_POST['head'];

// Initialize an empty array to store the checkbox values
$checkbox_values = array();

// Loop through each checkbox and get its value
for ($i = 0; $i <= 65; $i++) {
  $checkbox_name = 'stu'.$i;
  
  // If the checkbox is checked, set its value to "Present", otherwise set it to "Absent"
  if (isset($_POST[$checkbox_name])) {
    $checkbox_values[$checkbox_name] = 'Present';
  } else {
    $checkbox_values[$checkbox_name] = 'Absent';
  }
}

// Read the existing data from the JSON file
$attendance_data = json_decode(file_get_contents('../storage/attendance.json'), true);

// Add the new array to the attendance data
$attendance_data[$array_name] = $checkbox_values;

// Convert the attendance data to JSON and store it in the file
$json_data = json_encode($attendance_data, JSON_PRETTY_PRINT);
file_put_contents('../storage/attendance.json', $json_data);

header('Location: attendance.php');
?>
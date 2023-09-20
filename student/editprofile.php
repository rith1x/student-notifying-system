<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $curr_user = $_SESSION['user'];
    $name = $_POST['name'];
    $dept = $_POST['dept'];
    $age = $_POST['age'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $data = json_decode(file_get_contents('storage/user.json'), true);
    $user_info = $data[$curr_user][0];
    $user_info['name'] = $name;
    $user_info['dept'] = $dept;
    $user_info['age'] = $age;
    $user_info['phone'] = $phone;
    $user_info['gender'] = $gender;
    $user_info['email'] = $email;
    $user_info['password'] = $password;

    $data[$curr_user][0] = $user_info;

    $json_data = json_encode($data);
    file_put_contents('storage/user.json', $json_data);

    $_SESSION['user'] = $user_info;

    header('Location: profile.html');
    exit();
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Profile</title>
</head>
<body>
    <h1>Edit Profile</h1>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" value="<?php echo $_SESSION['user']['name']; ?>"><br>
        <label for="dept">Department:</label><br>
        <input type="text" id="dept" name="dept" value="<?php echo $_SESSION['user']['dept']; ?>"><br>
        <label for="age">Age:</label><br>
        <input type="number" id="age" name="age" value="<?php echo $_SESSION['user']['age']; ?>"><br>
        <label for="phone">Phone:</label><br>
        <input type="tel" id="phone" name="phone" value="<?php echo $_SESSION['user']['phone']; ?>"><br>
        <label for="gender">Gender:</label><br>
        <input type="radio" id="male" name="gender" value="male" <?php if ($_SESSION['user']['gender'] == 'male') {echo "checked";} ?>>
        <label for="male">Male</label><br>
        <input type="radio" id="female" name="gender" value="female" <?php if ($_SESSION['user']['gender'] == 'female') {echo "checked";} ?>>
        <label for="female">Female</label><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" value="<?php echo $_SESSION['user']['email']; ?>"><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" value="<?php echo $_SESSION['user']['password']; ?>"><br><br>
        <input type="submit" value="Save Changes">
    </form>
    <script>
        const curr_user = localStorage.getItem('curr_user');
        const emailInput = document.getElementById('email');
        emailInput.value
const emailValue = emailInput.value;
localStorage.clear();
localStorage.setItem('email', emailValue);

// Retrieve the current user ID from PHP session
<?php
    session_start();
    $curr_user = $_SESSION['user'];
    $data = json_decode(file_get_contents('storage/user.json'), true);
    $user_data = null;
    foreach ($data as $user_id => $user_info) {
        if ($user_id == $curr_user) {
            $user_data = $user_info[0];
            break;
        }
    }
?>

// Populate the form fields with the user data
document.getElementById('name').value = '<?php echo $user_data["name"]; ?>';
document.getElementById('dept').value = '<?php echo $user_data["dept"]; ?>';
document.getElementById('age').value = '<?php echo $user_data["age"]; ?>';
document.getElementById('phone').value = '<?php echo $user_data["phone"]; ?>';
document.getElementById('gender').value = '<?php echo $user_data["gender"]; ?>';
document.getElementById('email').value = '<?php echo $user_data["email"]; ?>';
document.getElementById('password').value = '<?php echo $user_data["password"]; ?>';

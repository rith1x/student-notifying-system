<?php require("../process/process-signup-admin.php") ?>
<!DOCTYPE html>
<html>
<head>
    <meta name="theme-color" content="#6216a0"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Admin</title>
</head>
<body>
    
    <?php if(isset($_GET['error'])): ?>
        <p style="color:red"><?php echo $_GET['error']; ?></p>
    <?php endif; ?>
    <div class="container">
        <div class="wrapper">
            <div class="title"><span>Admin Signup Form</span></div>
    <form action="" method="post">
        <div class="row">
            <label for="name">Name:</label><br>
            <input type="text" name="name" id="name" required>
        </div>

        <div class="row">
            <label for="name">Department:</label><br>
            <input type="text" name="dept" id="dept" required>
        </div>
<div class="row">
            <label for="name">Designation:</label><br>
            <input type="text" name="desg" id="desg" placeholder="Example: Lecturer" required>
        </div>
        <div class="row">
            <label for="age">Age:</label><br>
            <input type="number" name="age" id="age" required>
        </div>

        <div class="row">
            <label for="phone">Phone :</label><br>
            <input type="number" name="phone" id="phone" required>
        </div>

        <div class="row">
            <label for="email">Email:</label><br>
            <input type="email" name="email" id="email" placeholder="This will be used for signin purposes" required>
        </div>

<!--         <div class="row">
            <label for="exam_number">Exam Number:</label><br>
            <input type="number" name="exam_number" id="exam_number" required>
        </div> -->

        <div class="row">
            <label for="password">Password:</label><br>
            <input type="password" name="password" id="password" required>
        </div>

        <div class="row button">
            <input type="submit" id="submit" name="submit" value="Submit">
        </div>





        <div class="signup-link">Already a Admin? <a href="../index.php">Signin here</a></div>
    </form>
</div>
</div>
    <style>
        @font-face {
    font-family: sams;
    src: url(../fonts/font.ttf);
}
        
        *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family:sams;
}
body{
  background: #fff;
  overflow: auto;
}
::selection{
  background: #1abc9c4d;
}
.container{
  max-width: 440px;
  padding: 0 15px;
  margin: 170px auto;
}
.wrapper{
  width: 100%;
  background: #fff;
  border-radius: 11px;
  box-shadow: 0px 4px 15px 1px #33333350;
}
.wrapper .title{
  height: 90px;
  background: radial-gradient(ellipse farthest-corner at right bottom, #FEDB37 0%, #FDB931 8%, #9f7928 30%, #8A6E2F 40%, transparent 80%),
                radial-gradient(ellipse farthest-corner at left top, #FFFFFF 0%, #FFFFAC 8%, #D1B464 25%, #5d4a1f 62.5%, #5d4a1f 100%);
  border-radius: 5px 5px 0 0;
  color: #fff;
  font-size: 30px;
  font-weight: 600;
  display: flex;
  align-items: center;
  justify-content: center;
}
.wrapper form{
  padding: 30px 25px 25px 25px;
}
.wrapper form .row{
  height: 45px;
  margin-bottom: 25px;

  position: relative;
}
.wrapper form .row label{
    padding-bottom: 5px;
}
.wrapper form .row input{
  height: 40px;
  width: 100%;
  outline: none;
  padding-left: 10px;
  border-radius: 5px;
  border: 1px solid lightgrey;
  font-size: 16px;
  transition: border 0.3s ease;
}
form .row input:focus{
  border: solid 2px #16a085;
  
}
form .row input::placeholder{
  color: #999;
}


.wrapper form .button input{
  color: #fff;
  font-size: 20px;
  font-weight: 500;
  padding-left: 0px;
  background: radial-gradient(ellipse farthest-corner at right bottom, #FEDB37 0%, #FDB931 8%, #9f7928 30%, #8A6E2F 40%, transparent 80%),
                radial-gradient(ellipse farthest-corner at left top, #FFFFFF 0%, #FFFFAC 8%, #D1B464 25%, #5d4a1f 62.5%, #5d4a1f 100%);
  border: 1px solid #16a085;
  cursor: pointer;
}
form .button input:hover{
  background:radial-gradient(ellipse farthest-corner at right bottom, #FEDB37 0%, #FDB931 10%, #9f7928 35%, #8A6E2F 45%, transparent 89%),
                radial-gradient(ellipse farthest-corner at left top, #FFFFFF 0%, #FFFFAC 10%, #D1B464 30%, #5d4a1f 68.5%, #5d4a1f 100%);
}
.wrapper form .signup-link{
  text-align: center;
  margin-top: 20px;
  font-size: 17px;
}
.wrapper form .signup-link a{
  color: #16a085;
  text-decoration: none;
}
form .signup-link a:hover{
  text-decoration: underline;
}
@media only screen and (max-width: 768px) {
  .container{
      margin: 15px 0;
  }
    
}
    </style>
</body>
</html>

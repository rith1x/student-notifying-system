<?php require("../process/process-notify.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="../img/staff.png" type="image/x-icon">
  <meta name="theme-color" content="#6216a0"/>
  <link rel="icon" href="../img/notify.png">
    <script src="https://kit.fontawesome.com/2f69883659.js" crossorigin="anonymous"></script>
  <script src="../script/installer.js" defer></script>
  
	<title>Student Notifying System</title>
</head>
<body>
<div id="install-banner">
  <div class="app-logo">
    <img src="../img/icon.png" alt="Your App Name">
  </div>
  <div class="app-info">
    <div class="app-name">SNS 📚</div>
    <div class="app-description">Education • 4.8★</div>
  </div>
  <div class="install-button" id="install-btn">get</div>
</div>

  
    <div class="container">
        <div class="wrapper">
            <div class="title">
                <span>Notifier</span>
              </div>
<form action="" method="post">
		<h3>Notification System</h3>



<label for="staff" >Staff Name</label>

<input type="text" name="staff" class="staff" id="name" readonly>

    
		<label>Enter your email</label>
		<input type="email" name="email" id="email"  value="@kiot.ac.in" readonly>

		<label>Enter a subject</label>
		<input type="text" name="subject" value="">

		<label>Enter your message</label>
		<textarea name="message"></textarea>

		<input type="submit" name="submit" value="Broadcast Message">

		<p class="error"><?php echo @$error; ?></p>
		<p class="success"><?php echo @$success; ?></p>
	</form>

          
    </div>
    </div>
    
  
<div class="act">
   <a href="admin-more.html"class="link">
      <i class="fa-solid fa-bars"></i>
      <p class="ltxt" style="font-size:11px;text-transform:uppercase;font-family:sans-serif">More</p>
   </a>
   <a href="#" id="active"  class="link">
      <i class="fa-solid fa-bell"></i>
      <p class="ltxt" style="font-size:11px;text-transform:uppercase;font-family:sans-serif">Alerts</p>
   </a>
   <a href="courses.php" class="link">
      <i class="fa-solid fa-book"></i>
      <p class="ltxt" style="font-size:11px;text-transform:uppercase;font-family:sans-serif">Courses</p>
   </a>
   <a href="events.php" class="link">
      <i class="fa-solid fa-calendar-day"></i>
      <p class="ltxt" style="font-size:11px;text-transform:uppercase;font-family:sans-serif">Events</p>
   </a>
   <a href="profile.php" class="link">
      <i class="fa-solid fa-user"></i>
      <p class="ltxt" style="font-size:11px;text-transform:uppercase;font-family:sans-serif">Profile</p>
   </a>
</div>
	
    <style>


      
@font-face {
    font-family: sams;
    src: url(../fonts/font.ttf);
  }

   
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: sams;
  }

  body {
    background: #fff;
    overflow: auto;
  }

  .container {
    max-width: 440px;
    padding: 0 20px;
    margin: 20px auto;
  }

  .wrapper {
    width: 100%;
    overflow: hidden;
    background: #fff;
   
    border-radius: 21px;
    box-shadow: 0px 4px 15px 1px #33333350;
  }
  .wrapper .title {
    height: 90px;
    background: #6216a0;
/*     border-radius: 21px; */
    color: #fff;
    font-size: 30px;
    font-weight: 600;
    display: flex;
    align-items: center;
    justify-content: center;
  }
 #install-banner {
  background-color: #f5f5f540;
  padding: 16px;
  backdrop-filter: blur(40px);
  display: none;
  align-items: center;
  justify-content: space-between;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.25);
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  z-index: 9999;
}

.app-logo img {
  width: 48px;
  height: 48px;
background: #fff;

  border-radius: 5px;
  margin-right: 16px;
}

.app-info {
  flex-grow: 1;
}

.app-name {
  font-size: 18px;
  font-weight: bold;
}

.app-description {
  font-size: 14px;
  color: #888;
}

.install-button {
  background-color: #f5f5f5;
  color: #007bff;
  padding: 6px 18px;
  border-radius: 40px;
  cursor: pointer;
  transition: all 0.4s ease-in-out;
text-transform: uppercase;
box-shadow: 0 0 5px -2px #aaaaaa80;
  font-size: 18px;
  text-align: center;
}

.install-button:hover {
  background-color: #007bff;
  color: #fff;
}

hr{
  border: 0;
    height: 0;
    border-top: 1px solid rgba(0, 0, 0, 0.1);
}


.staff{
  padding: 15px;
	margin-bottom: 30px;
	font-size: 18px;
  background: transparent;
	border-radius: 10px;
  color: #000;
	border: solid 1px #000;
  
}
h1{
  padding-block: 5px;
  padding-inline: 20px;
  margin-top: 10px;
  inset: 0;
  color: #000;
  border-radius: 40px;
  width: fit-content;
  margin-inline: auto;
	font-size: 30px;
 
  border: none;
}

form{
  width: 100%;
	margin: 0 auto;
	position: relative;
	
	background-color: transparent;
	padding: 25px;
	border-radius: 10px;
	  
	display: flex;
	flex-direction: column;
  	border: none;
}

form h3{
	margin-bottom: 40px;
	border-bottom: thin solid #d4d4d4;
	padding-bottom: 10px;
}

form input, form textarea{
	padding: 15px;
	margin-bottom: 30px;
  background: transparent ;
  color: #000;
	font-size: 18px;
	border-radius: 10px;
 	border: solid 1px #000;
}

form label{
	display: inline-block;
	padding-bottom: 10px;
	padding-left: 7px;
}

form textarea{
	min-height: 150px;
	padding: 10px;
}

form input[type=submit]{
	cursor: pointer;
  color: #fff;
  border: none;
	transition: background-color 0.3s ease-in-out;
	background-color: #6216a0;
}


form input:focus,
form textarea:focus,
.staff{
	outline: none;
}

.success{
	color: #006716;
 
}

.error{
	color: #660000;
}
 ::-webkit-scrollbar{
            height: 20px;
            border-radius: 0.5vw;
            margin: 0 0.5vw 0 0.5vw;
        }
        ::-webkit-scrollbar-track{
            background: transparent;
            
        }
        ::-webkit-scrollbar-thumb{
            background: #43655a;
            border-radius: 15px;
            width: 20px;
        }


    .act{
            max-width: 500px;
            margin: 0 auto;
            height: 60px;
            z-index: 2;
            bottom: 0px;
            left: 0;
    box-shadow: 0 0 7px #94949480;
          
            right: 0;
            position: fixed;
            background-color: #fff;
            display: flex;
            justify-content: space-evenly;
        }
        .act a{
            text-decoration: none;
            height: 100%;
            color: #999;
            width: 25%;
            display: flex;
            padding-block: 9px;
            flex-direction: column;
            justify-content: space-between;
            font-size: 20px;
            text-align: center;
        }
        #active{
            color: #6216a0;
            background-color: #00000010;
        }
    </style>
   <script>
    const emailFill = document.getElementById('email');
    const nameFill = document.getElementById('name');
    emailFill.value = localStorage.getItem('email');
    nameFill.value = localStorage.getItem('name');
    
  </script>
</body>
</html>
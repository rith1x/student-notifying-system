
    

<html>
<head>
  
	<title id="titname">Welcome</title>
	    <link rel="shortcut icon" href="../img/staff.png" type="image/x-icon">
  <script src="https://kit.fontawesome.com/2f69883659.js" crossorigin="anonymous"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="../script/installer.js" defer></script>
  
  <meta name="theme-color" content="#6216a0" />
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

<div class="cover">
      <img src="../img/covera.svg" alt="">
    </div>
    <div class="imgbox">
      <img src="../img/staff.png" alt="" >
    </div>
    <div class="cont">
		<h1>Welcome <br><span id="name"></span>!</h1>
      <hr>
   <table>
         <tbody>
          <tr>
            <td><p>Department</p></td>
            <td><span id="dept"></span></td>
          </tr>
        
       
          <tr>
            <td><p>Designation</p></td>
            <td><span id="desg"></span></td>
          </tr>
          <tr>
            <td><p>Age</p></td>
            <td><span id="age"></span></td>
          </tr>
          <tr>
            <td><p>Phone No</p></td>
            <td><span id="phone"></span></td>
          </tr>
          <tr>
            <td><p>Email</p></td>
            <td><span id="email"></span></td>
          </tr>
          <tr>
            <td><p>Joined At</p></td>
            <td><span id="join"></span></td>
          </tr>
          
        </tbody>
        </table>
  <div class="btnss">


<!-- HTML form with "Delete Account" button -->
<!-- <form method="post">
    <input type="submit" name="delete" value="Delete Account">
</form>

          
            <button class="edit" disabled>Edit Profile</button>


 -->



    
            <button class="logt" onclick="clearAndForward()">Logout</button>
          
        </div>
      
    </div>



    

	</div>

    <div class="act">
   <a href="admin-more.html" class="link">
      <i class="fa-solid fa-bars"></i>
      <p class="ltxt" style="font-size:11px;text-transform:uppercase;font-family:sans-serif">More</p>
   </a>
   <a href="notify.php" class="link">
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
   <a href="#" id="active" class="link">
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
    -webkit-tap-highlight-color: transparent;
    
  }

  body {
    background: #fff;
    overflow: auto;
  }


    .cover img{
      max-width: 500px;
      height: auto;
      z-index: index; -2;
      filter: blur(5px);
      animation: move 10s ease-in-out infinite;
    }
    @keyframes move {
 0%{
   margin-top: 0;
transform: scale(1.0);
 }
   50%{
     margin-top: -100px;
     transform: scale(1.2);
   }   
       100%{
   margin-top: 0;
         transform: scale(1.0);
 }
    } 
    .cover{
      height: 150px;
      overflow: hidden;
      width: 100%;
      z-index: -2;
    }
      .btnss{
        width: 100%;
        justify-content: space-between;
        display: flex;
        
      }
     button{
       width: 50%;
       height: 40px;
       margin: 10px;
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
.logt{

  background-color: #ff5757;
  border: 1px solid rgba(27, 31, 35, .15);
  border-radius: 6px;
  color: #fff;
  cursor: pointer;
  display: inline-block;
  
  font-size: 14px;
  font-weight: 600;
  line-height: 20px;
  padding: 6px 16px;
  position: relative;
  text-align: center;
  vertical-align: middle;

}
.edit{
  background-color: #267dff;
  border: 1px solid rgba(27, 31, 35, .15);
  border-radius: 6px;
  color: #fff;
  cursor: pointer;
  display: inline-block;
  
  font-size: 14px;
  font-weight: 600;
  line-height: 20px;
  padding: 6px 16px;
  position: relative;
  text-align: center;
  vertical-align: middle;
}

    
      hr{
  border: 0;
    height: 0;
    
    border-top: 1px solid rgba(255, 255, 255, 0.1);
}

.cont{
  padding: 15px;
}
.container{
    max-width: 500px;
	margin: 0 auto;
	top: 50px;
  height: 100%;
	color: #000;
  background: #fff ;
  margin-bottom: 50px;
    box-shadow: 0 0 7px #94949480;
}


table{
  width: 100%;
  padding: 10px;
}
p{
  color: #000;
  text-transform: uppercase;
  font-size: 12px;
  padding-right: 10px;

}
span:not(#name){
  color: #707070;
  font-size: 12px;
  text-transform: none;
  
}
span#dept{
  text-transform: uppercase;
}

    
.imgbox{
  width: 100px;
  height: 100px;
  margin: 0 auto;
  margin-top: -52px;
  z-index: 10;
  background: #fff;
  border-radius: 50px;
  border: solid 2px #fff;
  position: relative;
}
.imgbox img{
  width: 90%;
  height: 90%;
  margin: 5%;
      border-radius: 50%;
  
}


.container{
    max-width: 500px;
	margin: 0 auto;
	top: 50px;
	color: #000;

  margin-bottom: 50px;
    
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

    function clearAndForward() {
  localStorage.clear();
  window.location.href = "../index.php";
}
      // localStorage.clear();
function storeUser() {
  const currentUser = localStorage.getItem('email');
fetch('../storage/admins.json')
  .then(response => response.json())
  .then(userData => {
    const userArray = userData[currentUser];
    userArray.forEach(user => {


      localStorage.setItem('name', user.name);
      localStorage.setItem('dept', user.dept);
      localStorage.setItem('desg', user.designation);
      
      localStorage.setItem('age', user.age);
      
      localStorage.setItem('phone', user.phone);
      localStorage.setItem('uemail', user.email);
      localStorage.setItem('joined_at', user.joined_at);

      const currentPath = window.location.href;
localStorage.setItem("path", currentPath);
      
      console.log(`Name: ${user.name}`);
      console.log(`Department: ${user.dept}`);
      console.log(`Age: ${user.age}`);
      console.log(`Phone: ${user.phone}`);
      console.log(`Email: ${user.uemail}`);
      console.log(`Joined At: ${user.joined_at}`);
    });
  })
  .catch(error => console.error(error));

const nameElement = document.getElementById('name');
const deptElement = document.getElementById('dept');
const ageElement = document.getElementById('age');
const phoneElement = document.getElementById('phone');
  
const emailElement = document.getElementById('email');
const joinedAt = document.getElementById('join');
const desg = document.getElementById('desg');
const titName = document.getElementById('titname');
const theName = localStorage.getItem('name');
const welMsg = "Welcome ";
const titMod = welMsg + theName + "!";
titName.textContent = titMod;
nameElement.textContent = localStorage.getItem('name');
deptElement.textContent = localStorage.getItem('dept');
ageElement.textContent = localStorage.getItem('age');
phoneElement.textContent = localStorage.getItem('phone');
emailElement.textContent = localStorage.getItem('uemail');
joinedAt.textContent = localStorage.getItem('joined_at');
desg.textContent = localStorage.getItem('desg');


}

window.onload = function() {
  storeUser();
  setInterval(storeUser, 1000);
  setInterval(reloadStoreUser, 5000);
};

function reloadStoreUser() {
  storeUser();
}
  </script>
</body>
</html>

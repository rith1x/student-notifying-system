


  const currentUser = localStorage.getItem('email');
  fetch('../storage/user.json')
  .then(response => response.json())
  .then(userData => {
  const userArray = userData[currentUser];
  userArray.forEach(user => {
    
    localStorage.setItem('name', user.name);
    localStorage.setItem('dept', user.dept);
    localStorage.setItem('roll', user.roll);
    localStorage.setItem('age', user.age);
    localStorage.setItem('phone', user.phone);
    localStorage.setItem('gender', user.gender);
    localStorage.setItem('uemail', user.email);
    localStorage.setItem('joined_at', user.joined_at);
    localStorage.setItem('password', user.password);
    
    });
  })
  .catch(error => console.error(error));

document.addEventListener("DOMContentLoaded", function() {
  
const nameElement = document.getElementById('name');
const deptElement = document.getElementById('dept');
const ageElement = document.getElementById('age');
const phoneElement = document.getElementById('phone');
const gender = document.getElementById('gender');
const emailElement = document.getElementById('email');
const joinedAt = document.getElementById('join');
const univNo = document.getElementById('unno');
const rollNo = document.getElementById('roll');
  
const genimg = document.getElementById('genimg');
const gendex = localStorage.getItem('gender');
const titName = document.getElementById('titname');
const theName = localStorage.getItem('name');
const welMsg = "Welcome ";
const titMod = welMsg + theName + "!";
const currentPath = window.location.href;
localStorage.setItem("path", currentPath);
titName.textContent = titMod;
nameElement.textContent = localStorage.getItem('name');
deptElement.textContent = localStorage.getItem('dept');
ageElement.textContent = localStorage.getItem('age');
phoneElement.textContent = localStorage.getItem('phone');
emailElement.textContent = localStorage.getItem('uemail');
joinedAt.textContent = localStorage.getItem('joined_at');
univNo.textContent = localStorage.getItem('email');
rollNo.textContent = localStorage.getItem('roll');
  
  
if (gendex === 'male') {
  genimg.src = '../img/male.png';
} else if (gendex === 'female') {
  genimg.src = '../img/female.png';
}
const baseUrl = 'https://chart.googleapis.com/chart?cht=qr&chs=512x512&chl=';
const qrname = localStorage.getItem('name');
const qrdept = localStorage.getItem('dept');
const qrmail = localStorage.getItem('uemail');
const qrunno = localStorage.getItem('email');
const url = baseUrl + qrname + '+' + qrunno + '+' + qrdept + '+' + qrmail;
const qrCodeImg = document.getElementById('qr-code-img');
qrCodeImg.src = url ;

    });
  window.addEventListener("load", function() {
  var loader = document.getElementById("loader");
  loader.classList.remove("is-active");
});



function clearAndForward() {
localStorage.clear();
window.location.href = "../index.php";
}

if (!sessionStorage.getItem('pageRefreshed')) {
  setTimeout(function() {
    location.reload();
    sessionStorage.setItem('pageRefreshed', true);
  }, 100);
}

const baseUrlx = 'https://barcode.tec-it.com/barcode.ashx?data=';
const barcodeValue = localStorage.getItem('roll');
const url = baseUrlx + barcodeValue + '&code=Code128&dpi=96';

const barcodeImg = document.getElementById('bar-img');
barcodeImg.src = url;

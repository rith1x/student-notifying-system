



function fetchMessages() {
  fetch("../storage/messages.json")
    .then(response => response.json())
    .then(data => {
      messages = data;
      displayMessages();
    });
}

function displayMessages() {
  var messagesDiv = document.getElementById("messages");
  messagesDiv.innerHTML = ""; 

  for (var i = 0; i < messages.length; i++) {
    var message = messages[i];
    
    var messageDiv = document.createElement("div");
    messageDiv.className = "message";

    var container = document.createElement("div");
    container.className = "profile-container"; 
    




    var profile = document.createElement("i");
    profile.className = 'fa-solid fa-user ';
    profile.id = 'profile-icon';
    profile.style.paddingLeft = '8px';
    profile.style.paddingRight = '6px';
    profile.style.fontSize = '13px';

    container.appendChild(profile); 

    var nameHeader = document.createElement("h2");
    nameHeader.textContent = message.staff;
    nameHeader.className = 'profile-name';
    container.appendChild(nameHeader);




    var timeSpan = document.createElement("span");
    timeSpan.textContent = message.time;
    container.appendChild(timeSpan);
    messageDiv.appendChild(container); 
    messagesDiv.appendChild(messageDiv);

    var hrule = document.createElement("hr");
    messageDiv.appendChild(hrule)

    var subjectParagraph = document.createElement("p");
    subjectParagraph.textContent = message.subject;
    subjectParagraph.className = 'subject';
    messageDiv.appendChild(subjectParagraph);

    var messageParagraph = document.createElement("p");
    messageParagraph.textContent = message.message;
    messageParagraph.className = 'msgtxt';
    messageDiv.appendChild(messageParagraph);

   
  }
}
window.onload = function() {
  fetchMessages();
  setInterval(fetchMessages, 1000); 
};








function fetchMessages() {
  fetch("../storage/courses.json")
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
    nameHeader.textContent = message.name + " shared";
    nameHeader.className = 'profile-name';
    container.appendChild(nameHeader);
      
    var timeSpan = document.createElement("span");
    timeSpan.textContent = message.time;
    container.appendChild(timeSpan);
    messageDiv.appendChild(container); 
    messagesDiv.appendChild(messageDiv);

    var hrule = document.createElement("hr");
    messageDiv.appendChild(hrule)

    var EventTitle = document.createElement("p");
    EventTitle.textContent = message.title;
    EventTitle.className = 'ETitle';
    messageDiv.appendChild(EventTitle);

    var EventDetail = document.createElement("p");
    EventDetail.textContent = message.details;
    EventDetail.className = 'EDetails';
    messageDiv.appendChild(EventDetail);   

    var EventDate = document.createElement("p");
    EventDate.textContent = message.date;
    EventDate.className = 'EDate';
    messageDiv.appendChild(EventDate);   
    

      
    var EventLink = document.createElement("p");
EventLink.textContent = message.link;
EventLink.className = "ELink";
messageDiv.appendChild(EventLink);
  }
}
window.onload = function() {
  fetchMessages();
  setInterval(fetchMessages, 1000); 
};




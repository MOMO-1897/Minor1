function toggleMenu(){
  var menu= document.querySelector('.hamburger-menu')
  menu.classList.toggle('active');
}


function toggleDropdown() {
  var dropdownContent = document.getElementById("myDropdown");
  dropdownContent.style.display = dropdownContent.style.display === "block" ? "none" : "block";
}


function validateForm() {
  var emailInput = document.getElementById("email");
  var email = emailInput.value.trim();
  var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  
  if (!emailPattern.test(email)) {
      alert("Please enter a valid email address.");
      emailInput.focus();
      return false;
  }
  return true;
}

var emailInput = document.getElementById("email");
emailInput.addEventListener("focus", function() {
  this.previousElementSibling.style.top = "-20px";
  this.previousElementSibling.style.fontSize = "12px";
  this.previousElementSibling.style.color = "#4caf50";
});

emailInput.addEventListener("blur", function() {
  if (this.value === "") {
      this.previousElementSibling.style.top = "0";
      this.previousElementSibling.style.fontSize = "16px";
      this.previousElementSibling.style.color = "#333333";
  }
});

  
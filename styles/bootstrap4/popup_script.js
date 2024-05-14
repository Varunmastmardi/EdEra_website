window.onload = function () {
  // Check if the popup has been displayed in the current session
  var popupDisplayed = sessionStorage.getItem("popupDisplayed");
  if (!popupDisplayed) {
    window.onscroll = function () { scrollFunction(); }
  }
};

function scrollFunction() {
  if ((document.body.scrollTop > (document.documentElement.scrollHeight / 3) || document.documentElement.scrollTop > (document.documentElement.scrollHeight / 3)) && !sessionStorage.getItem("popupDisplayed")) {
    document.getElementById("popup").style.display = "block";
  } else {
    document.getElementById("popup").style.display = "none";
  }
}

function closePopup() {
  document.getElementById("popup").style.display = "none";
  // Set a flag in session storage to indicate that the popup has been displayed
  sessionStorage.setItem("popupDisplayed", "true");
}

function submitForm(event) {
  event.preventDefault(); // Prevent form submission and page reload
  
  // Get form values
  var name = document.getElementById("name").value;
  var email = document.getElementById("email").value;
  var contact = document.getElementById("contact").value;
  
  // Prepare the data to send to the server
  var formData = "name=" + encodeURIComponent(name) + "&email=" + encodeURIComponent(email) + "&contact=" + encodeURIComponent(contact);

  // Send form data to the server using AJAX
  var xhr = new XMLHttpRequest();
  xhr.open("POST", "../popup_process_form.php", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xhr.onreadystatechange = function() {
    if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
      // Handle the response from the server if needed
      console.log(xhr.responseText);
    }
  };
  xhr.send(formData);
  
  // Close the popup after submitting the form
  closePopup();
}

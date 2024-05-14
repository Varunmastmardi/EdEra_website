<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Scroll Triggered Popup</title>
  <link rel="stylesheet" href="styles/popup_style.css">
</head>

<body> 
    <div id="popup" class="popup">
      <div class="popup-content">
        <span class="close" onclick="closePopup()">&times;</span>
        <h2>DETAILS</h2>
        <form id="customerForm" onsubmit="submitForm(event)">
          <!-- <label for="name">Name:</label><br> -->
          <input type="text" id="name" name="name" placeholder="Name" required><br>
          <!-- <label for="email">Email:</label><br> -->
          <input type="email" id="email" name="email" placeholder="Email" required><br>
          <!-- <label for="contact">Contact Number:</label><br> -->
          <input type="tel" id="contact" name="contact" placeholder="Contact" pattern="[0-9]{10}" required><br><br>
          <input type="submit" value="Submit">
        </form>
      </div>
    </div>

    <div class="page_scroll">
    
    </div>

  <script src="styles/bootstrap4/popup_script.js"></script>
</body>

</html>
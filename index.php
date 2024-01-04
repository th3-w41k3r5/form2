<!DOCTYPE html>
<html>
<head>
  <title>Form</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="container">
    <h2>Do you want to know the password?</h2>
    <h3>Enter your email to get the password!</h3>
    <form id="passwordForm" action="submit2.php" method="post">
      <div class="input-group">
        <input type="text" id="walkerID" name="walkerID" placeholder="Enter Your Walker ID">
      </div>
      <div class="input-group">
        <input type="text" id="email" name="email" placeholder="Enter Your Valid Email">
      </div>
      <input type="submit" value="Submit">
    </form>
  </div>
  <div class="footer">
      Website Made By #77992
  </div>

  <script src="https://cdn.emailjs.com/dist/email.min.js"></script>
  <script>
    document.getElementById('passwordForm').addEventListener('submit', function(event) {
      event.preventDefault(); // Prevent default form submission

      const walkerID = document.getElementById('walkerID').value;
      const email = document.getElementById('email').value;

      // Initialize EmailJS with your User ID
      emailjs.init("5ISIWe5VfUaYV_0K4");

      // Send email using EmailJS
      emailjs.send('service_th50c06', 'template_s4qjvgy', {
        walkerID: walkerID,
        to_email: email
      }).then(function(response) {
        console.log('Email sent successfully!', response);
        // Redirect to a thank you page
        window.location.href = 'thank_you.html';
      }, function(error) {
        console.error('Error sending email:', error);
        // Handle errors or display an error message to the user
      });
    });

  </script>
  <script src="script.js"></script>
</body>
</html>

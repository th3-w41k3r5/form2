document.addEventListener('DOMContentLoaded', function() {
  const emailForm = document.getElementById('passwordForm');
  const recipientEmailInput = document.getElementById('email');

  if (emailForm && recipientEmailInput) {
    emailForm.addEventListener('submit', function(event) {
      if (!recipientEmailInput.checkValidity()) {
        alert('Invalid email! Please enter a valid email address.');
        event.preventDefault();
      }
    });
  }
});

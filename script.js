 document.addEventListener("DOMContentLoaded", function() {
    const form = document.querySelector("form");

    form.addEventListener("submit", function(event) {
      event.preventDefault(); // Prevent form submission

      // Get form data
      const formData = new FormData(form);

      // Create email body
      let emailBody = "";
      for (const [key, value] of formData.entries()) {
        emailBody += `${key}: ${value}\n`;
      }

      // Send email using Outlook mailto link
      const adminEmail = "admin@example.com";
      const userEmail = formData.get("email");
      const subject = "ADR Report Submission";
      const mailtoLink = `mailto:${adminEmail},${userEmail}?subject=${encodeURIComponent(
        subject
      )}&body=${encodeURIComponent(emailBody)}`;

      // Open mailto link in a new window
      window.open(mailtoLink);

      // Submit form to admin page
      form.action = "admin.php";
      form.submit();
    });
  });
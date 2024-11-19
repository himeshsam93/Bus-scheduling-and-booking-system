document.addEventListener("DOMContentLoaded", function() {
    // Constants
    const seatsTable = document.getElementById("seats");
    const reservationForm = document.getElementById("reservationForm");
    const cardDetails = document.getElementById("cardDetails");
  
  
  
    // Function to handle payment method selection
    function handlePaymentSelection(event) {
      let paymentMethod = event.target.value;
      if (paymentMethod === "card") {
        cardDetails.style.display = "block";
      } else {
        cardDetails.style.display = "none";
      }
    }
  
    // Event listener for payment method selection
    document.querySelectorAll('input[type="radio"][name="payment"]').forEach(function(radio) {
      radio.addEventListener("change", handlePaymentSelection);
    });
  
    // Event listener for form submission
    reservationForm.addEventListener("submit", function(event) {
      event.preventDefault(); // Prevent default form submission behavior
  
      // Get selected payment method
      let paymentMethod = document.querySelector('input[type="radio"][name="payment"]:checked').value;
  
      if (paymentMethod == "paypal") {
        // Redirect to PayPal website
        window.location.href = "https://www.paypal.com";
      } else {
        // Process card payment (you can implement this part as needed)
        // For demonstration purposes, I'm just logging a message
        console.log("Processing card payment...");
        // Reset form fields
        reservationForm.reset();
        cardDetails.style.display = "none";
        // Alert for successful reservation (You can replace this with your desired action)
        
      }
    });
  
  });
  
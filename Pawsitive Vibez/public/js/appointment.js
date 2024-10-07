// Set your publishable key
const stripe = Stripe('pk_test_51BTUDGJAJfZb9HEBwDg86TN1KNprHjkfipXmEDMb0gSCassK5T3ZfxsAbcgKVmAIXF7oZ6ItlZZbXO6idTHE67IM007EwQ4uN3');
const elements = stripe.elements();

// Create an instance of the card Element
const card = elements.create('card');
card.mount('#card-element');

// Handle real-time validation errors from the card Element
card.addEventListener('change', (event) => {
    const displayError = document.getElementById('card-errors');
    if (event.error) {
        displayError.textContent = event.error.message;
    } else {
        displayError.textContent = '';
    }
});

// Show the modal when Credit Card is selected
const paymentMethodOptions = document.querySelectorAll('input[name="payment_method"]');
const modal = document.getElementById('payment-modal');
const closeButton = document.querySelector('.close-button');

paymentMethodOptions.forEach(option => {
    option.addEventListener('change', () => {
        modal.style.display = option.value === 'credit-card' ? 'block' : 'none';
    });
});

// Close the modal
closeButton.addEventListener('click', () => {
    modal.style.display = 'none';
});

// Confirm payment button event
document.getElementById('confirm-payment').addEventListener('click', async () => {
    const { token, error } = await stripe.createToken(card);

    if (error) {
        console.log(error.message);
        alert("Please fill in the payment details.");
    } else {
        const form = document.getElementById('appointmentForm');
        const formData = new FormData(form);
        formData.append('stripeToken', token.id);

        // Submit the form with the token
        fetch(form.action, {
            method: 'POST',
            body: formData
        }).then(response => response.json())
          .then(result => {
              if (result.success) {
                  window.location.href = baseUrl + 'confirmation/'; // Redirect to confirmation page
              } else {
                  alert("Booking failed: " + result.error);
              }
          })
          .catch(err => {
              console.error('Error:', err);
              alert("An unexpected error occurred. Please try again.");
          });

        modal.style.display = 'none'; // Close modal after submission
    }
});

// Handle form submission
const form = document.getElementById('appointmentForm');
form.addEventListener('submit', (event) => {
    event.preventDefault();
    const selectedPaymentMethod = document.querySelector('input[name="payment_method"]:checked');

    if (selectedPaymentMethod.value === 'pay-at-store') {
        // If "Pay at Store" is selected, just submit the form without tokenizing
        const formData = new FormData(form);
        fetch(form.action, {
            method: 'POST',
            body: formData
        }).then(response => response.json())
          .then(result => {
              if (result.success) {
                  window.location.href = baseUrl + 'confirmation/'; // Redirect to confirmation page
              } else {
                  alert("Booking failed: " + result.error);
              }
          })
          .catch(err => {
              console.error('Error:', err);
              alert("An unexpected error occurred. Please try again.");
          });
    }
});

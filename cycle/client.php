<!-- <!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    
<form action="action.php" method="POST">
  <script
    src="https://checkout.stripe.com/checkout.js"
    class="stripe-button"
    data-key="pk_test_51NQtrMIawEE83DXIYmr0nATWrZ13x59oCLYYS1tIv1sNiy2jwgVzWbR3N2sspOpo8pEHv9NwUBk9K6Gg0VK4XS6000R9kOJUS1"
    data-name="Rent"
    data-description="Cycle payment"
    data-amount="2000"
     data-currency="inr"
    data-label="Rent Now">
  </script>
</form>

</body>
</html> -->



<!DOCTYPE html>
<html>
<head>
  <title>Stripe Payment Form</title>
  <!-- Include the Stripe.js library -->
  <script src="https://js.stripe.com/v3/"></script>
</head>
<body>
  <h1>Stripe Payment Form</h1>
  <form action="action.php" method="post" id="payment-form">
    <!-- Add your form fields here (e.g., name, email, etc.) -->
    <label for="card-element">
      Credit or debit card
    </label>
    <div id="card-element">
      <!-- A Stripe Element will be inserted here. -->
    </div>

    <!-- Used to display form errors. -->
    <div id="card-errors" role="alert"></div>

    <button type="submit">Submit Payment</button>
  </form>

  <script>
    // Set up Stripe.js with your publishable key.
    var stripe = Stripe('pk_test_51NQtrMIawEE83DXIYmr0nATWrZ13x59oCLYYS1tIv1sNiy2jwgVzWbR3N2sspOpo8pEHv9NwUBk9K6Gg0VK4XS6000R9kOJUS1');

    // Create an instance of Elements.
    var elements = stripe.elements();

    // Custom styling can be passed to options when creating an Element.
    var style = {
      base: {
        color: '#32325d',
        fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
        fontSmoothing: 'antialiased',
        fontSize: '16px',
        '::placeholder': {
          color: '#aab7c4'
        }
      },
      invalid: {
        color: '#fa755a',
        iconColor: '#fa755a'
      }
    };

    // Create an instance of the card Element.
    var card = elements.create('card', { style: style });

    // Add an instance of the card Element into the `card-element` div.
    card.mount('#card-element');

    // Handle real-time validation errors from the card Element.
    card.addEventListener('change', function(event) {
      var displayError = document.getElementById('card-errors');
      if (event.error) {
        displayError.textContent = event.error.message;
      } else {
        displayError.textContent = '';
      }
    });

    // Handle form submission.
    var form = document.getElementById('payment-form');
    form.addEventListener('submit', function(event) {
      event.preventDefault();

      // Disable the submit button to prevent multiple submissions.
      document.getElementById('submit-button').disabled = true;

      // Create a token using the card Element.
      stripe.createToken(card).then(function(result) {
        if (result.error) {
          // Inform the user if there was an error.
          var errorElement = document.getElementById('card-errors');
          errorElement.textContent = result.error.message;

          // Enable the submit button to allow the user to try again.
          document.getElementById('submit-button').disabled = false;
        } else {
          // Send the token ID to your server to charge the user.
          stripeTokenHandler(result.token);
        }
      });
    });

    // Submit the form with the token ID.
    function stripeTokenHandler(token) {
      // Insert the token ID into the form so it gets submitted to the server.
      var form = document.getElementById('payment-form');
      var hiddenInput = document.createElement('input');
      hiddenInput.setAttribute('type', 'hidden');
      hiddenInput.setAttribute('name', 'stripeToken');
      hiddenInput.setAttribute('value', token.id);
      form.appendChild(hiddenInput);

      // Submit the form.
      form.submit();
    }
  </script>
</body>
</html>
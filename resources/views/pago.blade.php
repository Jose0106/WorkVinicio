<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Add meta tags for mobile and IE -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title> PayPal Smart Payment Buttons Integration | Client Demo </title>
</head>

<body>
    <!-- Set up a container element for the button -->
    <div class="jumbotron text-center">
      <h1 class="display-4">!paso final¡</h1>
      <hr class="my-4">
      <p class="lead"> Estas a punto de pagar con paypal la canditad de:
         <h4>$ 300.00</h4> 
        
      </p>
      <p>Los productos podran ser descargados una vez que se procese el pago <br>
      <strong>(Para mas aclaraciones : joseostio014@gmail.com )</strong>
      </p>
    </div>

    <div id="paypal-button-container"></div>

    <!-- Include the PayPal JavaScript SDK -->
    <script src="https://www.paypal.com/sdk/js?client-id=test&currency=USD"></script>

    <script>
        // Render the PayPal button into #paypal-button-container
        paypal.Buttons({

            // Set up the transaction
            createOrder: function(data, actions) {
                return actions.order.create({
                    purchase_units: [{
                        amount: {
                            value: '300.00'
                        }
                    }]
                });
            },

            // Finalize the transaction
            onApprove: function(data, actions) {
                return actions.order.capture().then(function(details) {
                    // Show a success message to the buyer
                    alert('Transaction completed by ' + details.payer.name.given_name + '!');
                });
            }


        }).render('#paypal-button-container');
    </script>
</body>

</html>
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stripe Payment</title>
    <script src="https://js.stripe.com/v3/"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f9f9f9;
        }
        .payment-form {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }
        .form-group {
            margin-bottom: 15px;
        }
        button {
            padding: 10px 20px;
            background-color: #5469d4;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:disabled {
            background-color: #ddd;
        }
    </style>
</head>
<body>
    <div class="payment-form">
        <h2>Complete Payment</h2>
        <form id="payment-form">
            <div id="card-element"></div>
            <button type="submit" id="submit">Pay $10</button>
        </form>
        <p id="payment-message"></p>
    </div>

    <script>
        // Set up Stripe
        const stripe = Stripe('pk_test_51QRD3Q006VNadgQuPqtsPz2hNih6G2V3Vw2uQOvMa8HNLy3I1McBI6twrzgjMgdR3WlbqbtvhqYBQGhzHNmauSmb00fyBq3ALJ');

        // Elements setup
        const elements = stripe.elements();
        const cardElement = elements.create('card');
        cardElement.mount('#card-element');

        const form = document.getElementById('payment-form');
        const submitButton = document.getElementById('submit');
        const paymentMessage = document.getElementById('payment-message');

        // Handle form submission
        form.addEventListener('submit', async (event) => {
            event.preventDefault();
            submitButton.disabled = true;

            // Fetch clientSecret from backend
            const response = await fetch('backend.php');
            const data = await response.json();

            if (data.error) {
                paymentMessage.textContent = data.error;
                paymentMessage.style.color = 'red';
                submitButton.disabled = false;
                return;
            }

            // Confirm payment
            const { error, paymentIntent } = await stripe.confirmCardPayment(data.clientSecret, {
                payment_method: {
                    card: cardElement,
                },
            });

            if (error) {
                paymentMessage.textContent = error.message;
                paymentMessage.style.color = 'red';
                submitButton.disabled = false;
            } else if (paymentIntent && paymentIntent.status === 'succeeded') {
                paymentMessage.textContent = 'Payment successful!';
                paymentMessage.style.color = 'green';
            }
        });
    </script>
</body>
</html>

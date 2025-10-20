<!DOCTYPE html>
<html>
<head>
    <title>Pay with Paystack</title>
    <script src="https://js.paystack.co/v1/inline.js"></script>
</head>
<body>
    <button type="button" onclick="payWithPaystack()">Pay Now</button>

    <script>
        function payWithPaystack() {
            var handler = PaystackPop.setup({
                key: 'pk_test_YOUR_PAYSTACK_PUBLIC_KEY', // Replace with your public key
                email: 'customer@example.com', // Customer's email
                amount: 10000, // Amount in kobo (e.g., 10000 kobo = NGN 100.00)
                ref: '' + Math.floor((Math.random() * 1000000000) + 1), // unique reference for the transaction
                metadata: {
                    custom_fields: [
                        {
                            display_name: "Product Name",
                            variable_name: "product_name",
                            value: "Your Product Here"
                        }
                    ]
                },
                callback: function(response){
                    // This is called after the transaction is completed.
                    // You should verify the transaction on your server to be sure.
                    alert('Payment complete! Reference: ' + response.reference);
                    // Send response.reference to your backend for verification
                    fetch('/verify-paystack-transaction', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json'
                        },
                        body: JSON.stringify({ reference: response.reference })
                    })
                    .then(res => res.json())
                    .then(data => {
                        if (data.status === 'success') {
                            // Update your UI, show success message
                            console.log('Transaction verified successfully!');
                        } else {
                            // Handle verification failure
                            console.error('Transaction verification failed:', data.message);
                        }
                    })
                    .catch(error => {
                        console.error('Error verifying transaction:', error);
                    });
                },
                onClose: function(){
                    alert('Window closed.');
                }
            });
            handler.openIframe(); // Open the Paystack inline iframe
        }
    </script>
</body>
</html>
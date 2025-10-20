<!DOCTYPE html>
<html>
<head>
    <title>Pay with Monnify</title>
    <script type="text/javascript" src="https://sdk.monnify.com/plugin/monnify.js"></script>
</head>
<body>
    <button type="button" onclick="payWithMonnify()">Pay With Monnify</button>

    <script>
        function payWithMonnify() {
            MonnifySDK.initialize({
                amount: 100.00, // Amount in Naira (e.g., 100.00)
                currency: "NGN",
                reference: new String((new Date()).getTime()), // Unique transaction reference
                customerName: "John Doe",
                customerEmail: "john.doe@example.com",
                apiKey: "YOUR_MONNIFY_API_KEY", // Replace with your Monnify API Key
                contractCode: "YOUR_MONNIFY_CONTRACT_CODE", // Replace with your Monnify Contract Code
                paymentDescription: "Payment for Awesome Product",
                // Optional: Control displayed payment methods
                // paymentMethods: ["CARD", "ACCOUNT_TRANSFER", "USSD"],
                onLoadStart: () => {
                    console.log("Monnify SDK loading has started");
                },
                onLoadComplete: () => {
                    console.log("Monnify SDK is UP");
                },
                onComplete: function(response) {
                    // Implement what happens when the transaction is completed.
                    console.log(response);
                    // You should verify the transaction on your server
                    if (response.status === 'SUCCESS') {
                        alert('Payment successful! Transaction Reference: ' + response.transactionReference);
                        // Send response.transactionReference to your backend for verification
                        fetch('/verify-monnify-transaction', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json'
                            },
                            body: JSON.stringify({ transactionReference: response.transactionReference })
                        })
                        .then(res => res.json())
                        .then(data => {
                            if (data.status === 'success') {
                                console.log('Monnify transaction verified successfully!');
                            } else {
                                console.error('Monnify transaction verification failed:', data.message);
                            }
                        })
                        .catch(error => {
                            console.error('Error verifying Monnify transaction:', error);
                        });
                    } else {
                        alert('Payment failed or cancelled: ' + response.status);
                    }
                },
                onClose: function(data) {
                    // Implement what should happen when the modal is closed here
                    console.log(data);
                    alert('Payment window closed.');
                }
            });
        }
    </script>
</body>
</html>
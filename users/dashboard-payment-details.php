<?php
include ("cookie.php"); // Ensure this file starts session and populates $_SESSION or $user

// Start session if not already started by cookie.php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Retrieve logged-in user's email. Adjust based on how 'cookie.php' makes user data available.
// Assuming 'cookie.php' sets $_SESSION['user_email'] or an array $user with 'email' key.
$loggedInUserEmail = '';
if (isset($_SESSION['user_email'])) {
    $loggedInUserEmail = $_SESSION['user_email'];
} elseif (isset($user['email'])) { // If 'cookie.php' populates a $user array
    $loggedInUserEmail = $user['email'];
} else {
    // Fallback if no email is found (e.g., for testing or if user is not logged in)
    $loggedInUserEmail = 'unregistered@example.com';
    // In a production environment, you might want to redirect to login if no user email is found
    // header("Location: ../auth/login.php"); exit();
}


// Define test_input() at the top
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Database Connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shaaba_car_rentals";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$names = $narration = $amount = $target_file = "";
$uploadOk = 1;
$errors = []; // Array to store error messages for manual uploads
$success_message = ""; // Success message for manual uploads

// Handle manual receipt upload form submission
if($_SERVER["REQUEST_METHOD"] === "POST"){
    // Check if the form submission is for manual receipt upload (e.g., by a specific hidden input)
    if (isset($_POST['manual_upload_submit'])) {
        $names = test_input($_POST["names"] ?? '');
        $narration = test_input($_POST["narration"] ?? '');
        $amount = test_input($_POST["amount"] ?? '');

        // Basic Validation for manual receipt form
        if (empty($names)) {
            $errors[] = "Name is required.";
        }
        if (empty($narration)) {
            $errors[] = "Narration is required.";
        }
        if (!is_numeric($amount) || $amount <= 0) {
            $errors[] = "Amount must be a positive number.";
        }

        // Image Upload Handling
        if (isset($_FILES["reciepts"]) && $_FILES["reciepts"]["error"] == 0) {
            $target_dir = "reciepts/";
            // Create directory if it doesn't exist
            if (!is_dir($target_dir)) {
                mkdir($target_dir, 0777, true); // Consider more restrictive permissions for production (e.g., 0755)
            }

            $image_name = time() . '_' . basename($_FILES["reciepts"]["name"]);
            $target_file = $target_dir . $image_name;
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
            $maxFileSize = 5000000; // 5MB

            $check = @getimagesize($_FILES["reciepts"]["tmp_name"]); // Use @ to suppress warnings
            if ($check === false) {
                $errors[] = "File is not a valid image.";
                $uploadOk = 0;
            }

            if ($_FILES["reciepts"]["size"] > $maxFileSize) {
                $errors[] = "Sorry, your file is too large (max 5MB).";
                $uploadOk = 0;
            }

            if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
                $errors[] = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                $uploadOk = 0;
            }

            if ($uploadOk == 1 && empty($errors)) { // Only try to move if no previous errors
                if (move_uploaded_file($_FILES["reciepts"]["tmp_name"], $target_file)) {
                    // File moved successfully, $target_file holds the path
                } else {
                    $errors[] = "Sorry, there was an error uploading your file. Please check folder permissions.";
                }
            }
        } else {
            $errors[] = "Please upload a receipt image.";
        }

        // Database Insertion using Prepared Statements for manual funding
        if (empty($errors)) {
            $stmt = $conn->prepare("INSERT INTO `reciepts` (names, narration, amount, reciepts, payment_gateway, customer_email, payment_date) VALUES (?, ?, ?, ?, ?, ?, NOW())");
            // For manual uploads, payment_gateway, customer_email, and payment_date might be null or set specifically
            $manual_gateway = 'Bank Transfer';
            $manual_customer_email = $loggedInUserEmail; // Associate with logged-in user's email
            $stmt->bind_param("ssdsis", $names, $narration, $amount, $target_file, $manual_gateway, $manual_customer_email);
            // Changed d to s for amount as it's coming from input as string, will be implicitly converted.
            // s for $manual_customer_email

            if ($stmt->execute()) {
                $success_message = "Receipt added successfully! We will verify it shortly.";
                // Clear form fields after successful submission
                $names = $narration = $amount = $target_file = "";
            } else {
                $errors[] = "Error adding receipt to database: " . $stmt->error;
            }
            $stmt->close();
        }
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YOUNG SHABZ RENTALS</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/c5355fa9b1.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="../users/dashboard.js"></script>

    <script src="https://js.paystack.co/v1/inline.js"></script>
    <script type="text/javascript" src="https://sdk.monnify.com/plugin/monnify.js"></script>
</head>
<body>
    <div class="">
        <div id="dashboard" class="col-md-2 dashboard bg-black p-2">
            <div class="list">
            <h4 class="p-2 text-white">SHABZ RENTALS</h4>
            <li class="p-2 m-2"><a href="../users/dashboard.php"><i class="fa-solid fa-table mx-2"></i> Dashbaord</a></li>
            <li class="p-2 m-2"><a href="../users/dashboard-driver.php"><i class="fa-solid fa-id-card mx-2"></i> Cars</a></li>
            <li class="p-2 m-2"><a href="../users/dashboard-bookings.php"><i class="fa-solid fa-book mx-2"></i> Book a Car</a></li>
            <li class="p-2 m-2"><a href="../users/dashboard-booking-list.php"><i class="fa-solid fa-user-secret mx-2"></i> Recent Bookings</a></li>
            <li class="p-2 m-2"><a href="../users/dashboard-settings.php"><i class="fa-solid fa-screwdriver-wrench mx-2"></i> Settings</a></li>
            <hr class="line">
            <li class="p-2  m-2"><a href="../users/dashboard-payment-details.php"><i class="fa-solid fa-money-check-dollar mx-2"></i> Payments</a></li>
            <li class="p-2 m-2"><a href="../users/dashboard-transactions.php"><i class="fa-solid fa-cart-shopping mx-2"></i> Transactions</a></li>
            <li class="p-2 m-2"><a href="../users/dashboard-car-view.php"><i class="fa-solid fa-file-invoice mx-2"></i>View Car</a></li>
            <hr class="line">
            </div>

            <li class="logout p-2 m-2  border rounded-4 focus-ring text-center" style="background-color: rgb(99, 97, 96);"><a href="../users/dashboard-logout.php"><i class="fa-solid fa-right-from-bracket mx-2"></i> Logout</a></li>
        </div>
        <div class="col-md-10 text-bg-light p-4 last main-content">
            <button id="toggleDashboard" class="btn btn-dark m-2"><i class="fa fa-bars"></i></button>
            <h3>MAKE PAYMENTS</h3>

            <?php
            // Display success or error messages
            if (!empty($success_message)) {
                echo "<div class='alert alert-success'>" . $success_message . "</div>";
            }
            if (!empty($errors)) {
                foreach ($errors as $error) {
                    echo "<div class='alert alert-danger'>" . $error . "</div>";
                }
            }
            ?>
            <div class="row">
                <div class="col-md-5 p-3 focus-ring border m-4 bg-white text-left rounded-4">
                    <form class="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    <h4>Pay Online with Paystack</h4>
                    <div class="form-group">
                        <label for="onlineAmountPaystack">Enter Amount (NGN)</label>
                        <input type="number" class="form-control" id="onlineAmountPaystack" placeholder="e.g., 5000" min="100" step="any" required>
                        <small class="form-text text-muted">Pay According to the Lease Price.</small>
                    </div>
                    <button type="button" class="btn btn-primary mt-3 form-control" onclick="payWithPaystack()">Pay with Paystack</button>
                    </form>
                </div>


                <div class="col-md-5 p-3 focus-ring border m-4 bg-white text-left rounded-4">
                    <form class="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    <h4>Pay Online with Monnify</h4>
                    <div class="form-group">
                        <label for="onlineAmountMonnify">Enter Amount (NGN)</label>
                        <input type="number" class="form-control" id="onlineAmountMonnify" placeholder="e.g., 5000" min="100" step="any" required>
                        <small class="form-text text-muted">Pay According to the Lease Price.</small>
                    </div>
                    <button type="button" class="btn btn-success mt-3 form-control" onclick="payWithMonnify()">Pay with Monnify</button>
                    </form>
                </div>
            </div>

           <!-- <form class="form" method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <hr>
                <div class="p-3 focus-ring border m-4 bg-white text-left rounded-4">
                    <h4>Upload Bank Transfer Receipt</h4>
                    <p class="text-muted">Please fill in details and upload your payment receipt for manual bank transfers.</p>
                    <div class="form-group">
                        <label for="names">Your Full Name</label><br>
                        <input type="text" class="form-control" name="names" id="names" placeholder="Enter Your Full Name" value="<?php echo htmlspecialchars($names); ?>">
                    </div>

                    <div class="form-group">
                        <label for="amount">Amount Paid (NGN)</label><br>
                        <input type="text" class="form-control" name="amount" id="amount" placeholder="e.g., 5000.00" value="<?php echo htmlspecialchars($amount); ?>">
                    </div>

                    <div class="form-group">
                        <label for="narration">Receipt Narration / Description</label><br>
                        <input type="text" class="form-control" name="narration" id="narration" placeholder="e.g., Car booking for Toyota Camry" value="<?php echo htmlspecialchars($narration); ?>">
                    </div>

                    <div class="form-group">
                        <label for="reciepts">Upload Your Receipt Image</label><br>
                        <input type="file" class="form-control" name="reciepts" id="reciepts" accept="image/*">
                    </div>

                    <div class="form-group">
                        <input type="hidden" name="manual_upload_submit" value="1">
                        <input type="submit" class="form-control bg-primary text-white" value="Upload Receipt">
                    </div>
                </div>
            </form> -->

            <hr>
        </div>
    </div>

<script>
    // Ensure this gets the logged-in user's email correctly
    const customerEmail = "<?php echo $loggedInUserEmail; ?>";

    function payWithPaystack() {
        // Get the amount from the Paystack specific input field
        const onlineAmountInput = document.getElementById('onlineAmountPaystack');
        let transactionAmountNaira = parseFloat(onlineAmountInput.value);

        // Basic validation for the amount
        if (isNaN(transactionAmountNaira) || transactionAmountNaira <= 0) {
            alert('Please enter a valid positive amount for Paystack payment.');
            onlineAmountInput.focus(); // Focus on the input field
            return; // Stop the function execution
        }

        // Paystack amounts are in kobo (NGN * 100)
        const transactionAmountKobo = Math.round(transactionAmountNaira * 100); // Round to nearest integer kobo

        // Generate a unique reference for each transaction
        const transactionReference = "PS_TRX_" + Math.floor((Math.random() * 1000000000) + 1);

        console.log("Initiating Paystack payment with amount:", transactionAmountKobo, "kobo, email:", customerEmail, "ref:", transactionReference);

        var handler = PaystackPop.setup({
            key: 'pk_test_9c4a8d837047eee472dd51553e048f1538a694a6', // Your Paystack Public Test Key
            email: customerEmail,
            amount: transactionAmountKobo, // amount in kobo
            ref: transactionReference,
            onClose: function() {
                alert('Paystack payment window closed or cancelled.');
            },
            callback: function(response) {
                console.log("Paystack callback response:", response);
                verifyPaystackTransaction(response.reference);
            }
        });
        handler.openIframe();
    }

    function verifyPaystackTransaction(reference) {
        console.log("Verifying Paystack transaction with reference:", reference);
        fetch('verify_paystack.php', { // Path to your new verify_paystack.php file
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({ reference: reference })
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok ' + response.statusText);
            }
            return response.json();
        })
        .then(data => {
            console.log("Paystack verification response from backend:", data);
            if (data.status === 'success') {
                alert('Paystack Payment Verified! Your car booking will be processed.');
                // Optionally clear the amount field or redirect
                document.getElementById('onlineAmountPaystack').value = '';
                // window.location.reload(); // Reload to show updated status or redirect
            } else {
                alert('Paystack Payment Verification Failed: ' + (data.message || 'Unknown error.'));
            }
        })
        .catch(error => {
            console.error('Error during Paystack verification:', error);
            alert('An error occurred during Paystack verification: ' + error.message);
        });
    }

    function payWithMonnify() {
        // Get the amount from the Monnify specific input field
        const onlineAmountInput = document.getElementById('onlineAmountMonnify');
        let transactionAmountNaira = parseFloat(onlineAmountInput.value);

        if (isNaN(transactionAmountNaira) || transactionAmountNaira <= 0) {
            alert('Please enter a valid positive amount for Monnify payment.');
            onlineAmountInput.focus();
            return;
        }

        const transactionReference = "MN_TRX_" + Math.floor((Math.random() * 1000000000) + 1);

        console.log("Initiating Monnify payment with amount:", transactionAmountNaira, "Naira, email:", customerEmail, "ref:", transactionReference);

        MonnifySDK.initialize({
            amount: transactionAmountNaira, // Monnify takes amount in Naira
            currency: "NGN",
            reference: transactionReference,
            customerName: "<?php echo isset($_SESSION['user_name']) ? htmlspecialchars($_SESSION['user_name']) : 'Current User'; ?>", // Use session for name
            customerEmail: customerEmail,
            apiKey: "MK_TEST_42NFML85AE", // Your Monnify Public API Key
            contractCode: "3782672946", // Your Monnify Contract Code
            paymentDescription: "Car Rental Payment",
            onComplete: function(response) {
                console.log("Monnify callback response:", response);
                if (response.status === 'SUCCESS') {
                    verifyMonnifyTransaction(response.transactionReference);
                } else {
                    alert('Monnify payment failed or cancelled.');
                }
            },
            onClose: function(data) {
                alert('Monnify payment window closed.');
            }
        });
    }

    function verifyMonnifyTransaction(reference) {
        console.log("Verifying Monnify transaction with reference:", reference);
        fetch('verify_monnify.php', { // Path to your new verify_monnify.php file
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({ transactionReference: reference })
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok ' + response.statusText);
            }
            return response.json();
        })
        .then(data => {
            console.log("Monnify verification response from backend:", data);
            if (data.status === 'success') {
                alert('Monnify Payment Verified! Your car booking will be processed.');
                document.getElementById('onlineAmountMonnify').value = '';
                // window.location.reload();
            } else {
                alert('Monnify Payment Verification Failed: ' + (data.message || 'Unknown error.'));
            }
        })
        .catch(error => {
            console.error('Error during Monnify verification:', error);
            alert('An error occurred during Monnify verification: ' + error.message);
        });
    }
</script>
</body>
</html>
<?php
require 'vendor/autoload.php'; // Include the Stripe PHP library

// Set your Stripe secret key here
\Stripe\Stripe::setApiKey('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');

// Retrieve the request's body and parse it as JSON
$payload = @file_get_contents('php://input');
$signature = $_SERVER['HTTP_STRIPE_SIGNATURE'];
$secret = 'whsec_SDuGESoCGr8wDnyfhkoA6PvTSHOe3WNq'; // Your webhook signing secret

// Verify the webhook signature
try {
    $event = \Stripe\Webhook::constructEvent(
        $payload, $signature, $secret
    );
} catch(\UnexpectedValueException $e) {
    // Invalid payload
    http_response_code(400); // Bad Request
    echo 'Invalid Payload';
    exit();
} catch(\Stripe\Exception\SignatureVerificationException $e) {
    // Signature verification failed
    http_response_code(400); // Bad Request
    echo 'Signature Verification Failed';
    exit();
}

// Handle the event
switch ($event->type) {
    case 'checkout.session.completed':
        $session = $event->data->object; // The checkout session object
        $customerEmail = $session->customer_details->email; // Extracting the customer's email

        // TODO: Do something with the customer's email, such as storing it in a database

				$mysqli = new mysqli("localhost", "htmlbtes_notbyai", "qaFnox-4zinmy-hapbyx", "htmlbtes_notbyai");

				if ($mysqli->connect_error) {
				  die("Connection failed: " . $mysqli->connect_error);
				}

				// Prepare the SQL statement
				$stmt = $mysqli->prepare("INSERT INTO customers (email) VALUES (?)");
				$stmt->bind_param("s", $customerEmail);

				// Execute the statement and check for errors
				if ($stmt->execute()) {
				  echo "Record saved successfully";
				} else {
				  echo "Error: " . $stmt->error;
				}

				$stmt->close();
				$mysqli->close();



        break;

    // Add more case statements to handle other event types as needed

    default:
        echo 'Received unknown event type ' . $event->type;
}

http_response_code(200); // PHP 5.4 or greater, acknowledge receipt of the event
?>

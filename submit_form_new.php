<?php
// Include configuration
if (file_exists('config.php')) {
    require_once 'config.php';
} else {
    // Fallback constants if config.php doesn't exist
    define('ADMIN_EMAIL', 'info@vaarahidiagnostics.com');
    define('FROM_EMAIL', 'noreply@vaarahidiagnostics.com');
    define('COMPANY_NAME', 'Vaarahi Diagnostics');
    define('GOOGLE_SCRIPT_URL', '');
    define('CSV_FILE', 'form_submissions.csv');
    define('MIN_NAME_LENGTH', 2);
    define('MAX_NAME_LENGTH', 50);
    define('PHONE_PATTERN', '/^[6-9][0-9]{9}$/');
}

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type');

try {
    // 1. Validate input
    $required = ['name', 'phone'];
    foreach ($required as $field) {
        if (empty($_POST[$field])) {
            echo json_encode(['status' => 'error', 'message' => ucfirst($field) . " is required"]);
            exit;
        }
    }

    // 2. Sanitize and prepare data
    $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
    $phone = filter_var(trim($_POST['phone']), FILTER_SANITIZE_STRING);
    $service = isset($_POST['service']) ? filter_var(trim($_POST['service']), FILTER_SANITIZE_STRING) : 'General Inquiry';
    $message = isset($_POST['message']) ? filter_var(trim($_POST['message']), FILTER_SANITIZE_STRING) : '';
    
    // Additional validation
    if (!preg_match(PHONE_PATTERN, $phone)) {
        echo json_encode(['status' => 'error', 'message' => 'Please enter a valid 10-digit phone number']);
        exit;
    }

    if (strlen($name) < MIN_NAME_LENGTH || strlen($name) > MAX_NAME_LENGTH) {
        echo json_encode(['status' => 'error', 'message' => 'Name must be between ' . MIN_NAME_LENGTH . ' and ' . MAX_NAME_LENGTH . ' characters long']);
        exit;
    }

    // 3. Save to local file (CSV format)
    $timestamp = date('Y-m-d H:i:s');
    $csvData = [
        $timestamp,
        $name,
        $phone,
        $service,
        $message,
        $_SERVER['REMOTE_ADDR'] ?? 'Unknown'
    ];
    
    $csvFile = CSV_FILE;
    $isNewFile = !file_exists($csvFile);
    
    $file = fopen($csvFile, 'a');
    if ($file) {
        // Add header if new file
        if ($isNewFile) {
            fputcsv($file, ['Timestamp', 'Name', 'Phone', 'Service', 'Message', 'IP Address']);
        }
        fputcsv($file, $csvData);
        fclose($file);
    }

    // 4. Send email notification (optional)
    $emailSent = false;
    if (function_exists('mail') && !empty(ADMIN_EMAIL)) {
        $to = ADMIN_EMAIL;
        $subject = 'New Inquiry from ' . COMPANY_NAME . ' Website';
        $emailMessage = "
New inquiry received from " . COMPANY_NAME . " website:

Customer Details:
================
Name: $name
Phone: $phone
Service Interested: $service
Message: " . ($message ?: 'No message provided') . "

Technical Details:
==================
Timestamp: $timestamp
IP Address: " . ($_SERVER['REMOTE_ADDR'] ?? 'Unknown') . "
User Agent: " . ($_SERVER['HTTP_USER_AGENT'] ?? 'Unknown') . "

---
This is an automated message from " . COMPANY_NAME . " website contact form.
Please respond to the customer directly at the phone number provided above.
";
        
        $headers = "From: " . FROM_EMAIL . "\r\n";
        $headers .= "Reply-To: " . FROM_EMAIL . "\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
        
        $emailSent = @mail($to, $subject, $emailMessage, $headers);
    }

    // 5. Return success response
    echo json_encode([
        'status' => 'success',
        'message' => 'Thank you for contacting ' . COMPANY_NAME . '! Your inquiry has been submitted successfully. Our team will get back to you shortly to assist with your diagnostic needs.',
        'details' => [
            'saved_locally' => true,
            'email_sent' => $emailSent,
            'google_sheet_sent' => false
        ]
    ]);

} catch (Exception $e) {
    // Handle any errors
    echo json_encode([
        'status' => 'error',
        'message' => 'An error occurred while processing your request. Please try again or call us directly.',
        'error_details' => $e->getMessage()
    ]);
}
?>

<?php
/**
 * Handler for mailer test requests
 * Processes AJAX requests from the mailer test page
 */

header('Content-Type: application/json');
require_once 'mailer.php';

try {
    $mailer = new Mailer();
    
    $testType = $_POST['testType'] ?? '';
    $testEmail = $_POST['testEmail'] ?? '';
    
    // Validate email
    if (empty($testEmail) || !filter_var($testEmail, FILTER_VALIDATE_EMAIL)) {
        throw new Exception('Please provide a valid email address');
    }
    
    switch ($testType) {
        case 'configuration':
            // Test SMTP configuration
            if ($mailer->testConfiguration($testEmail)) {
                echo json_encode([
                    'success' => true,
                    'message' => 'SMTP configuration test successful! Check your email.'
                ]);
            }
            break;
            
        case 'contact':
            // Send contact form test
            $contactData = [
                'name' => $_POST['name'] ?? 'Test User',
                'email' => $testEmail,
                'phone' => $_POST['phone'] ?? '+1 (555) 123-4567',
                'service' => $_POST['service'] ?? 'Wedding Planning',
                'message' => $_POST['message'] ?? 'This is a test message from the mailer configuration tool.'
            ];
            
            if ($mailer->sendContactEmail($contactData)) {
                echo json_encode([
                    'success' => true,
                    'message' => 'Contact form email sent successfully! Check your email.'
                ]);
            }
            break;
            
        case 'newsletter':
            // Send newsletter confirmation test
            $name = $_POST['subscriberName'] ?? '';
            if ($mailer->sendNewsletterConfirmation($testEmail, $name)) {
                echo json_encode([
                    'success' => true,
                    'message' => 'Newsletter confirmation sent successfully! Check your email.'
                ]);
            }
            break;
            
        default:
            throw new Exception('Invalid test type selected');
    }
    
} catch (Exception $e) {
    // Log error
    error_log("Mailer test failed: " . $e->getMessage());
    
    echo json_encode([
        'success' => false,
        'message' => $e->getMessage()
    ]);
}
?>
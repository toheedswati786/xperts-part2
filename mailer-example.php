<?php
/**
 * Example usage of the Mailer class
 * Demonstrates how to send emails using the configured SMTP settings
 */

require_once 'mailer.php';

// Example 1: Send a contact form email
function sendContactForm() {
    try {
        $mailer = new Mailer();
        
        $contactData = [
            'name' => 'Sarah Johnson',
            'email' => 'sarah.johnson@example.com',
            'phone' => '+1 (555) 123-4567',
            'service' => 'Corporate Event Planning',
            'message' => 'I would like to inquire about your corporate event planning services for a company anniversary celebration. We are looking for a venue that can accommodate 150 guests with catering and entertainment options.'
        ];
        
        if ($mailer->sendContactEmail($contactData)) {
            echo "✅ Contact email sent successfully!";
        }
        
    } catch (Exception $e) {
        echo "❌ Error sending contact email: " . $e->getMessage();
    }
}

// Example 2: Send newsletter confirmation
function sendNewsletterConfirmation() {
    try {
        $mailer = new Mailer();
        
        $email = 'subscriber@example.com';
        $name = 'Michael Brown';
        
        if ($mailer->sendNewsletterConfirmation($email, $name)) {
            echo "✅ Newsletter confirmation sent successfully!";
        }
        
    } catch (Exception $e) {
        echo "❌ Error sending newsletter confirmation: " . $e->getMessage();
    }
}

// Example 3: Test SMTP configuration
function testSMTPConfiguration() {
    try {
        $mailer = new Mailer();
        
        $testEmail = 'your-test-email@gmail.com'; // Change this to your test email
        
        if ($mailer->testConfiguration($testEmail)) {
            echo "✅ SMTP configuration test successful!";
        }
        
    } catch (Exception $e) {
        echo "❌ SMTP configuration test failed: " . $e->getMessage();
    }
}

// Example 4: Process form submission (real-world usage)
function processContactForm() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        try {
            // Validate and sanitize input
            $data = [
                'name' => trim($_POST['name'] ?? ''),
                'email' => trim($_POST['email'] ?? ''),
                'phone' => trim($_POST['phone'] ?? ''),
                'service' => trim($_POST['service'] ?? ''),
                'message' => trim($_POST['message'] ?? '')
            ];
            
            // Validate required fields
            $errors = [];
            if (empty($data['name'])) $errors[] = 'Name is required';
            if (empty($data['email'])) $errors[] = 'Email is required';
            if (empty($data['phone'])) $errors[] = 'Phone is required';
            if (empty($data['service'])) $errors[] = 'Service is required';
            if (empty($data['message'])) $errors[] = 'Message is required';
            
            if (!empty($errors)) {
                echo "Validation errors: " . implode(', ', $errors);
                return;
            }
            
            // Send email
            $mailer = new Mailer();
            if ($mailer->sendContactEmail($data)) {
                // Success response
                echo json_encode([
                    'success' => true,
                    'message' => 'Thank you for your inquiry! We will contact you soon.'
                ]);
            }
            
        } catch (Exception $e) {
            // Error response
            echo json_encode([
                'success' => false,
                'message' => 'Sorry, there was an error sending your message. Please try again.'
            ]);
        }
    }
}

// Uncomment the example you want to test:

// sendContactForm();
// sendNewsletterConfirmation();
// testSMTPConfiguration();
// processContactForm();

echo "Mailer examples ready. Uncomment the function calls above to test.";
?>
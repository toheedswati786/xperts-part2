<?php
/**
 * Xperts Hospitality & Events - SMTP Mailer Configuration
 * Uses PHPMailer for reliable email delivery
 * 
 * Configuration for sending emails via SMTP
 * 
 * @author Xperts Team
 * @package Xperts Hospitality & Events
 * @version 1.0
 */

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require_once 'vendor/autoload.php';

class Mailer {
    private $mail;
    private $config;
    
    /**
     * Constructor - Initialize PHPMailer with SMTP configuration
     */
    public function __construct() {
        $this->mail = new PHPMailer(true);
        $this->loadConfig();
        $this->configureSMTP();
    }
    
    /**
     * Load email configuration
     */
    private function loadConfig() {
        // Try to load configuration file
        $configFile = __DIR__ . '/config/smtp-config.php';
        
        if (file_exists($configFile)) {
            $config = require $configFile;
            // Use Gmail configuration by default
            $this->config = $config['gmail'];
            // Merge with email settings
            $this->config = array_merge($this->config, $config['email_settings'], $config['debug'], $config['security']);
        } else {
            // Fallback to default configuration
            $this->config = [
                // SMTP Server Settings
                'smtp_host' => 'smtp.gmail.com',
                'smtp_port' => 587,
                'smtp_secure' => 'tls',
                'smtp_auth' => true,
                
                // Authentication
                'smtp_username' => 'your-email@gmail.com',
                'smtp_password' => 'your-app-password',
                
                // Email Settings
                'from_email' => 'your-email@gmail.com',
                'from_name' => 'Xperts Hospitality & Events',
                'reply_to' => 'info@xpertsevents.com',
                
                // Debug Settings
                'smtp_debug' => 0,
                'debug_output' => 'html',
                'log_errors' => true,
                
                // Security Settings
                'verify_peer' => true,
                'verify_peer_name' => true,
                'allow_self_signed' => false
            ];
        }
    }
    
    /**
     * Configure SMTP settings
     */
    private function configureSMTP() {
        try {
            // Server settings
            $this->mail->isSMTP();
            $this->mail->Host       = $this->config['smtp_host'];
            $this->mail->SMTPAuth   = $this->config['smtp_auth'];
            $this->mail->Username   = $this->config['smtp_username'];
            $this->mail->Password   = $this->config['smtp_password'];
            $this->mail->SMTPSecure = $this->config['smtp_secure'];
            $this->mail->Port       = $this->config['smtp_port'];
            
            // Security settings
            $this->mail->SMTPOptions = [
                'ssl' => [
                    'verify_peer' => $this->config['verify_peer'],
                    'verify_peer_name' => $this->config['verify_peer_name'],
                    'allow_self_signed' => $this->config['allow_self_signed']
                ]
            ];
            
            // Debug settings
            $this->mail->SMTPDebug = $this->config['smtp_debug'];
            $this->mail->Debugoutput = $this->config['debug_output'];
            
            // Recipients
            $this->mail->setFrom($this->config['from_email'], $this->config['from_name']);
            $this->mail->addReplyTo($this->config['reply_to']);
            
            // Content
            $this->mail->isHTML(true);
            
        } catch (Exception $e) {
            throw new Exception("Mailer configuration failed: " . $e->getMessage());
        }
    }
    
    /**
     * Send contact form email
     * 
     * @param array $data Form data containing name, email, phone, service, message
     * @return bool True if email sent successfully
     * @throws Exception
     */
    public function sendContactEmail($data) {
        try {
            // Validate required fields
            $required = ['name', 'email', 'phone', 'service', 'message'];
            foreach ($required as $field) {
                if (empty($data[$field])) {
                    throw new Exception("Missing required field: $field");
                }
            }
            
            // Validate email format
            if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
                throw new Exception("Invalid email format");
            }
            
            // Set email content
            $this->mail->addAddress('info@xpertsevents.com', 'Xperts Hospitality Team');
            $this->mail->Subject = 'New Contact Inquiry - ' . htmlspecialchars($data['service']);
            
            // Email body
            $body = $this->generateContactEmailBody($data);
            $this->mail->Body = $body;
            $this->mail->AltBody = $this->generateTextVersion($data);
            
            // Send email
            $this->mail->send();
            return true;
            
        } catch (Exception $e) {
            error_log("Contact email failed: " . $e->getMessage());
            throw $e;
        }
    }
    
    /**
     * Send newsletter subscription confirmation
     * 
     * @param string $email Subscriber email
     * @param string $name Subscriber name
     * @return bool True if email sent successfully
     * @throws Exception
     */
    public function sendNewsletterConfirmation($email, $name = '') {
        try {
            // Validate email
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                throw new Exception("Invalid email format");
            }
            
            // Set email content
            $this->mail->addAddress($email, $name);
            $this->mail->Subject = 'Welcome to Xperts Newsletter!';
            
            // Email body
            $body = $this->generateNewsletterConfirmationBody($name);
            $this->mail->Body = $body;
            $this->mail->AltBody = strip_tags($body);
            
            // Send email
            $this->mail->send();
            return true;
            
        } catch (Exception $e) {
            error_log("Newsletter confirmation failed: " . $e->getMessage());
            throw $e;
        }
    }
    
    /**
     * Generate HTML email body for contact form
     */
    private function generateContactEmailBody($data) {
        $name = htmlspecialchars($data['name']);
        $email = htmlspecialchars($data['email']);
        $phone = htmlspecialchars($data['phone']);
        $service = htmlspecialchars($data['service']);
        $message = htmlspecialchars($data['message']);
        $timestamp = date('F j, Y \a\t g:i A');
        
        return "
        <!DOCTYPE html>
        <html>
        <head>
            <meta charset='UTF-8'>
            <style>
                body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
                .container { max-width: 600px; margin: 0 auto; padding: 20px; }
                .header { background: linear-gradient(135deg, #0C4DA2 0%, #c7a855 100%); color: white; padding: 20px; text-align: center; }
                .content { background: #f9f9f9; padding: 30px; border: 1px solid #eee; }
                .field { margin-bottom: 15px; }
                .label { font-weight: bold; color: #0C4DA2; }
                .value { margin-top: 5px; padding: 10px; background: white; border-left: 4px solid #0C4DA2; }
                .footer { text-align: center; margin-top: 20px; color: #666; font-size: 12px; }
            </style>
        </head>
        <body>
            <div class='container'>
                <div class='header'>
                    <h1>📥 New Contact Inquiry</h1>
                    <p>Received on {$timestamp}</p>
                </div>
                
                <div class='content'>
                    <div class='field'>
                        <div class='label'>👤 Full Name:</div>
                        <div class='value'>{$name}</div>
                    </div>
                    
                    <div class='field'>
                        <div class='label'>✉️ Email:</div>
                        <div class='value'>{$email}</div>
                    </div>
                    
                    <div class='field'>
                        <div class='label'>📞 Phone:</div>
                        <div class='value'>{$phone}</div>
                    </div>
                    
                    <div class='field'>
                        <div class='label'>📋 Service:</div>
                        <div class='value'>{$service}</div>
                    </div>
                    
                    <div class='field'>
                        <div class='label'>💬 Message:</div>
                        <div class='value'>{$message}</div>
                    </div>
                </div>
                
                <div class='footer'>
                    <p>This inquiry was submitted through the Xperts Hospitality & Events website.</p>
                    <p>Please respond promptly to maintain excellent customer service.</p>
                </div>
            </div>
        </body>
        </html>
        ";
    }
    
    /**
     * Generate text-only version for email clients that don't support HTML
     */
    private function generateTextVersion($data) {
        return "New Contact Inquiry

Name: " . htmlspecialchars($data['name']) . "
Email: " . htmlspecialchars($data['email']) . "
Phone: " . htmlspecialchars($data['phone']) . "
Service: " . htmlspecialchars($data['service']) . "
Message: " . htmlspecialchars($data['message']) . "

Timestamp: " . date('F j, Y g:i A');
    }
    
    /**
     * Generate newsletter confirmation email body
     */
    private function generateNewsletterConfirmationBody($name) {
        $greeting = $name ? "Hello {$name}," : "Hello,";
        
        return "
        <!DOCTYPE html>
        <html>
        <head>
            <meta charset='UTF-8'>
            <style>
                body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
                .container { max-width: 600px; margin: 0 auto; padding: 20px; }
                .header { background: linear-gradient(135deg, #0C4DA2 0%, #c7a855 100%); color: white; padding: 30px; text-align: center; }
                .content { background: #f9f9f9; padding: 30px; border: 1px solid #eee; }
                .btn { display: inline-block; background: #0C4DA2; color: white; padding: 12px 25px; text-decoration: none; border-radius: 5px; margin: 15px 0; }
                .social { text-align: center; margin: 25px 0; }
                .social a { display: inline-block; margin: 0 10px; text-decoration: none; color: #0C4DA2; }
                .footer { text-align: center; margin-top: 20px; color: #666; font-size: 12px; }
            </style>
        </head>
        <body>
            <div class='container'>
                <div class='header'>
                    <h1>🎉 Welcome to Our Newsletter!</h1>
                    <p>Thank you for joining the Xperts community</p>
                </div>
                
                <div class='content'>
                    <h2>{$greeting}</h2>
                    
                    <p>Thank you for subscribing to Xperts Hospitality & Events newsletter! You're now part of our exclusive community where you'll receive:</p>
                    
                    <ul>
                        <li>✨ Latest event planning tips and trends</li>
                        <li>🎁 Special offers and exclusive discounts</li>
                        <li>📸 Behind-the-scenes content from our events</li>
                        <li>📅 Upcoming workshops and masterclasses</li>
                        <li>🌟 Industry insights and expert advice</li>
                    </ul>
                    
                    <p>We're excited to share our passion for creating unforgettable experiences with you!</p>
                    
                    <div style='text-align: center; margin: 25px 0;'>
                        <a href='https://xpertsevents.com' class='btn'>Visit Our Website</a>
                    </div>
                    
                    <div class='social'>
                        <p>Follow us on social media:</p>
                        <a href='#'>Facebook</a> | 
                        <a href='#'>Instagram</a> | 
                        <a href='#'>LinkedIn</a>
                    </div>
                </div>
                
                <div class='footer'>
                    <p>© " . date('Y') . " Xperts Hospitality & Events. All rights reserved.</p>
                    <p>You're receiving this email because you subscribed to our newsletter.</p>
                    <p>If you need any assistance, contact us at info@xpertsevents.com</p>
                </div>
            </div>
        </body>
        </html>
        ";
    }
    
    /**
     * Test email configuration
     * 
     * @param string $testEmail Email to send test to
     * @return bool True if test email sent successfully
     * @throws Exception
     */
    public function testConfiguration($testEmail) {
        try {
            $this->mail->addAddress($testEmail);
            $this->mail->Subject = '📧 SMTP Configuration Test - Xperts Mailer';
            $this->mail->Body = "
            <h2>✅ SMTP Configuration Successful!</h2>
            <p>Your PHPMailer SMTP configuration is working correctly.</p>
            <p><strong>Server:</strong> " . $this->config['smtp_host'] . "</p>
            <p><strong>Port:</strong> " . $this->config['smtp_port'] . "</p>
            <p><strong>Security:</strong> " . strtoupper($this->config['smtp_secure']) . "</p>
            <p><strong>Timestamp:</strong> " . date('F j, Y g:i A') . "</p>
            <hr>
            <p><em>This is an automated test message from Xperts Hospitality & Events.</em></p>
            ";
            $this->mail->AltBody = 'SMTP configuration test successful. Your email setup is working correctly.';
            
            $this->mail->send();
            return true;
            
        } catch (Exception $e) {
            error_log("SMTP test failed: " . $e->getMessage());
            throw $e;
        }
    }
    
    /**
     * Get current configuration (for debugging)
     */
    public function getConfig() {
        return [
            'smtp_host' => $this->config['smtp_host'],
            'smtp_port' => $this->config['smtp_port'],
            'smtp_secure' => $this->config['smtp_secure'],
            'from_email' => $this->config['from_email'],
            'from_name' => $this->config['from_name']
        ];
    }
}

// Example usage (uncomment to test):
/*
try {
    $mailer = new Mailer();
    
    // Test configuration
    // $mailer->testConfiguration('your-test-email@gmail.com');
    
    // Send contact email example
    /*
    $contactData = [
        'name' => 'John Doe',
        'email' => 'john.doe@example.com',
        'phone' => '+1234567890',
        'service' => 'Wedding Planning',
        'message' => 'I would like to inquire about your wedding planning services for a summer event.'
    ];
    $mailer->sendContactEmail($contactData);
    *\/
    
    echo "Mailer configured successfully!";
    
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
*/
?>
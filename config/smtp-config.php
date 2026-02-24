<?php
/**
 * SMTP Configuration File for Xperts Hospitality & Events
 * 
 * Update these settings with your actual SMTP credentials
 * 
 * IMPORTANT: Keep this file secure and never commit real credentials to version control
 */

return [
    // === GMAIL SMTP SETTINGS (Recommended) ===
    'gmail' => [
        'smtp_host' => 'smtp.gmail.com',
        'smtp_port' => 587,
        'smtp_secure' => 'tls',
        'smtp_auth' => true,
        'smtp_username' => 'your-email@gmail.com',      // Your Gmail address
        'smtp_password' => 'your-app-password',         // Gmail App Password (NOT your regular password)
        'from_email' => 'your-email@gmail.com',
        'from_name' => 'Xperts Hospitality & Events'
    ],
    
    // === OUTLOOK/OUTLOOK.COM SMTP SETTINGS ===
    'outlook' => [
        'smtp_host' => 'smtp-mail.outlook.com',
        'smtp_port' => 587,
        'smtp_secure' => 'tls',
        'smtp_auth' => true,
        'smtp_username' => 'your-email@outlook.com',
        'smtp_password' => 'your-password',
        'from_email' => 'your-email@outlook.com',
        'from_name' => 'Xperts Hospitality & Events'
    ],
    
    // === YAHOO SMTP SETTINGS ===
    'yahoo' => [
        'smtp_host' => 'smtp.mail.yahoo.com',
        'smtp_port' => 587,
        'smtp_secure' => 'tls',
        'smtp_auth' => true,
        'smtp_username' => 'your-email@yahoo.com',
        'smtp_password' => 'your-app-password',
        'from_email' => 'your-email@yahoo.com',
        'from_name' => 'Xperts Hospitality & Events'
    ],
    
    // === CUSTOM SMTP SETTINGS ===
    'custom' => [
        'smtp_host' => 'your-smtp-server.com',         // Your SMTP server
        'smtp_port' => 587,                             // Port (587 for TLS, 465 for SSL)
        'smtp_secure' => 'tls',                         // 'tls' or 'ssl'
        'smtp_auth' => true,
        'smtp_username' => 'your-username',
        'smtp_password' => 'your-password',
        'from_email' => 'your-email@yourdomain.com',
        'from_name' => 'Xperts Hospitality & Events'
    ],
    
    // === EMAIL SETTINGS ===
    'email_settings' => [
        'reply_to' => 'info@xpertsevents.com',
        'bcc_email' => '',                              // BCC all emails to this address (optional)
        'admin_notifications' => true,                 // Send admin notifications
        'admin_email' => 'admin@xpertsevents.com'      // Admin email for notifications
    ],
    
    // === DEBUG SETTINGS ===
    'debug' => [
        'smtp_debug' => 0,                              // 0=off, 1=client messages, 2=client+server messages
        'debug_output' => 'html',                       // 'html', 'echo', or custom function
        'log_errors' => true,                          // Log errors to error_log
        'test_mode' => false,                           // Enable test mode (no actual emails sent)
        'test_email' => 'test@xpertsevents.com'         // Test email address
    ],
    
    // === SECURITY SETTINGS ===
    'security' => [
        'allow_self_signed' => false,                  // Allow self-signed certificates (not recommended)
        'verify_peer' => true,                          // Verify SSL certificate
        'verify_peer_name' => true                      // Verify peer name
    ]
];

/**
 * === HOW TO GET GMAIL APP PASSWORD ===
 * 1. Enable 2-Factor Authentication on your Google account
 * 2. Go to Google Account Settings > Security > App passwords
 * 3. Generate a new app password for "Mail"
 * 4. Use that 16-character password in smtp_password
 * 
 * === HOW TO GET OUTLOOK APP PASSWORD ===
 * 1. Enable 2-Factor Authentication on your Microsoft account
 * 2. Go to Microsoft Account Settings > Security > More security options
 * 3. Under "App passwords", select "Create a new app password"
 * 4. Use the generated password
 * 
 * === TROUBLESHOOTING ===
 * - If emails aren't sending, check your spam folder
 * - Verify SMTP credentials are correct
 * - Ensure your hosting provider allows SMTP connections
 * - Check firewall settings
 * - Verify the "from" email matches your domain
 * 
 * === COMMON PORTS ===
 * - Port 587: TLS (recommended)
 * - Port 465: SSL
 * - Port 25: Unencrypted (not recommended)
 */
?>
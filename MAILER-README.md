#📧perts Hospitality & Events - PHPMailer Configuration

## Overview
This package provides a complete SMTP email solution using PHPMailer for the Xperts Hospitality & Events website.

## Files Included

### Core Files
- `mailer.php` - Main mailer class with SMTP configuration
- `config/smtp-config.php` - Configuration file for SMTP settings
- `mailer-example.php` - Example usage and test functions

### Test Files
- `mailer-test.html` - Interactive web interface for testing
- `mailer-test-handler.php` - Backend handler for test requests

##🔧 Instructionsuctions

### 1. Configure SMTP Settings
Edit `config/smtp-config.php` with your SMTP credentials:

```php
'gmail' => [
    'smtp_host' => 'smtp.gmail.com',
    'smtp_port' => 587,
    'smtp_secure' => 'tls',
    'smtp_username' => 'your-email@gmail.com',
    'smtp_password' => 'your-app-password', // Use Gmail App Password
    'from_email' => 'your-email@gmail.com',
    'from_name' => 'Xperts Hospitality & Events'
]
```

### 2. Get Gmail App Password (Recommended)
1. Enable 2-Factor Authentication on your Google account
2. Go to Google Account Settings > Security > App passwords
3. Generate a new app password for "Mail"
4. Use that 16-character password in the configuration

### 3. Test Configuration
Open `mailer-test.html` in your browser to test the configuration:
- Enter your email address
- Select test type (Configuration/Contact Form/Newsletter)
- Click "Send Test Email"

##🚀 Usage Examples

### Send Contact Form Email
```php
require_once 'mailer.php';

try {
    $mailer = new Mailer();
    
    $contactData = [
        'name' => 'John Doe',
        'email' => 'john@example.com',
        'phone' => '+1234567890',
        'service' => 'Wedding Planning',
        'message' => 'Inquiry about wedding services'
    ];
    
    $mailer->sendContactEmail($contactData);
    echo "Email sent successfully!";
    
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
```

### Send Newsletter Confirmation
```php
$mailer->sendNewsletterConfirmation('subscriber@example.com', 'John Smith');
```

### Test SMTP Configuration
```php
$mailer->testConfiguration('your-email@gmail.com');
```

## 📋 Features

###✅ Email Types
- Contact form submissions
- Newsletter confirmations
- Configuration testing
- Custom email templates

### ✅ Security Features
- TLS/SSL encryption
- SMTP authentication
- SSL certificate verification
- Input validation and sanitization

###✅ Error Handling
- Comprehensive exception handling
- Detailed error logging
- User-friendly error messages
- Debug mode support

### ✅ Email Templates
- Professional HTML email designs
- Responsive layouts
- Brand-consistent styling
- Text fallback for non-HTML clients

##⚙ Configuration Options

### SMTP Providers
- **Gmail** - Recommended (smtp.gmail.com:587)
- **Outlook** - (smtp-mail.outlook.com:587)
- **Yahoo** - (smtp.mail.yahoo.com:587)
- **Custom** - Any SMTP server

### Debug Levels
- `0` - No debug output
- `1` - Client messages only
- `2` - Client and server messages

### Security Settings
- SSL certificate verification
- Peer name verification
- Self-signed certificate handling

## Troubleshooting

### Common Issues

**Emails not sending:**
- Check spam/junk folder
- Verify SMTP credentials
- Ensure 2FA is enabled with app password
- Check firewall settings

**Gmail authentication errors:**
- Use App Password, not regular password
- Enable "Less secure app access" (if not using 2FA)
- Check Google account security settings

**Connection timeouts:**
- Verify SMTP host and port
- Check hosting provider SMTP restrictions
- Test with different ports (587, 465, 25)

### Debug Mode
Set `smtp_debug` to `2` in configuration for detailed output.

## 📝 Integration with Contact Forms

### HTML Form Example
```html
<form method="POST" action="process-contact.php">
    <input type="text" name="name" required>
    <input type="email" name="email" required>
    <input type="tel" name="phone" required>
    <select name="service" required>
        <option value="Wedding Planning">Wedding Planning</option>
        <option value="Corporate Events">Corporate Events</option>
    </select>
    <textarea name="message" required></textarea>
    <button type="submit">Send Message</button>
</form>
```

### Processing Script
```php
// process-contact.php
require_once 'mailer.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        $mailer = new Mailer();
        $mailer->sendContactEmail($_POST);
        // Redirect to success page
        header('Location: thank-you.html');
    } catch (Exception $e) {
        // Handle error
        echo "Error: " . $e->getMessage();
    }
}
```

##🔒 Security Best Practices

1. **Never commit credentials** to version control
2. **Use environment variables** for production
3. **Enable SSL/TLS** encryption
4. **Validate all input** data
5. **Implement rate limiting** for forms
6. **Use CAPTCHA** to prevent spam
7. **Log security events** for monitoring

##🆘 Support

For issues or questions:
- Check the error logs
- Enable debug mode
- Test with the provided test interface
- Review PHPMailer documentation

## 📄 License

This code is part of the Xperts Hospitality & Events project and follows the project's licensing terms.

---
*Last updated: February 2026*
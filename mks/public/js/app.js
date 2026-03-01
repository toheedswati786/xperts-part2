// Global JavaScript functions for MK's E-commerce
document.addEventListener('DOMContentLoaded', function() {
    // Initialize all components
    initCartDelete();
    initQuantityButtons();
    initNavigationAnimations();
    initMobileMenu();
});

// Cart item deletion with animation
function initCartDelete() {
    const deleteButtons = document.querySelectorAll('[data-delete-item]');
    
    deleteButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            const itemId = this.getAttribute('data-item-id');
            deleteCartItem(itemId, this);
        });
    });
}

function deleteCartItem(itemId, button) {
    // Add loading state
    const originalContent = button.innerHTML;
    button.innerHTML = '<span class="material-symbols-outlined animate-spin">progress_activity</span>';
    button.disabled = true;
    
    // Find the parent cart item
    const cartItem = button.closest('[data-cart-item]');
    
    if (cartItem) {
        // Add animation classes
        cartItem.classList.add('fade-out');
        
        // Remove after animation completes
        setTimeout(() => {
            cartItem.remove();
            updateCartTotals();
            showNotification('Item removed from cart', 'success');
        }, 300);
    }
    
    // Simulate API call
    setTimeout(() => {
        // Reset button in case animation fails
        button.innerHTML = originalContent;
        button.disabled = false;
    }, 500);
}

// Quantity buttons functionality
function initQuantityButtons() {
    const minusButtons = document.querySelectorAll('[data-quantity-minus]');
    const plusButtons = document.querySelectorAll('[data-quantity-plus]');
    
    minusButtons.forEach(button => {
        button.addEventListener('click', function() {
            const input = this.nextElementSibling;
            let value = parseInt(input.textContent);
            if (value > 1) {
                input.textContent = value - 1;
                updateItemTotal(this.closest('[data-cart-item]'));
                updateCartTotals();
                bounceElement(input);
            }
        });
    });
    
    plusButtons.forEach(button => {
        button.addEventListener('click', function() {
            const input = this.previousElementSibling;
            let value = parseInt(input.textContent);
            if (value < 99) {
                input.textContent = value + 1;
                updateItemTotal(this.closest('[data-cart-item]'));
                updateCartTotals();
                bounceElement(input);
            }
        });
    });
}

function updateItemTotal(cartItem) {
    if (!cartItem) return;
    
    const quantity = parseInt(cartItem.querySelector('[data-quantity-display]').textContent);
    const priceText = cartItem.querySelector('[data-item-price]').textContent;
    const price = parseFloat(priceText.replace('$', ''));
    const total = quantity * price;
    
    const totalElement = cartItem.querySelector('[data-item-total]');
    if (totalElement) {
        totalElement.textContent = `$${total.toFixed(2)}`;
        bounceElement(totalElement);
    }
}

function updateCartTotals() {
    const items = document.querySelectorAll('[data-cart-item]');
    let subtotal = 0;
    let itemCount = 0;
    
    items.forEach(item => {
        const quantity = parseInt(item.querySelector('[data-quantity-display]').textContent);
        const priceText = item.querySelector('[data-item-price]').textContent;
        const price = parseFloat(priceText.replace('$', ''));
        subtotal += quantity * price;
        itemCount += quantity;
    });
    
    // Update subtotal display
    const subtotalElement = document.querySelector('[data-cart-subtotal]');
    if (subtotalElement) {
        subtotalElement.textContent = `$${subtotal.toFixed(2)}`;
        bounceElement(subtotalElement);
    }
    
    // Update item count in header
    const itemCountElement = document.querySelector('[data-cart-count]');
    if (itemCountElement) {
        itemCountElement.textContent = itemCount;
        bounceElement(itemCountElement);
    }
    
    // Update total (subtotal + shipping + tax)
    const totalElement = document.querySelector('[data-cart-total]');
    if (totalElement) {
        const shipping = 15.00; // Example shipping cost
        const tax = subtotal * 0.08; // Example 8% tax
        const total = subtotal + shipping + tax;
        totalElement.textContent = `$${total.toFixed(2)}`;
        bounceElement(totalElement);
    }
}

// Navigation animations
function initNavigationAnimations() {
    const navLinks = document.querySelectorAll('nav a');
    
    navLinks.forEach(link => {
        link.addEventListener('mouseenter', function() {
            this.classList.add('bounce-in');
        });
        
        link.addEventListener('animationend', function() {
            this.classList.remove('bounce-in');
        });
    });
}

// Mobile menu toggle
function initMobileMenu() {
    const menuButton = document.querySelector('[data-mobile-menu-toggle]');
    const mobileMenu = document.querySelector('[data-mobile-menu]');
    
    if (menuButton && mobileMenu) {
        menuButton.addEventListener('click', function() {
            mobileMenu.classList.toggle('hidden');
            this.querySelector('span').textContent = 
                mobileMenu.classList.contains('hidden') ? 'menu' : 'close';
        });
    }
}

// Utility functions
function bounceElement(element) {
    element.classList.add('bounce-in');
    setTimeout(() => {
        element.classList.remove('bounce-in');
    }, 500);
}

function showNotification(message, type = 'info') {
    // Create notification element
    const notification = document.createElement('div');
    notification.className = `fixed top-4 right-4 z-50 px-6 py-4 rounded-lg shadow-lg text-white font-medium ${type === 'success' ? 'bg-green-500' : 'bg-blue-500'}`;
    notification.textContent = message;
    
    // Add animation classes
    notification.classList.add('translate-x-full');
    document.body.appendChild(notification);
    
    // Animate in
    setTimeout(() => {
        notification.classList.remove('translate-x-full');
        notification.classList.add('translate-x-0');
    }, 10);
    
    // Remove after delay
    setTimeout(() => {
        notification.classList.add('translate-x-full');
        setTimeout(() => {
            notification.remove();
        }, 300);
    }, 3000);
}

// Form validation
function validateForm(form) {
    const inputs = form.querySelectorAll('input, textarea, select');
    let isValid = true;
    
    inputs.forEach(input => {
        if (input.hasAttribute('required') && !input.value.trim()) {
            input.classList.add('border-red-500');
            isValid = false;
        } else {
            input.classList.remove('border-red-500');
        }
    });
    
    return isValid;
}

// Smooth scrolling
function scrollToSection(sectionId) {
    const element = document.getElementById(sectionId);
    if (element) {
        element.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
        });
    }
}

// Expose global functions
window.deleteCartItem = deleteCartItem;
window.scrollToSection = scrollToSection;
window.validateForm = validateForm;
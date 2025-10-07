// Form validation for contact forms
document.addEventListener('DOMContentLoaded', function() {
    // Newsletter form validation
    const newsletterForms = document.querySelectorAll('#newsletter-form');
    newsletterForms.forEach(form => {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            const email = this.querySelector('input[type="email"]').value;
            
            if (validateEmail(email)) {
                alert('Thank you for subscribing to our newsletter!');
                this.reset();
            } else {
                alert('Please enter a valid email address.');
            }
        });
    });
    
    // Footer contact form validation
    const footerContactForms = document.querySelectorAll('#footer-contact-form');
    footerContactForms.forEach(form => {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            const name = this.querySelector('input[type="text"]').value;
            const email = this.querySelector('input[type="email"]').value;
            const subject = this.querySelectorAll('input[type="text"]')[1].value;
            const message = this.querySelector('textarea').value;
            
            if (validateForm(name, email, subject, message)) {
                alert('Thank you for your message. We will get back to you soon!');
                this.reset();
            } else {
                alert('Please fill in all fields correctly.');
            }
        });
    });
    
    // Contact page form validation
    const contactForm = document.getElementById('contact-form');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const phone = document.getElementById('phone').value;
            const subject = document.getElementById('subject').value;
            const message = document.getElementById('message').value;
            
            if (validateContactForm(name, email, phone, subject, message)) {
                alert('Thank you for your inquiry. We will respond as soon as possible.');
                this.reset();
            } else {
                alert('Please fill in all fields correctly.');
            }
        });
    }
    
    // Book Now buttons functionality
    const bookNowButtons = document.querySelectorAll('.book-now');
    bookNowButtons.forEach(button => {
        button.addEventListener('click', function() {
            const roomName = this.closest('.room-card').querySelector('h3').textContent;
            alert(`Thank you for your interest in our ${roomName}. You will be redirected to our booking system.`);
            // In a real application, this would redirect to a booking page
            // window.location.href = 'booking.html';
        });
    });
    
    // Email validation function
    function validateEmail(email) {
        const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return re.test(email);
    }
    
    // Form validation function for footer contact form
    function validateForm(name, email, subject, message) {
        return name.trim() !== '' && validateEmail(email) && subject.trim() !== '' && message.trim() !== '';
    }
    
    // Form validation function for contact page form
    function validateContactForm(name, email, phone, subject, message) {
        const phoneRegex = /^[\+]?[1-9][\d]{0,15}$/;
        return name.trim() !== '' && validateEmail(email) && phoneRegex.test(phone) && subject.trim() !== '' && message.trim() !== '';
    }
    
    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
    
    // Add active class to current page in navigation
    const currentLocation = location.href;
    const menuItems = document.querySelectorAll('nav ul li a');
    const menuLength = menuItems.length;
    
    for (let i = 0; i < menuLength; i++) {
        if (menuItems[i].href === currentLocation) {
            menuItems[i].className = 'active';
        }
    }
});
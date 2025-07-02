<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <style>
        /* Reset and global styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            background: #0056b3;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            overflow: hidden;
        }

        .container {
            background-color: rgba(0, 0, 0, 0.7);
            border-radius: 20px;
            padding: 20px;
            /* Reduced padding for compactness */
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
            width: 90%;
            /* Responsive width */
            max-width: 500px;
            /* Set a max width */
            text-align: center;
            animation: fadeIn 1s ease-in-out;
            overflow: hidden;
            /* Prevent overflow */
        }

        .header h1 {
            font-size: 30px;
            /* Reduced font size */
            margin-bottom: 10px;
            color: cyan;
            /* Yellow */
            animation: slideIn 0.5s forwards;
        }

        .header p {
            font-size: 16px;
            /* Adjusted font size */
            margin-bottom: 20px;
            /* Reduced margin */
            animation: fadeIn 0.7s forwards;
        }

        /* Form Styles */
        .contact-form {
            display: flex;
            flex-direction: column;
        }

        .form-group {
            position: relative;
        }

        .form-group label {
            font-size: 14px;
            color: cyan;
            /* Yellow */
            margin-bottom: 5px;
            display: block;
            opacity: 0;
            animation: fadeIn 0.5s forwards;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 12px;
            border: 2px solid cyan;
            /* Yellow */
            border-radius: 10px;
            font-size: 16px;
            outline: none;
            transition: border-color 0.3s ease;
            background: rgba(255, 255, 255, 0.1);
            color: #fff;
        }

        .form-group input:focus,
        .form-group textarea:focus {
            border-color: #00ff00;
            /* Green */
            box-shadow: 0 0 5px #00ff00;
        }

        .form-group .error {
            color: #ff4e50;
            /* Red */
            font-size: 12px;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .form-group .error.active {
            opacity: 1;
        }

        .submit-btn {
            background: #007bff;
            /* Blue */
            color: #fff;
            padding: 12px;
            /* Reduced padding */
            border: none;
            margin-top: 1rem;
            border-radius: 10px;
            font-size: 16px;
            /* Reduced font size */
            cursor: pointer;
            transition: background 0.3s;
        }

        .submit-btn:hover {
            background: #0056b3;
            /* Darker Blue */
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes slideIn {
            from {
                transform: translateX(-100%);
            }

            to {
                transform: translateX(0);
            }
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            body{
                padding: 0 0 4rem 0;
            }
            .container {
                padding: 12px;
            }

            .header h1 {
                font-size: 26px;
                /* Smaller title on small screens */
                margin-bottom: 5px;
                margin-top: 2px;
            }

            .header p {
                font-size: 14px;
                /* Smaller description on small screens */
                margin-bottom: 10px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>Contact Us</h1>
            <p>We'd love to hear from you! Please fill out the form below.</p>
        </div>
        <form class="contact-form" id="contactForm">
            <div class="form-group">
                <label for="firstName">First Name*</label>
                <input type="text" id="firstName" required>
                <span class="error" id="firstNameError">Please enter your first name.</span>
            </div>
            <div class="form-group">
                <label for="lastName">Last Name*</label>
                <input type="text" id="lastName" required>
                <span class="error" id="lastNameError">Please enter your last name.</span>
            </div>
            <div class="form-group">
                <label for="mobile">Mobile Number*</label>
                <input type="tel" id="mobile" required>
                <span class="error" id="mobileError">Please enter a valid mobile number.</span>
            </div>
            <div class="form-group">
                <label for="email">Email*</label>
                <input type="email" id="email" required>
                <span class="error" id="emailError">Please enter a valid email address.</span>
            </div>
            <div class="form-group">
                <label for="remarks">Extra Remarks (Optional)</label>
                <textarea id="remarks" placeholder="Any additional information..."></textarea>
            </div>
            <button type="submit" class="submit-btn">Send Message</button>
        </form>
    </div>

    <script>
       document.getElementById('contactForm').addEventListener('submit', function (event) {
    event.preventDefault();

    // Collect form data
    const firstName = document.getElementById('firstName').value.trim();
    const lastName = document.getElementById('lastName').value.trim();
    const mobile = document.getElementById('mobile').value.trim();
    const email = document.getElementById('email').value.trim();
    const remarks = document.getElementById('remarks').value.trim();

    // Validate form data (reuse existing validation code)
    let isValid = true;

    if (!firstName) {
        document.getElementById('firstNameError').classList.add('active');
        isValid = false;
    }

    if (!lastName) {
        document.getElementById('lastNameError').classList.add('active');
        isValid = false;
    }

    if (!mobile || !/^\d{10,15}$/.test(mobile)) {
        document.getElementById('mobileError').classList.add('active');
        isValid = false;
    }

    if (!email || !/\S+@\S+\.\S+/.test(email)) {
        document.getElementById('emailError').classList.add('active');
        isValid = false;
    }

    if (!isValid) return;

    // Send data to the Node.js server
    fetch('http://localhost:3000/send-email', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({
            firstName,
            lastName,
            mobile,
            email,
            remarks,
        }),
    })
    .then(response => response.json())
    .then(data => {
        if (data.message === 'Email sent successfully!') {
            alert('Your message has been sent!');
            document.getElementById('contactForm').reset();
        } else {
            alert('Failed to send your message.');
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert('An error occurred. Please try again.');
    });
});

    </script>
</body>

</html>
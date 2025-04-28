<?php
    include("header.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Registration</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: 'Roboto', Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: black;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            display: flex;
            width: 800px;
            height: 600px;
            background-color: rgba(255, 255, 255, 0.9); /* Semi-transparent background */
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        .left-section {
            flex: 1;
            background-color: #6a11cb;
            color: #ffffff;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        .left-section h2 {
            font-size: 2em;
            margin-bottom: 10px;
        }
        .left-section p {
            font-size: 1em;
            margin-bottom: 20px;
        }
        .left-section button {
            background-color: #ffffff;
            color: #6a11cb;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1em;
            transition: background-color 0.3s ease;
        }
        .left-section button:hover {
            background-color: #e6e6e6;
        }
        .right-section {
            flex: 1;
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .right-section h3 {
            font-size: 1.8em;
            color: #6a11cb;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1em;
        }
        .form-group input:focus {
            outline: none;
            border-color: #6a11cb;
            box-shadow: 0 0 5px rgba(74, 144, 226, 0.5);
        }
        .btn {
            background-color: #6a11cb;
            color: #ffffff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1em;
            width: 100%;
            transition: background-color 0.3s ease;
        }
        .btn:hover {
            background-color: #357ab8;
        }
        .login-link {
            text-align: center;
            margin-top: 15px;
        }
        .login-link a {
            color: #6a11cb;
            text-decoration: none;
        }
        .login-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Left Section -->
        <div class="left-section">
            <h2>Welcome Back!</h2>
            <p>Already have an account?</p>
            <button onclick="window.location.href='admin_login.html'">Login</button>
        </div>

        <!-- Right Section -->
        <div class="right-section">
            <h3>Admin Registration</h3>
            <form id="adminRegistrationForm">
                <div class="form-group">
                    <label for="admin-name">Admin Name</label>
                    <input type="text" id="admin-name" name="admin-name" placeholder="Enter your name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email" required>
                </div>
                <div class="form-group">
                    <label for="contact">Contact Number</label>
                    <input type="text" id="contact" name="contact" placeholder="Enter your contact number" required>
                </div>
                
                <button type="submit" class="btn">Register</button>
            </form>
        </div>
    </div>
</body>
</html>
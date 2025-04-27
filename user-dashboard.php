<?php
    include("header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: 'Roboto', Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f7fb;
            color: #333;
        }
        .dashboard-container {
            display: flex;
            min-height: 100vh;
        }
        /* Sidebar Styling */
        .sidebar {
            width: 250px;
            background-color: #2c3e50;
            color: #ecf0f1;
            padding: 20px;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
            position: fixed;
            top: 0;
            bottom: 0;
            overflow-y: auto;
        }
        .sidebar h2 {
            font-size: 1.8em;
            text-align: center;
            margin-bottom: 20px;
            color: #ecf0f1;
        }
        .sidebar-links {
            list-style: none;
            padding: 0;
        }
        .sidebar-links li {
            margin: 15px 0;
        }
        .sidebar-links li a {
            text-decoration: none;
            color: #ecf0f1;
            font-weight: bold;
            display: flex;
            align-items: center;
            padding: 10px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .sidebar-links li a:hover {
            background-color: #34495e;
        }
        .sidebar-links li a i {
            margin-right: 10px;
            font-size: 1.2em;
        }
        /* Main Content Styling */
        .main-content {
            flex: 1;
            margin-left: 270px;
            padding: 20px;
        }
        .card {
            background-color: #ffffff;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
        }
        .card h3 {
            font-size: 1.5em;
            color: #3498db;
            margin-bottom: 10px;
        }
        .card p {
            font-size: 1em;
            color: #555;
            margin-bottom: 15px;
        }
        .btn {
            background-color: #3498db;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1em;
            transition: background-color 0.3s ease;
        }
        .btn:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <div class="dashboard-container">
        <!-- Sidebar -->
        <aside class="sidebar">
            <h2><i class="fas fa-user-circle"></i> User Dashboard</h2>
            <ul class="sidebar-links">
                <li><a href="#personal-details"><i class="fas fa-user"></i> Personal Details</a></li>
                <li><a href="#manage-listings"><i class="fas fa-list"></i> Manage Listings</a></li>
                <li><a href="#donation-history"><i class="fas fa-hand-holding-usd"></i> Donation & Purchase History</a></li>
                <li><a href="#saved-items"><i class="fas fa-bookmark"></i> Saved Items</a></li>
                <li><a href="#messages"><i class="fas fa-envelope"></i> Messages & Notifications</a></li>
                <li><a href="#volunteer-status"><i class="fas fa-hands-helping"></i> Volunteer Status</a></li>
                <li><a href="#settings"><i class="fas fa-cog"></i> Settings & Security</a></li>
                <li><a href="#feedback"><i class="fas fa-star"></i> Feedback & Rating</a></li>
            </ul>
        </aside>

        <!-- Main Content -->
        <main class="main-content">
            <div class="card" id="personal-details">
                <h3>Personal Details</h3>
                <p><strong>Name:</strong> John Doe</p>
                <p><strong>Contact Info:</strong> john.doe@example.com</p>
                <p><strong>Address:</strong> 123 Main Street, City, Country</p>
            </div>

            <div class="card" id="manage-listings">
                <h3>Manage Listings</h3>
                <p>View, edit, or delete your uploaded products.</p>
                <button class="btn">View Listings</button>
            </div>

            <div class="card" id="donation-history">
                <h3>Donation & Purchase History</h3>
                <p>Track your past donations and purchases.</p>
                <button class="btn">View History</button>
            </div>

            <div class="card" id="saved-items">
                <h3>Saved Items</h3>
                <p>View your wishlist or bookmarked products.</p>
                <button class="btn">View Saved Items</button>
            </div>

            <div class="card" id="messages">
                <h3>Messages & Notifications</h3>
                <p>Chat with buyers, sellers, and NGOs.</p>
                <button class="btn">View Messages</button>
            </div>

            <div class="card" id="volunteer-status">
                <h3>Volunteer Status</h3>
                <p>Track your disaster relief or NGO participation.</p>
                <button class="btn">View Status</button>
            </div>

            <div class="card" id="settings">
                <h3>Settings & Security</h3>
                <p>Change your password, account preferences, or delete your account.</p>
                <button class="btn">Go to Settings</button>
            </div>

            <div class="card" id="feedback">
                <h3>Feedback & Rating</h3>
                <p>Share your feedback or rate our platform.</p>
                <button class="btn">Submit Feedback</button>
            </div>
        </main>
    </div>
</body>
</html>
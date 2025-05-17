<?php include("header.php"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Buy Now - Product Name</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: gray;
            margin: 0;
            padding: 0;
            min-height: 100vh;
        }
        .buy-now-container {
            max-width: 500px;
            margin: 48px auto;
            background: #fff;
            border-radius: 18px;
            box-shadow: 0 8px 32px rgba(0,0,0,0.13);
            padding: 36px 30px 28px 30px;
            animation: fadeIn 0.7s;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(30px);}
            to { opacity: 1; transform: none;}
        }
        .product-info {
            text-align: center;
            margin-bottom: 28px;
        }
        .product-info img {
            width: 170px;
            border-radius: 12px;
            margin-bottom: 12px;
            box-shadow: 0 2px 12px rgba(0,0,0,0.09);
        }
        .product-info h2 {
            margin: 10px 0 5px 0;
            font-size: 1.6rem;
            color: #f97316;
            font-weight: 600;
        }
        .product-info p {
            margin: 4px 0;
            color: #444;
        }
        form {
            display: flex;
            flex-direction: column;
            gap: 18px;
        }
        label {
            font-weight: 500;
            margin-bottom: 4px;
            color: #333;
        }
        input, textarea, select {
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 7px;
            font-size: 1rem;
            background: #fafafa;
            transition: border 0.2s;
        }
        input:focus, textarea:focus, select:focus {
            border: 1.5px solid #f97316;
            outline: none;
        }
        textarea {
            resize: vertical;
            min-height: 60px;
        }
        .payment-modes {
            display: flex;
            gap: 18px;
        }
        .payment-modes label {
            font-weight: 400;
            margin-bottom: 0;
            display: flex;
            align-items: center;
            gap: 6px;
        }
        button[type="submit"] {
            background: linear-gradient(90deg, #f97316 60%, #ff2d6c 100%);
            color: #fff;
            border: none;
            padding: 14px 0;
            border-radius: 7px;
            font-size: 1.15rem;
            font-weight: 600;
            cursor: pointer;
            margin-top: 10px;
            box-shadow: 0 2px 8px rgba(249,115,22,0.08);
            transition: background 0.2s, transform 0.2s;
        }
        button[type="submit"]:hover {
            background: linear-gradient(90deg, #ff2d6c 60%, #f97316 100%);
            transform: translateY(-2px) scale(1.03);
        }
        @media (max-width: 600px) {
            .buy-now-container {
                padding: 18px 6vw;
            }
            .product-info img {
                width: 100px;
            }
        }
    </style>
</head>
<body>
    <div class="buy-now-container">
        <div class="product-info">
            <img src="https://via.placeholder.com/170x120.png?text=Product+Image" alt="Product Image">
            <h2>Product Name</h2>
            <p><strong>Price:</strong> ₹999</p>
            <p><strong>Category:</strong> Electronics</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi.</p>
        </div>
        <form>
            <label for="address">Delivery Address</label>
            <textarea name="address" id="address" placeholder="Enter your full delivery address" required></textarea>
            
            <label for="phone">Phone Number</label>
            <input type="tel" name="phone" id="phone" placeholder="e.g. 9876543210" pattern="[0-9]{10}" maxlength="10" required>
            
            <label>Payment Mode</label>
            <div class="payment-modes">
                <label><input type="radio" name="payment_mode" value="COD" checked> Cash on Delivery</label>
                <label><input type="radio" name="payment_mode" value="UPI"> UPI</label>
                <label><input type="radio" name="payment_mode" value="Card"> Card</label>
            </div>
            
            <button type="submit">Confirm Purchase</button>
        </form>
    </div>
</body>
</html>
<?php include("footer.php"); 
?>
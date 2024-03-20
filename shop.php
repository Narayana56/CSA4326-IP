<?php
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$conn = new mysqli('localhost', 'root', '', 'shop_db');
$stmt = $conn->prepare("insert into shoplog(username, email, password) values (?, ?, ?)");
$stmt->bind_param("sss", $username, $email, $password);
$stmt->execute();
$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Gadget Store</title>
</head>
<body>
    <header>
        <h1>Welcome to our Online Gadget Store</h1>
        <!-- Add navigation links here -->
    </header>

    <main>
        <section id="categories">
            <h2>Categories</h2>
            <ul>
                <li><a href="#phones">Phones</a></li>
                <li><a href="#laptops">Laptops</a></li>
                <li><a href="#tablets">Tablets</a></li>
                <!-- Add more categories as needed -->
            </ul>
        </section>

        <section id="subcategories">
            <h2>Subcategories</h2>
            <ul>
                <li><a href="#iphone">iPhone</a></li>
                <li><a href="#samsung">Samsung</a></li>
                <li><a href="#macbook">Macbook</a></li>
                <!-- Add more subcategories as needed -->
            </ul>
        </section>

        <section id="products">
            <h2>Featured Products</h2>
            <!-- Placeholder for product listings -->
            <div class="product">
                <h3>Product Name</h3>
                <p>Description: Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <p>Price: $XX.XX</p>
                <button>Add to Cart</button>
            </div>
            <!-- Repeat this block for each product -->
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Online Gadget Store. All rights reserved.</p>
        <a href="logout.php"><button class="btn btn-danger">Logout</button></a>
    </footer>
</body>
</html>

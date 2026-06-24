<?php
// Include database connection
require "config.php";

// SQL query
$sql = "SELECT * FROM products";

// Execute query
$stmt = $pdo->query($sql);

// Store all rows inside an array
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Simple Store</title>

    <style>

        body{
            font-family: Arial;
        }

        .container{
            display:flex;
            gap:20px;
        }

        .card{
            border:1px solid gray;
            padding:15px;
            width:250px;
        }

    </style>
</head>
<body>

<h1>Products</h1>

<a href="cart.php">View Cart</a>

<div class="container">

<?php foreach($products as $product){ ?>

    <div class="card">

        <h3>
            <?php echo $product["name"]; ?>
        </h3>

        <p>
            ₹<?php echo $product["price"]; ?>
        </p>

        <p>
            <?php echo $product["description"]; ?>
        </p>

        <!-- Form sends product id to cart.php -->
        <form action="cart.php" method="POST">

            <input
                type="hidden"
                name="product_id"
                value="<?php echo $product["id"]; ?>"
            >

            <button type="submit">
                Add To Cart
            </button>

        </form>

    </div>

<?php } ?>

</div>

</body>
</html>

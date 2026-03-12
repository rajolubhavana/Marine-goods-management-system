<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
<title>View Products</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">

<h2>Available Marine Products</h2>

<table border="1">
<tr>
<th>ID</th>
<th>Name</th>
<th>Category</th>
<th>Price</th>
<th>Stock</th>
<th>Delete</th>
</tr>

<?php
$result=$conn->query("SELECT * FROM products");
while($row=$result->fetch_assoc()){
echo "<tr>
<td>{$row['id']}</td>
<td>{$row['product_name']}</td>
<td>{$row['category']}</td>
<td>{$row['price']}</td>
<td>{$row['stock_quantity']}</td>
<td><a href='delete_product.php?id={$row['id']}'>Delete</a></td>
</tr>";
}
?>

</table>

</div>
</body>
</html>
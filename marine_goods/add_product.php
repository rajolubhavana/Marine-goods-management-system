<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
<title>Add Product</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">

<h2>Add Marine Product</h2>

<form method="POST">

<label>Select Product</label><br>
<select name="name" required>
    <option value="">--Select Product--</option>
    <option value="Fish">Fish</option>
    <option value="Prawns">Prawns</option>
    <option value="Crab">Crab</option>
    <option value="Lobster">Lobster</option>
</select>

<br>

<label>Select Category</label><br>
<select name="category" required>
    <option value="">--Select Category--</option>
    <option value="Seafood">Seafood</option>
    <option value="Shellfish">Shellfish</option>
</select>

<br>

<label>Select Price</label><br>
<select name="price" required>
    <option value="">--Select Price--</option>
    <option value="300">300</option>
    <option value="400">400</option>
    <option value="500">500</option>
    <option value="600">600</option>
</select>

<br>

<label>Select Stock Quantity</label><br>
<select name="stock" required>
    <option value="">--Select Stock--</option>
    <option value="10">10</option>
    <option value="20">20</option>
    <option value="30">30</option>
    <option value="50">50</option>
</select>

<br>

<input type="submit" name="submit" value="Add Product">

</form>

<?php
if(isset($_POST['submit'])){
$name=$_POST['name'];
$category=$_POST['category'];
$price=$_POST['price'];
$stock=$_POST['stock'];

$sql="INSERT INTO products(product_name,category,price,stock_quantity)
VALUES('$name','$category','$price','$stock')";

if($conn->query($sql)==TRUE){
echo "<p style='color:yellow;'>Product Added Successfully!</p>";
}
}
?>

</div>
</body>
</html>
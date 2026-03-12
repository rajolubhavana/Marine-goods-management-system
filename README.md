**Marine Goods Management System**

**Prjoect Overview**

The Marine Goods Management System is a database-driven web application designed to manage marine products, suppliers, customer orders, and inventory efficiently. The system replaces manual record keeping with a structured digital solution that allows users and administrators to interact with marine goods data in an organized and secure way.

The application demonstrates the integration of frontend design, backend logic, and database management to build a functional management system.

**Database Entities**

The system includes the following entities:

Supplier

Product

Customer

Orders

Order Details

Shipment

Warehouse

Inventory

Payment

Employee

**Key Features**

Manage marine goods and supplier information

Place and track customer orders

Inventory and warehouse management

Shipment tracking system

Admin control panel for system management

**Step 1: Install XAMPP**

Download and install XAMPP.

After installation, open the XAMPP Control Panel.

Start the following services:

Apache

MySQL

When both show green, the server is running.

**Step 2: Create Project Folder**

Open the XAMPP installation folder.

Go to the htdocs folder.

Example path:

C:\xampp\htdocs

Create a new folder:

marine_goods_system

**Step 3: Create Project Files**

Inside the folder create these files:

marine_goods_system
│
├── index.php
├── db.php
├── add_product.php
├── view_products.php
├── delete_product.php
└── style.css
**Step 4: Create the Database**

Open a browser.

Go to:

http://localhost/phpmyadmin

Click New.

Create database:

marine_goods
**Step 5: Create Tables**

Run this SQL query inside the database:

CREATE TABLE products (
product_id INT AUTO_INCREMENT PRIMARY KEY,
product_name VARCHAR(100),
category VARCHAR(100),
price DECIMAL(10,2),
quantity INT
);

CREATE TABLE suppliers (
supplier_id INT AUTO_INCREMENT PRIMARY KEY,
supplier_name VARCHAR(100),
contact VARCHAR(50),
email VARCHAR(100)
);

CREATE TABLE customers (
customer_id INT AUTO_INCREMENT PRIMARY KEY,
customer_name VARCHAR(100),
phone VARCHAR(20),
city VARCHAR(100)
);

CREATE TABLE orders (
order_id INT AUTO_INCREMENT PRIMARY KEY,
customer_id INT,
order_date DATE,
total_amount DECIMAL(10,2)
);
**Step 6: Create Database Connection File**

**Create db.php**

<?php
$conn = mysqli_connect("localhost","root","","marine_goods");

if(!$conn){
    echo "Database Connection Failed";
}
?>
**Step 7: Create Main Page**

**Create index.php**

<!DOCTYPE html>
<html>
<head>
<title>Marine Goods Management System</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<h1>Marine Goods Management System</h1>

<a href="add_product.php">Add Product</a>
<a href="view_products.php">View Products</a>

</body>
</html>
**Step 8: Add Product Page**

Create add_product.php

<?php
include 'db.php';

if(isset($_POST['submit'])){

$name=$_POST['name'];
$category=$_POST['category'];
$price=$_POST['price'];
$quantity=$_POST['quantity'];

mysqli_query($conn,"INSERT INTO products(product_name,category,price,quantity)
VALUES('$name','$category','$price','$quantity')");
}
?>

<form method="post">

Product Name
<input type="text" name="name">

Category
<input type="text" name="category">

Price
<input type="number" name="price">

Quantity
<input type="number" name="quantity">

<button name="submit">Add Product</button>

</form>
**Step 9: View Products**

**Create view_products.php**

<?php
include 'db.php';

$result=mysqli_query($conn,"SELECT * FROM products");

while($row=mysqli_fetch_assoc($result)){
echo $row['product_name']." - ".$row['price']."<br>";
}
?>
**Step 10: Run the Project**

Open browser and go to:

http://localhost/marine_goods_system

Your project will open.

**Future Enhancements**

User role management

Real-time order tracking

Notification system

Cloud database integration

Analytics dashboard

Multi-language interface

**Conclusion**

The Marine Goods Management System provides a structured and efficient solution for managing marine goods data. By integrating web technologies with a relational database, the system improves product tracking, order management, and inventory control while ensuring data consistency and scalability.

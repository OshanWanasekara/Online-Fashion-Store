<?php
include '../includes/config.php'; // Database Connection

if (isset($_POST['addItem'])) {
    // Retrieve form data
    $productName = $_POST["pname"];
    $price = $_POST["price"];
    $quantity = $_POST["qty"];
    $productCode = $_POST["pCode"];

    $img = $_FILES['img']['name'];
    $imgTmp = $_FILES['img']['tmp_name'];

    // Set the target directory for uploading the brand logo
    $targetDirectory = "../assets/images/uploads/";

     // Generate a unique filename for the brand logo
     $brandLogoFileName = uniqid() . '_' . $img;

     // Set the target path for the brand logo
    $targetFilePath = $targetDirectory . $brandLogoFileName;

    // Move the uploaded brand logo to the target directory
    if (move_uploaded_file($imgTmp, $targetFilePath)) {

        $sql = "INSERT INTO product (product_name, product_price, product_image, product_code, qty) 
                VALUES ('$productName', '$price', '$brandLogoFileName', '$productCode', '$quantity')"; // <-- Add closing parenthesis here

        if ($conn->query($sql) === TRUE) {
            header('Location: products.php');
            exit();
        } else {
            header('Location: products.php');
            exit();
        }
    } 
}
?>

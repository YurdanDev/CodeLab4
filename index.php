<?php

// Include the necessary files using the correct paths
include "Controller/BaseController.php";
include "Traits/ResponseFormatter.php";
include "Controller/ProductController.php";

use Controller\ProductController;

// Instantiate the class using the correct namespace
$productController = new ProductController;

// Call the getAllProduct method
$response = $productController->getAllProduct();

// Output the response for testing
header('Content-Type: application/json');
echo $response;
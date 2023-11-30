<?php

include "Traits/LoggerTrait.php";
include "Products/Product.php";
include "Products/PhoneProduct.php";
include "Products/LaptopProduct.php";

use Products\PhoneProduct;
use Products\LaptopProduct;

// Usage example
$phone = new PhoneProduct("Smartphone", 800, "XYZ");
$laptop = new LaptopProduct("UltraBook", 1200, "Intel i7");

// Display product information as JSON
echo $phone . PHP_EOL;
echo $laptop . PHP_EOL;

// Log some messages using the LoggerTrait
$phone->log("Phone added to the inventory.");
$laptop->log("Laptop added to the inventory.");

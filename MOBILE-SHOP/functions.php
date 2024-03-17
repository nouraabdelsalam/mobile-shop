<?php

 //require MySQL connection
 require('database/DBcontroller.php');

 //require product class
 require('database/Product.php');

 //require Cart class
 require('database/Cart.php');

 //DBcontroller object
 $db = new DBcontroller();

 //product object
 $product = new product($db);
 $product_shuffle = $product->getData();

 //Cart object
 $Cart = new Cart($db);






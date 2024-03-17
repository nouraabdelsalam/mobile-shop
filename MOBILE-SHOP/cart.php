<?php
ob_start();
// include header.php file
include ('header.php');
?>

<?php

    /*  include cart items if it is not empty */
        count($product->getData('cart')) ? include ('templates/cart-template.php') :  include ('templates/notFound/cart_notFound.php');
    /*  include cart items if it is not empty */

        /*  include top sale section */
        count($product->getData('wishlist')) ? include ('templates/wishlist_timplate.php') :  include ('templates/notFound/wishlist_notFound.php');
        /*  include top sale section */


    /*  include top sale section */
        include ('templates/new-phones.php');
    /*  include top sale section */

?>

<?php
// include footer.php file
include ('footer.php');
?>
<?php

    /* 
     * Name: Richard Boyd
     * Date: 2/21/20
     */

    // get data from form 
   $cookie_size = filter_input(INPUT_POST,'cookie_size');
   $quantity = filter_input(INPUT_POST,'quantity');
   $overnightdelivery = filter_input(INPUT_POST,'overnightdelivery');
   
    

    // validate must be valid number and greater than 0
   if($cookie_size == FALSE || $cookie_size == NULL){
       $error_message = 'Please select cookie size';
   } else {
       $error_message = '';
   }
   if($quantity < 0){
       $error_message = 'Number of size desired must be greater than zero.';
   } else {
       $error_message = '';
   }
   if (isset($_POST['overnightdelivery'])){
       $overnightdelivery = 12.00;
   } else {
       $overnightdeliver = 0;
   }
  
    // if an error message exists, go to the CookieShop.php page
    if ($error_message != '') {
        include('CookieShop.php');
        exit(); }
        
    if($cookie_size == '1/2dozen'){
        $price = 3.00;
    } 
    else if($cookie_size == '1dozen'){
        $price = 5.50;
    } 
    else if($cookie_size == '2dozen'){
        $price = 11.00;
    }
    // calculate total store in totalaftertax
     $totalbeforetax = ($price * $quantity) + $overnightdelivery;
     $tax = 0.05 * $totalbeforetax; 
     $totalaftertax = $totalbeforetax + $tax;
        
    
    
    // format total string
    $tax_f = '$'. number_format($tax, 2);
    $totalaftertax_f = '$'. number_format($totalaftertax, 2);
    include('CookieShop.php');
    exit();
    ?>
</body>
</html>

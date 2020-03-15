<!DOCTYPE html>
<!--
Name: Richard Boyd
Date: 2/21/20

-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cookie Shop</title>
    </head>
    <body>
        <h1>Cookie Shop</h1>
        <?php if (!empty($error_message)) { ?>
            <p class="error"><?php echo 'Error: '.htmlspecialchars($error_message); ?></p>
        <?php } ?>
        <form action="process_cookies.php" method="post">
           <div id ="cookies"
                <label for="cookie_size">Choose Size: </label>
                <select id = "cookie_size" name="cookie_size">
                    <option value="1/2dozen">1/2 dozen($3.00)</option>
                    <option value="1dozen">1 dozen($5.50)</option>
                    <option value="2dozen">2 dozen($11.00)</option>  
               </select>
            </div>
            <br>
            <div id="size">
             <label>Quantity of size desired:  </label>
             <input type="text" name="quantity">
            </div>
            <br>
             <label>Overnight delivery</label>
             <input type="checkbox" name="overnightdelivery">
             <br>
             <br>
            <input type="submit" value="Submit">
         </form>
            <p>
                <?php if(isset($totalaftertax)){
                    echo 'Tax due: ' .htmlspecialchars($tax_f);
                    echo nl2br("\n");
                    echo 'Total cost: '.htmlspecialchars($totalaftertax_f);
                }
                ?>
            </p>
        
    </body>
</html>


<!DOCTYPE HTML>
<html>
    <header>
        <title>Process Newsletter</title>
    </header>
    
    <body>
        <h1>Newsletter Sign Up</h1>
        
        <?php
         $email = htmlspecialchars($_Post["email"]);
         
         echo "Email: " . $email . "<br />";
        ?>
    </body>
</html>
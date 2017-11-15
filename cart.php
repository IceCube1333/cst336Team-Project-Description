<?php
session_start();
// include 'addCart.php';
    //pushes id into cart, id is the name of the item
    //array_push($_SESSION['cart'], $_GET['id']);
    // $_SESSION['cart'];
    
    // foreach ($_SESSION['cart'] as $items) {
    //     // echo $_SESSION['cart'];
    //     echo "What's up dog";
    // }
?>


<html>
    <head>
        <title>Online Store</title>
        <link rel="stylesheet" href="css/styles.css" type="text/css" />
        <link href="functions.php"/>
    </head>
    
    <body>
        <header>
            <h1>Welcome!</h1>
            <br>
            <form>
                <input type="submit" name="ani" value="Anime">
                <input type="submit" name="elec" value="Electronics">
                <input type="submit" name="app" value="Apparel">
            </form>
            <h3>Your Cart:</h3>
        </header>
        
        <div id="wrapper">
            
            <?php
                    
                    
                    foreach ($_SESSION['cart'] as $value) {
                        echo "$value <br>";
                    }
                
    
                    if($_GET[ani]) {
                        header("Location: anime.php");
                    }
                    if($_GET[elec]) {
                        header("Location: electronics.php");
                    }
                    if($_GET[app]) {
                        header("Location: apparel.php");
                    }
            ?>
        
        </div>
        
    </body>
</html>
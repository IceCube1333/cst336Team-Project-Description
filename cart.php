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
            <h3>Your Cart:</h3>
        </header>
        
        <div id="wrapper">
            <?php
            
                    foreach($_SESSION['cart'] as $item) {
                        echo $_SESSION['cart'][0];
                        // echo $_SESSION['cart'][1];
                        
                    }
                    // print_r($_SESSION['cart']);
    
                    if($_GET[sub]) {
                        header("Location: index.php");
                    }
            ?>
            
            <form>
                <input type="submit" name="sub" value="Back">
            </form>
        </div>
        
    </body>
</html>
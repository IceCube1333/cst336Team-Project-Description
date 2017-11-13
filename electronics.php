<?php
    session_start();
    // include 'information.php';
    
    if ($_GET["Filter"] == 'anime') {
        header ("Location: anime.php");
    }
    
    if ($_GET["Filter"] == 'apparel') {
        header ("Location: apparel.php");
    }
    
    if ($_GET["Filter"] == 'electronics') {
        header ("Location: electronics.php");
    }
    
?>

<html>
    <head>
        <title>Online Store: </title>
        <link rel="stylesheet" href="css/styles.css" type="text/css" />
        <link href="functions.php"/>
    </head>
    <body>
        <div id = "wrapper">
            
            <header>
                <h1>Welcome!</h1>
                <br>
                <h3>Choose an item you would like to purchase:</h3>
            </header>
            
            <form method>
                <!--Need info from database for itemTypes-->
                Item Type:
                <select name = "Filter">
                    <option value = " ">Filter by</option>
                    <option value= "anime">Anime</option>
                    <option value= "apparel">Apparel</option>
                    <option value= "electronics">Electronics</option>
                </select>
                <br>
                
                
                Item Type:
                <select name = "Sort">
                    <option value = " ">Sort by</option>
                    <option value = "price">Price</option>
                    <option value = "name">Name</option>
                    <option value = "ascending">Ascending</option>
                    <option value = "descending">Descending</option>
                </select>
                
                <br>
                
                <input type="submit" value="Search" name="submit">
            </form>
            
            <?php
                include "functions.php";
                
                $electronics = displayElectronics();
                
                foreach($electronics as $electronic) {
                    echo "<span id='electro'>". $electronic['electronicsName'] ."</span>"."<br/>";
                }
                
                

           ?>
            
        </div>
        
    </body>
    
</html>
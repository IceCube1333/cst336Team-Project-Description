<?php

    include 'information.php';
    
 
?>

<html>
    <head>
        <title>Online Store: </title>
           <style>
           @import url("./CSS/styles.css");
           td {
               font_size: 1.8em;
           }
           #wrapper {
               margin: 0 auto;
               width: 800px;
               text-align: center;
           }
       </style>
    </head>
    <body>
        <div id = "wrapper">
            
            <header>
                <h1>Welcome!</h1>
                <br>
                <h3>Choose an item you would like to purchase:</h3>
            </header>
            
            <form>
                
                <strong><i>Item Name: </i></strong><input type = "text" name = "itemName">
                <br>
                <br>
                
                <strong><i>Item Type: </i></strong>
                <select name = "itemType">
                    <option value = ""></option>
                </select>
                
                <br>
                <br>
                
                <input type = "checkbox" name = "available"> <strong><i>Available: </i></strong>
                <br>
                <br>
                
                <input type = "radio" name = "orderBy" value = "price"><strong><i>Order By Price: </i></strong>
                <br>
                <br>
                
                <input type = "radio" name = "orderBy" value = "name"><strong><i>Order By Name: </i></strong>
                <br>
                <br>
                
                <input type="submit" value="Search" name="submit">
            </form>
                
            
            
            
        </div>
        
    </body>
    
</html>
<?php
    session_start();
    // include 'information.php';
 
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
                    echo $electronic['electronicsName'] ."<br/>";
                }
                
                
                
                
                
                
                //this works
                
                // $servername = "us-cdbr-iron-east-05.cleardb.net";
                // $username = "b5ba02fc3ba351";
                // $password = "3f870355";
                // $dbname = "heroku_860455424cb7b6b";
                
                // // connect to our mysql database server
                // $conn = new mysqli($servername, $username, $password, $dbname);
                // if ($conn->connect_error) {
                //     die("Connection failed: " . $conn->connect_error);
                // }
                // // echo "Connected successfully";
                 
                // // make a query
                //     $sql = "SELECT electronicsName FROM electronics WHERE 1";
                //     $result = $conn->query($sql);
                    
                //     if ($result->num_rows > 0) {
                //         // output data of each row
                //         echo "<div id='original'>";
                //         while ($row = $result->fetch_assoc()) {
                //             echo $row["electronicsName"]. "<br>";
                //             "<br>";
                //         }
                //         echo "</div>";
                //     } else {
                //         echo "0 results";
                //     }
                //     // $conn->close();
           ?>
            
        </div>
        
    </body>
    
</html>
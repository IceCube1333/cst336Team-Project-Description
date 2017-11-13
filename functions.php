<?php
session_start();
include 'information.php';

//used to display electronics 
function displayElectronics() {
            $conn = getDatabaseConnection();
            $sql = "SELECT electronicsName FROM electronics";
            // $result = $conn->query($sql);
                
                $stmt = $conn->prepare($sql);
                $stmt->execute();
                $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
               
            //   print_r($records);
                return $records;
}

//used to display anime
function displayAnime() {
            $conn = getDatabaseConnection();
            $sql = "SELECT name FROM anime";
            // $result = $conn->query($sql);
                
                $stmt = $conn->prepare($sql);
                $stmt->execute();
                $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
               
            //   print_r($records);
                return $records;
}

//used to display apparel
function displayApparel() {
            $conn = getDatabaseConnection();
            $sql = "SELECT apparelName FROM apparrel";
            // $result = $conn->query($sql);
                
                $stmt = $conn->prepare($sql);
                $stmt->execute();
                $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
               
            //   print_r($records);
                return $records;
}





?>
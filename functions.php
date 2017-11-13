<?php
session_start();
include 'information.php';

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


?>
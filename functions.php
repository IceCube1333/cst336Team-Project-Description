<?php
session_start();
include 'information.php';

//May need to be changed depending on how the tables are structured
function createSql() {
    $filters = parseFilters();
    if($filters == null) {
        return null;
    }
    $sql = "SELECT ".$filters[0]." FROM ".$filters[1]." WHERE ".$filters[2];
    if($filters[3] != "0") {
        $sql += " ORDER BY ".$filters[3];
        if($filters[4] != "0") {
            $sql += " ".$filters[4];
        }
    } else if($filters[4] != "0") {
        $sql += " ".$filters[4];
    }
    
    return $sql;
}

//May need to be changed depending on how the tables are structured
function parseFilters() {
    if(isset($_GET['itemName'])) {
        $itemName = $_GET['itemName'];
    } else {
        $itemName = "*";
    }
    if(isset($_GET['itemType'])) {
        $itemType = $_GET['itemType'];
    } else {
        return null;
    }
    if(isset($_GET['available'])) {
        $available = $_GET['available'];
    } else {
        $available = "1";
    }
    if(isset($_GET['orderBy'])) {
        $orderBy = $_GET['orderBy'];
    } else {
        $orderBy = "0";
    }
    if(isset($_GET['order'])) {
        $order = $_GET['order'];
    } else {
        $order = "0";
    }
    $filters =  array($itemName, $itemType, $available, $orderBy, $order);
    return $filters;
}

function displayInfo() {
    $conn = checkDatabaseConnection();
    $sql = "SELECT * FROM electronics NATURAL JOIN apparel NATURAL JOIN anime WHERE 1";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        //echo "<tr>";
        //Display all products
        //echo "</tr>";
    }
}

?>
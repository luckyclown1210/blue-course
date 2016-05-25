<?php

$conn = null;

function db_connect() {
    global $conn;
    $conn = mysqli_connect('localhost:8889', 'root', 'root','test_database') or die('Can not connect to database');
}

function db_insert($name, $des, $img) {
    $sql = "INSERT INTO tblproduct(tblName, tblDescription,tblImage) VALUES ('" . $name . "','" . $des . "','" . $img . "')";
    mysqli_query($sql);
}

function db_select_row($sql) {
    global $conn;
    $result = mysqli_query($conn,$sql);
    if (!$result) {
        die("No record found");
    }
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    mysqli_free_result($result);
    return $row;
}

function db_select_list($sql) {
    global $conn;
    $result = mysqli_query($conn,$sql);
    if (!$result) {
        die("No record found");
    }

    $list = array();
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        array_push($list, $row);
    }
    return $list;
}

function db_disconnect() {
    global $conn;
    mysqli_close($conn);
}

?>
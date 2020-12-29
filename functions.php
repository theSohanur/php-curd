<?php
include("db.php");



function showData(){
    global $conn;
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn, $sql);             
    while($row = mysqli_fetch_assoc($result)){
        $id = $row['id'];
        echo "<option value='$id'>$id</option>";
    }
}

function updateTable(){
    global $conn;
    $username =  $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];

    $username = mysqli_real_escape_string($conn,$username);
    $password = mysqli_real_escape_string($conn,$password);

    $sql = "UPDATE users SET ";
    $sql.= "username = '$username', ";
    $sql.= "password = '$password' ";
    $sql.= "WHERE id = $id";

    $result = mysqli_query($conn, $sql);
    if(!$result){
        die('QUERY FAILD');
    }
}

function deleteTable(){
    global $conn;
    $username =  $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];

    $sql = "DELETE FROM users ";
    // $sql.= "username = '$username', ";
    // $sql.= "password = '$password' ";
    $sql.= "WHERE id = $id";

    $result = mysqli_query($conn, $sql);
    if(!$result){
        die('QUERY FAILD');
    }
}
        

        

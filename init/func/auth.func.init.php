<?php


function usernameExists($username){
    global $db;
    $query = $db->prepare('SELECT * FROM tbl_users WHERE username = ?');
    $query-> bind_param('s', $username);
    $query->execute();
    $result = $query-> get_result();
    if($result->num_rows){
        return true;
    }
    return false;
}

function registerUser($name, $username, $passwd) {
    global $db;
    if(usernameExists($username)){
        return false;
    }
    $query = $db-> prepare('INSERT INTO tbl_users (name, username, passwd) VALUES (?,?,?)');
    $query->bind_param('sss', $name, $username, $passwd);
    $query->execute();
    if($query ->affected_rows){
        return true;
    }
    return false;
}
?>


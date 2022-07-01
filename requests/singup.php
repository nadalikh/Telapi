<?php
include "../classes/dbContext.php";
function response($message){
    echo json_encode(['message'=> $message]);
    die();
}
if($_POST['method'] === "signup"){
    $truth = preg_match("/^[a-z0-9_]{5,}$/", $_POST['userid']);
    $truth &= preg_match("/^[a-zA-Z0-9@#$%&*_-]{5,}$/", $_POST['p1']);
    $truth &= preg_match("/^[a-zA-Z0-9@#$%&*_-]{5,}$/", $_POST['p2']);
    $truth &= preg_match("/^[a-zA-Z]{1,25}$/", $_POST['name']);
    $truth &= preg_match("/^[0-9]{3}$/", $_POST['extension']);
    $username = $_POST['userid'];
    $p1 = $_POST['p1'];
    $p2 = $_POST['p2'];
    $name = $_POST['name'];
    $extension = $_POST['extension'];
    $role = "user";
    if(!$truth)
        response("formats not valid");
    if($p1 !== $p2)
        response('password not confirmed');
    $p = md5($p1);
    $db = new dbContext();
    $db->addUser($username, $name, $role, $p);
    $db->assignExtensionTouser($extension, $name);
    response('You registered successfully');
}

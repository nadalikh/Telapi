<?php
include "../classes/dbContext.php";
function response($message, $status){
    echo json_encode(['message'=> $message, "status"=>$status]);
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
    $db = new dbContext();

    if(!$truth)
        response("formats not valid", 0);
    if($p1 !== $p2)
        response('password not confirmed', 0);
    if($db->checkUserWithExtension($extension))
        response("A use took this extension. It logically shouldn't happen, please contact with admin", 0);
    $p = md5($p1);
    $db->addUser($username, $name, $role, $p, $extension);
    $db->assignExtensionTouser($extension, $name);
    response('You registered successfully', 1);
}

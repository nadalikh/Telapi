<?php
include "../classes/dbContext.php";
if(isset($_POST['signup'])){
    $truth = preg_match("/^[a-z0-9_]{5,}$/", $_POST['userid']);
    $truth &= preg_match("/^[a-zA-Z0-9@#$%&*_-]{5,}$/", $_POST['p1']);
    $truth &= preg_match("/^[a-zA-Z0-9@#$%&*_-]{5,}$/", $_POST['p2']);
    echo $truth;
    $truth &= preg_match("/^[a-zA-Z]{1,25}$/", $_POST['name']);
    $truth &= preg_match("/^[0-9]{3}$/", $_POST['extension']);
    $username = $_POST['userid'];
    $p1 = $_POST['p1'];
    $p2 = $_POST['p2'];
    $name = $_POST['name'];
    $role = "user";

    $extension = $_POST['extension'];
    if(!$truth)
        return json_encode(['message'=>'formats is not valid']);

    if($p1 === $p2)
        return json_encode(['message'=>'password not confirmed']);
    $p = md5($p1);
    $db = new dbContext();
    $db->addUser($username, $name, $role, $p);
    $db->assignExtensionTouser($extension, $name);
    return json_encode(['message'=>'You registered successfully']);
    echo "dfdf";

}

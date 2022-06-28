<?php
if($_POST['signup']) {
    $appConneciton = new mysqli('195.28.11.16', "root", "expecto-patronum1379", "app");
    $role = "user";
    $username = preg_match("/[a-z0-9_]{5,}/", $_POST['username']);
    $appConneciton->prepare("insert into app.users (username, name, role, password)  values ()");
}

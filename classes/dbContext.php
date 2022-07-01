<?php
class dbContext{
    private $appConnection;
    private $asteriskConnection;

    public function __construct(){
        $this->asteriskConnection = new mysqli("195.28.11.16", "root", "expecto-patronum1379", "asterisk");
        $this->appConnection = new mysqli('195.28.11.16', "root", "expecto-patronum1379", "app");
        if($this->asteriskConnection->connect_error || $this->appConnection->connect_error)
            die($this->asteriskConnection->connect_error.$this->asteriskConnection->connect_error);
    }

    public function addUser($username, $name, $role, $p, $extension){
        var_dump($username);
        var_dump($role);
        var_dump($p);
        var_dump($extension);
//        $stmtApp = $this->appConnection->query("insert into app.users (username, name, role, password)  values ('$username','$name','$role','$p')");
        $stmtApp = $this->appConnection->prepare("insert into app.users (username, name, role, password, extension)  values (?,?,?,?,?)");
        $stmtApp->bind_param('sssss', $username, $name, $role, $p, $extension);
        $stmtApp->execute();
        if($stmtApp->error)
            die($this->appConnection->error);
    }

    public function assignExtensionTouser($extension, $name){
        $stmt = $this->asteriskConnection->prepare("update asterisk.devices set description=? where id=?");
        $stmt->bind_param("ss", $name, $extension);
        $stmt->execute();
    }

    public function getExtensions(){
        $res = $this->asteriskConnection->query("select id from asterisk.devices where description = 'UNKNOWN'");
        $extensions = array();
        while($row = $res->fetch_assoc())
            $extensions[] = $row['id'];
        return $extensions;
    }
    public function checkUserWithExtension($extension){
        $stmt = $this->appConnection->prepare('select id from users where extension=?');
        $stmt->bind_param("s", $extension);
        $stmt->execute();
        $res = $stmt->get_result();
        return boolval($res->num_rows);
    }
    public function checkUserWithTelid($username){
        $stmt = $this->appConnection->prepare('select id from users where username=?');
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $res = $stmt->get_result();
        return boolval($res->num_rows);
    }
}
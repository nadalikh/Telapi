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

    public function addUser($username, $name, $role, $p){
        $stmtApp = $this->appConnection->prepare("insert into app.users (username, name, role, password)  values (?,?,?,?)");
        $stmtApp->bind_param('ssss', $username, $name, $role, $p);
        $stmtApp->execute();
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
}
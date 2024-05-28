<?php  
Class database{
protected $dbname = 'cat-j';
protected $dbuser = 'root';
protected $dbhost = 'localhost';
protected $dbpass = '';


public function connect(){
$dsn = "mysql:host=localhost;dbname=".$this->dbname;
$db = new PDO($dsn, $this->dbuser, $this->dbpass);
if($db){
return $db;
}
else{
    echo 'failed to connect';
}
}
}

?>

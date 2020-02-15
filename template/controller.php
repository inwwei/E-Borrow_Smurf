<?php 
	date_default_timezone_set("Asia/Bangkok");
	class Action {
    private $pdo;
	private $servername = "10.199.66.227";
    private $username = "20S2_g4";
    private $password = "Dwg7Q6UQ";
    
    public function __construct(){
		$this->pdo = new PDO("mysql:host=$this->servername;dbname=20s2_g4;charset=utf8", $this->username, $this->password);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	
	public function get_item(){
		$get = $this->pdo->prepare("SELECT * FROM item");
		$get->execute();		
		return $get->fetchAll();
		
    }
    }
?>